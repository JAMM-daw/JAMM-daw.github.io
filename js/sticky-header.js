$(document).ready(function() {

$(window).scroll(function(){


	if ( $(window).scrollTop() > 300 ) {
		$(".desktop.menu.sticky").fadeIn();	
	}

	else {
		$(".desktop.menu.sticky").fadeOut();
	}
});



});