<?php
include('config.php');

$sql="INSERT INTO user (name, lastname, department, username, password)
VALUES
('$_POST[name]','$_POST[lastname]','$_POST[dept]','$_POST[username]','$_POST[password]')";

if (!mysql_query($sql,$bd))
  {
  die('Error: ' . mysql_error());
  }
header("location: index.php");

mysql_close($bd)
?>
