<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>

	<div class="content">
		Logowanie
		<form id="register_form" method="post" action="register_sql.php">
			Login:<input type="text" name="user" maxlength="20" size="20"><br>
			Hasło:<input type="password" name="pass" maxlength="20" size="20"><br>
			Powtórz hasło:<input type="password" name="pass2" maxlength="20" size="20"><br>
			<input type="submit" value="Send"/>
		</form>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.js"></script>
    <script src="/js/password_check.js"></script>

</body>

</html>