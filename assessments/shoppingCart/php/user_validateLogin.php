<?php
	session_start();
	$uname = $_POST["txtuname"];
	$pass = $_POST["password"];
	$userName;
	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingCart", $conn) or die(mysql_error());

	
	$sql = "SELECT custId, userName, password FROM customerAccount WHERE userName='$uname' AND password='$pass'";
	$result = mysql_query($sql, $conn) or die(mysql_error());

	$sql = "SELECT userName FROM customerAccount WHERE userName='$uname'";
	$result1 = mysql_query($sql, $conn) or die(mysql_error());
	

	if(mysql_num_rows($result) >= 1) { 
		while ($row = mysql_fetch_array($result)) {
			$userName = $row['userName'];
			$custId = $row['custId'];
			$_SESSION['custId'] = $custId;
			$_SESSION['name'] = $userName;
		}
		echo "Valid";
	} else if(mysql_num_rows($result1) >= 1) { 
		echo "Unmatch";
	} else {
		echo "Invalid";
	}

?>