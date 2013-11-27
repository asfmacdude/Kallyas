<?php
/*
 * Sport_Page
 *
 * This template has a content view on the left with a sidebar menu on the right.
 *
 */
?>
   
{[parts/part_supportpanel.php]}

{[parts/part_login.php]}

<div id="page_wrapper">

	{[parts/part_header.php]}
	
	{[parts/part_slider_layer.php]}
	
	{[parts/part_actionbox.php]}

	<section id="content">
	
		<div class="container">

			<div class="row">
	
				<div class="span9">
					
					[breadcrumb version="lite" /]
					
					<div style="clear:both;"></div>
					
					%CONTENT%

				</div><!-- end span9 -->

				<div class="span3">

					{[parts/part_sidebar.php:type=right]}
					
				</div><!-- end span3 -->

			</div><!-- end row -->

			{[parts/part_partners_carousel.php]}
			
			[tagline text="{{SLOGAN}}" /]

		</div><!-- end container -->

	</section><!-- end #content -->

	{[parts/part_footer.php]}

	{[parts/part_bottom_code.php]}

</div><!-- end page_wrapper -->
