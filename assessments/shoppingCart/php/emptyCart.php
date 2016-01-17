<?php
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:user_loginForm.php');
	}
	$custId = $_SESSION['custId'];

	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingcart", $conn) or die(mysql_error());


	$sql = "DELETE FROM orderTable WHERE custInfoId = $custId";
	mysql_query($sql, $conn) or die(mysql_error());
	header("location:cart.php");
?>