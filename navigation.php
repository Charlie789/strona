<?php
echo 
'<div class="sidenav">
	<a href="/index.php" title="Strona główna">Strona główna</a>
	<a href="/zadanie1.php" title="Zadanie 1">Zadanie 1</a>
	<button type="button" class="collapsible">Zadanie 2</button>
	<div class="collapse_content">
		<a href="/zadanie2/zad2_netstat.php" title="Zadanie 2 Netstat">Netstat</a>
		<a href="/zadanie2/zad2_phpinfo.php" title="Zadanie 2 PHPInfo">PHPInfo</a>
		<a href="/zadanie2/zad2_whoami.php" title="Zadanie 2 WhoAmI">WhoAmI</a>
		<a href="/zadanie2/zad2_serverinfo.php" title="Zadanie 2 Informacje o serwerze">Server Info</a>
		<a href="/zadanie2/zad2_dns.php" title="Zadanie 2 DNS">DNS</a>
		<a href="/zadanie2/zad2_czas.php" title="Zadanie 2 Czas">Czas</a>
		<a href="/zadanie2/zad2_goscie.php" title="Zadanie 2 Goscie portalu">Goście Portalu</a>
	</div>
	<button type="button" class="collapsible">Zadanie 3</button>
	<div class="collapse_content">
		<a href="/zadanie3/index.php" title="Index">Index</a>
		<a href="/zadanie3/konwersacja.php" title="Konwersacja">Konwersacja</a>
		<a href="/zadanie3/konwersacja_sql.php" title="Konwersacja SQL">Konwersacja SQL</a>
	</div>
	<button type="button" class="collapsible">Zadanie 4</button>
	<div class="collapse_content">
		<a href="/zadanie4/plottest.php" title="Test wykresu">Test wykresu</a>
		<a href="/zadanie4/symulator.php" title="Symulator danych">Symulator danych</a>
		<a href="/zadanie4/plot_single.php" title="Wykres pojedynczy">Wykres pojedynczy</a>
		<a href="/zadanie4/symulator_multi.php" title="Symulator danych dodawanie">Symulator danych dodawanie</a>
		<a href="/zadanie4/plot_multi.php" title="Wykres wszystkich pomiarów">Wykres wszystkich pomiarów</a>
		<a href="/zadanie4/plan.php" title="Plan mieszkania">Plan mieszkania</a>
	</div>	
</div>

<script src="/js/collapse.js"></script>';
?>
