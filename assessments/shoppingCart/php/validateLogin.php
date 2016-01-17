<?php
	$uname = $_POST["txtuname"];
	$pass = $_POST["password"];
	
	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingCart", $conn) or die(mysql_error());

	
	$sql = "SELECT userName, password FROM adminAccount WHERE userName='$uname' AND password='$pass'";
	$result = mysql_query($sql, $conn) or die(mysql_error());

	if(mysql_num_rows($result) >= 1) {
		echo "Valid";
	} else {
		echo "Invalid";
	}

?>