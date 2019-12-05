<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/navigation.php');
		include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
	?>
	<script src="/js/cookie.js"></script>

	<script src="/js/logout.js"></script>

	<div class="content">
		<?php 
			include($_SERVER['DOCUMENT_ROOT'].'/logo.php');
			if($_COOKIE['admin']){
					echo "Zmień logo
					<form action='odbierz.php' method='POST' ENCTYPE='multipart/form-data'> 
					<input type='file' name='plik'/>
					<input type='submit' value='Wyślij logo'/>
				</form><br>
					<button id='log_out' onclick='logout()'>Wyloguj</button>";
			} else {
					echo "Strona główna";
			}
		?>
	</div>

</body>

</html>
