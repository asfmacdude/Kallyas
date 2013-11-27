;(function($){
	$(document).ready(function() {

		$('.iosSlider').iosSlider({
			snapToChildren: true,
			desktopClickDrag: true,
			keyboardControls: true,
			navNextSelector: $('.next'),
			navPrevSelector: $('.prev'),
			navSlideSelector: $('.selectors .item'),
			scrollbar: true,
			scrollbarContainer: '#slideshow .scrollbarContainer',
			scrollbarMargin: '0',
			scrollbarBorderRadius: '4px',
			onSlideComplete: slideComplete,
			onSliderLoaded: function(args){
				var otherSettings = {
					hideControls : true, // Bool, if true, the NAVIGATION ARROWS will be hidden and shown only on mouseover the slider
					hideCaptions : false  // Bool, if true, the CAPTIONS will be hidden and shown only on mouseover the slider
				}
				sliderLoaded(args, otherSettings);
			},
			onSlideChange: slideChange,
			infiniteSlider: true,
			autoSlide: true
		});
	
	}); // end doc ready
})(jQuery);