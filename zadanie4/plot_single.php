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
  array('x1', $x1), array('x2', $x2), array('x3', $x3),
  array('x4', $x4), array('x5', $x5),
);

$plot = new PHPlot(800, 600);
$plot->SetImageBorderType('plain');

$path='/fonts';
$plot->SetTTFPath($path);
$plot->SetDefaultTTFont('Roboto-Black.ttf');

$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);

$plot->SetTitle('Wykres słupkowy z aktualnym stanem danych');

$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

$plot->DrawGraph();

?>
