<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $id_post=$_POST['id_post']; // login z formularza
    $ocena=$_POST['ocena']; // hasło z formularza
    echo "$id_post, $ocena";
?>
</BODY>
</HTML>