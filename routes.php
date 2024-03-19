<?php 

$router->get('/', 'controllers/home.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get( '/listings/create' , 'ontrollers/listings/create.php');
$router->get( '/listing', 'controllers/listings/show.php');