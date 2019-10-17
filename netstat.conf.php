<?php /* netstat.conf.php example */
$title = "Our network status";
$headline = $title;
$checks = array(
	'router.example.com|ping| ICMP ping (ping)',
	'www.kappel.org.pl  | 80 | WWW server (port 80)',
	'www.kappel.org.pl  | 22222 | SSH server (port 22222)',
	'   Other checks   | headline',
	'www.example.com   | 80 | WWW server example.com' // no colonhere!
);
$ping_command = '/usr/bin/ping -l3 -c3 -w1 -q';
?>
