<?php


$host=localhost;
$user=admin;
$pawd=admin;
$db="MySiteDB";

$connection = mysql_connect($host, $user, $pawd);
mysql_set_charset('utf8',$connection);
if(!$connection||!mysql_select_db($db,$connection))
{exit(mysql_error());
}

?>
