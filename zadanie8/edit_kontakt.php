<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<script src="/js/cookie.js"></script>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $new_kontakt=$_POST['kontakt_content'];
    echo "$new_kontakt";
    $mysqli->query("INSERT INTO `kontakt`(`content`) VALUES ('$new_kontakt')") === TRUE;
?>

</BODY>
</HTML>
