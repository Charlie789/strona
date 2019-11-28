<?php
	include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
	$mysqli->query("UPDATE `users` SET `attempts`= 0") === TRUE;
	$mysqli->close();
?>
