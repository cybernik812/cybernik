<?php

//require_once "database_connect.php"; //Connects to the database.

include_once "handler.php"; // Checking if the user is already authorised.

$stmt = $db->query("SELECT * FROM users_accounts, posts WHERE users_accounts.id = posts.user_id");

$posts_html = '';

while ($row = $stmt->fetch()) {
   
        $post_html = '<div class=container>

	            <div id=small_photo_block><img class="photosmall" src="'.$row['avatar'].'" 	alt="Фото01" height=55 width=55></div>
	            <div id=name_block><p>'.$row['name'].'</br><span class="small-font">'.$row['data'].'</span></p></div>
	            <div id=photo_block><a href="'.$row['photo'].'" target="_blank"><img class="photo" src="'.$row['photo'].'" alt="Фото01" height=250 width=370></a></div>
	            <div id=like_block><img src="images/heart.jpeg" alt="Like" height=35 width=35></div>
	            <div id=counter_block><p>'.$row['likes'].'</p></div>
	            <div id=description_block><p>'.$row['description'].' '.$row['description'].'</p></div>
	            </div>';

$posts_html .= $post_html;
} 
echo $posts_html;
?>