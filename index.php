<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
require 'config/connection.php';
// Create Router instance
$router = new \Bramus\Router\Router();

//$router->setBasePath('/unicdeu');
$router->get('/', function () {
    echo "Hello from router!";
});

$router->get('/test', function () {
    echo "Hello, Najjace!";
});

$router->get('/about', function() {
    include_once ("templates/pages/about.php");
});
// Run it!
$router->run();
?>