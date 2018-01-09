<?php


//$posts = json_decode('[{"title":"новый пост","text":"сегодня я ел кашу"},{"title":"полёт на венеру","text":"было весело"}], false');
//var_dump($posts);
// $posts = unserialize('a:2:{i:0;a:2:{s:5:"title";s:19:"новый пост";s:4:"text";s:31:"сегодня я ел кашу";}i:1;a:2:{s:5:"title";s:28:"полёт на венеру";s:4:"text";s:21:"было весело";}}');
//$json = json_encode($posts, JSON_UNESCAPED_UNICODE);
//file_put_contents('post.json', $json);
$json = file_get_contents('posts.json');
$posts = json_decode($json, true);
foreach ($posts as $post) {
	echo $post['title']. '' . $posts['text'] . '<br>';
}
