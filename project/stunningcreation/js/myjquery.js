$(function(){
	
	/* Service hovers */
	$("#social ul li").hover(
		function() {
			$("#social").addClass($(this).data("network")).addClass("active");
			$("#social p").html($(this).data("text"));
		},
		function() {
			$("#social").removeClass();
			$("#social p").html("Copyright @ Stunning Creation 2014");
		}
	);
		
});

