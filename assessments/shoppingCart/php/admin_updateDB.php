<?php
	session_start();
	if(!isset($_SESSION['aname'])) {
		header('location:admin.php');
	}
	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingcart", $conn) or die(mysql_error());

	$catId = $_POST['catId'];
	$productId = $_POST['productId'];
	$productName = $_POST['productName'];
	$catName = $_POST['catName'];
	$gender = $_POST['gender'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$file = $_FILES['fileUpload']['name'];

	/*echo "$catId";
	echo "$productId";
	echo "$productName";
	echo "$catName";
	echo "$gender";
	echo "$price";
	echo "image $image";*/
	//echo "file $file";
	@copy($_FILES["fileUpload"]["tmp_name"], "../images/myImg/".$_FILES["fileUpload"]["name"]);
	$sql = "UPDATE categoryTable SET catName='$catName' WHERE catId=$catId";
	mysql_query($sql, $conn) or die(mysql_error());

	echo "UPDATE categoryTable SET catName='$catName' WHERE catId=$catId";
	
	$sql = "UPDATE productTable SET productName='$productName', catId=$catId, gender='$gender', price=$price, image='$image' WHERE productId=$productId";
	mysql_query($sql, $conn) or die(mysql_error());


	header("location:admin_showProducts.php");

?>