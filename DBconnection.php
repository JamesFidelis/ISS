<?php

$user = 'root';
$password = 'root';
$db = 'Assignment';
$host = 'localhost';
$port = 8889;

$success = mysqli_connect(
    $host,
    $user,
    $password,
    $db,
    $port
);
if(!$success){die("Failed to connect to your database ").mysqli_connect_error();}
?>
