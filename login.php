<?php
session_start();
require_once("connect.php");

$voterId = $_POST['voterId'];
$password = $_POST['password'];

if (isset($_POST['btnsignin'])) {
	$sql = "SELECT * FROM voters_data WHERE voterId = '$voterId' AND surname = '$password'";
	$query = mysql_query($sql) or die(mysql_error());
	$user = mysql_fetch_array($query);
	if (mysql_num_rows($query)==1) {
		$_SESSION['id'] = $user['id'];
		$_SESSION['passport'] = $user['passport'];
		$_SESSION['firstname'] = $user['other_name'];
		$_SESSION['lastname'] = $user['surname'];
		$_SESSION['voterId'] = $user['voterId'];
		$_SESSION['gender'] = $user['gender'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['state'] = $user['state'];
		$_SESSION['town'] = $user['town'];
		$_SESSION['lga'] = $user['lga'];
		$_SESSION['ward'] = $user['ward'];
		$_SESSION['phoneNo'] = $user['phoneNo'];
		$_SESSION['address'] = $user['address'];
		$_SESSION['dob'] = $user['dob'];
		header("Location: userdata.php?id=".sha1($user['voterId'])."");
	}
	else{
		header("Location: index.php?id=error");

	}
	
}

?>