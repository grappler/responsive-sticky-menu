jQuery(function( $ ){
	$(window).scroll(function() {
		var yPos = ( $(window).scrollTop() );
		if(yPos > 100) { // show sticky menu after screen has scrolled down 200px from the top
			document.getElementById('sticky-menu').style.left = '0';
		} else {
			document.getElementById('sticky-menu').style.left = '';
		}
	});
});