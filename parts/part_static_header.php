<?php
defined( '_GOOFY' ) or die();

$background = (isset($options['background'])) ? $options['background'] : 'asff_logo' ;
$shadow     = (isset($options['shadow'])) ? $options['shadow'] : 'yes' ;
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
	
	<?php if ($shadow=='yes') { ?>
	<div class="shadowUP"></div>
	<?php } ?>
</div><!-- end page_header -->