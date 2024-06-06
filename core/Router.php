<?php

namespace core;

class Router
{
    private string $url;
    public Route $route;

    private array $params;

    public function __construct(string $url)
    {
        $this->url = $url;
        $this->route = new Route;
        $this->parse();
    }

    private function parse(): void
    {
        $arr = parse_url($this->url);

        if (isset($arr['path'])) {
            $parsed = explode('/', $arr['path']);
            $this->route->setController($parsed[1]);
            $this->route->setAction($parsed[2] ?? 'Index');
        }

        if (isset($arr['query'])) {
            $parsed = explode('&', $arr['query']);
            $params = array();
            foreach ($parsed as $str) {
                $parsed = explode('=', $str);
                $params[$parsed[0]] = $parsed[1];
            }
            $this->route->setParams($params);
        }

    }

}