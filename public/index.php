<?php

require __DIR__ . '/../vendor/autoload.php';
// var_dump(__DIR__);
require '../helpers.php';
use Framework\Router;

// require basePath('Framework/Router.php');
// require basePath('Framework/Database.php');

// spl_autoload_register(function($class){
//     $path = basePath('Framework/' . $class .'.php');
//     if(file_exists($path)){
//          require $path;
//     }
   
// });

// instantiate the router
$router = new Router();

// get routes (url path and query string if any)
require basePath('routes.php');
// Get the current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// var_dump($uri);
$method = $_SERVER['REQUEST_METHOD'];
// var_dump($method);
// Route the request
$router->route($uri, $method);