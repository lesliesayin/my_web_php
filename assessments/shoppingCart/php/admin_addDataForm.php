<?php
	session_start();
	if(!isset($_SESSION['aname'])) {
		header('location:admin.php');
	}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../styles/admin_addData.css">
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<script type="text/javascript" src="../scripts/admin_addData.js"></script>
</head>
<body>
	<h1>Welcome <?php echo "$_SESSION[aname]"?></h1>
	<div id="main">

		<p id="title">Add New Product</p>
		<div id="left">
			<p>Product Name</p>
			<p>Category</p>
			<p>Gender</p>
			<p>Price</p>
			<p>Image</p>
		</div>
		<form action="../php/admin_addData.php" method="POST" enctype="multipart/form-data">
			<div id="middle">
					<input type="text" name="product" required><br>
					<input list="category" name="category" id="catInput" class="datalist" required>
					<datalist id="category">
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
					<input type="text" name="image" id="image">
				<input type="submit" name="submit" value="submit">
			</div>
			<div id="right">
				<input type="file" name="fileUpload" id="imgFile" required> <!-- onclick="getImgUrl()" -->
			</div>
		</form>
	</div>
</body>
</html>