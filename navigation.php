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
		<a href="/zadanie2/zad2_goscie.php" title="Zadanie 2 Goscie portalu">Goście Portalu</a>
	</div>	
</div>

<script src="/js/collapse.js"></script>';
?>
