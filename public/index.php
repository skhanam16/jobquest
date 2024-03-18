<?php
require '../helpers.php';
require basePath('Router.php');
require basePath('Database.php');


// instantiate the router
$router = new Router;

// get routes (url path and query string if any)
require basePath('routes.php');
// Get the current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// var_dump($uri);
$method = $_SERVER['REQUEST_METHOD'];
// var_dump($method);
// Route the request
$router->route($uri, $method);