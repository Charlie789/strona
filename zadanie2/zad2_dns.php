<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include '/navigation.php'; ?>

	<div class="content">
		DNS <br/>
		<?php
			$result = dns_get_record("utp.edu.pl");
			print_r($result);
			
			$ip = gethostbyname('utp.edu.pl');
			echo $ip . '<BR />';
			$ip = $_SERVER["REMOTE_ADDR"];
			echo $ip. '<BR />';
			$hostname = gethostbyaddr("8.8.8.8");
			echo $hostname. '<BR />';
			$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			echo $hostname;
		?>
	</div>
</body>
</html>
