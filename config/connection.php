<?php
// Require Composer's autoloader.
require 'vendor/autoload.php';

// Use the Medoo namespace.
use Medoo\Medoo;

// Connect to the database.
$conn = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'unicedu_test',
    'username' => 'root',
    'password' => ''
]);

