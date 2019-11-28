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
		Panel użytkownika

		<form action="odbierz.php" method="POST" ENCTYPE="multipart/form-data"> 
			<input type="file" name="plik"/>
			<input type="submit" value="Wyślij plik"/>
		</form><br>
		<form action="mkdir.php" method="POST"> 
			<input type="text" name="nowy_katalog" maxlength="20" size="20" id="nowy_katalog"/>
			<input type="submit" value="Dodaj podfolder"/>
		</form>

		if ($handle = opendir('/pliki/')) {
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != "..") {
					echo "<a href='download.php?file=".$entry."'>".$entry."</a>\n";
				}
			}
			closedir($handle);
		}

	</div>

</body>

</html>
