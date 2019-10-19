<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include '/navigation.php'; ?>

	<div class="content">
		<h1>Czas</h1>
		<?php
			$czas1 = time ();
			$czas2 = date ("r", $czas1);
			echo 'Czas uniksowy: ' . $czas1 . "<BR />";
			echo 'Czytelny format: ' . $czas2;
		?>
	</div>
</body>
</html>
