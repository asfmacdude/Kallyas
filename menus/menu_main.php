<?php
/*
 * @version		$Id: menu_main.php 1.0 2009-03-03 $
 * @package		DreamWish
 * @subpackage	main
 * @copyright	Copyright (C) 2012 Medley Productions. All rights reserved.
 * 
 * DreamWish is a Disney inspired CMS system developed by Randy Cherry
 * Dedicated to the dreamer of dreams, Walt Disney
 * 
 * 'I believe in being an innovator.' - Walt Disney
 * 
 * 
 */
defined( '_GOOFY' ) or die();
/*
 * menu_main.php (Kallyas Theme)
 * 
 * This is the detail object for presentations that displays layered menus
 *
 *
 *
 * CONTENT
 * The content array will be similar across all presentation and look something like this:
 * - 'header'  => array( 'CONTENT_CODE'=>content_code,'ICON_CLASS'=> icon_code )
 * This 
 */
 
class menu_main extends details
{
	public $options  = array();
	public $menu_db;
	
	public function __construct($options=array())
	{
		$this->setOptions($options);
	}
	
	private function setOptions($options)
	{
		$this->options['CLASS_NAME']        = __CLASS__;
		$this->options['LOCAL_PATH']        = dirname(__FILE__);
		$this->options['CODE']              = 'menu_main';
		$this->options['UL_WRAP_TOP']       = '<ul class="sf-menu clearfix">%s</ul>';
		$this->options['LI_FORMAT']         = array(
			'LEVEL-1'   => '<li {{CLASS}}><a href="{{LINK}}">{{TITLE}}</a>{{DROPDOWN}}</li>',
			'LEVEL-2'   => '<li {{CLASS}}><a href="{{LINK}}">{{TITLE}}</a>{{DROPDOWN}}</li>'
			);
		$this->options['UL_WRAP_DROP']      = '<ul>%s</ul>';
		
		$this->addOptions($options);
	}
	
	private function buildMenu()
	{
		$html = '';
		
		// First we acquire the info about the 'TOP' menu by searching
		// the theme_menus table for the given code. The default is to send back the 
		// details field(JSON) which will be interpreted into an array. If we do indeed get an array
		// then we turn it over to renderMenu to do their task.
		$top_menu = $this->getMenuInfo($this->options['CODE']);
		
		if (is_array($top_menu))
		{
			$html = $this->renderMenu($top_menu);
		}
		
		$html =sprintf($this->options['UL_WRAP_TOP'], $html);
		
		return $html;
	}
	
	public function setHTML($options=array())
	{
		return $this->buildMenu();
	}
}