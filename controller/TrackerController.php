<?php

namespace controller;

use core\Route;
use model\Click;
use model\Offer;

class TrackerController extends Controller
{
    protected Click $click;
    protected Offer $offer;
    public function __construct(Route $route)
    {
        parent::__construct($route);
        $this->click = new Click();
        $this->offer = new Offer();
    }
    public function index()
    {
        $click = [
            "source" => $this->route->getParams()['utm_source'],
            "offer_id" => $this->route->getParams()['offer_id'],
            "ip" => $_SERVER['REMOTE_ADDR'],
            "time" => $_SERVER['REQUEST_TIME'],
            "uniq" => 1,
        ];
        $uniq = $this->click->find($click['ip'],$click['offer_id']);
        if (count($uniq)) {
            $click["uniq"] = 0;
        }
        if ($this->click->save($click)){
            $url = $this->offer->find($this->route->getParams()['offer_id'])['url'];
            header("location: {$url}");
        }
    }
}