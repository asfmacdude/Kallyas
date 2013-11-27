<?php
defined( '_GOOFY' ) or die();
?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>{{PAGE_TITLE}}</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="premium html template, unique premium template, multipurpose" />
	<meta name="description" content="Welcome to KALLYAS Template, a wonderful and premium product for multipurpose websites" />
	
	<!-- CSS
	================================================== -->
	[-CSS-]
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font_body" />
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	[-JS_FILES_TOP-]
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js">\x3C/script>')</script>
	
	<link rel="shortcut icon" href="images/favicons/favicon.png">
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
	
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="css/fixes.css" />
	<![endif]-->

	<!--[if lte IE 8]>
		<script src="js/respond.js"></script>
		<script type="text/javascript"> 
		var $buoop = {vs:{i:8,f:6,o:10.6,s:4,n:9}} 
		$buoop.ol = window.onload; 
		window.onload=function(){ 
		 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
		 var e = document.createElement("script"); 
		 e.setAttribute("type", "text/javascript"); 
		 e.setAttribute("src", "http://browser-update.org/update.js"); 
		 document.body.appendChild(e); 
		} 
		</script> 
	<![endif]-->
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	{[parts/part_opengraph.php]}
	
	<!-- THIS IS THE DARK THEME STYLESEET // REMOVE COMMENTS TO ENABLE -->
	<!-- <link rel="stylesheet" href="css/dark-theme.css" type="text/css" /> -->
	<!-- END DARK THEME -->
    
    <!-- START CUTE 3D SLIDER CODE -->
	<!--
<script src="themes/Kallyas/sliders/3d_cute_slider/js/cute/asff.cute.slider.js" type="text/javascript" charset="utf-8"></script>
	<script src="themes/Kallyas/sliders/3d_cute_slider/js/cute/cute.transitions.all.js" type="text/javascript" charset="utf-8"></script>
	
	<link rel="stylesheet" href="themes/Kallyas/sliders/3d_cute_slider/style/slider-style.css" type="text/css" media="screen" charset="utf-8"/>
    
	<script src="themes/Kallyas/sliders/3d_cute_slider/js/respond.min.js" type="text/javascript" charset="utf-8"></script>
-->
	
	<style>
		/* -------------------------------------
		 * Slider Style
		 * ------------------------------------*/
		
		.slide-wrapper{
			
			max-width:1170px;
			min-width:300px;
		}
	</style>
	<!-- END CUTE 3D SLIDER -->
    
</head>

<body class="">
	
	<div id="page-loading"></div>
    
    {[parts/part_supportpanel.php]}
    
	{[parts/part_login.php]}
   
   	<div id="page_wrapper">
	   	
	   	{[parts/part_header.php]}
        
        {[parts/part_slider_layer.php]}
        
		{[parts/part_actionbox.php]}
        
		{[parts/part_content.php:type=sidebar_right]}
        
		{[parts/part_footer.php]}
        
    </div><!-- end page_wrapper -->
	
    <a href="#" id="totop">TOP</a>

<!--////////////////// Load JS Files -->
<!-- JavaScript at the bottom for fast page loading -->

[-JS_FILES-]

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	var _gaq=[["_setAccount","UA-18780586-1"],["_trackPageview"]];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<script>
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
</script>

<error-div>
<message-div>

</body>
</html>