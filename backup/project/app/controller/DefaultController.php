<?php

class DefaultController
{
    public function indexAction()
    {
        return render ('index');
    }

    public function categoriesAction()
    {
        $data['categories'] = [
            [
                'id' => 1,
                'name' => 'Интструменты',

            ],
            [
                'id' => 2,
                'name' => 'Одежда',
            ],
        ];
        $data['categoriesCount'] = 18;
        return render('categories', $data);

    }
    /*public function postAction()
    {
        global $dbh;
        $stmt = $dbh->prepare(:'SELECT * FROM posts');
        $stmt->execute();
        $data['posts'] = $stmt->fetchAll();
        return render(:'posts', $data);
    }*/
    public function postsAction()
    {
        $stmt = DB::getInstance()->getPdo()->prepare('SELECT * FROM posts');
        $stmt->execute();
        $data['posts'] = $stmt->fetchAll();

        return render('posts', $data);
    }


    public function postAction()
    {
        require_once __DIR__ . '/../model/post.php';
        $data['post'] = Post::getPost(DB::getInstance(),
            $_GET['id']);
        return render('post');
    }
}