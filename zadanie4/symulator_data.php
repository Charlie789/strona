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
        <form id="data_form" method="POST" action="dodaj_data.php">
        <br>
        temperatura 1:<input type="text" name="x1" maxlength="10" size="20" id="x1"><br>
        temperatura 2:<input type="text" name="x2" maxlength="10" size="20" id="x2"><br>
        temperatura 3:<input type="text" name="x3" maxlength="10" size="20" id="x3"><br>
        Zasilanie 1: <select name="zas1" multiple size="2">
                    <option value="0">NIE</option>
                    <option value="1">TAK</option>
                </select>
        Zasilanie 2: <select name="zas2" multiple size="2">
                    <option value="0">NIE</option>
                    <option value="1">TAK</option>
                </select><br>
        wentylator 1: <select name="wen1" multiple size="3">
                    <option value="0">wył</option>
                    <option value="1">50%</option>
                    <option value="2">100%</option>
                </select>
        wentylator 2: <select name="wen2" multiple size="3">
                    <option value="0">wył</option>
                    <option value="1">50%</option>
                    <option value="2">100%</option>
                </select><br>
        Ochrona 1: <select name="och1" multiple size="2">
                    <option value="0">NIE</option>
                    <option value="1">TAK</option>
                </select>
        Ochrona 2: <select name="och2" multiple size="2">
                    <option value="0">NIE</option>
                    <option value="1">TAK</option>
                </select><br>
        <input type="submit" /><br>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.js"></script>
    <script src="/js/only_int.js"></script>
</body>
</html>
