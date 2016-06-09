<?php
$IP = getenv('MYSQL_PORT_3306_TCP_ADDR');
$PORT = getenv('MYSQL_PORT_3306_TCP_PORT');
$mysql_hostname = "$IP:$PORT";
$mysql_user = "admin";
$mysql_password = "admin";
$mysql_database = "br";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>
