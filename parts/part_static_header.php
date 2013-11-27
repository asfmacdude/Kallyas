<?php
defined( '_GOOFY' ) or die();

$background = (isset($options['background'])) ? $options['background'] : 'asff_logo' ;
?>


<div id="page_header" class="gradient bottom-shadow">
	<div class="bgback <?php echo $background; ?>"></div>
	
	<div class="container">
		<div class="row">
			<div class="span6">
				[breadcrumb /]
				<span id="current-date"></span>
			</div>
			<div class="span6">
				<div class="header-titles">
					<h2>{{HEADER_1}}</h2>
					<h4>{{SLOGAN}}</h4>
				</div>
			</div>
		</div><!-- end row -->
	</div>
	
	<div class="shadowUP"></div>
</div><!-- end page_header -->