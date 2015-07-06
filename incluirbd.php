<?php
$mysql_host = "localhost";
$mysql_database  = "boafama";
$mysql_user = "root";
$mysql_password = "root";
$con = mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database, $con);	

?>