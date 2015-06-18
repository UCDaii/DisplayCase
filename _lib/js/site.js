$(document).ready(square);
$(window).resize(square);

function square(){
	var height = $(".square").width();
	$(".square").css("height", height);
}