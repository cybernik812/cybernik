 <?php

mysql_connect('cybernik.ru', 'root', '') or die('Ошибка соединения с MySQL!');
mysql_select_db('users') or die ('Ошибка соединения с базой данных MySQL!');
mysql_set_charset('utf8'); // выставляем кодировку базы данных

?>