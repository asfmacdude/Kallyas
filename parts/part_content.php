<?php
defined( '_GOOFY' ) or die();

$replace = '%CONTENT%';

$section_type = (isset($options['type'])) ? $options['type'] : 'infobox' ;

$html = '';

if ($section_type==='infobox')
{
	$html .= '<section id="content"><div class="container">'.LINE1;
	$html .= $replace.LINE1;
	$html .= '</div>'.LINE1;
	$html .= '[info_box /]'.LINE1;
	$html .= '</section><!-- end #content -->'.LINE2;
}

if ($section_type==='mainbody')
{
	$html .= '<section id="content"><div class="container">'.LINE1;
	$html .= '<div id="mainbody">'.LINE1;
	$html .= '<div class="row">'.LINE1;
	$html .= '<div class="span12">'.LINE1;
	$html .= $replace.LINE1;
	$html .= '</div>'.LINE1;
	$html .= '</div><!-- end row -->'.LINE1;
	$html .= '</div><!-- end mainbody -->'.LINE1;
	$html .= '</div><!-- end container -->'.LINE1;
	$html .= '</section><!-- end #content -->'.LINE2;
}

if ($section_type==='sidebar_left')
{
	$html .= '<section id="content"><div class="container">'.LINE1;
	$html .= '<div id="mainbody">'.LINE1;
	$html .= '<div class="row">'.LINE1;
	$html .= '<div class="span3">'.LINE1;
	$html .= '{[parts/part_sidebar.php]}';
	$html .= '</div>'.LINE1;
	$html .= '<div class="span9">'.LINE1;
	$html .= $replace.LINE1;
	$html .= '</div>'.LINE1;
	$html .= '</div><!-- end row -->'.LINE1;
	$html .= '</div><!-- end mainbody -->'.LINE1;
	$html .= '</div><!-- end container -->'.LINE1;
	$html .= '</section><!-- end #content -->'.LINE2;
}

if ($section_type==='sidebar_right')
{
	$html .= '<section id="content"><div class="container">'.LINE1;
	$html .= '<div id="mainbody">'.LINE1;
	$html .= '<div class="row">'.LINE1;
	$html .= '<div class="span9">'.LINE1;
	$html .= $replace.LINE1;
	$html .= '</div>'.LINE1;
	$html .= '<div class="span3">'.LINE1;
	$html .= '{[parts/part_sidebar.php:sidebar=sidebar-right]}';
	$html .= '</div>'.LINE1;
	$html .= '</div><!-- end row -->'.LINE1;
	$html .= '[carousel name="partners" /]';
	$html .= '[tagline text="We Mentor. We Lead. We Impact." /]';
	$html .= '</div><!-- end mainbody -->'.LINE1;
	$html .= '</div><!-- end container -->'.LINE1;
	$html .= '</section><!-- end #content -->'.LINE2;
}
		
echo $html;