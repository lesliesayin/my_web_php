<?php
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:user_loginForm.php');
	}

	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingcart", $conn) or die(mysql_error());

	$orderId = $_POST['orderId'];

	$sql = "DELETE FROM orderTable WHERE orderId = $orderId";
	mysql_query($sql, $conn) or die(mysql_error());
	header("location:cart.php");
?>