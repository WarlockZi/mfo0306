<?php

namespace controller;

use core\Route;
use model\Offer;

class OffersController extends Controller
{
    private Offer $offer;
    public function __construct(Route $route)
    {
        parent::__construct($route);
        $this->view->setLayout('adminLayout');
        $this->offer = new Offer();
    }

    public function index()
    {
        $this->view->setView('offers');
        $start = 0;
        $stop = 7777777777;
        if ($_POST){
            $start = strtotime($_POST['start']);
            $stop = strtotime($_POST['stop']);
        }

        $offers = $this->offer->all($start, $stop);
        $this->vars = compact('offers');
    }

    public function remove()
    {
        $id = (int)json_decode($_POST['param'])->id;
        $this->offer->remove($id);
    }
}