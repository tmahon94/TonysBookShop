<?php
/**
* Configuration for database connection
*
*/

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bookshop";
$dsn        = "mysql:host=localhost;dbname=bookshop";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
