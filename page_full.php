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
	<meta name="keywords" content="{{META_KEYWORDS}}" />
	<meta name="description" content="{{META_DESCRIPTION}}" />

	<!-- CSS
	================================================== -->
	[-CSS-]
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font_body" />
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	[-JS_FILES_TOP-]
	<script>window.jQuery || document.write('<script src="themes/Kallyas/js/jquery-1.8.2.min.js">\x3C/script>')</script>
	
	<link rel="shortcut icon" href="images-asff/asff_favicon.ico">
	
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
    
</head>

<body class="">
    
    {[parts/part_supportpanel.php]}
    
	{[parts/part_login.php]}
    
	<div id="page_wrapper">

		{[parts/part_header.php]}
		
		<div id="page_header" class="gradient bottom-shadow">
			<div class="bgback bg2"></div>
			
			<div class="container">
				<div class="row">
					<div class="span6">
						<ul class="breadcrumbs fixclear">
							<li><a href="#">HOME</a></li>
							<li>PAGES</li>
							<li>FULL WIDTH</li>
						</ul>
						<span id="current-date"></span>
					</div>
					<div class="span6">
						<div class="header-titles">
							<h2>FULL WIDTH PAGE</h2>
							<h4>Just a regular page without sidebars.</h4>
						</div>
					</div>
				</div><!-- end row -->
			</div>
			
			<div class="shadowUP"></div>
        </div><!-- end page_header -->
        
		{[parts/part_content.php:type=mainbody]}
        
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

<error-div>
<message-div>
	
</body>
</html>