<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include '/navigation.php'; ?>

	<div class="content">
		<h1>Konwersacja</h1>
		<form method="POST" action="dodaj.php">
		<br>
		Nick:<input type="text" name="user" maxlength="10" size="10"><br>
		Post:<input type="text" name="post" maxlength="90" size="90"><br>
		<input type="submit" value="Send"/>
		</form>
		
		Posty:
		<br>
		<? include ("zapis.txt");?>
		<br>
	</div>
</body>
</html>
