<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="10" />
	<title>Appel</title>
	<link href="mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include 'navigation.php'; ?>

	<div class="content">
		Zadanie 1
		<?php include 'db_connect.php';
			/*$result = $mysqli->query("SELECT * FROM 'LiveTest'") or die ("Błąd zapytania do bazy: $dbname");*/
			print "<TABLE CELLPADDING=5 BORDER=1>";
			print "<TR><TD>idt</TD><TD>Nazwa</TD><TD>Status</TD><TD>Downtime</TD></TR>\n";
			if ($result = $mysqli->query("SELECT * FROM LiveTest")) {
				printf("<br />Select returned %d rows.<br />", $result->num_rows);
				while($row = $result->fetch_assoc()) {
					$idt = $row["ID"];
					$naz = $row["Nazwa"];
					$tim = $row["DownTime"];
					$fp = @fsockopen($naz, 80);
					if ($fp) { $status = 'OK'; } else { $status = 'słabo';
						$tim = strtotime('+ 10 seconds',$tim);
					/*$mysqli->query('SELECT TIMESTAMPADD(SECOND, 10 ,$tim)');*/ }
					print "<TR><TD>$idt</TD><TD>$naz</TD><TD>$status</TD><TD>$tim</TD></TR>\n";
				}
			}
			print "</TABLE>";
			$result->close();
		?>
	</div>
</body>
</html>
