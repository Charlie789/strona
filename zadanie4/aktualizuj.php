<?php
    header("Location: symulator.php");

    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $x3 = $_POST['x3'];
    $x4 = $_POST['x4'];
    $x5 = $_POST['x5'];

    include 'db_connect.php';

    if($mysqli->query("INSERT INTO `pomiary`(`x1`, `x2`, `x3`, `x4`, `x5`, `data_godzina`) VALUES ('$x1', '$x2', '$x3', '$x4', '$x5', NOW())") === TRUE) {
        echo "dodano do bazy danych";
    } else {
        echo "Error: " . $mysqli->error;
    }
?>