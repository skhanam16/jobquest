<?php
$config =  require basePath('config/db.php');

/**
 * Instance of Database class
 */

 $db = new Database($config);

 $listings = $db->query('SELECT * FROM listings LIMIT 6')->fetchAll();

loadView('listings/index' , [
    'listings' =>$listings
]);

// loadView('listings/index');