<?php
/**
* Configuration for database connection
*
*/

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bookshop";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>