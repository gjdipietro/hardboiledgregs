'use strict';

/*========================================
REGISTER ANIMATIONS
=========================================*/
(function() {
	var scrollY = window.pageYOffset || document.documentElement.scrollTop;
	var footer = document.querySelectorAll(".footer_interior");
	var rootElm = document.getElementsByTagName( 'html' )[0];
	var footerPos;

	if (document.createElement('div').style.animationName !== undefined && footer.length) {
		window.addEventListener("scroll", animateFooter);
		rootElm.className += ' hasCssAnimation';
	}

	function animateFooter() {
		scrollY = window.pageYOffset || document.documentElement.scrollTop;
		footerPos = footer[0].getBoundingClientRect().top;

		if(footerPos < scrollY) {
		  footer[0].className = "footer_interior in_view";
		} 
		else {
		  footer[0].className = "footer_interior";
		}
	}
})();