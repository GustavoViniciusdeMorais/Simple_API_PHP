<?php

require __DIR__ . '/vendor/autoload.php';

use \Bramus\Router\Router;
use Gustavo\Morais\Controllers\TestController;

$router = new Router();

$router->get('/test', function () { return TestController::index(); });
$router->get('/test/(\d+)', function ($id) { return TestController::show($id); });

$router->run();
