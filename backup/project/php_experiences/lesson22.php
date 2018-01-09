<?php


$photo_database = array(

    	"photo01" => "images/photo_01.jpg",
    	"ava_01" => "ava_01.jpg",
    	"photo02" => "images/photo_02.jpg",
    	"ava_01" => "ava_02.jpg",
    	"photo03" => "images/photo_03.jpg",
		"ava_01" => "ava_013jpg");

echo "<pre>";
print_r($photo_database);
echo "</pre>";
$_JSON = json_encode($photo_database, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
print_r($_JSON);


