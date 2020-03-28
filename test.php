
		<?php include 'db_connect.php';
			$username = $_POST['username'];
			$password = $_POST['password'];
			$result = $mysqli->query("SELECT Role FROM Android where Username='$username' and Password='$password'");
			$row = $result->fetch_assoc();
			$data = $row[0];
			if($data){
				echo $data;
			}
			$result->close();
		?>
