<?php

namespace controller;

use core\Route;
use view\View;

class Controller
{
    protected Route $route;
    protected View $view;
    protected array $vars;
    public function __construct(Route $route)
    {
        $this->route = $route;
        $this->view = new View();
        $this->vars = [];
    }
    public function render()
    {
        $view = $this->view->getView($this->vars);
        $layout = $this->view->getLayout($view);
        echo $layout;
    }
}