<?php
require_once 'phplot.php';
include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');

if ($result = $mysqli->query("SELECT * FROM pomiary")) {
  while($row = $result->fetch_assoc()) {
    $x1 = $row["X1"];
    $x2 = $row["X2"];
    $x3 = $row["X3"];
    $x4 = $row["X4"];
    $x5 = $row["X5"];
    $time = $row["data_godzina"];
  
  }
  $result->close();
}

$data = array(
  array('x1', 40), array('x2', 30), array('x3', 20),
  array('x4', 10), array('x5',  3),
);

$plot = new PHPlot(800, 600);
$plot->SetImageBorderType('plain');

$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);

# Main plot title:
$plot->SetTitle('Shaded Bar Chart with 5 Data Sets');

# Turn off X tick labels and ticks because they don't apply here:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

$plot->DrawGraph();

?>
