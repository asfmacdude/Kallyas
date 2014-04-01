<?php
defined( '_GOOFY' ) or die();

$hover_row_html = null;
$sport          = null;

$call_parts   = wed_getSystemValue('CALL_PARTS');
$html_format  = '<div class="span4"><a href="%LINK%" class="hover-box fixclear"><img src="%IMAGE%" alt=""><h3>%TITLE%</h3>
	<h4>{{GROUP_TITLE}}</h4><p>%TEXT%</p></a></div>';
$html_wrapper = '<div class="row">%CONTENT%</div>';


if ( (isset($call_parts[0])) && ($call_parts[0] === 'sport') )
{
	$sport = (isset($call_parts[1])) ? $call_parts[1] : null;
	
	if (!is_null($sport))
	{
		$box_specs[] = array(
			'LINK' => '/register/'.$sport,
			'IMAGE' => '/files/images/icons/60_60/checkbox.png',
			'TITLE' => 'REGISTER ONLINE!',
			'TEXT'  => 'Register online now! Go for it!'
		);
		
		$box_specs[] = array(
			'LINK' => '/register/'.$sport,
			'IMAGE' => '/files/images/icons/60_60/checkbox.png',
			'TITLE' => 'REGISTER BY MAIL!',
			'TEXT'  => 'Download forms and register by mail!'
		);
		
		$box_specs[] = array(
			'LINK' => '/hotel/t3_travel',
			'IMAGE' => '/files/images/icons/60_60/checkbox.png',
			'TITLE' => 'BOOK YOUR HOTEL!',
			'TEXT'  => 'Special accommodations and rates!'
		);
		
		$search = array('%LINK%','%IMAGE%','%TITLE%','%TEXT%');
		
		foreach ($box_specs as $key=>$specs)
		{
			$replace = array(
				$specs['LINK'],
				$specs['IMAGE'],
				$specs['TITLE'],
				$specs['TEXT']
			);
			
			$hover_row_html .= str_replace($search, $replace, $html_format);
		}
		
		$hover_row_html = str_replace('%CONTENT%', $hover_row_html, $html_wrapper);				
	}
}

echo($hover_row_html);

?>


<!--
<div class="row">
	<div class="span6">
		<a href="#" class="hover-box fixclear">
			<img src="/files/images/icons/60_60/checkbox.png" alt="">
			<h3>REGISTER ONLINE!</h3>
			<h4>Sport 1</h4>
			<p>Let’s create a great project together! </p>
		</a>
	</div>
	<div class="span6">
		<a href="#" class="hover-box fixclear">
			<img src="/files/images/icons/60_60/checkbox.png" alt="">
			<h3>REGISTER ONLINE!</h3>
			<h4>Sport 2</h4>
			<p>Let’s create a great project together! </p>
		</a>
	</div>
	<div class="span3">
		<a href="#" class="hover-box fixclear">
			<img src="/files/images/icons/60_60/edit_pencil.png" alt="">
			<h3>REGISTER BY MAIL!</h3>
			<h4>WEBDEVELOPER WANTED</h4>
			<p>Register today!</p>
		</a>
	</div>
	<div class="span3">
		<a href="#" class="hover-box fixclear">
			<img src="/files/images/icons/60_60/pdf_file.png" alt="">
			<h3 style="margin-top:10px">DOWNLOAD</h3>
			<h4>OUR CATALOGUE</h4>
		</a>
	</div>
</div>
-->