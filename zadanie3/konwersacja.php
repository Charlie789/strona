<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include '/navigation.php'; ?>

	<script src="/js/cookie.js"></script>

	<div class="content">
		<h1>Konwersacja</h1>
		<form method="POST" action="dodaj.php" onsubmit="createCookie('user', document.getElementById('user').value)">
		<br>
		Nick:<input type="text" name="user" maxlength="10" size="10" id="user"><br>
		Post:<input type="text" name="post" maxlength="90" size="90" id="post"><br>
		<input type="submit" value="Send"/>
		</form>
		
		Posty:
		<br>
		<? include ("zapis.txt");?>
		<br>
	</div>

	<script>
                document.getElementById('user').value = readCookie('user');
	</script>
</body>
</html>
