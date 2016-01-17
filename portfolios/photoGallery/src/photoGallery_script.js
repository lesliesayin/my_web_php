function fade() {
	$("#list1").css({opacity:0.5});
	$("#list2").css({opacity:0.5});
	$("#list3").css({opacity:0.5});
	$("#list4").css({opacity:0.5});
	$("#list5").css({opacity:0.5});
	$("#list6").css({opacity:0.5});
	$("#list7").css({opacity:0.5});
	$("#list8").css({opacity:0.5});
	$("#list9").css({opacity:0.5});
	$("#list10").css({opacity:0.5});
}

$(function() {
	var currentImgCon;
	var source;
	
	fade();
	currentImgCon = $("#img1").parent();
	source = $("#img1").attr("src");
	$("#img-con").attr("src", source);
	currentImgCon.css({opacity:1});

	$("#img1").click(function() {
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		fade();
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});

	});
	$("#img2").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	$("#img3").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	$("#img4").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	$("#img5").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	$("#img6").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	$("#img7").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	$("#img8").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	$("#img9").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	$("#img10").click(function() {
		fade();
		currentImgCon = $(this).parent();
		source = $(this).attr("src");
		$("#img-con").attr("src", source);
		currentImgCon.css({opacity:1});
	});
	
});