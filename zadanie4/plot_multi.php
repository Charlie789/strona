<?php
require_once 'phplot.php';
include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');

$data = array();

if ($result = $mysqli->query("SELECT * FROM pomiary_multi")) {
  while($row = $result->fetch_assoc()) {
    $x1 = $row["X1"];
    $x2 = $row["X2"];
    $x3 = $row["X3"];
    $x4 = $row["X4"];
    $x5 = $row["X5"];
    $time = $row["data_godzina"];

    array_push($data, array($time, $x1, $x2, $x3, $x4, $x5));
  
  }
  $result->close();
}

$plot = new PHPlot(800, 600);
$plot->SetImageBorderType('plain');

$path='/fonts';
$plot->SetTTFPath($path);
$plot->SetDefaultTTFont('Roboto-Black.ttf');
$plot->SetFont('x_label', 'Roboto-Black.ttf', '15');
$plot->SetFont('y_label', 'Roboto-Black.ttf', '15');
$plot->SetFont('title', 'Roboto-Black.ttf', '15');

$plot->SetPlotType('lines');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);

$plot->SetTitle('Wykres słupkowy z aktualnym stanem danych');

$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

$plot->DrawGraph();

?>
