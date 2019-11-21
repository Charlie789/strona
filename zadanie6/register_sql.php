<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $user=$_POST['user']; // login z formularza
    $pass=$_POST['pass']; // hasło z formularza
    $pass2=$_POST['pass2']; // powtórzone hasło z formularza 
    if($pass != $pass2){
        echo "podane hasło nie są takie same";
    } else {
        if($mysqli->query("INSERT INTO `klienci`(`nazwisko`, `haslo`) VALUES ('$user', '$pass')") === TRUE) {
            echo "dodano do bazy danych";
        } else {
            echo "Error: " . $mysqli->error;
        }
    }
?>
</BODY>
</HTML>