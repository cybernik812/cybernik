 <?php

//mysql_connect('cybernik.ru', 'root', '') or die('Ошибка соединения с MySQL!');
//mysql_select_db('skillogram_710') or die ('Ошибка соединения с базой данных MySQL!');
//mysql_set_charset('utf8'); // Выставляем кодировку базы данных.

$db = new PDO('mysql:host=cybernik.ru; dbname=skillogram_710', 'root', '');

?>