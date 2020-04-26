<?php
$dbname ="e_voting";
$host = "localhost";
$user ="root";
$password ="";
$conn = mysql_connect($host,$user,$password) or die(mysql_error());
mysql_select_db($dbname,$conn);
?>