<?php
/*
 * Kallyas Theme Functions file
 *
 * Description
 *
 *
 */
defined( '_GOOFY' ) or die();

function getMenuSports()
{
	// Here we pull the Sports menu in from the Sports DB
	$menu = array();
	
	global $walt;
	$db = $walt->getImagineer('communicore');
	$sports_db = $db->loadDBObject('games_sports');
	
	$sports = $sports_db->loadActiveSports();
	
	foreach ($sports as $key=>$row)
	{
		$menu[$row['sport_title']] = array('TITLE' => $row['sport_title'], 'LINK' => '/sport/'.$row['sport_sysname']);
	}

	return $menu;
}

function getMenuWelcome()
{
	$menu = array();
	
	$menu['WELCOME']     = array('TITLE' => '<div class="main_menu"><h4>Welcome!</h4><p>This menu is designed just for you! It keeps track of everywhere you visit and everything you search for while on our site.</p></div>');
	
	// Get the recent history
	$menu['HISTORY']     = array('TITLE' => '<h5 class="main_menu_sub_title">Recent History...</h5>');
	$menu = array_merge($menu, wed_getRecentHistory());
	
	// Get the recent searches
	$searches = wed_getRecentSearch();
	
	if ($searches)
	{
		$menu['SEARCH']     = array('TITLE' => '<h5 class="main_menu_sub_title">Recent Searches...</h5>');
		$menu = array_merge($menu, $searches);
	}

	return $menu;
}

function getRandomColorClass()
{
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
	return $colors[$x];
}

?>