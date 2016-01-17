<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="../styles/home.css">
	<script type="text/javascript" src="../scripts/jquery_file.js"></script>
	<script type="text/javascript" src="../scripts/home.js"></script>
</head>
<body>
	<div id="overlay">
		
	</div>
	<div id="frame">
	
	</div>
	<!-- <div id="view">
		
	</div> -->
	<div id="main">
		<div id="header">
			<div id="hleft">
				<img src="../images/Banner/shopping.jpg">
			</div>
			<div id="hlogo">
				<img src="../images/BannersAndLogo/logo.jpg">
			</div>
		</div>
		<div id="nav">
			<div id="nleft">
				<ul>
					<a href="user_signUpForm.php"><li id="list1">Register</li></a>
					<a href="user_loginForm.php" id="list2"><li>Log in</li></a>
					<a href="user_logout.php" id="list3"><li>Logout</li></a>
				</ul>
			</div>
			<div id="nright">
				<ul>
					<a href="#" id="home"><li>Home</li></a>
					<a href="#"><li>About Us</li></a>
					<a href="contact.php"><li>Contact</li></a>
					<a id="navgal" href="gallery.php"><li>Gallery</li></a>
					<a href="cart.php"><li>Cart</li></a>
				</ul>
				
			</div>
		</div>
		<div id="left">
			<div id="ltop">
				<div id="div1">
					<p>Searh</p>
		
					<input type=text>
					<input type="submit" value="Go">
				</div>
				<div id="div2">
					<p>Men</p>
					<ul class="category">
						<a href="#"><li onclick="showMenLongSleeve()">Long Sleeves</li></a>
						<a href="#"><li onclick="showMenPants()">Pants</li></a>
						<a href="#"><li onclick="showMenTShirts()">T-Shirts</li></a>
						<a href="#"><li onclick="showMenWatches()">Watches</li></a>
					</ul>
				</div>
				<div id="div3">
					<p>Women</p>
					<ul class="category">
						<a href="#"><li onclick="showWomenDresses()">Dresses</li></a>
						<a href="#"><li onclick="showWomenOffice()">Office Wear</li></a>
						<a href="#"><li onclick="showWomenTShirts()">T-Shirts</li></a>
						<a href="#"><li onclick="showWomenWatches()">Watches</li></a>
					</ul>
				</div>
			</div>
			<div id="lbtm">
				<img src="../images/BannersAndLogo/imgbtm.jpg">
			</div>
		</div>
		<div id="right">
			<div id="banner">
				<img src="../images/BannersAndLogo/banner1.jpg">
			</div>
			<div id="mdl">
				<p id="mtitle">Latest Fashion News</p> 
				<div id="mdl-img">
					<img src="../images/BannersAndLogo/main article.jpg">
				</div>
				<div id="mdl-txt">
					<p id="p3">
						Corrugated Modernist Christian Dior Couture
					</p>
					<p id="p4">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. 
					</p>
					
				</div>	
			</div>
			<div id="btm">
				<div id="article1" class="articles">
					<div id="img1" class="images">
						<img src="../images/BannersAndLogo/article1.jpg">
					</div>
					<div class="par"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p></div>
				</div>
				<div id="article2" class="articles">
					<div id="img2" class="images">
						<img src="../images/BannersAndLogo/article3-1.jpg">
					</div>
					<div class="par"><p class="par">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p></div>
				</div>
				<div id="article3" class="articles">
					<div id="img3" class="images">
						<img src="../images/BannersAndLogo/article2.jpg">
					</div>
					<div class="par"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>