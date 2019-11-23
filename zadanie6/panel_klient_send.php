<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<script src="/js/cookie.js"></script>

	<?php 
		include($_SERVER['DOCUMENT_ROOT'].'/navigation.php');
		include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
	?>
	

	<div class="content">
		Panel klienta
			
		<?php
			echo '<script type="text/javascript">$user=readCookie(\'user\')</script>';
			$zagadnienie=$_POST['selected_text'];
			$tresc=$_POST['tresc'];
			if($mysqli->query("INSERT INTO `posty`(`id_klient`, `id_zagadnienie`, `datagodzina`, `post_klienta`) VALUES ('$user', '$zagadnienie', NOW(), '$tresc')") === TRUE) {
				echo "Przyjęto zgłoszenie";
			} else {
				echo "Error: " . $mysqli->error;
			}
		?>
	</div>

</body>

</html>
