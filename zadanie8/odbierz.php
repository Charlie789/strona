<?php
    if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
            echo 'Odebrano plik: '.$_FILES['plik']['name'].'<br/>';
            if (isset($_FILES['plik']['type'])) {
                echo 'Typ: '.$_FILES['plik']['type'].'<br/>';
            }
            move_uploaded_file($_FILES['plik']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/img//logo.jpg');
    } else {
        echo 'Błąd przy przesyłaniu danych!';
    }
?>