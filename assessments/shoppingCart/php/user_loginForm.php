<?php
	session_start();
	if(isset($_SESSION['name'])) {
		header('location:home.php');
	} 
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../styles/admin.css">
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<script type="text/javascript" src="../scripts/user_login.js"></script>
</head>
<body>
	<div id="main">
		<div id="top">
			<img src="../images/BannersAndLogo/logo_sml.jpg">
		</div>
		<div id="mdl">
			<form id="loginForm" action="user_login.php" method="POST">
				<label id="label1">Username :</label><br>
				<input type="text" id="txtuname"><br>
				<label>Password :</label><br>
				<input type="password" id="password"><br>
				<input type="button" value="Login" id="login">
			</form>
		</div>
		<div id="btm">
			<p>Not yet a user?</p>
			<a href="user_signUpForm.php"><p id="link">Sign Up<p></a>
		</div>
		<div id="container">
			
		</div>
	</div>
</body>
</html>