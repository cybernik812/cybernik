<?php

require_once 'core/DB.php';
//BD :: database_connect();
$dba1 = new BD("bd1");
$dba2 = new BD("bd2");

$dba2->database_connect();
