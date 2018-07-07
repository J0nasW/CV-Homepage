$(document).ready(function(){
	$(".profile_picture").click(function(){
		$("#blackout").show();
		$("#augment").show();
	});
	
	$("#augment .close_btn").click(function(){
		$("#blackout").hide();
		$("#augment").hide();
    });
	
	$("#blackout").click(function(){
		$("#blackout").hide();
		$("#augment").hide();
    });
});