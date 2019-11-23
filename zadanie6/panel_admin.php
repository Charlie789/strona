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
					print "Ilość zapytań wygenerowanych przez klienta: $suma_postow<br>";
				}
			}
			$result->close();
			if ($result = $mysqli->query("SELECT COUNT(*) AS suma FROM posty WHERE post_pracownika IS NOT NULL")) {
				if($row = $result->fetch_assoc()) {
					$suma_odpowiedzi = $row["suma"];
					print "Ilość udzielonych odpowiedzi: $suma_odpowiedzi";
				}
			}
			$result->close();
			echo "<table border='1' width='40%'>";
			echo "<tr><td width='70%'>Nazwisko</td><td width='30%'>Ilość odpowiedzi</td></tr>";
			if ($result = $mysqli->query("SELECT p.nazwisko as nazwisko, count(po.id_posty) as suma FROM pracownicy AS p LEFT JOIN posty AS po ON p.id_pracownicy = po.id_pracownik GROUP BY nazwisko")) {
				if($row = $result->fetch_assoc()) {
					$pracownik = $row["nazwisko"];
					$suma_odpowiedzi = $row["suma"];
					print "<tr><td width='70%'>$pracownik</td><td width='30%'>$suma_odpowiedzi</td></tr>";
				}
			}
			echo "</table>";
			$result->close();
			
		?>
	</div>

</body>

</html>