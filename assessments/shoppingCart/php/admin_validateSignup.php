<?php
	session_start();
	if(isset($_SESSION['aname'])) {
		header('location:admin_showProducts.php');
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
		$sql = "SELECT userName FROM adminAccount WHERE userName='$uname'";
		$result = mysql_query($sql, $conn) or die(mysql_error());
		if(mysql_num_rows($result) >= 1) {
			echo "Invalid";
		} else {
			$sql = "INSERT INTO adminAccount(userName, password) VALUES('$uname','$pass')";
			mysql_query($sql, $conn) or die(mysql_error());

			$sql = "SELECT adminId FROM adminAccount ORDER BY adminId DESC LIMIT 1";
			$result = mysql_query($sql, $conn) or die(mysql_error());
			$row = mysql_fetch_array($result);  
			$adminId = $row[0];

			$sql = "INSERT INTO adminInfo(adminName, address, contactNo, adminId) VALUES('$name','$address',$contact, $adminId)";
			mysql_query($sql, $conn) or die(mysql_error());
			echo "Valid";
		}
	} else {
		echo "password not match";
	}
?>