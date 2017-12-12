<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<head>
    <title> The Culinary Institut of America</title>
    <link href="styles.css" rel="stylesheet" type="text/css"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>

<?php
require ("header.php");

// $added_post = file_get_contents('photobase.json');

if ($_SERVER['REQUEST_METHOD'] == 'POST')

{

$ava =$_FILES['ava_uploadfile']['name'];
$name = $_POST['name'];
$description = $_POST['description'];
$tags = $_POST['tags'];
$likes = $_POST['likes'];
$file_without_full_path = $_FILES['uploadfile']['name']; 
$file = "files/".$_FILES['uploadfile']['name'];
$ava_without_full_path = $_FILES['ava_uploadfile']['name']; 
$ava = "files/".$_FILES['ava_uploadfile']['name'];

}

//echo $name; 
//echo $comments;
//echo $ava;

$jsonString = file_get_contents('photobase.json');
$data = json_decode($jsonString, true);

// Добавление новых перменных в Json. С этим помог Антон. 

$data[] = [ 'author_photo' => $ava, 'author'=> $name, 'description'=> $description, 'photo'=> $file, 'tags' => $tags, 'likes' => $likes]; 

$newJsonString = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
file_put_contents('photobase.json', $newJsonString);
 
echo "<p><b>Ваше имя: ".$_POST['name']."</h3><br/>";
echo "<p><b>Ваш комментарий: ".$_POST['description']."</h3>";

// Каталог, в который мы будем принимать файл:

$uploaddir = './files/';

$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
$ava_uploadfile = $uploaddir.basename($_FILES['ava_uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:

if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile)) {

//($_FILES['ava_uploadfile']['tmp_name'], $ava_uploadfile)) 	

echo "<p><b>Файл успешно загружен на сервер</h3>";

}

else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

if (copy($_FILES['ava_uploadfile']['tmp_name'], $ava_uploadfile)) {

//($_FILES['ava_uploadfile']['tmp_name'], $ava_uploadfile)) 	

echo "<p><b>Файл успешно загружен на сервер</h3>";

}

else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

// Выводим информацию о загруженном файле:

echo "<p><b>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";

// присваиваем URL загруженного файла переменной $file_url с добавлением директории "files"

$file_url = "files/".$_FILES['uploadfile']['name'];
$file_ava_url = "files/".$_FILES['ava_uploadfile']['name'];

echo "<img src='$file_ava_url' height=55 width=55>";
echo "<br/>";
echo "<img src='$file_url'/>";

?>
 
</body>
</html>
