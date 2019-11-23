<?php
    header("Location: panel_pracownik.php");
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $worker_id=$_COOKIE['worker_id'];
    $id_post=$_POST['id_post']; // login z formularza
    $odpowiedz=$_POST['tresc']; // hasło z formularza
    if($mysqli->query("UPDATE `posty` SET post_pracownika = $odpowiedz, id_pracownik = $worker_id WHERE id_posty = $id_post") === TRUE) {
        echo "dodano do bazy danych";
    } else {
        echo "Error: " . $mysqli->error;
    }
?>