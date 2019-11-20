<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $user=$_POST['user']; // login z formularza
    $pass=$_POST['pass']; // hasło z formularza 
    if($result = $mysqli->query("SELECT * FROM users WHERE (username='$user') and (password='$pass')")) { 
        echo "Logowanie Ok. "; // Jeśli $rekord istnieje
    }
    else
    {
        echo "Blad nazwy użytkownika lub hasla";
    }
    $result->close();
?>
</BODY>
</HTML>