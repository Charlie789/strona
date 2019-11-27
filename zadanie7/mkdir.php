<?php
    echo '<script src="/js/cookie.js"></script>';

    $nowy_katalog = $_POST['nowy_katalog'];
    $user=$_COOKIE['zad7_user'];

    mkdir("/pliki/$user/$nowy_katalog", 0700);
    echo "Utworzono nowy katalog $nowy_katalog<br>";
    echo '<button id="powrot" onclick="powrot_do_panelu()">Powrot</button>';

    echo '<script>
        function powrot_do_panelu() {
            location.href = "panel_klient.php"
        }
    </script>'
?>
