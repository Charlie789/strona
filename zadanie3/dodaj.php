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
