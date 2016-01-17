<?php
	session_start();
	if(isset($_SESSION['aname'])) {
		header('location:admin_showProducts.php');
	} 
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../styles/signUp.css">
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<script type="text/javascript" src="../scripts/admin_signUp.js"></script>
</head>
<body>
	<div id="main">
		<div id="top">
			<img src="../images/BannersAndLogo/logo_sml.jpg">
		</div>
		<div id="mdl">
			<form id="form" action="admin_signUp.php" method="POST">
				<label id="label1">Name :</label><br>
				<input type="text" id="txtname"><br>
				<label>Address :</label><br>
				<input type="text" id="address"><br>
				<label>Contact Number :</label><br>
				<input type="number" id="contact"><br>
				<label>Username :</label><br>
				<input type="text" id="uname"><br>
				<label>Password :</label><br>
				<input type="password" id="password"><br>
				<label>Re-type Password :</label><br>
				<input type="password" id="retype"><br>
				<input type="button" value="Submit" id="btnSubmit">
			</form>
		</div>
		<div id="container">
			
		</div>
	</div>
</body>
</html>