<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Appel</title>
    <link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>

    <div class="content">
        <h1>Symulator danych aktualizujący dane</h1>
        <form method="POST" action="aktualizuj.php">
        <br>
        X1:<input type="text" name="x1" maxlength="10" size="20" id="x1"><br>
        X2:<input type="text" name="x2" maxlength="10" size="20" id="x2"><br>
        X3:<input type="text" name="x3" maxlength="10" size="20" id="x3"><br>
        X4:<input type="text" name="x4" maxlength="10" size="20" id="x4"><br>
        X5:<input type="text" name="x5" maxlength="10" size="20" id="x5"><br>
        <input type="submit" value="Send"/>
        </form>
    </div>
</body>
</html>