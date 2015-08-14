
var animation = false,
    animationstring = 'animation',
    keyframeprefix = '',
    domPrefixes = 'Webkit Moz O ms Khtml'.split(' '),
    pfx  = '',
    elm = document.createElement('div');

if( elm.style.animationName !== undefined ) {
	function myScript(){
	    var scrollY = window.pageYOffset || document.documentElement.scrollTop;
	    var footer = document.querySelectorAll(".footer_interior");
	    var footerPos = footer[0].getBoundingClientRect().top;
	    if(footerPos < scrollY) {
	      footer[0].className = "footer_interior in_view";
	    } else {
	      footer[0].className = "footer_interior";
	    }
	}
	window.addEventListener("scroll", myScript);
	var root = document.getElementsByTagName( 'html' )[0];
	root.className += ' hasCssAnimation';
}
