<?php

namespace controller;

use core\Route;
use model\Offer;

class Add_OfferController extends Controller
{
    public function __construct(Route $route)
    {
        parent::__construct($route);
        $this->view->setLayout('adminLayout');
    }

    public function index()
    {
        $this->view->setView('add');
    }

    public function save()
    {
        $src = $_FILES['file']['name'];
        $from = $_FILES['file']['tmp_name'];
        $to = ROOT . '/src/img/' . $src;
        if (move_uploaded_file($from, $to)) {
            exit(json_encode($src));
        }
        exit(json_encode(['error' => true]));
    }
    public function addMfo()
    {
        $req = json_decode($_POST['param']);

        if (Offer::save($req)) {
            exit(json_encode());
        }
        exit(json_encode(['error' => true]));
    }


}