<?php

$host = "localhost";
$user = "root";
$password = "Olamide010404";
$database = "record_system";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>