<?php include 'db_connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = $mysqli->query("SELECT Role FROM Android where Username='$username' and Password='$password'");
	$row = $result->fetch_assoc();
	$data = $row['Role'];
	if($data){
		echo 1;
	} else {
		echo 0;
	}
	$result->close();
?>
