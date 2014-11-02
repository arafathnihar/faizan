$(function() {
	if ($.browser.msie && $.browser.version == 6) {
		DD_belatedPNG.fix('#header, h1#logo a, #navigation li, #slider .slide-entry .slide-btn, #slider .flex-direction-nav li a, #slider .slider-nav, #slider .flex-control-nav a, #main, .outer, .inner, .post .btn-more, .four-cols .more, #sidebar, .list-widget li a, #three-cols, #copy, .slides img');
	}
	$(window).load(function() {
		$('.flexslider').flexslider({
			slideshowSpeed: 4000,
			controlsContainer: '#slider',
			start: function(){
				$('#slider .flex-control-nav').wrap('<div class="slider-nav"></div>');
			}
		});
	});
});