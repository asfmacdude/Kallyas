jQuery(document).ready(function($) {	
	$('#layerslider').layerSlider({
		skinsPath : '/themes/Kallyas/layerslider/skins/',
		skin : 'borderlesslight',
		navButtons : true,
		thumbnailNavigation : 'hover',
		hoverPrevNext : true,
		responsive : false,
		responsiveUnder : 940,
		sublayerContainer : 900
	});
});