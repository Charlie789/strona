<?php
	$user = $_POST['user'];
	$post = $_POST['post'];
	
	if($mysqli->query("INSERT INTO `komunikaty`(`nick`, `data`, `komunikat`) VALUES ('$user, NOW(), '$post')") === TRUE) {
		echo "dodano do bazy danych";
	} else {
		echo "Error: " . $mysqli->error;
	}
	header("Location: konwersacja.php");
?>
