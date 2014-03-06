<?php
defined( '_GOOFY' ) or die();

$sidebar_type = (isset($options['sidebar'])) ? $options['sidebar'] : 'sidebar-left' ;

// Menu Html
// We use Presentations to build our menu which is built
// from the menus/menu_main.php file. Presentations returns an id
// which is the id of the object saved in presentation. We can then use the id 
// when we are ready to get the HTML
$menu_specs['TYPE'] = 'menu';
$menu_specs['NAME'] = 'Sidebar Menu';

$prog_specs['TYPE'] = 'menu';
$prog_specs['NAME'] = 'Sidebar Program Menu';

/*
$banr_specs['TYPE']           = 'banner';
$banr_specs['SETUP_TITLE']    = 'Social-240_71';
$banr_specs['UL_ID']          = 'Social-240_71';
*/

$ad_specs['TYPE']           = 'banner';
$ad_specs['SETUP_TITLE']    = 'GeneralAds-240_240';
$ad_specs['UL_ID']          = 'GeneralAds-240_240';

$animator  = $walt->getImagineer('animation');

$social = array(
	'SLIDER_ID'      => 'social',
	'COMPONENT'      => 'layerslider',
	'STYLE'          => 'small_slider',
	'ANIMATION_TYPE' => 'CREATIVE',
	'CELLS'          => array('facebook_small','youtube_small','twitter_small'),
	'IMAGE_SIZE'     => '240_71',
	'SLIDER_HEIGHT'  => '71px',
	'SLIDER_WIDTH'   => '240px'
);

$animator->newAnimationByCode($social);

$social_html = $animator->getHTML(array('SLIDER_ID' => 'social'));

?>


<div id="sidebar" class="<?php echo $sidebar_type; ?>">							
	
	<div class="widget">
		<?php echo $social_html; ?>
	</div>
	
	<div class="widget">
		<a href="http://asffoundation.net/about/asffoundation" class="hover-box centered fixclear">
			<h3>ASF Foundation</h3>
			<h4>What is the ASF Foundation?</h4>
			<p>Watch the new video, "We Mentor. We Lead. We Impact."</p>
		</a>
	</div>
	
	<div class="widget">
		<h4 class="title">Other Programs...</h4>
		<?php echo wed_getPresentation($prog_specs); ?>
	</div><!-- end widget -->
	
	<div class="widget">
		<h4 class="title">More Information...</h4>
		<?php echo wed_getPresentation($menu_specs); ?>
	</div><!-- end widget -->
	
	<div class="widget">
		<?php echo wed_getPresentation($ad_specs); ?>
	</div><!-- end widget -->
	
</div>

<!-- <div class="fb-like-box" data-href="https://www.facebook.com/ASFFoundation" data-width="270" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div> -->