<?php 
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:user_loginForm.php');
	} 
	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingCart", $conn) or die(mysql_error());

	$productId = $_POST["productId"];
	$custId = $_SESSION['custId'];
	$qty = $_POST["qty"];
	$date = date("Y-m-d");
	/*echo "pid $productId ";
	echo "custId $custId ";
	echo "productName $productName ";
	echo "price $price ";
	echo "qty $qty ";
	echo "date $date";*/
	$sql = "SELECT custInfoId, productId FROM orderTable WHERE custInfoId='$custId' AND productId='$productId'";
	$result = mysql_query($sql, $conn) or die(mysql_error());
	if(mysql_num_rows($result) == 1) {
		/*$orderId = $row[0];
		$sql = "UPDATE orderTable SET orderDate='$date', custInfoId=$custId, productId=$productId, quantity=$qty  WHERE orderId=$orderId";
		mysql_query($sql, $conn) or die(mysql_error());*/
		echo "Invalid";
	} else {
		echo "Valid";
		$sql = "INSERT INTO orderTable(orderDate, custInfoId, productId, quantity) VALUES('$date', $custId, $productId, $qty)";
		mysql_query($sql, $conn) or die(mysql_error());
		
	}

?>