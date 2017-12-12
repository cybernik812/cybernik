<?php

$jsondata = file_get_contents('photobase.json');

//echo $jsondata;

$json = json_decode($jsondata, true);

//echo $json;

$posts_html = '';

foreach ($json as $post) {

$post_html = '<div class=container>

            <div id=small_photo_block><img class="photosmall" src="'.$post['author_photo'].'" 	alt="Фото01" height=55 width=55></div>
            <div id=name_block><p>'.$post['author'].'</br><span class="small-font">'.$post['published'].'</span></p></div>
            <div id=photo_block><a href="'.$post['photo'].'" target="_blank"><img class="photo" src="'.$post['photo'].'" alt="Фото01" height=250 width=370></a></div>
            <div id=like_block><img src="images/heart.jpeg" alt="Like" height=35 width=35></div>
            <div id=counter_block><p>'.$post['likes'].'</p></div>
            <div id=description_block><p>'.$post['description'].' '.$post['tags'].'</p></div>
            </div>';

$posts_html .= $post_html;

}

echo $posts_html;

?>
