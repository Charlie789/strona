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
			if($result = $mysqli->query("SELECT content FROM kontakt order by id DESC LIMIT 1")) { 
				if($row = $result->fetch_assoc()){
					$content = $row['content'];
				}
				$result->close();
			}
			
			if($_COOKIE['admin']){
				echo 'Kontakt Admin
					<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
					<form action="edit_kontakt.php" method="post">
						<textarea name="kontakt_content" id="kontakt_editor">
							$content;
						</textarea>
						<p><input type="submit" value="Zapisz zmiany"></p>
					</form>
					<script>
						ClassicEditor
							.create( document.querySelector( \'#kontakt_editor\' ) )
							.catch( error => {
								console.error( error );
							} );
					</script>';
				echo '<button id="log_out" onclick="logout()">Wyloguj</button>';
			} else {
				echo "Kontakt<br>";
				echo "$content";
			}
		?>

		
	</div>


</body>

</html>

