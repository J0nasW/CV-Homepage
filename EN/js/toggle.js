$(document).ready(function(){
	$(".toggle_container .hidden").hide();
	$(".plus .show").show();
	
	$("#toggle_nav").click(function(){
		$(this).parent().next("#navigation_mobile_content").slideToggle("fast");
	});
	
	$(".toggle_button").click(function(){
		$(this).find(".plus").toggle();
    	$(this).next(".subtile_big").find(".toggle_container").slideToggle("slow");		
	});
});