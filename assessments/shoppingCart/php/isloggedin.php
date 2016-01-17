<?php
	session_start();
	if(!isset($_SESSION['name'])) {
		//header('location:user_loginForm.php');	
		echo "Invalid";
	} else {
		echo "Valid";
	}
?>