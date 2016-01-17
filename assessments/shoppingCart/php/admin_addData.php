<?php
	session_start();
	if(!isset($_SESSION['aname'])) {
		header('location:admin.php');
	}
	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingcart", $conn) or die(mysql_error());

	$productName = $_POST['product'];
	$category = $_POST['category'];
	$gender = $_POST['gender'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$file = $_FILES['fileUpload']['name'];

	if($file == "") {
		echo "No file chosen";
	} else {
		@copy($_FILES["fileUpload"]["tmp_name"], "../images/myImg/".$_FILES["fileUpload"]["name"]);
		$sql = "INSERT INTO categoryTable(catName) VALUES('$category')";
			mysql_query($sql, $conn) or die (mysql_error());
		$sql = "SELECT catId FROM categoryTable ORDER BY catId DESC LIMIT 1";
		$result = mysql_query($sql, $conn) or die(mysql_error());
		$row = mysql_fetch_array($result);  

		$catId = $row[0];

		$sql = "INSERT INTO productTable(productName,catId,gender,price,image) VALUES('$productName',  $catId , '$gender', $price, '$file')";
		mysql_query($sql, $conn) or die (mysql_error());
		header('location:admin_showProducts.php');
	}
?>