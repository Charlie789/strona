<?php
    header("Location: panel_klient.php");
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $id_post=$_POST['id_post']; // login z formularza
    $ocena=$_POST['ocena']; // hasło z formularza
    if($mysqli->query("UPDATE `posty` SET ocena = $ocena WHERE id_posty = $id_post") === TRUE) {
        echo "dodano do bazy danych";
    } else {
        echo "Error: " . $mysqli->error;
    }
?>