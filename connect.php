<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "db_hotel";

$db = mysqli_connect($hostname, $username, $password, $database_name);
?>