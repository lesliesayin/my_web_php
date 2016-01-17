<?php
	session_start();
	if(isset($_SESSION['name'])) {
		header('location:home.php');
	} 

	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingCart", $conn) or die(mysql_error());

	$name = $_POST['txtname'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$uname = $_POST['uname'];
	$pass = $_POST['password'];
	$retype = $_POST['retype'];
	
	if($pass == $retype) {
		$sql = "SELECT userName FROM customerAccount WHERE userName='$uname'";
		$result = mysql_query($sql, $conn) or die(mysql_error());
		if(mysql_num_rows($result) >= 1) {
			echo "Invalid";
		} else {
			$sql = "INSERT INTO customerAccount(userName, password) VALUES('$uname','$pass')";
			mysql_query($sql, $conn) or die(mysql_error());

			$sql = "SELECT custId FROM customerAccount ORDER BY custId DESC LIMIT 1";
			$result = mysql_query($sql, $conn) or die(mysql_error());
			$row = mysql_fetch_array($result);  
			$custInfoId = $row[0];

			$sql = "INSERT INTO customerInfo(custName, address, contactNo, custInfoId) VALUES('$name','$address',$contact, $custInfoId)";
			mysql_query($sql, $conn) or die(mysql_error());
			echo "Valid";
		}
	} else {
		echo "password not match";
	}
?>