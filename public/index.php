<?php
require '../helpers.php';
// require '../views/home.view.php';
// loadView('home');

require basePath('Router.php');

$router = new Router;
require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
// var_dump($uri);
$method = $_SERVER['REQUEST_METHOD'];
// var_dump($method);

$router->route($uri, $method);