<?php
require_once "src/Controllers/TestController.php";
require __DIR__.'/vendor/autoload.php';

use \Bramus\Router\Router;

$router = new Router();

$router->get('/test', '\Gustavo\Morais\Controllers\TestController@index');
$router->get('/test/(\d+)', '\Gustavo\Morais\Controllers\TestController@show');

$router->run();