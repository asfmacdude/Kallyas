<?php
// *****************************************************************************************
// *********************************** ASSETS CLASS ****************************************
// *****************************************************************************************
/*
 * assets.php
 *
 * Note that the name of the file is assets.php, but the class name is the theme_assets.
 *
 * assets will clearly define the files used in this theme such as javascript files, css files
 * and possibly other files in the future.
 *
 * Certian files have to load in a particular order. By placing them in the correct order
 * when you list them, then the director program will 'place' them in that order.
 */
defined( '_GOOFY' ) or die();

include_once('shortcodes.php');
include_once('functions.php');

class kallyas_assets extends wed_theme_tools
{
	public $options   = array();
	
	public function __construct($options=array())
	{
		$this->setOptions($options);
	}
	
	private function setOptions($options)
	{
		$this->options                = $options;
		$this->options['CLASS_NAME']  = __CLASS__;
		$this->options['LOCAL_PATH']  = dirname(__FILE__);
		$this->options['THEME']       = 'Kallyas';
	}
	
	public function pushOptions()
	{
		wed_getCSS($this->getFilesCSS());
		wed_getJavascript($this->getFilesJavascript());
	}
	
	public function getFilesJavascript()
	{
		$theme = $this->options['THEME'];
		
		$js_array   = array();
		$js_array[] = array(
			'ID'   => 'JQUERY',
			'LOAD' => true,
			'KEY'  => 'JS_FILES_TOP',
			'TYPE' => 'LIBRARY',
			'PATH' => 'jquery/jquery.js');
		
		$js_array[] = array(
			'ID'   => 'BOOTSTRAP',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'LIBRARY',
			'PATH' => 'bootstrap/js/bootstrap.js');
			
		$js_array[] = array(
			'ID'   => 'JQUERY-MIGRATE',
			'LOAD' => true,
			'KEY'  => 'JS_FILES_TOP',
			'TYPE' => 'LIBRARY',
			'PATH' => 'jquery/jquery.migrate.js');
		$js_array[] = array(
			'ID'   => 'MODERN',
			'LOAD' => true,
			'KEY'  => 'JS_FILES_TOP',
			'TYPE' => 'LIBRARY',
			'PATH' => 'modernizr.js');
		$js_array[] = array(
			'ID'   => 'GOOGLE',
			'LOAD' => false,
			'KEY'  => 'GOOGLE_API',
			'TYPE' => 'LIST',
			'TAG'  => 'GOOGLE-API');
		$js_array[] = array(
			'ID'   => 'GOOGLE_ANALYTIC',
			'LOAD' => false,
			'KEY'  => 'JS_GOOGLE_ANALYTIC',
			'TYPE' => 'LIST',
			'TAG'  => 'GOOGLE-ANALYTIC');
/*
		$js_array[] = array(
			'ID'   => 'NOCONFLICT',
			'LOAD' => true,
			'KEY'  => 'JS_FILES_TOP',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/jquery.noconflict.js');
*/
	
		$js_array[] = array(
			'ID'   => 'MEGAMENU',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'LIBRARY',
			'PATH' => 'megamenu/js/bootstrap-hover-dropdown.js');
		$js_array[] = array(
			'ID'   => 'DROPDOWN-READY',
			'LOAD' => true,
			'KEY'  => 'JS_READY_CODE',
			'TYPE' => 'SCRIPT',
			'SCRIPT' => "jQuery(document).ready(function($) { $('.dropdown-toggle').dropdownHover().dropdown();$(document).on('click', '.fhmm .dropdown-menu', function(e) {e.stopPropagation() }) });");
		
		/*
$js_array[] = array(
			'ID'   => 'LIGHTBOXA',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'LIBRARY',
			'PATH' => 'nacho_lightbox/js/jquery.hammer.min.js');
		$js_array[] = array(
			'ID'   => 'LIGHTBOXB',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'LIBRARY',
			'PATH' => 'nacho_lightbox/js/jquery.nchlightbox-1.2.min.js');
*/
			
		$js_array[] = array(
			'ID'   => 'EVOLUTION',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'LIBRARY',
			'PATH' => 'evolution/jquery.lightbox.min.js');
		$js_array[] = array(
			'ID'   => 'EVOLUTIONREADY',
			'LOAD' => true,
			'KEY'  => 'JS_READY_CODE',
			'TYPE' => 'SCRIPT',
			'SCRIPT' => "jQuery(document).ready(function($) { $('.lightbox').lightbox();});");		
			
			
		$js_array[] = array(
			'ID'   => 'FITVIDS',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'LIBRARY',
			'PATH' => 'jquery/jquery.fitvids.js');
		
		$js_array[] = array(
			'ID'   => 'FITVIDREADY',
			'LOAD' => true,
			'KEY'  => 'JS_READY_CODE',
			'TYPE' => 'SCRIPT',
			'SCRIPT' => "jQuery(document).ready(function($) { $('.fhmm').fitVids(); });");
	
		$js_array[] = array(
			'ID'   => 'TWITTERWIDGETS',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'CDN',
			'PATH' => 'http://platform.twitter.com/widgets.js');
			
			
		$js_array[] = array(
			'ID'   => 'PLUGINS',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/plugins.js');
		/*
$js_array[] = array(
			'ID'   => 'SUPERFISH',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/addons/superfish_responsive/superfish_menu.js');
*/
		/*
$js_array[] = array(
			'ID'   => 'SUPERFISH',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/addons/superfish_responsive/superfish.js');
		$js_array[] = array(
			'ID'   => 'SUPERFISHSUBS',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/addons/superfish_responsive/supersubs.js');
*/

		/*
$js_array[] = array(
			'ID'   => 'PRETTY',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/addons/prettyphoto/jquery.prettyPhoto.js');
*/

		$js_array[] = array(
			'ID'   => 'IOSSLIDERA',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/sliders/iosslider/jquery.iosslider.min.js');
		$js_array[] = array(
			'ID'   => 'IOSSLIDERB',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/sliders/iosslider/jquery.iosslider.kalypso.js');
		$js_array[] = array(
			'ID'   => 'IOSSLIDERC',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/load_iosslider.js');
/*
		$js_array[] = array(
			'ID'   => 'LSLIDEREASING',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/layerslider/jQuery/jquery-easing-1.3.js');
		$js_array[] = array(
			'ID'   => 'LSLIDERTRANSITMOD',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/layerslider/jQuery/jquery-transit-modified.js');
		$js_array[] = array(
			'ID'   => 'LSLIDERTRANSITION',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/layerslider/js/layerslider.transitions.js');
		$js_array[] = array(
			'ID'   => 'LSLIDERKMEDIA',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/layerslider/js/layerslider.kreaturamedia.jquery.js');
		$js_array[] = array(
			'ID'   => 'LSLIDERREADY',
			'KEY'  => 'JS_READY_CODE',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/ready_layerslider.js');
*/			
		$js_array[] = array(
			'ID'   => 'CAROUSEL',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/jquery.carouFredSel-6.2.1-packed.js');
		$js_array[] = array(
			'ID'   => 'MOUSEW',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/jquery.mousewheel.min.js');
		$js_array[] = array(
			'ID'   => 'TOUCHS',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/jquery.touchSwipe.min.js');
		$js_array[] = array(
			'ID'   => 'CAROUSELPARTNERS',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/load_carousel_partners.js');
		$js_array[] = array(
			'ID'   => 'CAROUSELSPORTS',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/load_carousel_sports.js');
		$js_array[] = array(
			'ID'   => 'SCRIPTS',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/kalypso_wed_test.js');
		/*
$js_array[] = array(
			'ID'   => 'CUSTOM',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/wed_custom.js');
*/
		$js_array[] = array(
			'ID'   => 'FORMS',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/wed_forms.js');
		$js_array[] = array(
			'ID'   => 'COUNTDOWN',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/jquery.countdown.js');
		$js_array[] = array(
			'ID'   => 'ISOTOPE',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/jquery.isotope.min.js');
		$js_array[] = array(
			'ID'   => 'COUNTDOWNCUSTOM',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js/countdown.custom.js');		
		$js_array[] = array(
			'ID'   => 'CYCLE',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'CDN',
			'PATH' => 'http://malsup.github.io/min/jquery.cycle.all.min.js');
	
		return $js_array;
	}
	
	public function getFilesCSS()
	{	
		$theme = $this->options['THEME'];
		
		$css_array   = array();
		
		$css_array[] = array(
			'ID'    => 'BOOT',
			'LOAD'  =>  true,
			'TYPE'  => 'LIBRARY',
			'PATH'  => 'bootstrap/css/bootstrap.css');
		$css_array[] = array(
			'ID'    => 'MEGAMENU',
			'LOAD'  =>  true,
			'TYPE'  => 'LIBRARY',
			'PATH'  => 'megamenu/css/fhmm.css');
		$css_array[] = array(
			'ID'    => 'FONTAWESOME',
			'LOAD'  =>  true,
			'TYPE'  => 'LIBRARY',
			'PATH'  => 'megamenu/css/font-awesome.min.css');
		
		/*
$css_array[] = array(
			'ID'    => 'NACHOLIGHTBOX',
			'LOAD'  =>  true,
			'TYPE'  => 'LIBRARY',
			'PATH'  => 'nacho_lightbox/css/nchlightbox-1.2.css');
*/
			
		$css_array[] = array(
			'ID'    => 'EVOLUTION',
			'LOAD'  =>  true,
			'TYPE'  => 'LIBRARY',
			'PATH'  => 'evolution/themes/default/jquery.lightbox.css');
			
			
		$css_array[] = array(
			'ID'    => 'TEMPLATE',
			'LOAD'  =>  true,
			'PATH'  => $theme . '/css/template_new.css');
		$css_array[] = array(
			'ID'    => 'UPDATE',
			'LOAD'  =>  true,
			'PATH'  => $theme .'/css/updates.css');
		$css_array[] = array(
			'ID'    => 'RESPONSIVE',
			'LOAD'  =>  true,
			'PATH'  => $theme . '/css/responsive-devices.css');
		
		/*
$css_array[] = array(
			'ID'    => 'SUPERFISH',
			'PATH'  => $theme . '/addons/superfish_responsive/superfish.css');
*/
			
		/*
$css_array[] = array(
			'ID'    => 'PRETTY',
			'LOAD'  =>  true,
			'PATH'  => $theme . '/addons/prettyphoto/prettyPhoto.css');
*/
		
		$css_array[] = array(
			'ID'    => 'IOSSLIDER',
			'PATH'  => $theme .'/sliders/iosslider/style.css');
		/*
$css_array[] = array(
			'ID'    => 'LAYERSLIDER',
			'PATH'  => $theme .'/layerslider/css/layerslider.css');
*/
		$css_array[] = array(
			'ID'    => 'CUSTOM',
			'LOAD'  =>  true,
			'PATH'  => $theme . '/css/custom.css');
		
		return $css_array;
	}
	
	public function getFormats($name=null)
	{
		$formats = array();
		
		$formats['top_menu'] = array(
			'TOP_NOSUB' => '<li class="%LI_CLASS%"><a href="%LINK%">%TITLE%</a></li>',
			'TOP_SUB'   => '<li class="dropdown %LI_CLASS%"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> %TITLE% <b class="caret"></b></a><ul class="dropdown-menu">%SUB_MENU%</ul></li>',
			'SUB'       => '<li><a href="%LINK%">%TITLE%</a></li>',
			'ACTIVE_CLASS' => ' active',
			'START_CLASS'  => null
			);
		
		return ((!is_null($name)) && (isset($formats[$name]))) ? $formats[$name] : array() ;
	}
}
?>