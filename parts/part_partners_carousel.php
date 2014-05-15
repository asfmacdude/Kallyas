<?php
defined( '_GOOFY' ) or die();

$banr_specs['TYPE']           = 'banner';
$banr_specs['SETUP_TITLE']    = 'Carousel-Partners';
$banr_specs['UL_ID']          = 'Carousel-Partners';
?>

<div class="row carousel">
	<div class="col-md-12">
		<h3>ASF Foundation Patrons</h3>
	</div>
	<?php echo wed_getPresentation($banr_specs); ?>
</div>
