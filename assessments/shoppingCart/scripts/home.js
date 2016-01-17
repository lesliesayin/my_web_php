function showGallery() {
		{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/gallery.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						//window.location.href = "../php/user_loginForm.php";
						alert("Please Login!");
						/*$("#navgal").attr("href", "../php/user_loginForm.php");
						$("#navgal").click(function(){return true;}).click();*/
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}
function showMenLongSleeve() {
	{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/showMenLongSleeve.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						alert("Please Login!");
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}
function showMenPants() {
	{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/showMenPants.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						alert("Please Login!");
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}

function showMenTShirts() {
	{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/showMenTShirts.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						alert("Please Login!");
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}
function showMenWatches() {
	{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/showMenWatches.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						alert("Please Login!");
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}
function showWomenDresses() {
	{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/showWomenDresses.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						alert("Please Login!");
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}
function showWomenOffice() {
	{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/showWomenOffice.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						alert("Please Login!");
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}
function showWomenTShirts() {
	{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/showWomenTShirts.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						alert("Please Login!");
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}
function showWomenWatches() {
	{
			$.post("../php/isloggedin.php", {}, function(data) {
					if(data == "Valid") {
						//$("#main").fadeOut();
						$("#overlay").fadeIn();
						$("#frame").fadeIn();
						$.post("../php/showWomenWatches.php", {}, function(data) {
							$("#frame").html(data);
						});
					} else if(data == "Invalid"){ 
						alert("Please Login!");
					}
			});
		}
	$("#overlay").click(function() {
				$("#overlay").fadeOut();
				$("#frame").fadeOut();
				$("#main").fadeIn();
				location.reload();
	});
}
