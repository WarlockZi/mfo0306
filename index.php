<?php

use \core\Bootstrap;
use \core\Router;
use \core\App;

require_once './core/Bootstrap.php';
new Bootstrap();
$router = new Router($_SERVER['REQUEST_URI']);
$app = new App($router->route);

