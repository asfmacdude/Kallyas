<?php
/*
 * Error_404_Page
 *
 * This template is the 404 page.
 *
 */
wed_addSystemValue('BODY_CLASS','error404-page');

?>
   
{[parts/part_supportpanel.php]}

{[parts/part_login.php]}

<div id="page_wrapper">

	{[parts/part_header.php]}
	
	<div id="page_header" class="gradient bottom-shadow">
		<div class="bgback bg3"></div>	
		<div class="shadowUP"></div>
    </div><!-- end page_header -->

	<section id="content">
	
		<div class="container">

			<div id="mainbody">
					
				<div class="row">
					<div class="span12">
							
						<div class="error404">
							<h2><span>404</span></h2>
							<h3>The page cannot be found.</h3>
						</div>
							
					</div>
				</div><!-- end row -->
					
			</div><!-- end mainbody -->

		</div><!-- end container -->

	</section><!-- end #content -->

	{[parts/part_footer.php]}

	{[parts/part_bottom_code.php]}

</div><!-- end page_wrapper -->
