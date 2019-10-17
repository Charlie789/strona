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
		$country = $details -> country;
		$city = $details -> city;
		list($lat, $long) = explode(",", $details -> loc);
		
		if($mysqli->query("INSERT INTO `goscieportalu`(`IP`, `Country`, `City`, `Latitude`, `Longitude`, `Date`) VALUES ('$ip_add', '$country', '$city', '$lat', '$long', NOW())") === TRUE) {
			echo "dodano do bazy danych";
		} else {
			echo "Error: " . $mysqli->error;
		}
    
		print "<TABLE CELLPADDING=5 BORDER=1>";
		print "<TR><TD>ID</TD><TD>IP</TD><TD>Country</TD><TD>City</TD><TD>Latitude</TD><TD>Longitude</TD><TD>Date</TD></TR>\n";
		if ($result = $mysqli->query("SELECT * FROM goscieportalu")) {
			while($row = $result->fetch_assoc()) {
				$idt = $row["ID"];
				$ip_add = $row["IP"];
				$country = $row["Country"];
				$city = $row["City"];
				$lat = $row["Latitude"];
				$long = $row["Longitude"];
				$entry_date = $row["Date"];
				
				print "<TR><TD>$idt</TD><TD>$ip_add</TD><TD>$country</TD><TD>$city</TD><TD>$lat</TD><TD>$long</TD><TD>$entry_date</TD></TR>\n";
			}
			$result->close();
		}
		print "</TABLE>";
		print"\n\n Unikalne adresy IP\n";
		$sql = "SELECT DISTINCT(IP) AS IP, `Country` AS Country, `City` as City, `Latitude` as Latitude, `Longitude` as Longitude FROM `goscieportalu` GROUP BY IP ORDER BY IP";
		print "<TABLE CELLPADDING=5 BORDER=1>";
		print "<TR><TD>IP</TD><TD>Country</TD><TD>City</TD><TD>Latitude</TD><TD>Longitude</TD></TR>\n";
		if ($result = $mysqli->query($sql)) {
			while($row = $result->fetch_assoc()) {
				$ip_add = $row["IP"];
				$country = $row["Country"];
				$city = $row["City"];
				$lat = $row["Latitude"];
				$long = $row["Longitude"];
				
				print "<TR><TD>$ip_add</TD><TD>$country</TD><TD>$city</TD><TD>$lat</TD><TD>$long</TD></TR>\n";
			}
			$result->close();
		}
		$mysqli->close();
		print "</TABLE>";
		?>
	</div>
</body>
</html>
