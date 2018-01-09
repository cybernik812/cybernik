<?php

/**
 * Class Route (Singletone)
 */
class Route
{
    private static $instance = null;
    private function __construct()
    {
        self::start();
    }
    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new self(); // == вызвать снаружи new DB-> __construct()
        }
        return self::$instance;
    }
    private static function start()
    {
        // контроллер и действие по умолчанию
        $controllerName = 'Main';
        $actionName = 'index';
        $routes = explode('/', trim($_SERVER['REQUEST_URI'], '/'));    // breaking our URI in $routes[]
        // получаем имя контроллера
        if (!empty($routes[1]))
        {
            $controllerName = $routes[1];
        }
        // получаем имя экшена
        if (!empty($routes[2]))
        {
            $actionName = $routes[2];
        }
        // добавляем префиксы
        $modelName = $controllerName;
        // подцепляем файл с классом модели (файла модели может и не быть)
        $modelFile = $modelName. '.php';
        $modelPath = "application/models/" . $modelFile;
        if (file_exists($modelPath))
        {
            include "application/models/" . $modelFile;
        }
        // подцепляем файл с классом контроллера
        $controllerFile = $controllerName . '.php';
        $controllerPath = "application/controllers/" . $controllerFile;
        if (file_exists($controllerPath))
        {
            include "application/controllers/" . $controllerFile;
        } else {
            /*
            правильно было бы кинуть здесь исключение,
            но для упрощения сразу сделаем редирект на страницу 404
            */
            Route::ErrorPage404();
        }
        // создаем контроллер
        $controller = new $controllerName;
        $action = $actionName;
        if (method_exists($controller, $action))
        {
            // вызываем действие контроллера
            $controller->$action();
        } else {
            // здесь также разумнее было бы кинуть исключение
            Route::ErrorPage404();
        }
    }
    function    ErrorPage404()
    {
        $host   =   'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}
