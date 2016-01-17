<?php
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:user_loginForm.php');
	} 
	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingcart", $conn) or die(mysql_error());

	$custId = (int)$_SESSION['custId'];
	$orderId = (int)$_POST['orderId'];
	$quantity = (int)$_POST['quantity'];
	/*echo "$custId";
	echo "$orderId";
	echo "$quantity";*/

	$sql = "UPDATE orderTable SET quantity=$quantity WHERE orderId=$orderId AND custInfoId=$custId";
	mysql_query($sql, $conn) or die(mysql_error());

	echo "Update Successful!";




?>