<?php
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:user_loginForm.php');
	} 
	$custId = $_SESSION['custId'];
	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	$dbcon = mysql_select_db("shoppingCart", $conn) or die(mysql_error());

	$sql = "SELECT sum(quantity) FROM orderTable WHERE custInfoId='$custId'";
	$result = mysql_query($sql, $conn) or die(mysql_error());
	$row = mysql_fetch_array($result);  
	$sumQty = $row[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<style type="text/css">
		body {
			background-color: #C3C3C3;
			font-family: Calibri, Arial, Sans-serif;
		}
		#main {
			width: 80%;
			height: auto;
			margin: auto;
			//margin-top: 100px;
			//background-color: #151715;
			background-color: white;
			font-family: Calibri, Arial, Sans-serif;
			position: relative;
		}
		#title {
			font-size: 40px;
			font-weight: bolder;
			margin-left: 20px;
			margin-top: -20px;
			padding-top: 30px;
		}
		#container {
			width: 90%;
			height: 500px;
			margin: auto;	
			background-color: green;
			display: none;
		}
		table, th, td {

			//border:2px solid #FFC04E;
			//border-top: 3px solid #FFC04E;
		}
		table {
			width: 90%;
			height: auto;
			margin: auto;
			background-color: white;
			//border-collapse: collapse;
			font-family: Calibri, Arial, Sans-serif;
		}
		tr {
			width: 100%;
			//border-bottom:2px solid #FFC04E;
			//background-color: red;
		}
		.data {
			height: 150px;
			float: left;
			color: white;
			//background-color: #151715;
			margin-bottom: 50px;
			//border-top: 3px solid #FFC04E;
			
		}
		#tdimg {
			width: 20%;
			
		}
		#tdimg div, #th1 {
			width: 100%;
			height: 100.5%;
			margin-bottom: 150px;
			//border-bottom: 3px solid #FFC04E;
			border-bottom: 3px solid #151715;
			
		}
		#tdimg div img {
			width: 100%;
			height: 100%;
			//padding-bottom: 20px;
		}
		#pname, #th2 {
			width: 20%;
			//border-bottom: 3px solid #FFC04E;
			border-bottom: 3px solid #151715;

			color:  #151715;
			//padding-top: 30px;
			//margin-top: 50px;
			//padding-bottom: -10px;
			font-size: 24px;
		}
		#price, #th3 {
			width: 15%;
			font-size: 24px;
			color:  #151715;
			//padding-top: 80px;
			//margin-top: 50px;
		}
		#qty {
			width: 10%;
			//margin-top: 50px;
			//border-bottom: 3px solid #FFC04E;
			//border-bottom: 3px solid #151715;
			color: black;
			float:left;
			font-size: 24px;
		}

		#qty p {
			width: 30px;
			height: 30px;
			//float: left;
			margin-left: 50px;
			margin-top: -30px;	
			border: 1px solid gray;
		}
		
		input[type="number"] {
			width: 50px;
			height: 30px;
		}
		#cost, #th5 {
			width: 15%;
			color:  #151715;
			font-size: 24px;
			//margin-top: 50px;
			//border-bottom: 3px solid #FFC04E;
			border-bottom: 3px solid #151715;

		}
		#tdupdate {
			width: 7%;
			height: 
		}
		.btn {
			width: 100%;
			height: 30px;
			border-radius: 5px;
			font-size: 18px;
			color: white;
			//background-color: #CC8B16;
			background-color: #151715;

			//margin-top: 50px;
		}
		.btn:hover {
			background-color: gray;
			//color: black;
		}
		#subtotal {
			margin-left: 560px;
			font-size: 26px;
			font-weight: bolder;
			//text-decoration: underline;

		}
		.plink a{
			width: 30%;
			font-size: 22px;
			font-weight: bold;
			color: #544E4E;
			margin-left: 70px;
			//margin-top: 50px;
			text-decoration: underline;
			//float: left;
		}
		.plink a:hover {
			color: black;
		}
		#add {
			margin-top: 20px;
			margin-bottom: 10px;
		}
		#empty {
			padding-bottom: 50px;
		}
		#checkout {
			width: 15%;
			height: 35px;
			border-radius: 5px;
			font-size: 18px;
			color: black;
			font-weight: bold;
			background-color: #CC8B16;
			//background-color: #151715;

			//margin-top: 50px;
			float: left;
			margin-left: 670px;
			margin-top: -100px;
		}
		#checkout:hover {
			background-color: #FFC04E;
		}
		#formdiv {
			display: none;
		}


	</style>
</head>
<body>
	<?php
		echo "<div id='overlay'></div>";
		echo "<div id='main'>
			<p id='title'>Your Shopping Cart - $sumQty Items</p>
			<div id='container'> 
				
			</div>
		<div>";
		$sql = "SELECT orderId, image, productName, price, quantity FROM productTable, orderTable WHERE producttable.productId = orderTable.productId AND orderTable.custInfoId = '$custId'";
		$result = mysql_query($sql, $conn) or die(mysql_error());
		echo "<table id='table'>";
		$sum = 0;
		while ($row = mysql_fetch_array($result)) {
			$orderId = $row['orderId'];
			$image = $row['image'];
			$productName = $row['productName'];
			$price = (int)$row['price'];
			$quantity = (int) $row['quantity'];
			$cost = $price * $quantity;
			$sum = $sum + $cost;
			echo "<tr>";
			echo "<td id='tdimg' class='data'>
					<div>
						<img src='../Images/myImg/$image'>
					</div>
					</td>";
			echo "<td id='pname' class='data'>$productName</td>";
			echo "<td id='price' class='data'>Php $price.00 </td>";
			echo "<td id='qty' class='data'>x
					<p> $quantity</p>
				</td>";
			echo "<td id='cost' class='data'>Php $cost.00</td>";
			echo "<td id='tdupdate' class='data'>
				<form id='formview' action='updateItemForm.php' method='POST'>
					<input type='hidden' name='orderId' id='orderId' value='$orderId'>
					<input type='hidden' name='image' id='image' value='$image'>
					<input type='hidden' name='productName' id='productName' value='$productName'>
					<input type='hidden' name='price' id='price' value='$price'>
					<input type='hidden' name='quantity' id='quantity' value='$quantity'>
					<input class='btn' type='submit' value='update'>
				</form>";
			echo "<td id='tdupdate' class='data'>
				<form id='formview' action='deleteItem.php' method='POST'>
					<input type='hidden' name='orderId' id='orderId' value='$orderId'>
					<input class='btn' type='submit' value='delete'>
				</form>";
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
	/*	$sql = "SELECT  WHERE producttable.productId = orderTable.productId AND orderTable.custInfoId = '$custId'";
		$result = mysql_query($sql, $conn) or die(mysql_error());*/
		echo "<div id='subtotal'>
			Subtotal : Php $sum.00
		</div>";
		echo "<div class='plink' id='add'>
			<a href='gallery.php'>Add Item</a>
		</div>";
		echo "<div class='plink' id='empty'>
			<a href='emptyCart.php'>Empty Cart</a>
		</div>";
		echo "<input id='checkout' type='button' value='Checkout' onclick='checkouts()'>";
		echo "<div id='formdiv'><form id='form' action='emptyCart.php' method='POST'>
					<input class='btn' type='submit' value='delete'>
				</form></div>";

		
	?> 
	<script>
		function checkouts() {
			window.location.href = 'checkout.php';
		}
	</script>
</body>
</html>