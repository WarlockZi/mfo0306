<?php

namespace core;

class Route
{
    private string $controller;
    private string $action;
    private string $id;
    private array $params;

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function setController(string $controller): void
    {
        $this->controller = empty($controller) ? 'Vitrina' : $controller;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setParams(array $params): void
    {
        $this->params = $params;
    }

    public function getController(): string
    {
        return "\\controller\\{$this->controller}Controller";
    }

    public function getAction(): string
    {
        return $this->action;
    }
    public function getParams(): array
    {
        return  $this->params;

    }
}