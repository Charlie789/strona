<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $user=$_POST['user']; // login z formularza
    $pass=$_POST['pass']; // hasło z formularza 
    if($result = $mysqli->query("SELECT * FROM users WHERE username='$user'")) { 
        if($row = $result->fetch_assoc()){
            if($row['password']==$pass){
                echo "Logowanie Ok. "; // Jeśli $rekord istnieje
            } else {
                echo "błędne hasło";
            }
        } else {
            echo "Blad nazwy użytkownika";
        }
    }
    $result->close();
?>
</BODY>
</HTML>