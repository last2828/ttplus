$(document).ready(function(){

	$(".js-contents-tab").on("click", function(){
		var contentsIdx =  $(this).data("contents");
		$(".js-contents-tab").removeClass("active");
		$(this).addClass("active");
		$(".js-contents-container").removeClass("active");
		$(".js-contents-container[data-contents="+contentsIdx+"]").addClass("active");
	});





});