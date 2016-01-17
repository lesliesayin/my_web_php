$(function() {
	$("#imgFile").on('change',function(){
		document.getElementById("image").value = (this.files[0].name);
	});
});