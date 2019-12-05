<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<script src="/js/cookie.js"></script>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
    $new_oferta=$_POST['oferta_content'];
    if ($mysqli->query("INSERT INTO `oferta`(`content`) VALUES ('$new_oferta')") === TRUE){
        echo "<br>dodano nowe dane do bazy danych<br><br>";
    }
?>
<button id="powrot" onclick="powrot_do_oferty()">Powrót do strony z ofertą</button>

<script>
    function powrot_do_oferty() {
        location.href = "oferta.php"
    }
</script>

</BODY>
</HTML>
