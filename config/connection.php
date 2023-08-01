<?php
// Require Composer's autoloader.
require 'vendor/autoload.php';

// Use the Medoo namespace.
use Medoo\Medoo;

function extractFromEnv($name)
{
    $rows = file(".env");
    foreach ($rows as $row) {
        $vals = explode("=", $row);
        if ($name == $vals[0]) {
            return $vals[1];
        }
    }
}

$type = extractFromEnv("TYPE");
$host = extractFromEnv("HOST");
$database = extractFromEnv("DATABASE");
$username = extractFromEnv("USERNAME");
$password = extractFromEnv("PASSWORD");

// Connect to the database.
$conn = new Medoo([
    'type' => trim($type),
    'host' => trim($host),
    'database' => trim($database),
    'username' => trim($username),
    'password' => trim($password),
    'error' => PDO::ERRMODE_SILENT,
]);

