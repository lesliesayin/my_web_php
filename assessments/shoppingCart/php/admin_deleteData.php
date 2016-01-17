	<?php
	session_start();
	if(!isset($_SESSION['aname'])) {
		header('location:admin.php');
	}

	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingcart", $conn) or die(mysql_error());

	$productId = $_POST['productId'];
	$catId = $_POST['catId'];

	$sql = "DELETE FROM productTable WHERE productId = $productId";
	mysql_query($sql, $conn) or die(mysql_error());
	$sql = "DELETE FROM categoryTable WHERE catId = $catId";
	mysql_query($sql, $conn) or die(mysql_error());
	header("location:admin_showProducts.php");
?>