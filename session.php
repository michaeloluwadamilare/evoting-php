<?php
	
	session_start();

	function logged_in(){
		return isset($_SESSION['voterId']);
	}
	
	function confirm_logged_in(){
		if (!logged_in()) {

			header("location:index.php");
		}
	}

?>