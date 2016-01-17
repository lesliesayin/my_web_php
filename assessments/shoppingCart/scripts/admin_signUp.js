$(function() {
			$("#btnSubmit").click(function() {
				var name = $("#txtname").val();
				var address = $("#address").val();
				var contact = $("#contact").val();
				var uname = $("#uname").val();
				var pass = $("#password").val();
				var retype = $("#retype").val();
				var form = document.getElementById("form");

				if(name == false || address == false || contact == false || uname == false || pass == false || retype == false) {
					alert("Please complete all fields");
				}
				else if(pass.length < 6) {
					alert("Password must be atleast six characters length");
				}
				else {
					$.post("../php/admin_validateSignup.php", {
						txtname:name,
						address:address,
						contact:contact,
						uname:uname,
						password:pass,
						retype:retype
					},
						function(data) {
							if(data == "Valid") {
								alert("Signing up successful!");
								form.submit();
							} else if(data == "Invalid"){ 
								$("#container").html("Username already used " + "<br>" + "Please reload and Sign-up again..");
							} else {
								$("#container").html(data + " Please reload and try again..");
						}
					});
				}
			});
		});