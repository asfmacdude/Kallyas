<?php
/*
 * info_full
 *
 * This template has a full content view with a static header.
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

				<div class="span12">

					%CONTENT%
					
				</div><!-- end span3 -->

			</div><!-- end row -->

			{[parts/part_partners_carousel.php]}
			
			[tagline text="{{SLOGAN}}" /]

		</div><!-- end container -->

	</section><!-- end #content -->

	{[parts/part_footer.php]}

	{[parts/part_bottom_code.php]}

</div><!-- end page_wrapper -->