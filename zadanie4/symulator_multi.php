<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Appel</title>
    <link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/navigation.php'); ?>

    <div class="content">
        <h1>Symulator danych dodający nowe dane</h1>
        <form id="data_form" method="POST" action="dodaj.php">
        <br>
        X1:<input type="text" name="x1" maxlength="10" size="20" id="x1"><br>
        X2:<input type="text" name="x2" maxlength="10" size="20" id="x2"><br>
        X3:<input type="text" name="x3" maxlength="10" size="20" id="x3"><br>
        X4:<input type="text" name="x4" maxlength="10" size="20" id="x4"><br>
        X5:<input type="text" name="x5" maxlength="10" size="20" id="x5"><br>
        <input type="submit" />
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.js"></script>
    <script src="/js/only_int.js"></script>
</body>
</html>
