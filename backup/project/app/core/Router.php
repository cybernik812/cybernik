<?php

include_once 'BaseRouter.php';

class Router extends BaseRouter

{
    public function getController()
    {
        //todo доделать
        return 'DefaultController';
    }

    public function getActionName()
    {
        return $_GET['action'] ?? 'index';
    }

}