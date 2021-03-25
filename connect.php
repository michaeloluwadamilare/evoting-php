<?php
$dbname ="e_voting";
$host = "localhost";
$user ="root";
$password ="";
$conn = mysqli_connect($host,$user,$password) or die(mysqli_error());
mysqli_select_db($conn,$dbname);
?>