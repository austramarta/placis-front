<?php
$host = 'localhost';
$db_name = 'placis';
$username = 'root';
$password = 'root';

$conn = mysqli_connect($host, $db_name, $username, $password);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
