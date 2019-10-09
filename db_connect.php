<?php
include 'pass.php';
$mysqli = new mysqli("127.0.0.1", "31549668_test", $pass, 
"31549668_test");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($mysqli) . PHP_EOL;
?>
