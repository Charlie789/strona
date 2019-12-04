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
    if($user == "admin" && $pass == "admin") {
        echo '<script type="text/javascript">createCookie(\'admin\', \'','1','\');</script>';
        echo '<script type="text/javascript">location.href = "main.php"</script>';
    }
?>
</BODY>
</HTML>
