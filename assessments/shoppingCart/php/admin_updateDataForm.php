<?php
	session_start();
	if(!isset($_SESSION['aname'])) {
		header('location:admin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../styles/admin_addData.css">
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<script type="text/javascript" src="../scripts/admin_addData.js"></script>
	<?php
		$conn = mysql_connect("localhost","root","") or die(mysql_error());
		$dbcon = mysql_select_db("shoppingcart", $conn) or die(mysql_error());

		$productId = $_POST['productId'];
		$sql = "SELECT * FROM productTable WHERE productId = $productId";
		$result = mysql_query($sql, $conn) or die(mysql_error());
		while ($row = mysql_fetch_array($result)) {
			$productId = $row['productId'];
			$productName = $row['productName'];
			$catId = $row['catId'];
			$gender = $row['gender'];
			$price = $row['price'];
			$image = $row['image'];

			$sql = "SELECT catName FROM categoryTable, productTable WHERE categoryTable.catId = productTable.catId and productTable.catId=$catId";
			$response = mysql_query($sql, $conn) or die(mysql_error());
			$row = mysql_fetch_array($response);  
			$catName = $row[0];
		}
	?>
</head>
<body>
	<h1>Welcome <?php echo "$_SESSION[aname]"?></h1>
	<div id="main">

		<p id="title">Update Product</p>
		<div id="left">
			<p>Product Name</p>
			<p>Category</p>
			<p>Gender</p>
			<p>Price</p>
			<p>Image</p>
		</div>
		<form name="form" action="admin_updateDB.php" method="POST" enctype="multipart/form-data">
			<div id="middle">
					<input type="text" name="productName" id="product" required><br>
					<input list="category" name="catName" id="catName" class="datalist" required>
					<datalist id="category" >
						<option>Long Sleeve</option>
						<option>Pants</option>
						<option>T-Shirts</option>
						<option>Watch</option>
						<option>Dresses</option>
						<option>Office Wear</option>
					</datalist><br>
					<input list="gender" name="gender" id="genInput" class="datalist" required>
					<datalist id="gender">
						<option>Mens</option>
						<option>Ladies</option>
					</datalist><br>
					<input list="price" name="price" id="priceInt" class="datalist" required> 
					<datalist id="price">
						<option>100</option>
						<option>200</option>
						<option>300</option>
						<option>400</option>
						<option>500</option>
						<option>600</option>
						<option>700</option>
						<option>800</option>
						<option>900</option>
						<option>1000</option>
					</datalist><br>
				<input type="text" name="image" id="image" required> 
				<input type="submit" name="submit" id="btnsubmit" value="Submit">
			</div>
			<div id="right">
				<input type="file" name="fileUpload" id="imgFile">
				<input type="hidden" name="catId" id="catId"> 
				<input type="hidden" name="productId" id="productId">
			</div>
		</form>
	</div>
	<script>
		$(document).ready(function() {
			var productName = "<?php echo $productName; ?>";
			var catName = "<?php echo $catName; ?>";
			var gender = "<?php echo $gender; ?>";
			var price = "<?php echo $price; ?>";
			var image = "<?php echo $image; ?>";
			var imgFile = "<?php echo $image; ?>";
			var productId = "<?php echo $productId; ?>";
			var catId = "<?php echo $catId; ?>";

			/*alert(productId);
			alert(catId);
			alert(catName);
			alert(productName);
			alert(gender);
			alert(price);
			alert(image);
			alert(imgFile);*/

			productNameVal = document.getElementById("product").value = productName;
			catNameVal = document.getElementById("catName").value = catName;
			genderVal = document.getElementById("genInput").value = gender;
			priceVal = document.getElementById("priceInt").value = price;
			imageVal = document.getElementById("image").value = image;
			imgVal = document.getElementById("imgFile").text = image;
			productIdVal = document.getElementById("productId").value = productId;
			catId = document.getElementById("catId").value = catId;
			/*alert(productNameVal);
			alert(catNameVal);
			alert(genderVal);
			alert(priceVal);
			alert(imageVal);
			alert(imgVal);
			alert(productIdVal);
			alert(catId);
	*/
		});
	</script>
</body>
</html>