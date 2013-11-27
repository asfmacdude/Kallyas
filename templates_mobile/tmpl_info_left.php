<?php
/*
 * info
 *
 * This template has a content view on the right with a sidebar menu on the left with a static header.
 *
 */
?>


{[parts/part_supportpanel.php]}

{[parts/part_login.php]}

<div id="page_wrapper">

	{[parts/part_header.php]}
	
	{[parts/part_static_header.php]}

	<section id="content">
	
		<div class="container">

			<div class="row">

				<div class="span3">

					{[parts/part_sidebar.php:type=left]}
					
				</div><!-- end span3 -->
				
				<div class="span9">

					%CONTENT%

				</div><!-- end span9 -->

			</div><!-- end row -->

			{[parts/part_partners_carousel.php]}
			
			[tagline text="{{SLOGAN}}" /]

		</div><!-- end container -->

	</section><!-- end #content -->

	{[parts/part_footer.php]}

	{[parts/part_bottom_code.php]}

</div><!-- end page_wrapper -->