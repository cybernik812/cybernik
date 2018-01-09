<?php

$dsn = "mysql:host=localhost;dbname=users";
$user = "root";
$password = "";
$dbh = new PDO($dsn, $user, $password);

$stmt = $dbh->prepare('SELECT id, user_id, photo, likes, 
	description FROM posts');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);


/*
$dsn = "mysql:host=localhost;dbname=users";
$user = "root";
$password = "";
$dbh = new PDO($dsn, $user, $password);

$stmt = $dbh->prepare('SELECT id, user_id, photo, likes, 
	description FROM posts');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
*/
/* $selected = mysql_select_db("users", $link);

$command = "SELECT * FROM posts";

$result = mysql_query($command);
*/

//echo $command;

//echo $result;

//echo $json;
// $post = mysql_fetch_array($result)

/*
$jsondata = file_get_contents('photobase.json');

//echo $jsondata;

$json = json_decode($jsondata, true);

*/

/*

$link = mysql_connect("localhost", "root", ""); 

if (!$link) {

    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysql_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysql_connect_error() . PHP_EOL;
    exit;
}
*/