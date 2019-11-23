<?php
	echo '<script type="text/javascript">',$user,'=readCookie(\'user\')</script>';
	$zagadnienie=$_POST['selected_text'];
	$tresc=$_POST['tresc'];
	if($mysqli->query("INSERT INTO `posty`(`id_klient`, `id_zagadnienie`, `datagodzina`, `post_klienta`) VALUES ('$user', '$zagadnienie', NOW(), '$tresc')") === TRUE) {
		echo '<script type="text/javascript">location.href = "panel_klient.php"</script>';
	} else {
		echo "Error: " . $mysqli->error;
	}
?>