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
			$result = $mysqli->query("SELECT * FROM LiveTest") or die ("Błąd zapytania do bazy: $dbname");
			print "<TABLE CELLPADDING=5 BORDER=1>";
			print "<TR><TD>idt</TD><TD>Nazwa</TD><TD>Status</TD></TR>\n";
			if ($result = $mysqli->query("SELECT * FROM LiveTest")) {
				printf("<br />Select returned %d rows.<br />", $result->num_rows);
			while($row = $result->fetch_assoc()) {
					$idt = $row["ID"];
					$nazwa = $row["Name"];
					$fp = @fsockopen($nazwa, 80);
					if ($fp) { $status = 'OK'; } else { $status = 'słabo'; }
					print "<TR><TD>$idt</TD><TD>$nazwa</TD><TD>$status</TD></TR>\n";
				}
			}
			print "</TABLE>";
			$result->close();
		?>
	</div>
</body>
</html>
