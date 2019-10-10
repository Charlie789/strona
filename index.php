<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Appel</title>
    <link href="mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php include 'navigation.php'; ?>
	
	<div class="content">
		Strona główna
		</br>
		<?php /*include 'db_connect.php';
		if ($result = $mysqli->query("SELECT * FROM test_table")) {
    			printf("<br />Select returned %d rows.<br />", $result->num_rows);
			while($row = $result->fetch_assoc()) {
        			echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Surname"]. " - Age: " . $row["Age"]. "<br>";
    			}
    		$result->close();
		}*/
		?>
	</div>

</body>

</html>
