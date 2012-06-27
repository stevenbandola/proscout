<?php


$host="ecsportfolio.db.7525293.hostedresource.com";
$u="ecsportfolio";
$p="Deadmau4!";
$db_n="ecsportfolio";

$dbc = mysql_connect($host, $u, $p) or die ("Couldn't Connect to Server" .  mysql_error);

//select database
mysql_select_db($db_n, $dbc) or die ('cant connect : ' .  mysql_error);


?>