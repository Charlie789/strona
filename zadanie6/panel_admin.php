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
					print "Ilość zapytań wygenerowanych przez klienta: $suma_postow<br><br>";
				}
			}
			$result->close();

			if ($result = $mysqli->query("SELECT COUNT(*) AS suma FROM posty WHERE post_pracownika IS NOT NULL")) {
				if($row = $result->fetch_assoc()) {
					$suma_odpowiedzi = $row["suma"];
					print "Ilość udzielonych odpowiedzi: $suma_odpowiedzi<br><br>";
				}
			}
			$result->close();

			echo "Ilość odpowiedzi udzielonych przez poszczególnych pracowników<br>";
			echo "<table border='1' width='40%'>";
			echo "<tr><td width='70%'>Nazwisko</td><td width='30%'>Ilość odpowiedzi</td></tr>";
			if ($result = $mysqli->query("SELECT p.nazwisko as nazwisko, count(po.id_posty) as suma FROM pracownicy AS p LEFT JOIN posty AS po ON p.id_pracownicy = po.id_pracownik GROUP BY nazwisko")) {
				while($row = $result->fetch_assoc()) {
					$pracownik = $row["nazwisko"];
					$suma_odpowiedzi = $row["suma"];
					print "<tr><td width='70%'>$pracownik</td><td width='30%'>$suma_odpowiedzi</td></tr>";
				}
			}
			echo "</table><br><br>";
			$result->close();

			echo "Ilość odpowiedzi udzielonych na dany temat<br>";
			echo "<table border='1' width='40%'>";
			echo "<tr><td width='70%'>Temat</td><td width='30%'>Ilość odpowiedzi</td></tr>";
			if ($result = $mysqli->query("SELECT z.temat AS temat, COUNT(p.post_pracownika) AS suma FROM zagadnienia AS z LEFT JOIN posty AS p ON z.id_zagadnienia = p.id_zagadnienie  GROUP BY p.id_zagadnienie")) {
				while($row = $result->fetch_assoc()) {
					$temat = $row["temat"];
					$suma_odpowiedzi = $row["suma"];
					print "<tr><td width='70%'>$temat</td><td width='30%'>$suma_odpowiedzi</td></tr>";
				}
			}
			echo "</table><br><br>";
			$result->close();

			echo "Średnia ocena pracowników<br>";
			echo "<table border='1' width='40%'>";
			echo "<tr><td width='70%'>Nazwisko</td><td width='30%'>Średnia ocena</td></tr>";
			if ($result = $mysqli->query("SELECT p.nazwisko AS nazwisko, avg(po.ocena) AS srednia FROM pracownicy AS p LEFT JOIN posty AS po ON p.id_pracownicy = po.id_pracownik GROUP BY p.nazwisko;")) {
				while($row = $result->fetch_assoc()) {
					$nazwisko = $row["nazwisko"];
					$srednia_ocena = $row["srednia"];
					if (!$srednia_ocena) $srednia_ocena="brak ocen";
					print "<tr><td width='70%'>$nazwisko</td><td width='30%'>$srednia_ocena</td></tr>";
				}
			}
			echo "</table><br><br>";
			$result->close();

		?>
	</div>

</body>

</html>