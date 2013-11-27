<?php
defined( '_GOOFY' ) or die();

$bread = null;
$html  = '<ul class="breadcrumbs fixclear">';
$html .= '<li><a href="/">HOME</a></li>';

$call_parts = wed_getSystemValue('CALL_PARTS');
$link       = null;

foreach ($call_parts as $call)
{
	$link .= (!empty($call)) ? '/'.$call : null;
	
	if (!is_null($link))
	{
		$html .= '<li><a href="'.$link.'">'.strtoupper($call).'</a></li>';
	}
}

$html .= '</ul>';

echo $html;

?>