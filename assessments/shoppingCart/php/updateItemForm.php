<?php
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:user_loginForm.php');
	} 
	$custId = $_SESSION['custId'];
	//$productId = $_POST['productId'];
	$orderId = $_POST['orderId'];
	$image = $_POST['image'];
	$productName = $_POST['productName'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];

	/*echo "productId $productId <br>";
	echo "$image <br>";
	echo "$productName <br>";
	echo "$price<br>";
	echo "view";*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Item</title>
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<style type="text/css">
		body {
			background-color: #C3C3C3;
		}
		#main {
			width: 60%;
			height: 400px;
			margin: auto;
			margin-top: 100px;
			background-color: #151715;
			font-family: Calibri, Arial, Sans-serif;
		}
		#left {
			width: 30%;
			height: 300px;
			margin-left: 50px;
			float: left;
			//background-color: green;
		}
		#left img {
			width: 100%;
			height: 340px;
			margin-top: 35px;

		}
		#right {
			width: 55%;
			height: 340px;
			margin-left: 30px;
			margin-top: 35px;
			background-color: #E8E0E0;
			float: left;
		}
		.linkbtn {
			width: 170px;
			height: 30px;
			float: right;
			margin-right: 45px;
			margin-top: 5px;
			font-size: 18px;
			//font-weight: bold;
			background-color: #151715;
			border-radius: 5px;
			color: white;
		}
		
		#btn:hover {
			background-color: gray;
			color: black;
		}
		#pname, #priceName {
			font-size: 32px;
			text-align: center;
		}
		#pname {
			margin-top: 30px;
		}
		#priceName {
			font-weight: bolder;
		}
		label {
			margin-left: 50px;
			font-size: 24px;
			margin-top: -50px;
		}
		#txtnum {
			width: 50px;
			height: 30px;
		}
		#updatebtn {
			width: 130px;
			height: 40px;
			margin-top: 3px;
			margin-left: 50px;
			font-size: 20px;
			background-color: #E0A14F;
			border-radius: 7px;
		}
		#updatebtn:hover {
			background-color: #FFC04E;
		}
		#container {
			width: 400px;
			height: 50px;
			margin-left: 60px;
			margin-top: 20px;
			//background-color: red;
			//color: green;
			font-weight: bold;
			font-size: 20px;
		}

	</style>
</head>
<body>
	<?php
		echo "<div id='overlay'></div>";
		echo "<div id='main'>
			<div id='left'>
				<img src='../Images/myImg/$image'>
			</div>
			<div id='right'>
				
				<p id='pname'>$productName</p>
				<p id='priceName'>Php $price.00</p>

				<form id='form' action='updateItem.php' method='POST'>
				<label>Quantity : </label>
				<input id='txtnum' type='number' name='qty' value='$quantity'>
				<input type='hidden' name='orderId' value='$orderId'>
				<input id='updatebtn' type='button' value='Update' onclick='update()'>
				</form>
				<div id='container'></div>
				<input type='button' value='View Cart' class='linkbtn' id='btn1' onclick='cart()'>
				<input type='button' value='View Gallery' class='linkbtn' id='btn2' onclick='returnGal()'>
			</div>
		<div>"
	?> 
	<script>
		function returnGal() {
			$("#main").fadeOut();
			window.location.href = "gallery.php";
		}
		function cart() {
			$("#main").fadeOut();
			window.location.href = "cart.php";
		}
		function update() {
				var qty = $("#txtnum");
				var qtyVal = qty.val();
				if(qtyVal == false) {
					alert("Please input quantity");
				}
				else {

					var orderId = "<?php echo $orderId?>";
					var custId = "<?php echo $custId?>";
					var quantity = $("#txtnum").val();

					$.post("updateItem.php", {
						orderId:orderId,
						custId:custId,
						quantity:quantity
					},
						function(data) {
							$("#container").css('color', 'green');
							$("#container").html(data);
							/*if(data == "Invalid") {
								$("#container").css('color', 'red');
								$("#container").html("Item is already included in your cart. Please see your cart to replace item/edit!");
							}
							else if(data == "Valid") {
								$("#container").css('color', 'green');
								$("#container").html("Thank you for adding item to your cart!");
							}*/
						}
					);
				}
		}
	</script>
</body>
</html>