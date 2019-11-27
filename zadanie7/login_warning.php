<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<script src="/js/cookie.js"></script>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $user_id=$_COOKIE['zad7_user_id'];
    if($result = $mysqli->query("SELECT * FROM `logi` WHERE user_id=$user_id order by history_id DESC LIMIT 1,1")) { 
        if($row = $result->fetch_assoc()){
            $data_czas = $row['data_czas'];
        }
        $result->close();
        echo "<font color='red'></font>Była nieudane próba logowania na konto $data_czas</font><br>";
    }
?>
<button id="powrot" onclick="powrot_do_panelu()">Kontynuuj</button>

    <script>
        function powrot_do_panelu() {
            location.href = "panel_klient.php"
        }
    </script>
</BODY>
</HTML>