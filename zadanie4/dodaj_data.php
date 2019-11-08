<?php
    header("Location: symulator_data.php");

    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $x3 = $_POST['x3'];
    $zas1 = $_POST['zas1'];
    $zas2 = $_POST['zas2'];
    $wen1 = $_POST['wen1'];
    $wen2 = $_POST['wen2'];
    $och1 = $_POST['och1'];
    $och2 = $_POST['och2'];

    include 'db_connect.php';

    if($mysqli->query("INSERT INTO `pomiary_data`(`x1`, `x2`, `x3`, `zas1`, `zas2`, `wen1`, `wen2`, `och1`, `och2`) VALUES ('$x1', '$x2', '$x3', '$zas1', '$zas2', '$wen1', '$wen2', '$och1', '$och2')") === TRUE) {
        echo "dodano do bazy danych";
    } else {
        echo "Error: " . $mysqli->error;
    }
?>
