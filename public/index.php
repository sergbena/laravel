<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \AulaEstudio\http\Controllers\HomeController;
use Illuminate\Http\Request;
use AulaEstudio\FakeDatabase;
use \Illuminate\Container\Container;
use \Illuminate\Routing\Router;
use \Illuminate\Events\Dispatcher;


$container= new Container();
$route= new Router(new Dispatcher($container),$container);
$controller=$container->make(HomeController::class);


$request=Request::capture();

$route->get('/', HomeController::class . '@index');

$route->get('/post/{id}', HomeController::class . '@show');

$response=$route->dispatch($request);
$response->send();
// $controller = new HomeController(new FakeDatabase());

// echo $controller->index($request);