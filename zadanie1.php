<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="10" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>

	<div class="content">
		Zadanie 1
		<?php include 'db_connect.php';
			print "<TABLE CELLPADDING=5 BORDER=1>";
			print "<TR><TD>ID</TD><TD>Nazwa</TD><TD>Status</TD><TD>Downtime</TD></TR>\n";
			if ($result = $mysqli->query("SELECT * FROM LiveTest")) {
				while($row = $result->fetch_assoc()) {
					$idt = $row["ID"];
					$naz = $row["Nazwa"];
					$tim = $row["DownTime"];
					$fp = @fsockopen($naz, 80);
					if ($fp) { 
						$status = 'OK'; 	
					} else { 
						$status = 'słabo';
						$mysqli->query("UPDATE `LiveTest` SET `DownTime`=`DownTime` + INTERVAL 10 SECOND WHERE `ID`=$idt");
					}
					print "<TR><TD>$idt</TD><TD>$naz</TD><TD>$status</TD><TD>$tim</TD></TR>\n";
				}
			}
			print "</TABLE>";
			$result->close();
		?>
	</div>
</body>
</html>
