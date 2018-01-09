<?php

include_once "database_connect.php"; // Checking database connection.

// Checking whether the login and password are already in the cookies.

if(!empty($_COOKIE['username']) AND !empty($_COOKIE['password']))
{

// Seeking for a user in users_profiles, mysql_real_escape_string trying to use sql injection

$search_user = mysql_query("SELECT * FROM 'users_accounts' WHERE 'login' = '".mysql_real_escape_string($_COOKIE['username'])."' AND 'password' = '".mysql_real_escape_string($_COOKIE['password'])."'");
$user = (mysql_num_rows($search_user) == 1) ? mysql_fetch_array($search_user) : 0;
}
else
{
$user = 0;
}
?>