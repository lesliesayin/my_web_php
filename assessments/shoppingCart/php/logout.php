<?php
	session_start();
	if(!isset($_SESSION['aname'])) {
		header('location:admin.php');
	} else {
		unset($_SESSION['aname']);
		session_destroy();
		/*$_SESSION['aname'] = '';
*/		header('location:admin.php');
	}
?>