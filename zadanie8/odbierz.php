<?php
    if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
            echo 'Odebrano plik: '.$_FILES['plik']['name'].'<br/>';
            if (isset($_FILES['plik']['type'])) {
                echo 'Typ: '.$_FILES['plik']['type'].'<br/>';
            }
	    chmod('/img//logo.jpg',0755);
	    unlink('/img//logo.jpg');
            move_uploaded_file($_FILES['plik']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/img//logo.jpg');
    } else {
        echo 'Błąd przy przesyłaniu danych!';
    }

    echo "<button id='powrot' onclick='powrot_do_main()'>Powrót do strony głównej</button>

    <script>
        function powrot_do_main() {
            location.href = 'main.php'
        }
    </script>";
?>
