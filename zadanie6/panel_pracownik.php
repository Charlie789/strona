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
		$selected_zagadnienie=$_POST['selected_zagadnienie'];
		if(!$selected_zagadnienie){
			$zagadnienie='1';
		} else {
			$zagadnienie = $selected_zagadnienie;
		}
	?>

	<div class="content">
		Panel pracownika
		<br><br>
		Wybierz kategorię
		<br>
		<form id="zagadnienia_form" method="POST" action="panel_pracownik.php">
		<select id="zagadnienie_select" name="zagadnienie" onchange="document.getElementById('selected_zagadnienie').value=this.options[this.selectedIndex].value">		
		<?php
			if ($result = $mysqli->query("select * from zagadnienia")) {
				while($row = $result->fetch_assoc()) {
					$id = $row["id_zagadnienia"];
					$temat = $row["temat"];
					if ($selected_zagadnienie == $id){
						$wybrany_temat = $temat;
					}
					print "<option value='$id'>$temat</option>";
				}
			}
		?>
		</select><br>
		<input type="hidden" name="selected_zagadnienie" id="selected_zagadnienie" value="1" />
		<input type="submit" name="send" value="Zatwierdź zagadnienie"/>
		</form>
		
		Kategoria: <?php echo "$wybrany_temat"; ?><br><br>
		
		Posty klientów:
		<br><br>
		<div style="height:400px;overflow:auto;">
			<table border='1' width='95%'>
			<tr><td width='10%'>Nazwisko klienta</td><td width='35%'>Post klienta</td><td width='35%'>Post pracownika</td><td width='10%'>Nazwisko pracownika</td><td width='10%'>Ocena</td></tr>
			<?php
			$is_any_post='0';
			if ($result = $mysqli->query("select p.id_posty, kl.nazwisko as nazwisko_klienta, p.post_klienta, pr.nazwisko as nazwisko_pracownika, p.post_pracownika, p.ocena from posty as p left join pracownicy as pr on p.id_pracownik = pr.id_pracownicy LEFT JOIN klienci as kl on p.id_klient = kl.id_klienci WHERE p.id_zagadnienie=$zagadnienie")) {
				while($row = $result->fetch_assoc()) {
					$is_any_post='1';
					$id_post = $row["id_posty"];
					$nazwisko_pracownika = $row["nazwisko_pracownika"];
					$nazwisko_klienta = $row["nazwisko_klienta"];
					$post_klienta = $row["post_klienta"];
					$post_pracownika = $row["post_pracownika"];
					$ocena = $row["ocena"];
					if(!$ocena) {
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
				if ($is_any_post == '0') {
					echo "Brak postów w wybranej kategorii";
				}
				
				$result->close();
			}
			print "</table>";
			?>
		</div>
	</div>

</body>

</html>