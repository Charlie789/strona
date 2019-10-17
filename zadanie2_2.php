<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include 'navigation.php'; ?>

	<div class="content">
		Zadanie 2_2 <br/>
		<?php
		include 'db_connect.php';
		$ipaddress = $_SERVER["REMOTE_ADDR"];
		function ip_details($ip) {
		$json = file_get_contents ("http://ipinfo.io/{$ip}/geo");
		$details = json_decode ($json);
		return $details;
		}
		$details = ip_details($ipaddress);
		$ip_add = $details -> ip;
		echo $details -> region; echo '<BR />';
		echo $details -> country; echo '<BR />';
		echo $details -> city; echo '<BR />';
		echo $details -> loc; echo '<BR />';
		echo $details -> ip; echo '<BR />';
		
		$mysqli->query("INSERT INTO `goscieportalu`(`IP`) VALUES ([`123`])");
		print "<TABLE CELLPADDING=5 BORDER=1>";
		print "<TR><TD>ID</TD><TD>IP</TD></TR>\n";
		if ($result = $mysqli->query("SELECT * FROM goscieportalu")) {
			while($row = $result->fetch_assoc()) {
				$idt = $row["ID"];
				$ipt = $row["IP"];
				
				print "<TR><TD>$idt</TD><TD>$ipt</TD></TR>\n";
			}
			$result->close();
		}
		$mysqli->close();
		print "</TABLE>";
		?>
	</div>
</body>
</html>
