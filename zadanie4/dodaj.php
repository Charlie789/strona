<?php
    header("Location: symulator_multi.php");

    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $x3 = $_POST['x3'];
    $x4 = $_POST['x4'];
    $x5 = $_POST['x5'];
    $fire = $_POST['fire'];

    include 'db_connect.php';

    if($mysqli->query("INSERT INTO `pomiary_multi`(`x1`, `x2`, `x3`, `x4`, `x5`, `data_godzina`, `ogien`) VALUES ('$x1', '$x2', '$x3', '$x4', '$x5', NOW(), '$fire')") === TRUE) {
        echo "dodano do bazy danych";
    } else {
        echo "Error: " . $mysqli->error;
    }
?>
