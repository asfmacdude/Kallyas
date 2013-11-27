<?php
defined( '_GOOFY' ) or die();

global $walt;
$js_director  = $walt->getImagineer('jsdirector');
$css_director = $walt->getImagineer('cssdirector');
$js_director->loadJSAssets(array('LSLIDEREASING','LSLIDERTRANSITMOD','LSLIDERTRANSITION','LSLIDERKMEDIA','LSLIDERREADY'));
$css_director->loadCSSAssets(array('LAYERSLIDER'));

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

$animator  = $walt->getImagineer('animation');

$slider = array(
	'SLIDER_ID'     => 'layerslider',
	'IMAGE_SIZE'    => '1200_500',
	'IMAGE_FOLDER'  => $catg,
	'SLIDER_HEIGHT' => '500',
	'CELL_TEMPLATE' => 'tmpl_image_logo'
);

$animator->newAnimation($slider);

$slider_html = $animator->getHTML(array('SLIDER_ID' => 'layerslider'));

$colors = array(
	'dark-blue',
	'normal-blue',
	'light-blue',
	'dark-red',
	'normal-red',
	'light-red',
	'dark-green',
	'normal-green',
	'light-green',
	'dark-gray',
	'normal-gray',
	'light-gray',
	'yellow',
	'purple'
);

$x = rand(0,13);
$new_color = $colors[$x];

?>

<div id="slideshow" class="gradient <?php echo $new_color; ?>">
	<div class="container">
		<?php echo $slider_html; ?>
	</div>
</div>