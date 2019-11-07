<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>

	include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');

	$data = array();

	if ($result = $mysqli->query("SELECT * FROM pomiary_multi")) {
		while($row = $result->fetch_assoc()) {
			$idt = $row["ID"];
			$x1 = $row["X1"];
			$x2 = $row["X2"];
			$x3 = $row["X3"];
			$x4 = $row["X4"];
			$x5 = $row["X5"];
			$time = $row["data_godzina"];

			array_push($data, array($idt, $x1, $x2, $x3, $x4, $x5));
		
		}
		$result->close();
	}

	<div class="content">
		<h1>plan mieszkania z czujnikami</h1>
		<div class="plan">
			<img src="/img/plan.jpg" alt="Plan" style="width:100%;">
			<div class="x1">
				<?php echo end($data)[1]; ?>
			</div>
		</div>
	</div>
</body>
</html>
