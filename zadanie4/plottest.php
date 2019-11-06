<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>

	<div class="content">
		<h1>Zadanie 4</h1>
		<?php
			require 'phplot.php';
			$data = array(array('', 10), array('', 1));
			$plot = new PHPlot();
			$plot->SetDataValues($data);
			$plot->SetTitle('First Test Plot');
			$plot->DrawGraph();
		?>
	</div>
</body>
</html>