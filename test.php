<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="10" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>

	<div class="content">
		Android Test
		<?php include 'db_connect.php';
			$username = $_POST['username'];
			$password = $_POST['password'];
			$result = mysqli_query($con,"SELECT Role FROM Android where Username='$username' and Password='$password'");
			$row = mysqli_fetch_array($result);
			$data = $row[0];
			if($data){
				echo $data;
			}
			$result->close();
		?>
	</div>
</body>
</html>
