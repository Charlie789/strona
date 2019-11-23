<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $worker_id=$_COOKIE['worker_id'];
    $id_post=$_POST['id_post'];
    $odpowiedz=$_POST['tresc'];
    if($mysqli->query("UPDATE `posty` SET post_pracownika = $odpowiedz, id_pracownik = $worker_id WHERE id_posty = $id_post") === TRUE) {
        echo '<script type="text/javascript">location.href = "panel_pracownik.php"</script>';
    } else {
        echo "Error: " . $mysqli->error;
    }
?>