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
	    $attempts = $row['attempts'];
	    if($attempts > 2) {
		echo "Przekroczyles limit prób logowania";
	    } else {
            if($row['password']==$pass){
                echo '<script type="text/javascript">createCookie(\'zad7_user_id\', \'',$user_id,'\');</script>';
                echo '<script type="text/javascript">createCookie(\'zad7_user\', \'',$user,'\');</script>';
		$mysqli->query("UPDATE `users` SET `attempts`= 0 WHERE `username`='$user'") === TRUE;
                $mysqli->query("INSERT INTO `logi`(`user_id`, `correct`, `data_czas`) VALUES ('$user_id', '1',  NOW())") === TRUE;
                if($result2 = $mysqli->query("SELECT * FROM `logi` WHERE user_id=$user_id order by history_id DESC LIMIT 1,1")) { 
                    if($row2 = $result2->fetch_assoc()){
                        $correct = $row2['correct'];
                        if ($correct == 1) {
                            echo '<script type="text/javascript">location.href = "panel_klient.php"</script>';
                        } else {
                            echo '<script type="text/javascript">location.href = "login_warning.php"</script>';
                        }
                    }
                }
                
                
            } else {
                $mysqli->query("INSERT INTO `logi`(`user_id`, `correct`, `data_czas`) VALUES ('$user_id', '0',  NOW())") === TRUE;
		$mysqli->query("UPDATE `users` SET `attempts`=`attempts` + 1 WHERE `username` = '$user'") === TRUE;
                echo "błędne hasło";
            }
	    }
        } else {
            echo "Blad nazwy użytkownika";
        }
    }
    $result->close();
?>
</BODY>
</HTML>
