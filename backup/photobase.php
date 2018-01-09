<?php


//$json = file_put_contents('photobase.json');

$photo_database = array(

    	"photo01" => "images/photo_01.jpg",
    	"ava_01" => "ava_01.jpg",
    	"photo02" => "images/photo_02.jpg",
    	"ava_02" => "ava_02.jpg",
    	"photo03" => "images/photo_03.jpg",
		"ava_03" => "ava_03.jpg",
		"photo04" => "images/photo_04.jpg",
		"ava_04" => "ava_04.jpg");


echo "<pre>";
print_r($photo_database);
echo "</pre>";

$_JSON = json_encode($photo_database, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
print_r($_JSON);

$j_son = file_put_contents('photobase.json', $_JSON);


