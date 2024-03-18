<?php
// echo "This is from create listing page";


$config =  require basePath('config/db.php');

/**
 * Instance of Database class
 */

 $db = new Database($config);

//  $listings = $db->query('SELECT * FROM listings LIMIT 6')->fetchAll();
$id = $_GET['id'] ?? '';
// inspect($id);
$params = [
    'id' =>$id
];
$listing = $db->query('SELECT * FROM listings WHERE id = :id' , $params) -> fetch();
// inspect($listing);
loadView('listings/show', [
    'listing' => $listing
]);
// loadView('listings/show');