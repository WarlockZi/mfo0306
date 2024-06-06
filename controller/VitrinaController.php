<?php

namespace controller;

use core\Route;
use model\Offer;

class VitrinaController extends Controller
{
    private Offer $offer;
    public function __construct(Route $route)
    {
        parent::__construct($route);
        $this->offer = new Offer();
    }
    public function index()
    {
        $this->view->setView('vitrina');
        $offers = $this->offer->index();
        $this->vars = compact('offers');
    }

}