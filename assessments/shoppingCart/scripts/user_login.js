
$(function() {
	$("#login").click(function() {
		var uname = $("#txtuname").val();
		var pass = $("#password").val();
		var form = document.getElementById("loginForm");

		if(uname == false || pass == false) {
			alert("Please input username and password");
		}
		else {
			$.post("../php/user_validateLogin.php", {txtuname:uname, password:pass}, function(data) {
					if(data == "Valid") {
						form.submit();
					} else if(data == "Invalid"){ 
						$("#container").html("Username / Password doesn't match any account!" + "<br>" + "Please Sign-up..");

					} else if(data == "Unmatch") {
								$("#container").html("Password doesn't match to username!" + "<br>" + "Please reload and login again..");
							}
			});
		}
		
	});
});