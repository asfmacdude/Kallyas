<?php
defined( '_GOOFY' ) or die();

global $walt;
$prof  = $walt->getImagineer('professor');
$body  = $prof->getSystemValue('BODY_HTML');

$body_type = (isset($options['type'])) ? $options['type'] : 'standard' ;

$html = '';

if ($body_type==='standard')
{
	$html .= '<body class="">'.LINE1;
	$html .= $body.LINE1;
	$html .= '</body>'.LINE1;
}
		
echo $html;