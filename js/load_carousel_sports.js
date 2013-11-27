// Carousels (by CarouFredSel)

;(function($) {
	$(window).load(function(){
		// ** recent works
		$('#sports_lineup').carouFredSel({
			responsive: true,
			scroll: 1,
			auto: true,
			items: {
				width: 250,
				visible: {
					min: 3,
					max: 10
				}
			},
			prev	: {	
				button	: ".sport_prev",
				key		: "left"
			},
			next	: { 
				button	: ".sport_next",
				key		: "right"
			},
			mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
		});
	});
})(jQuery);