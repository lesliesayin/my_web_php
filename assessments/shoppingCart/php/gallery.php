<?php 
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:user_loginForm.php');
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<style type="text/css">
		body {
			margin: 0px;
		}
		#overlays {
			width: 100%;
			height: 100%;
			margin-top:-20px;
			background-color: black;
			position: fixed;
			opacity: .3;
		}
		#frames{
			width: 80%;
			margin: auto;
		    height: 550px;
		    margin-top: 30px;
		  	margin-left: 140px;
		    position: fixed;
		    background-color: white;
		    overflow: scroll;
		    border-color: solid #E0A14F;
		}
		#views {
			width: 1000px;
		    height: 600px;
		    margin-top: 90px;
		    margin-left: 170px;
		    position: fixed;
		    background-color: red;
		    display: none;
		}
		h1 {
			width: 20%;
			margin: auto;
			//margin-left: 558px;
			color: black;
		}
		#exit {
			width: 30px;
			height: 30px;
			float: left;
			margin-top: 25px;
			font-size: 24px;
			font-weight: bolder;
		}
		table, th, td {
			border:2px solid #FFC04E;
			border-top: 3px solid #FFC04E;
		}
		table {
			width: 100%;
			height: auto;
			background-color: white;
			border-collapse: collapse;
			font-family: Calibri, Arial, Sans-serif;
		}
		tr {
			width: 100%;
			height: 150px;
			//background-color: red;
		}
		td {
			width: 24.3%;
			height: 100%;
			float: left;
			color: white;
			background-color: #151715;
			margin-bottom: 10px;
			border-top: 3px solid #FFC04E;
			border-bottom: 3px solid #FFC04E;
		}
		div {
			width: 100%;
			height: 250px;
		}
		div img {
			width: 100%;
			height: 100%;
		}
		#p1, #p2 {
			width: 100%;
			height: 30px;
			text-align: center;
		}
		#p1 {
			font-size: 20px;
		}
		#p2 {
			font-size: 24px;
			font-weight: bolder;
		}
		#btnview {
			width: 100px;
			height: 30px;
			border-radius: 5px;
			margin-left: 70px;
			margin-top: -50px;
			margin-bottom: 20px;
			font-size: 20px;
			font-weight: bold;
			color: white;
			background-color: #E0A14F;
		}
		#btnview:hover {
			background-color: #FFC04E;
		}
		#home {
			width: 150px;
			height: 40px;
			float: right;
			margin-right: 200px;
			margin-top: -5px;
			font-size: 20px;
			font-weight: bolder;
			background-color: #151715;
			border-radius: 5px;
			color: white;
		}

	</style>
</head>
<body>
	<?php
		$conn = mysql_connect("localhost","root","") or die(mysql_error());
		$dbcon = mysql_select_db("shoppingCart", $conn) or die(mysql_error());
		$sql = "SELECT productId, image, productName, price FROM productTable";
		$result = mysql_query($sql, $conn) or die(mysql_error());

		echo "<div id='overlays'>

		</div>";
		echo "<h1>Product Gallery</h1>";
		/*echo "<input id='home' type='submit' value='HOME' onclick='home()'>";*/
		echo "<div id='views'>
			<h1>Product Gallery</h1>
		</div>";
		echo "<div id='frames'>
		</div>";
		echo "<table id='table'>";
		
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
			echo "<form id='formview' action='view.php' method='POST'>
					<input type='hidden' name='productId' id='productId' value='$productId'>
					<input type='hidden' name='image' id='image' value='$image'>
					<input type='hidden' name='productName' id='productName' value='$productName'>
					<input type='hidden' name='price' id='price' value='$price'>
					<input id='btnview' type='submit' value='view'>
				</form>";
			echo "</td>";
			$counter = $counter + 1;
			if($counter != 0 && $counter % 4 == 0){
				echo "</tr>";
			}
		}
		echo "</table>";
	?>
	<script>
		/*function home() {
			window.location.href = "home.php";	
		}*/
		$(function () {
			var table = $("#table");
			$("#frames").html(table);
			$("#overlays").click(function() {
				window.location.href = "home.php";	
						/*$("#overlay").fadeOut();
						$("#frame").fadeOut();
						$("#main").fadeIn();
						location.reload();*/
			});
		});
	</script>
</body>
</html>