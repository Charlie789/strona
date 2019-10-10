<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel Karol - Zadanie 1</title>
	<link href="mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include 'navigation.php'; ?>

	<div class="content">
		Zadanie 1
		<?php include 'db_connect.php';
			$result = $mysqli->query($polaczenie, "SELECT * FROM LiveTest") or die ("Błąd zapytania do bazy: $dbname");
			print "<TABLE CELLPADDING=5 BORDER=1>";
			print "<TR><TD>idt</TD><TD>Nazwa</TD><TD>Status</TD></TR>\n";
			while ($wiersz = mysqli_fetch_array ($result)) {
			$idt = $wiersz[0];
			$nazwa = $wiersz[1];
			$fp = @fsockopen($nazwa, 80);
			if ($fp) { $status = 'OK'; } else { $status = 'słabo'; }
			print "<TR><TD>$idt</TD><TD>$nazwa</TD><TD>$status</TD></TR>\n";
			}
			print "</TABLE>";
			mysqli_close($polaczenie);
		?>
	</div>
</body>
</html>
