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
		Panel klienta

		<form id="temat_form" method="POST" action="panel_klient_send.php">
			<label for="zgloszenie"> Zgloszenie : </label>
			<select id="temat_select" name="temat" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].value">
				<?php
					if ($result = $mysqli->query("SELECT * FROM zagadnienia")) {
						while($row = $result->fetch_assoc()) {
							$id = $row["id_zagadnienia"];
							$temat = $row["temat"];
							print "<option value='$id'>$temat</option>";
						}
						$result->close();
					}
				?>
			</select><br>
			<textarea name="tresc" cols="40" rows="5"></textarea>
			<input type="hidden" name="selected_text" id="selected_text" value="1" />
			<input type="submit" name="send" value="Send"/>
		</form>

		Posty:
		<br><br>
		<div style="height:400px;overflow:auto;">
			<table border='1' width='95%'>
			<?php
			if ($result = $mysqli->query("select p.id_posty, pr.nazwisko, p.post_klienta, p.post_pracownika, p.ocena from posty as p left join pracownicy as pr on p.id_pracownik = pr.id_pracownicy")) {
				while($row = $result->fetch_assoc()) {
					$id_post = $row["id_posty"];
					$nazwisko = $row["nazwisko"];
					$post_klienta = $row["post_klienta"];
					$post_pracownika = $row["post_pracownika"];
					$ocena = $row["ocena"];
					if(!$post_pracownika){
						$post_pracownika="Nie udzielono jeszcze odpowiedzi";
						$nazwisko="-";
					}
					if($ocena=="0") {
						print '<form id="ocena_form" method="POST" action="ocen.php">';
						print "<tr><td width='40%'>$post_klienta</td><td width='40%'>$post_pracownika</td><td width='10%'>$nazwisko</td><td width='10%'>";
						echo '<select id="ocena_select" name="ocena" onchange="document.getElementById(\'wybrana_ocena\').value=this.options[this.selectedIndex].value">';
							print "<option value='1'>1</option>";
							print "<option value='2'>2</option>";
							print "<option value='3'>3</option>";
							print "<option value='4'>4</option>";
							print "<option value='5'>5</option>";
						echo '</select>';
						echo '<input type="hidden" name="wybrana_ocena" id="wybrana_ocena" value="0" />';
						echo "<input type=\"hidden\" name=\"id_post\" id=\"id_post\" value=$id_post />";
						echo '<input type="submit" name="send" value="oceń"/></form>';
						echo '</td></tr>';
					} else {
						print "<tr><td width='40%'>$post_klienta</td><td width='40%'>$post_pracownika</td><td width='10%'>$nazwisko</td><td width='10%'>$ocena</td></tr>";
					}
				}
				print "</table>";
				$result->close();
			}
			?>
		</div>
	</div>

</body>

</html>
