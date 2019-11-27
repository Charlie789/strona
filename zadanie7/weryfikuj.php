<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<script src="/js/cookie.js"></script>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $user=$_POST['user']; // login z formularza
    $pass=$_POST['pass']; // hasło z formularza 
    if($result = $mysqli->query("SELECT * FROM users WHERE username='$user'")) { 
        if($row = $result->fetch_assoc()){
            $user_id = $row['id'];
            if($row['password']==$pass){
                echo '<script type="text/javascript">createCookie(\'user_id\', \'',$user_id,'\');</script>';
                $mysqli->query("INSERT INTO `logi`(`user_id`, `correct`, `data_czas`) VALUES ('$user_id', '1',  NOW())") === TRUE;
                echo '<script type="text/javascript">location.href = "panel_klient.php"</script>';
            } else {
                $mysqli->query("INSERT INTO `logi`(`user_id`, `correct`, `data_czas`) VALUES ('$user_id', '0',  NOW())") === TRUE;
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
