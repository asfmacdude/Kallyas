<?php
defined( '_GOOFY' ) or die();

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$control_codes = wed_getSystemValue('URL_CONTROL');

// First we set page_view to the default value of list
$page_view     = 'list';

if (!empty($control_codes[1]))
{
	$page_view = 'page';
}

if (!empty($control_codes[2]))
{
	$page_view = 'article';
}

var_dump($page_view);

$path = dirname(__FILE__) . DS . 'index.php';

if (file_exists($path))
{
	include $path;
}


?>
