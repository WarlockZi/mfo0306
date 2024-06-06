<?php

namespace controller;

use core\Route;
use model\Click;

class ClicksController extends Controller
{
    private Click $click;
    public function __construct(Route $route)
    {
        parent::__construct($route);
        $this->view->setLayout('adminLayout');
        $this->click = new Click();
    }

    public function index()
    {
        $this->view->setView('clicks');
        $start = 0;
        $stop = 7777777777;
        if ($_POST){
            $start = strtotime($_POST['start']);
            $stop = strtotime($_POST['stop']);
        }

        $clicks = $this->click->all($start, $stop);
        $this->vars = compact('clicks');
    }

}