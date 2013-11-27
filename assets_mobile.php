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

class kallyas_assets
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
		
		$this->pushOptions();
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
			'TYPE' => 'LIST',
			'TAG'  => 'JQUERY',
			'VERSION' => '1.10.1');
		$js_array[] = array(
			'ID'   => 'JQUERY-MIGRATE',
			'LOAD' => true,
			'KEY'  => 'JS_FILES_TOP',
			'TYPE' => 'LIST',
			'TAG'  => 'JQUERY-MIGRATE');
		$js_array[] = array(
			'ID'   => 'JQUERY-MOBILE',
			'LOAD' => true,
			'KEY'  => 'JS_FILES_TOP',
			'TYPE' => 'LIST',
			'TAG'  => 'JQUERY-MOBILE');

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
			
		$js_array[] = array(
			'ID'   => 'APP',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/menu/app.js');
		$js_array[] = array(
			'ID'   => 'ADD2HOME',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/add2home.js');		
		$js_array[] = array(
			'ID'   => 'TWITLIVE',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/twitter/twitlive-min.js');
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
		$js_array[] = array(
			'ID'   => 'FLEXSLIDER',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/flexslider/jquery.flexslider.js');
		$js_array[] = array(
			'ID'   => 'SHCORE',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/flexslider/shCore.js');
		$js_array[] = array(
			'ID'   => 'SHBRUSH',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/flexslider/shBrushXml.js');
		$js_array[] = array(
			'ID'   => 'SHBRUSHJS',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/flexslider/shBrushJScript.js');
		$js_array[] = array(
			'ID'   => 'FROOGALOOP',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/flexslider/froogaloop.js');
		$js_array[] = array(
			'ID'   => 'FITVID',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/flexslider/jquery.fitvid.js');
		$js_array[] = array(
			'ID'   => 'FLEXDEMO',
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/flexslider/demo.js');
		$js_array[] = array(
			'ID'   => 'WEDCUSTOM',
			'LOAD' => true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'FILE',
			'PATH' => $theme . '/js_mobile/wed_custom.js');
		
	
		return $js_array;
	}
	
	public function getFilesCSS()
	{	
		$theme = $this->options['THEME'];
		
		$css_array   = array();
		$css_array[] = array(
			'ID'    => 'MAIN',
			'LOAD'  =>  true,
			'PATH'  =>$theme . '/css_mobile/menu/main.css?v=31');
		$css_array[] = array(
			'ID'    => 'LAYOUT',
			'LOAD'  =>  true,
			'PATH'  => $theme . '/css_mobile/layout.css');
		$css_array[] = array(
			'ID'    => 'STYLESHEET',
			'LOAD'  =>  true,
			'PATH'  => $theme .'/css_mobile/stylesheet.css');
		$css_array[] = array(
			'ID'    => 'TWIITER',
			'LOAD'  =>  true,
			'PATH'  => $theme . '/css_mobile/twitter/livetweets.css');
		$css_array[] = array(
			'ID'    => 'ADD2HOME',
			'PATH'  => $theme . '/css_mobile/add2home.css');
		$css_array[] = array(
			'ID'    => 'FLEXSLIDER',
			'PATH'  => $theme . '/js_mobile/flexslider/flexslider.css');
		$css_array[] = array(
			'ID'    => 'JQUERYMOBILE',
			'TYPE'  =>  'CDN',
			'PATH'  => 'http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css');
		$css_array[] = array(
			'ID'    => 'JQUERYMOBILESTRUCTURE',
			'TYPE'  =>  'CDN',
			'PATH'  => 'http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css');
		$css_array[] = array(
			'ID'    => 'LAYERSLIDER',
			'PATH'  => $theme . '/layerslider/css/layerslider.css');
		
		return $css_array;
	}
}
?>
