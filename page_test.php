<?php
defined( '_GOOFY' ) or die();

$page_code  = wed_getSystemValue('HOME_PAGE_CONTENT');
$call_parts = wed_getSystemValue('CALL_PARTS');
$page_code  = (!empty($call_parts[1])) ? $call_parts[1] : $page_code ;

/*
$body       = wed_getSystemValue('BODY_HTML');
$body_html  = '<body class="{{BODY_CLASS}}">'.LINE1;
$body_html .= $body.LINE1;
$body_html .= '</body>'.LINE1;

presentation type="content" code="news_video_intro"
<hr>
search code="Kallyas-sortable" search_type="FeatureList" call="feature"
<hr>
*/

?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>{{PAGE_TITLE}}</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="{{META_KEYWORDS}}" />
	<meta name="description" content="{{META_DESCRIPTION}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS
	================================================== -->
	
	
		<!-- CSS
	================================================== -->
	<link href="/library/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" />
<link href="/library/megamenu/css/fhmm.css" media="screen" rel="stylesheet" />
<link href="/library/megamenu/css/font-awesome.min.css" media="screen" rel="stylesheet" />

<!-- Work the template.css for the issues. -->
<link href="/themes/Kallyas/css/template_new.css" media="screen" rel="stylesheet" />

<link href="/themes/Kallyas/css/updates.css" media="screen" rel="stylesheet" />
<link href="/themes/Kallyas/css/responsive-devices.css" media="screen" rel="stylesheet" />
<link href="/themes/Kallyas/addons/prettyphoto/prettyPhoto.css" media="screen" rel="stylesheet" />
<link href="/themes/Kallyas/css/custom.css" media="screen" rel="stylesheet" />
<link href="/components/layerslider/css/layerslider.css" media="screen" rel="stylesheet" />
<style>#Counter {float:right;} #Counter li {list-style: none;float: left;line-height: 30px;padding: 0px 8px 0px 0px;font-size: 22px]];}#Counter li.timer_title {margin-right: 10px;}</style>
	
	
	
	
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font_body" />
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	[-JS_FILES_TOP-]
	<script>window.jQuery || document.write('<script src="{{THEME_URL}}js/jquery-1.8.2.min.js">\x3C/script>')</script>
	
	<link rel="shortcut icon" href="/files/images/favicon/asff_favicon.ico">
	
	{[parts/part_apple_favicons.php]}
	
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="{{THEME_URL}}css/fixes.css" />
	<![endif]-->

	<!--[if lte IE 8]>
		<script src="{{THEME_URL}}js/respond.js"></script>
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
    
</head>

<body class="{{BODY_CLASS}}">
	
	<div id="page_wrapper">
	
		{[parts/part_headermenu.php]}
		
		{[parts/part_slider_layer.php]}
		
		{[parts/part_actionbox.php]}
	
		<section id="content">
		
			<div class="container">
			
			<div class="row">
		
				<div class="col-md-9">
					
					[presentation type="content" code="<?php echo $page_code; ?>" /]
					
					<hr>
					
					[presentation type="content" code="news_video_intro" /]
					
					<hr>
					
					[slogan code="slogan_asfmore" /]
	
				</div><!-- end span9 -->
	
				<div class="col-md-3">
	
					{[parts/part_sidebar.php:type=right]}
					
				</div><!-- end span3 -->
	
			</div><!-- end row -->
	
			{[parts/part_partners_carousel.php]}
					
			[tagline text="We Mentor. We Lead. We Impact." /]
			
			</div><!-- end container -->
	
		</section><!-- end #content -->
	
		{[parts/part_footer.php]}
	
				<a href="#" id="totop">TOP</a>

<!--////////////////// Load JS Files -->
<!-- JavaScript at the bottom for fast page loading -->

