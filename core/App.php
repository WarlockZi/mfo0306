<?php

namespace core;

class App
{
    public function __construct(Route $route)
    {

        $controller = $route->getController();
        if (class_exists($controller)) {
            $controller = new $controller($route);
        }
        $action = $route->getAction();
        if (method_exists($controller, $action)) {
            $controller->$action();
        }
        $controller->render();
        exit;
    }

}