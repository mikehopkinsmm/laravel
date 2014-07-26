$(document).ready(function(){
	var topPartHeight = $(".intro-container").height();
	var introOffset = $('.intro-container').offset().top + topPartHeight;
	$('body').bind('touchmove', setClasses);
	$(window).scroll(setClasses);
	$(window).resize(setClasses);		
    $("#grid-960").slideToggle(0);
	$("#grid-nav").click(function(event) {
		event.preventDefault();
	    $("#grid-960").stop().slideToggle(250);
	});
	$("#grid-960").removeClass("initial-hide");
	setClasses();
	$(".mobile-nav-toggle").click(toggleMobileNav);
	function setClasses(){
		introOffset = $('.intro-container').offset().top + topPartHeight;
		if ($(window).scrollTop()>=introOffset){
			$("#nav-container, .main-content, .intro-vid-container").addClass("header-fixed");
		}else if ($(window).width() < 600){
			
		}else{
			$(".header-fixed").removeClass("header-fixed");
		}
	}
	function toggleMobileNav(event){
		event.preventDefault();
		if($(".navigation").hasClass("toggled")){
			$(".navigation").removeClass("toggled");
		}else{
			$(".navigation").addClass("toggled");
		}
		
	}
});