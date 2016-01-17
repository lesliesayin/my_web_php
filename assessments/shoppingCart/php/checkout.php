<?php
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:user_loginForm.php');
	} 
	

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#main {
			width: 50%;
			height: 200px;
			margin: auto;
			margin-top: 50px;
		}
		#p1 {
			font-size: 30px;
			text-align: center;
		}
		#p2 {
			font-size: 24px;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		echo "<div id='main'>
			<p id='p1'>THANK YOU FOR SHOPPING AT JUAN STORE!!!</p>
			<p id='p2'>We are happy to serve you!</p>

		</div>";
	?> 
	<script>
		
	</script>
</body>
</html>