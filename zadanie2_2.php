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
		
		$result = $mysqli->query("INSERT $ip_add INTO listagosci");
		$result->close();
		print "<TABLE CELLPADDING=5 BORDER=1>";
		print "<TR><TD>ID</TD><TD>IP</TD></TR>\n";
		if ($result = $mysqli->query("SELECT * FROM listagosci")) {
			while($row = $result->fetch_assoc()) {
				$idt = $row["ID"];
				$ipt = $row["IP"];
				
				print "<TR><TD>$idt</TD><TD>$ipt</TD></TR>\n";
			}
		}
		print "</TABLE>";
		$result->close();
		?>
	</div>
</body>
</html>
