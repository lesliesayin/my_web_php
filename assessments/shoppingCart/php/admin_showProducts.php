<?php
	session_start();
	if(!isset($_SESSION['aname'])) {
		header('location:admin.php');
	} else {
		$conn = mysql_connect("localhost","root","") or die(mysql_error());
		$dbcon = mysql_select_db("shoppingcart", $conn) or die(mysql_error());
		$sql = "SELECT * FROM productTable";
		$result = mysql_query($sql, $conn) or die(mysql_error());

		echo "<h1>Welcome $_SESSION[aname]</h1>";
		echo "<h1>Products</h1>";
		echo "<table border=1,>";
		echo "<tr>";
		echo "<td>Product Name</td>";
		echo "<td>Category</td>";
		echo "<td>Gender</td>";
		echo "<td>Price</td>";
		echo "<td>Image</td>";
		echo "<td>Update</td>";
		echo "<td>Delete</td>";
		echo "</tr>";

		while ($row = mysql_fetch_array($result)) {
			$productId = $row['productId'];
			$productName = $row['productName'];
			$catId = (int)$row['catId'];
			$gender = $row['gender'];
			$price = $row['price'];
			$image = $row['image'];

			$sql = "SELECT catName FROM categoryTable, productTable WHERE categoryTable.catId = productTable.catId and productTable.catId=$catId";
			$response = mysql_query($sql, $conn) or die(mysql_error());
			$row = mysql_fetch_array($response);  
			$catName = $row[0];

			echo "<tr>";
			echo "<td>$productName</td>";
			echo "<td>$catName</td>";
			echo "<td>$gender</td>";
			echo "<td>$price</td>";
			echo "<td>$image</td>";
			echo "<td><form name='form1'action='admin_updateDataForm.php' method='POST'>
					<input type='hidden' name='productId' value='$productId'>
					<input type='submit' value='update'>
				</form></td>";
			echo "<td><form name='form2' action='admin_deleteData.php' method='POST' >
					<input type='hidden' name='productId' value='$productId'>
					<input type='hidden' name='catId' value='$catId'>
					<input type='submit' value='delete'>
					</form></td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<form name='form3'action='admin_addDataForm.php' method='POST'>
			<input type='submit' value='Add Data'>
			</form>";
		echo "<form name='form4'action='logout.php' method='POST'>
			<input type='submit' value='Logout'>
			</form>";
	}
?>