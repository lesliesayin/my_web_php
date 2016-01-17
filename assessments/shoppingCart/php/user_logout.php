<?php
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:home.php');
	} else {
		unset($_SESSION['name']);
		session_destroy();
		/*$_SESSION['name'] = '';
*/		header('location:user_loginForm.php');
	}
?>