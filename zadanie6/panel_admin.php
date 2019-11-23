<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/navigation.php');
		include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
	?>

	<div class="content">
		Panel administratora
		<br><br>
		<?php
			if ($result = $mysqli->query("SELECT COUNT(*) AS suma FROM posty")) {
				if($row = $result->fetch_assoc()) {
					$suma_postow = $row["suma"];
					print "Ilość zapytań wygenerowanych przez klienta:	$suma_postow";
				}
			}
		?>
	</div>

</body>

</html>