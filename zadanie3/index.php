<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>

	<div class="content">
		<h1>Konwersacja bez bazy danych i ciasteczek</h1>
		<?php
			$godzina = date('H:i:s', time());
			$user = $_POST['user'];
			$post = $_POST['post'];
			if (IsSet($_POST['post'])) {
				$wpis = '<table border=”1” width="90%">
				<tr><td>' . $post . '</td><td width="80">' . $user . '</td><td width="60" bgcolor="yellow">'.$godzina.'</td></tr></table><br>';
				$plik = fopen ("zapis.txt", "a+");
				fwrite ($plik, $wpis);
			}
		?>
		
		<form method="POST">
		<br>
		Nick:<input type="text" name="user" maxlength="10" size="10"><br>
		Post:<input type="text" name="post" maxlength="90" size="90"><br>
		<input type="submit" value="Send"/>
		</form>
		
		Posty:
		<br>
		<?php if(file_exists("zapis.txt"))
			include ("zapis.txt");
		?>
		<br>
	</div>
</body>
</html>