<script type="text/javascript" src="/library/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="/library/megamenu/js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript" src="/library/jquery/jquery.fitvids.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/plugins.js"></script>
<script type="text/javascript" src="/themes/Kallyas/addons/superfish_responsive/superfish_menu.js"></script>
<script type="text/javascript" src="/themes/Kallyas/addons/prettyphoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/kalypso_wed_test.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/wed_custom.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/jquery.countdown.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/themes/Kallyas/js/countdown.custom.js"></script>
<script type="text/javascript" src="http://malsup.github.io/min/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="/components/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="/components/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript">counter.init("6/20/2014","2014 State Games - June 20-22");</script><script type="text/javascript" src="/library/jquery/jquery.obfuscate.min.js"></script>




<script type="text/javascript">jQuery(document).ready(function($) { $('.dropdown-toggle').dropdownHover().dropdown();$(document).on('click', '.fhmm .dropdown-menu', function(e) {e.stopPropagation() }) });</script>
<script type="text/javascript">jQuery(document).ready(function($) { $('.fhmm').fitVids(); });</script>
<script type="text/javascript">jQuery(document).ready(function($) {	$('#layerslider').layerSlider({
			skinsPath : '/components/layerslider/skins/',
			skin : 'borderlesslight',
			navButtons : true,
			thumbnailNavigation : 'hover',
			hoverPrevNext : true,
			responsive : true,
			responsiveUnder : 940,
			sublayerContainer : 900
			});
		});</script><script type="text/javascript">jQuery(document).ready(function($) {	$('#social').layerSlider({
			skinsPath : '/components/layerslider/skins/',
			skin : 'noskin',
			showCircleTimer : false
			});
		});</script><script type="text/javascript">$('#GeneralAds-240_240').cycle({
    fx: 'scrollUp'
});</script><script type="text/javascript">$('#Carousel-Partners').carouFredSel({
		responsive: true,
		scroll: 1,
		auto: true,
		items: {
			width: 250,
			height: 140,
			visible: {
				min: 3,
				max: 4
			}
		},
		prev	: {	
			button	: "#Carousel-Partners .prev",
			key		: "left"
		},
		next	: { 
			button	: "#Carousel-Partners .next",
			key		: "right"
		}
	});</script><script type="text/javascript">(function($){ 
    $(window).load(function(){
			
    // settings
    var sortBy = 'date', 			// SORTING: date / name
    sortAscending = true, 		// SORTING ORDER: true = Ascending / false = Descending
    theFilter = '';	// DEFAULT FILTERING CATEGORY 
				
			$('#sortBy li a').each(function(index, element) {
				var $t = $(this);
				if($t.attr('data-option-value') == sortBy)
					$t.addClass('selected');
			});
			$('#sort-direction li a').each(function(index, element) {
				var $t = $(this);
				if($t.attr('data-option-value') == sortAscending.toString())
					$t.addClass('selected');
			});
			$('#portfolio-nav li a').each(function(index, element) {
				var $t = $(this),
					tpar = $t.parent();
				if($t.attr('data-filter') == theFilter) {
					$('#portfolio-nav li a').parent().removeClass('current');
					tpar.addClass('current');
				}
			});
					
			// don't edit below unless you know what you're doing
			if ($("ul#thumbs").length > 0){
				var $container = $("ul#thumbs");
				$container.isotope({
				  itemSelector : ".item",
				  animationEngine : "jquery",
				  animationOptions: {
					  duration: 250,
					  easing: "easeOutExpo",
					  queue: false
				  },
				  filter: theFilter,
				  sortAscending : sortAscending,
				  getSortData : {
					  name : function ( $elem ) {
						  return $elem.find("span.name").text();
					  },
					  date : function ( $elem ) {
						  return $elem.attr("data-date");
					  }
				  },
				  sortBy: sortBy
				});
				
			}
		});
	})(jQuery);</script><script type="text/javascript">$(".cloaked").obfuscate({cssClass: "email"});</script>
		
		
		<error-div>
		<message-div>
		
		
	
	</div><!-- end page_wrapper -->

</body>
	
</html>