<?php
defined( '_GOOFY' ) or die();

/*
 * page_about.php
 *
 * This setup is for the about category pages.
 *
 */
 
$call_parts = wed_getSystemValue('CALL_PARTS');
$page_code  = (!empty($call_parts[1])) ? $call_parts[1] : $page_code ;

if (is_null($page_code))
{
	$page_html = '[search search_type="Control" heading="Information Listing" /]';
}
else
{
	$page_html = '[presentation type="content" code="'.$page_code.'" /]';
}

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
	[-CSS-]
	
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

	{[parts/part_supportpanel.php]}

	{[parts/part_login.php]}
	
	<div id="page_wrapper">
	
		{[parts/part_headermenu.php]}
		
		{[parts/part_static_header.php]}
	
		<section id="content">
		
			<div class="container">
	
				<div class="row">
	
					<div class="col-md-12">
	
						[gallery setup="gallery_simple" size="1200_500" crop_size="380_160" heading="{{GROUP_TITLE}} Banner Gallery" /]
						[gallery setup="gallery_simple" size="general" crop_size="220_140" heading="{{GROUP_TITLE}} General Gallery" /]
						
					</div><!-- end span3 -->
	
				</div><!-- end row -->
	
				{[parts/part_partners_carousel.php]}
				
				[tagline text="{{SLOGAN}}" /]
	
			</div><!-- end container -->
	
		</section><!-- end #content -->
	
		{[parts/part_footer.php]}
	
		{[parts/part_bottom_code.php]}
	
	</div><!-- end page_wrapper -->

</body>
	
</html>