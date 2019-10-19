<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include '/navigation.php'; ?>

	<div class="content">
		Informacje o serwerze <br/>
		<?php
			exec ('TERM=xterm /usr/bin/top n 1 b i', $top, $error );
			echo nl2br(implode("\n",$top));
			if ($error){
				exec ('TERM=xterm /usr/bin/top n 1 b 2>&1', $error );
				echo "Error: ";
				exit ($error[0]);
			}
		?>
	</div>
</body>
</html>
