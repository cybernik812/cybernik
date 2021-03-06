<?php

class Post
{
    public $id;
    public $title;
    public $rext;

    public static function getPost(DB $dbh, $id)
    {
        $stmt = $dbh->prepare(
            'SELECT id, title, text
            FROM posts
            WHERE id = ?');
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        $post = new Post();
        $post->id = $row['id'];
        $post->title = $row['title'];
        $post->text = $row['text'];
        return $post;
    }
}