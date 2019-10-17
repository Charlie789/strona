<?php
include 'pass.php';
$mysqli = new mysqli("127.0.0.1", "31549668_zadanie1", $pass, 
"31549668_zadanie1");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
?>
