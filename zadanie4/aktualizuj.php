<?php
    header("Location: symulator.php");

    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $x3 = $_POST['x3'];
    $x4 = $_POST['x4'];
    $x5 = $_POST['x5'];

    include 'db_connect.php';

    if($mysqli->query("UPDATE `pomiary` SET `x1` = '$x1', `x2` = '$x2', `x3` = '$x3', `x4` = '$x4', `x5` = '$x5', `data_godzina` = NOW() WHERE `id` = 0") === TRUE) {
        echo "dodano do bazy danych";
    } else {
        echo "Error: " . $mysqli->error;
    }
?>