<?php
// Require composer autoloader
require_once __DIR__ . '/vendor/autoload.php';
require_once 'config/connection.php';
// Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/', function () {
    echo "Hello from router!";
});

$router->get('/test', function () {
    echo "Hello, Najjace!";
});
$router->mount('/admin', function () use ($router) {
    // will result in '/movies/id'
    $router->get('/test', function () {
        echo 'admin test';
    });
});

//$router->post('/register', function () {
//    echo "Ovo je post register";
//});
//

$router->get('/about', function () {
    include_once("views/pages/about.php");
});
$router->post('/about', function () {
    include_once("views/pages/about.php");
});

$router->get('/hello/\d+', function ($name) {
    echo 'Hello ' . $name;
});

$router->get("/form", function () {
    include_once "views/pages/martin.php";
});

$router->post("/register", function () {
    $type = "register";
    include_once "actions/listener.php";
});

$router->set404(function () {
    header('HTTP/1.1 404 Not Found');
    include_once("views/pages/404.php");
    // ... do something special here
});

// Run it!
$router->run();
?>
