var menu1;
var menu2;
var menu3;
var q1Val = 0; 
var q2Val = 0;
var q3Val = 0;
var isQ1HasValue = true;
var isQ2HasValue = true;
var isQ3HasValue = true;
var hasDiscount = false;
var menutxt = "";
var discountType = "";
var discountRate = "";

function initializer() {
	menu1 = document.getElementById("cb1");
	menu2 = document.getElementById("cb2");
	menu3 = document.getElementById("cb3");
}

function enable() {
	var q1 = document.getElementById("q1");
	var q2 = document.getElementById("q2");
	var q3 = document.getElementById("q3");

	if(menu1.checked == true) {
		q1.disabled = false;
		q1.style.border = "1px solid #b3b3b3";
	} else if(menu1.checked == false) {
		q1.disabled = true;
		q1.value = "";
		q1.style.border = "1px solid #b3b3b3";
	}
	if(menu2.checked == true) {
		q2.disabled = false;
		q2.style.border = "1px solid #b3b3b3";
	} else {
		q2.disabled = true;
		q2.value = "";
		q2.style.border = "1px solid #b3b3b3";
	}
	if(menu3.checked == true) {
		q3.disabled = false;
		q3.style.border = "1px solid #b3b3b3";
	} else {
		q3.disabled = true;
		q3.value = "";
		q3.style.border = "1px solid #b3b3b3";
	}
}

function getMenuCost() {
	var menu1Cost = 0;
	var menu2Cost = 0;
	var menu3Cost = 0;
	var patt = /\D/g;
	menutxt = "";
	q1Val = Number((q1.value));
	q2Val = Number((q2.value));
	q3Val = Number((q3.value));
	isQ1HasValue = true;
	isQ2HasValue = true;
	isQ3HasValue = true;
	
	if(menu1.checked == true) {
		isQ1HasValue = true;
		isQ1Int = true;
		if((Boolean(q1Val) != false) && (patt.test(q1Val) == false)) {
			menu1Cost = q1Val * 250; 
			isQ1HasValue = true;
			menutxt += q1Val + " Baby Back Ribs : " + menu1Cost + ".00"+ "<br>";
		} else {
			isQ1HasValue = false;
			q1.style.borderColor = "red";
		}
	}
	if(menu2.checked == true) {
		isQ2HasValue = true;
		isQ2Int = true;
		if((Boolean(q2Val) != false) && (patt.test(q2Val) == false)) {
			menu2Cost = q2Val * 300;
			isQ2HasValue = true;
			menutxt += q2Val + " Porter house : " + menu2Cost + ".00" + "<br>";
			
		} else {
			isQ2HasValue = false;
			q2.style.borderColor = "red";
		}
	}
	if(menu3.checked == true) {
		isQ3HasValue = true;
		isQ3Int = true;
		if((Boolean(q3Val) != false) && (patt.test(q3Val) == false)) {
			menu3Cost = q3Val * 200;
			isQ3HasValue = true;
			menutxt += q3Val + " Porter house : " + menu3Cost + ".00" + "<br>";
			
		} else {
			isQ3HasValue = false;
			q3.style.borderColor = "red";
		}
	} 
	var menuTotalCost = menu1Cost + menu2Cost + menu3Cost;
	return menuTotalCost;
}

function getQuantity() {
	var totalQuantity = 0;
	if(menu1.checked == true) {
		if(Boolean(q1Val) != false) {
			totalQuantity += q1Val;
		}
	}
	if(menu2.checked == true) {
		if(Boolean(q2Val) != false) {
			totalQuantity += q2Val;
		}
	}
	if(menu3.checked == true) {
		if(Boolean(q3Val) != false) {
			totalQuantity += q3Val;
		}
	}
	return totalQuantity;
}

function getRiceCost() {
	var totalQuantity = getQuantity();
	var rice = document.getElementById("rice");
	var ricePrice = 20;
	var riceCost = 0;
	if(rice.checked == true && totalQuantity != 0) {
		riceCost = ricePrice * totalQuantity;
		menutxt += totalQuantity + " Rice : " + riceCost + ".00" + "<br>";
		return riceCost;
	} else if(rice.checked == true && totalQuantity == 0){
		alertChooseMenu();
		return null;
	} else if(rice.checked == false){
		return riceCost;	
	}
}

function getDrinksCost() {
	var totalQuantity = getQuantity();
	var drinks = document.getElementById("drinks");
	var drinksPrice = 30;
	var drinksCost = 0;
	if(drinks.checked == true && totalQuantity != 0) {
		drinksCost = drinksPrice * totalQuantity;
		menutxt += totalQuantity + " Drinks : " + drinksCost + ".00" + "<br>";
		return drinksCost;
	} else if(drinks.checked == true && totalQuantity == 0) {
		//alertChooseMenu();
		alert("drinksCost");
		return null;
	} else if(drinks.checked == false) {
		return drinksCost;
	}
}

function getSeniorDiscount(totalBill) {
	var seniorDiscount = totalBill * 0.20;  
	return seniorDiscount;
}

function getLoyaltyDiscount(totalBill) {
	var loyaltyDiscount = totalBill * 0.10;  
	return loyaltyDiscount;
}

function getDiscount(totalBill) {
	var totalQuantity = getQuantity();
	var senior = document.getElementById("senior");
	var loyalty = document.getElementById("loyalty");
	var discount = 0;
	if(senior.checked == true) {
		if(totalQuantity != 0) {
			hasDiscount = true;
			discountType = "Senior";
			discountRate = "20%";
			discount = getSeniorDiscount(totalBill);
		} else {
			alertChooseMenu();
			discount = null;
		}
	}

	else if(loyalty.checked == true) {
		if(totalQuantity != 0) {
			hasDiscount = true;
			discountType = "Loyalty";
			discountRate = "10%";
			discount = getLoyaltyDiscount(totalBill);
		} else {
			alertChooseMenu();
			discount = null;
		}
	} 
	else{
		discount = 0; 
	} 
	return discount;
}

function alertChooseMenu() {
	alert("Please Choose Menu");
}

function getBillTotal() {
	var menuCost = getMenuCost();
	var riceCost = getRiceCost();
	var drinksCost = getDrinksCost();
	var totalBill = (menuCost + riceCost + drinksCost);
	var discount = getDiscount(totalBill);
	var netBill = 0;
	if(discount != 0) {
		netBill = totalBill - discount;
	} else {
		netBill = totalBill;
	}
	if((isQ1HasValue == false) || (isQ2HasValue == false) || (isQ3HasValue == false)) {
		alert("Please complete required fields");
	} else if(riceCost != null && drinksCost != null && discount != null) {
		document.write("<h1>" + "ABC Order System" + "</h1>");
		document.write("<h2 id=p1>" + "Your Order" + "</h2>");
		document.write(menutxt);
		document.write("<div style='width:20%'><hr></div>");
		document.write("Bill : " + totalBill + ".00" + "<br>");
		if(discount != 0) {
			document.write("Less " + discountType + " (" + discountRate + ") : " + discount + ".00");
		}
		document.write("<div style='width:20%'><hr></div>");
		document.write("<div id=blbtm style=\"font-weight:bold\">" + "Total Bill : " + netBill + ".00" +"</div>");
	} 
}

