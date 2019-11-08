<?php
include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');


        if ($result = $mysqli->query("SELECT * FROM pomiary_data")) {
                while($row = $result->fetch_assoc()) {
                        $idt = $row["ID"];
                        $x1 = $row["x1"];
                        $x2 = $row["x2"];
                        $x3 = $row["x3"];
                        $zas1 = $row["zas1"];
                        $zas2 = $row["zas2"];
						$wen1 = $row["wen1"];
						$wen2 = $row['wen2'];
						$och1 = $row['och1'];
						$och2 = $row['och2'];

                }
                $result->close();
        }
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>
	<div class="content">
		<h1>plan mieszkania z czujnikami</h1>
		<div class="plan">
			<img src="/img/plan.jpg" alt="Plan" style="width:100%;">
			<div class="x1">
				<?php echo $x1; ?>
			</div>
			<div class="x2">
				<?php echo $x2; ?>
			</div>
			<div class="x3">
				<?php echo $x3; ?>
			</div>
			<?php if($zas1 == 1) {
				echo '<div class="x4">';
				echo	'<img src="/img/zas.jpg" />';
				echo '</div>';
			} else {
				echo '<div class="x4">';
				echo	'<img src="/img/awaria.png" />';
				echo '</div>';
			}?>
			<?php if($zas2 == 1) {
				echo '<div class="x5">';
				echo	'<img src="/img/zas.jpg" />';
				echo '</div>';
			} else {
				echo '<div class="x5">';
				echo	'<img src="/img/awaria.png" />';
				echo '</div>';
			}?>
			<?php if($wen1 == 0) {
				echo '<div class="fire">';
				echo	'<img src="/img/ac0.jpg" />';
				echo '</div>';
			} else if($wen1 == 1){
				echo '<div class="fire">';
				echo	'<img src="/img/ac.png" />';
				echo '</div>';
			} else {
				echo '<div class="fire">';
				echo	'<img src="/img/ac3.jpg" />';
				echo '</div>';	
			}?>
			<?php if($wen2 == 0) {
				echo '<div class="water">';
				echo	'<img src="/img/ac0.jpg" />';
				echo '</div>';
			} else if($wen2 == 1){
				echo '<div class="water">';
				echo	'<img src="/img/ac.png" />';
				echo '</div>';
			} else {
				echo '<div class="water">';
				echo	'<img src="/img/ac3.jpg" />';
				echo '</div>';	
			}?>
			<?php if($och1 == 1) {
				echo '<div class="feet1">';
				echo	'<img src="/img/stopy.gif" />';
				echo '</div>';
			}?>
			<?php if($och == 1) {
				echo '<div class="feet2">';
				echo	'<img src="/img/stopy.gif" />';
				echo '</div>';
			}?>
		</div>
	</div>
</body>
</html>