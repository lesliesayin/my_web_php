
<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<script type="text/javascript" src="../scripts/home.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/sideCategory.css">
</head>
<body>
	<?php
		/*echo "<div id='overlay'></div>";
		echo "<div id='frame'></div>";*/
		echo "<div id='upper'>
				<h1>Women's Watches</h1>
			<div>";
		echo "<table>";
		$conn = mysql_connect("localhost","root","") or die(mysql_error());
		$dbcon = mysql_select_db("shoppingCart", $conn) or die(mysql_error());
		$sql = "SELECT productId, image, productName, price FROM productTable, categoryTable where productTable.catId = categoryTable.catId AND categoryTable.catName = 'Watch' AND productTable.gender = 'Ladies'";
		$result = mysql_query($sql, $conn) or die(mysql_error());
		
		$counter = 0;
		while ($row = mysql_fetch_array($result)) {
			$productId = $row['productId'];
			$image = $row['image'];
			$productName = $row['productName'];
			$price = $row['price'];
			
			if($counter % 4 == 0) {
				echo "<tr>";
			} 
			echo "<td>";
			echo "<div>
					<img src='../Images/myImg/$image'>
					</div>";
			echo "<p id='p1'>$productName</p>";
			echo "<p id='p2'>Php $price.00</p>";
			/*echo "<form id='formview' action='view.php' method='POST'>
					<input type='hidden' name='productId' value='$productId'>
					<input type='hidden' name='image' value='$image'>
					<input type='hidden' name='productName' value='$productName'>
					<input type='hidden' name='price' value='$price'>
					<input id='btnview' type='button' value='view' onclick='showView'>
				</form>";*/
			echo "</td>";
			$counter = $counter + 1;
			if($counter != 0 && $counter % 4 == 0){
				echo "</tr>";
			}
		}
	?>
</body>
</html>