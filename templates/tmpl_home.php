<?php
/*
 * home
 *
 * This template has a content view on the left with a sidebar menu on the right with a static header.
 *
 */
?>


{[parts/part_supportpanel.php]}

<div id="page_wrapper">

	{[parts/part_header.php]}
	
	{[parts/part_slider_layer.php]}
	
	{[parts/part_actionbox.php]}

	<section id="content">
	
		<div class="container">
		
		<div class="row">
	
			<div class="span9">
				
				%CONTENT%
				
				<hr>
				
				[slogan code="slogan_asfmore" /]

				<hr>
				
				[search code="Kallyas-sortable" search_type="FeatureList" call="feature" /]

			</div><!-- end span9 -->

			<div class="span3">

				{[parts/part_sidebar.php:type=right]}
				
			</div><!-- end span3 -->

		</div><!-- end row -->

		{[parts/part_partners_carousel.php]}
				
		[tagline text="We Mentor. We Lead. We Impact." /]
		
		</div><!-- end container -->

	</section><!-- end #content -->

	{[parts/part_footer.php]}

	{[parts/part_bottom_code.php]}

</div><!-- end page_wrapper -->