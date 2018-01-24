<?php

require_once 'application/boot.php';

$url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$controller = !empty($url[0]) ? $url[0] : 'home';
$controller = ucfirst(strtolower($controller));
$controller = $controller . 'Controller';

$action = !empty($url[1]) ? $url[1] : 'index';
$action = ucfirst(strtolower($action));
$action = $action . 'Action';

$filename = 'controllers/' . basename($controller ). '.php';
if (!file_exists($filename) || !method_exists($controller, $action)) {
    $controller = 'HomeController';
    $controller = 'NotFoundAction';
}

$controller_object = new $controller();
$controller_object->$action();

