<?php
defined( '_GOOFY' ) or die();

$call_parts = wed_getSystemValue('CALL_PARTS');

if (isset($call_parts[1]))
{
	$catg = $call_parts[1];
}
elseif (!empty($call_parts[0]))
{
	$catg = $call_parts[0];
}
else
{
	$catg = 'homepage';
}

$holiday = array(
	'start_date' => '12/1/2013',
	'end_date'   => '1/2/2014'
);

if (wed_getMomentInTime($holiday))
{
	// Randomize $catg	
}

$animator  = $walt->getImagineer('animation');

$slider = array(
	'SLIDER_ID'     => 'layerslider',
	'COMPONENT'     => 'layerslider',
	'STYLE'         => 'large_slider',
	'IMAGE_SIZE'    => '1200_500',
	'IMAGE_FOLDER'  => $catg,
	'SLIDER_HEIGHT' => '500px',
	'CELL_TEMPLATE' => 'tmpl_image_logo'
);

$animator->newAnimation($slider);

$slider_html = $animator->getHTML(array('SLIDER_ID' => 'layerslider'));

$color_class = getRandomColorClass();

?>

<div id="slideshow" class="gradient <?php echo $color_class; ?>">
	<div class="container">
		<?php echo $slider_html; ?>
	</div>
</div>