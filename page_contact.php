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
	
	<link rel="shortcut icon" href="/files/images/favicon/asff_favicon.ico">
	
	{[parts/part_apple_favicons.php]}
	
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
    
</head>

<body class="">
    
    {[parts/part_supportpanel.php]}
    
	{[parts/part_login.php]}
    
	<div id="page_wrapper">

		{[parts/part_header.php]}
        
		<div id="slideshow">
	        
            <div class="static-content maps-style">
				<div id="google_map" style="width:100%; height:550px;"></div><!-- map container -->
				<ul id="map_controls">
					<li><a id="zoom_in"><span class="icon-plus icon-white"></span></a></li>
					<li><a id="zoom_out"><span class="icon-minus icon-white"></span></a></li>
					<li><a id="reset"><span class="icon-refresh icon-white"></span></a></li>
	            </ul>
			</div>
			<div id="bottom_mask" class="mask2"></div>         
        </div><!-- end slideshow -->
        
		<section id="content">
			<div class="container">
				
				<div id="mainbody">
					
					<div class="row">
						<div class="span12">
							<h1 class="page-title">Contact Us</h1>
							
							<div class="row">
								<div class="span6">
									<p>Use this form to send us a message:</p>
									<div id="contact_form" class="rapid_contact ">
										<form action="#" method="post" class="form-horizontal">
											<div id="success"></div>

											<div class="control-group">
												<label class="control-label" for="rp_name">Name</label>
												<div class="controls">
													<input class=" inputbox input-xlarge" type="text" id="rp_name" name="rp_name" placeholder="Name" value="" />
												</div>
											</div><!-- end control group -->
											<div class="control-group">
												<label class="control-label" for="rp_email">Email</label>
												<div class="controls">
													<input class=" inputbox input-xlarge" type="text" placeholder="Email" name="rp_email" id="rp_email" value="" />
												</div>
											</div><!-- end control group -->
											<div class="control-group">
												<label class="control-label" for="rp_subject">Subject</label>
												<div class="controls">
													<input class=" inputbox input-xlarge" type="text" name="rp_subject" placeholder="Subject" id="rp_subject" value="" />
												</div>
											</div><!-- end control group -->
											<div class="control-group">
												<label class="control-label" for="rp_message">Message</label>
												<div class="controls">
													<textarea class=" textarea span4" placeholder="Message" name="rp_message" id="rp_message"></textarea>
												</div>
											</div><!-- end control group -->
											<div class="control-group">
												<div class="controls">
													<input class=" btn " id="submit-form" type="submit" name="submit" value="Send Message" />
												</div>
											</div><!-- end control group -->
										</form>
									</div><!-- end contact form -->
								</div><!-- end left side -->

								<div class="span6">
									<h3>Get in touch with us</h3>

									<div class="qrCode" style="float:right; margin:0px 0px 15px 15px; width:160px; " >
										<h6>Scan me!</h6>
										<img src="http://chart.apis.google.com/chart?cht=qr&chs=350x350&chld=L&choe=UTF-8&chl=MECARD%3AN%3ADirector%3BORG%3AASF+Foundation%2C+Inc.%3BTEL%3A3342800065%3BURL%3Awww.asffoundation.org%3BEMAIL%3Ainfo%40asffoundation.org%3BADR%3APO+Box+20327+Montgomery%2C+AL+36120%3B%3B" alt="Scan this QR Code!" class="img-polaroid" />
									</div><!-- end QR Code -->

									<p><strong>Mailing Address:</strong>&nbsp;PO Box 20327, Montgomery, AL 36120</p>
									<p><strong>Physical Address:</strong>&nbsp;2530 East South Blvd., Montgomery, AL 36116</p>
                                    
									<p><strong>Phone:</strong> (800) 467-0422 or (334) 280-0065<br>
									<strong>Email:</strong> <span class="cloaked" title="com|alagames|sports::true"><br />
									<strong>Web:</strong> <a href="http://<strong></strong>www.alagames.com" target="_blank">www.alagames.com</a></p>

									<p>The Alabama State Games is a program of the ASF Foundation which was formed in 1982. The Alabama State Games provides athletes of all ages,  abilities and skill levels an opportunity to compete in the largest annual multi-sport amateur athletic event in Alabama. For more about the ASF Foundation, visit <a href="http://www.asffoundation.org">www.asffoundation.org</a>.</p>

								</div><!-- end right side -->

							</div><!-- end row -->

						</div>
					</div><!-- end row -->
					
				</div><!-- end mainbody -->
				
			</div><!-- end container -->
		</section><!-- end #content -->

        
{[parts/part_footer.php]}
        
    </div><!-- end page_wrapper -->
	
    <a href="#" id="totop">TOP</a>

<!--////////////////// Load JS Files -->
<!-- JavaScript at the bottom for fast page loading -->

<!-- Contact Form code -->
    <script src="themes/Kallyas/js/contact_form.js" type="text/javascript"></script>

<!-- Start Google Maps code -->
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="themes/Kallyas/js/mapmarker.jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
	(function($){
		$(document).ready(function() {
			var myMarkers = {
				"markers": [
					{
						"latitude": " 32.326351",		// latitude
						"longitude":" -86.256853",		// longitude
						"icon": "themes/Kallyas/images/map_pin_1.png"	// Pin icon
					}
					/* 

					Add as plenty as you want:
					, {
						"latitude": "40.712785",
						"longitude":"-73.962708",
						"icon": "images/map_pin_1.png"
					}
					
					*/
				]
			};
			$("#google_map").mapmarker({
				zoom : 14,							// Zoom
				center: "32.326351,-86.256853",		// Center of map
				type: "ROADMAP",					// Map Type
				controls: "HORIZONTAL_BAR",			// Controls style
				dragging:1,							// Allow dragging?
				mousewheel:0,						// Allow zooming with mousewheel
				markers: myMarkers,
				styling: 0,							// Bool - do you want to style the map?
				featureType:"all",
				visibility: "on",
				elementType:"geometry",
				hue:"#00AAFF",
				saturation:-100,
				lightness:0,
				gamma:1,
				navigation_control:0
				/*
				To play with the map colors and styles you can try this tool right here http://gmaps-samples-v3.googlecode.com/svn/trunk/styledmaps/wizard/index.html
				*/
			});
			
		});
	})(jQuery);
	</script>
<!-- END Google Maps code -->

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