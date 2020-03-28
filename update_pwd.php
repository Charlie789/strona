
<?php include 'db_connect.php';
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$result = $mysqli->query("UPDATE Android SET Password = '$pwd' WHERE Android.Username = $username; ");
?>
