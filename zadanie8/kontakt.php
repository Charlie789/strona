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
		<div class="logo">
				<img src="/img/logo.jpg" alt="logo" />
		</div>
		<?php 
			if($_COOKIE['admin']){
				echo "Kontakt Admin";
				echo '<button id="log_out" onclick="logout()">Wyloguj</button>';
			} else {
				echo "Kontakt";
			}
		?>

		
	</div>


</body>

</html>

