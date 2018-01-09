<?php

abstract class BaseRouter
{
    abstract public function getControllerName();

    abstract public function getActionName();

    public function run()

    {
        include_once __DIR__ . '/../controller/' .
            $this->getControllerName() . '.php';
        $controllerName = $this->getControllerNmae();
        $controller = new $controllerName;
        if (!method_exist($controller, $this->getActionNane())) {
            return render('404');
        } else {
            return $controller->{$this->getActionName()}();
        }
    }
}
