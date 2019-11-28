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

	<div class="content">
		Panel użytkownika

		<form action="odbierz.php" method="POST" ENCTYPE="multipart/form-data"> 
			<input type="file" name="plik"/>
			<input type="submit" value="Wyślij plik"/>
		</form><br>
		<form action="mkdir.php" method="POST"> 
			<input type="text" name="nowy_katalog" maxlength="20" size="20" id="nowy_katalog"/>
			<input type="submit" value="Dodaj podfolder"/>
		</form><br>
		<form action="odbierz.php" method="POST" ENCTYPE="multipart/form-data"> 
			<input type="file" name="plik"/>
			<select id="temat_select" name="temat" onchange="document.getElementById('selected_folder').value=this.options[this.selectedIndex].value">
				<?php
					$dirs = glob($somePath . '/*' , GLOB_ONLYDIR);
					foreach ($dirs as $dir) {
						print "<option value='$dir'>$dir</option>";
					}
				?>
					
			</select><br>
			<input type="hidden" name="selected_folder" id="selected_folder" value="1" />
			
			<input type="submit" value="Wyślij plik"/>
		</form>
		
		<?php
		$user_name = $_COOKIE['zad7_user'];
		// if ($handle = opendir("/pliki/$user_name/")) {
		// 	while (false !== ($entry = readdir($handle))) {
		// 		if ($entry != "." && $entry != "..") {
		// 			echo "<a href='/pliki/$user_name/$entry' download>".$entry."</a>\n";
		// 		}
		// 	}
		// 	closedir($handle);
		// }
		

		$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("/pliki/$user_name"));
		foreach ($iterator as $file) {
			if ($file->isDir()) continue;
			$path = $file->getPathname();
			echo "<a href='$path' download>$path</a>\n";
		}
		$somePath="/pliki/$user_name";
		
		?>
	</div>

</body>

</html>
