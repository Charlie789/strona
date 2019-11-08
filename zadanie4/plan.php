<?php
include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');

	$data = array();
        $data1 = array();
	$data2 = array();
	$data3 = array();
	$data4 = array();
	$data5 = array();

        if ($result = $mysqli->query("SELECT * FROM pomiary_multi")) {
                while($row = $result->fetch_assoc()) {
                        $idt = $row["ID"];
                        $x1 = $row["X1"];
                        $x2 = $row["X2"];
                        $x3 = $row["X3"];
                        $x4 = $row["X4"];
                        $x5 = $row["X5"];
                        $time = $row["data_godzina"];

                        array_push($data1, array("label"=>$idt, "y"=>$x1));
			array_push($data2, array("label"=>$idt, "y"=>$x2));
			array_push($data3, array("label"=>$idt, "y"=>$x3));
			array_push($data4, array("label"=>$idt, "y"=>$x4));
			array_push($data5, array("label"=>$idt, "y"=>$x5));
			array_push($data, array($idt, $x1, $x2, $x3, $x4, $x5));

                }
                $result->close();
        }
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
				title:{
					text: "Historia pomiarów"
				},
				data: [
				{
					type: "line",
					dataPoints: <?php echo json_encode($data1, JSON_NUMERIC_CHECK); ?>
				},
				{
                                        type: "line",
                                        dataPoints: <?php echo json_encode($data2, JSON_NUMERIC_CHECK); ?> 
                                },
				{
                                        type: "line",
                                        dataPoints: <?php echo json_encode($data3, JSON_NUMERIC_CHECK); ?>
                                },
				{
                                        type: "line",
                                        dataPoints: <?php echo json_encode($data4, JSON_NUMERIC_CHECK); ?>
                                },
				{
                                        type: "line",
                                        dataPoints: <?php echo json_encode($data5, JSON_NUMERIC_CHECK); ?>
                                }

				]
			});
			chart.render();
		}
	</script>
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>
	<div class="content">
		<h1>plan mieszkania z czujnikami</h1>
		<div class="plan">
			<img src="/img/plan.jpg" alt="Plan" style="width:100%;">
			<div class="x1">
				<?php echo end($data)[1]; ?>
			</div>
			<div class="x2">
				<?php echo end($data)[2]; ?>
			</div>
			<div class="x3">
				<?php echo end($data)[3]; ?>
			</div>
			<div class="x4">
				<?php echo end($data)[4]; ?>
			</div>
			<div class="x5">
				<?php echo end($data)[5]; ?>
			</div>
			<div class="fire">
				<img src="/img/fire.gif" />
			</div>
		</div>
		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
	</div>
</body>
</html>
