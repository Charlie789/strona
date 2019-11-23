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
		$zagadnienie;
	?>

	<div class="content">
		Panel pracownika
		<br><br>
		Wybierz kategorię
		<br>
		<form id="zagadnienia_form">
		<select id="zagadnienie_select" name="zaganienie" onchange="$zagadnienie=this.options[this.selectedIndex].value"></select>
		
		<?php
			if ($result = $mysqli->query("select * from zagadnienia")) {
				while($row = $result->fetch_assoc()) {
					$id = $row["id_zagadnienia"];
					$temat = $row["temat"];
					print "<option value='$id'>$temat</option>";
				}
			}
		?>
		</select><br>
		</form>
		Posty klientów:

		// echo '<select id="ocena_select" name="ocena" onchange="document.getElementById(\'wybrana_ocena\').value=this.options[this.selectedIndex].value">';
		// 	print "<option value='1'>1</option>";
		// 	print "<option value='2'>2</option>";
		// 	print "<option value='3'>3</option>";
		// 	print "<option value='4'>4</option>";
		// 	print "<option value='5'>5</option>";
		// echo '</select>';
		<br><br>
		<div style="height:400px;overflow:auto;">
			<table border='1' width='95%'>
			<?php
			if ($result = $mysqli->query("select p.id_posty, kl.nazwisko as nazwisko_klienta, p.post_klienta, pr.nazwisko as nazwisko_pracownika, p.post_pracownika, p.ocena from posty as p left join pracownicy as pr on p.id_pracownik = pr.id_pracownicy LEFT JOIN klienci as kl on p.id_klient = kl.id_klienci WHERE p.id_zagadnienie=2")) {
				while($row = $result->fetch_assoc()) {
					$id_post = $row["id_posty"];
					$nazwisko_pracownika = $row["nazwisko_pracownika"];
					$nazwisko_klienta = $row["nazwisko_klienta"];
					$post_klienta = $row["post_klienta"];
					$post_pracownika = $row["post_pracownika"];
					$ocena = $row["ocena"];
					if($ocena=="0") {
						$ocena = "Brak oceny";
					}
					if(!$post_pracownika){
						print '<form id="ocena_form" method="POST" action="odpowiedz.php">';
						print "<tr><td width='10%'>$nazwisko_klienta</td><td width='35%'>$post_klienta</td><td width='35%'>";
						print '<textarea name="tresc" cols="60" rows="5"></textarea>';
						
						echo "<input type=\"hidden\" name=\"id_post\" id=\"id_post\" value=$id_post />";
						echo '<input type="submit" name="send" value="odpowiedz"/></form>';
						echo "</td><td width='10%'>$nazwisko_pracownika</td><td width='10%'>$ocena</td></tr>";
					} else {
						print "<tr><td width='10%'>$nazwisko_klienta</td><td width='35%'>$post_klienta</td><td width='35%'>$post_pracownika</td><td width='10%'>$nazwisko_pracownika</td><td width='10%'>$ocena</td></tr>";
					}
				}
				$result->close();
			}
			print "</table>";
			?>
		</div>
	</div>

</body>

</html>