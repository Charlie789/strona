<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php
	include '/navigation.php';
	include '/db_connect.php';
	?>

	<script src="/js/cookie.js"></script>

	<div class="content">
		<h1>Konwersacja z wykorzystaniem bazy danych</h1>
		Skrypt korzysta z pliku .txt do przechowywania konwersacji oraz ciasteczek do przechowywania Nicku
		<form method="POST" action="dodaj_sql.php" onsubmit="createCookie('user', document.getElementById('user_input').value)">
		<br>
		Nick:<input type="text" name="user" maxlength="20" size="20" id="user_input"><br>
		Post:<input type="text" name="post" maxlength="100" size="100" id="post_input"><br>
		<input type="submit" value="Send" id="send_button"/>
		</form>

		Posty:
		<br><br>
		<?php
		if ($result = $mysqli->query("SELECT * FROM komunikaty ORDER BY `ID` DESC")) {
			while($row = $result->fetch_assoc()) {
				$nick = $row["nick"];
				$data = $row["data"];
				$komunikat = $row["komunikat"];

				print "
				<table border='1' width='95%'>
               			<tr><td>$komunikat</td><td width='15%'>$nick</td><td width='20%' bgcolor='yellow'>$data</td></tr>
				</table><br>";
			}
			print "\n";
			$result->close();
		}
		?>
	</div>

	<script>
		document.getElementById('user_input').value = readCookie('user');
	</script>
</body>
</html>
