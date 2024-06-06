<?php
namespace core;
class Bootstrap
{
    public function __construct()
    {
        spl_autoload_register(function ($class){
            include $class . '.php';
        });
        define('ROOT', dirname(__DIR__));
    }
}