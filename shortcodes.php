<?php
/*
* shortcodes.php
*
* shortcode functions for Kallyas Theme
*
*
*/

$codes = array();
$codes['page_wrapper']         = 'sc_getPageWrapper';
$codes['content']              = 'sc_getContentWrapper';
$codes['row']                  = 'sc_getRowWrapper';
$codes['grid']                 = 'sc_getGridWrapper';
$codes['column']               = 'sc_getColumn';
$codes['carousel']             = 'sc_getCarousel';
$codes['sidebar']              = 'sc_getSideBar';
$codes['tagline']              = 'sc_getTagLine';
$codes['info_box']             = 'sc_getInfoBox';
$codes['feature_row']          = 'sc_getFeatureRow';
$codes['circle_more']          = 'sc_getCircleMore';
$codes['slogan']               = 'sc_getSlogan';
$codes['register_button']      = 'sc_getRegisterButton';
$codes['register_mail_button'] = 'sc_getRegisterMailButton';
$codes['show_map']             = 'sc_showMap';
$codes['button']               = 'sc_showButton';
$codes['results']              = 'sc_showResults';
$codes['countdown']            = 'sc_getCountdown';
$codes['breadcrumb']           = 'sc_getBreadcrumb';
$codes['gallery_sampler']      = 'sc_getGallerySampler';

global $walt;
$short = $walt->getImagineer('shortcodes');
$short->add_shortcodes_array($codes);

function sc_getPageWrapper($options=array(), $content='')
{
	$html = '';
	
	$html .= '<div id="page_wrapper">'.LINE2;
	$html .= $content;
	$html .= '</div><!-- end page_wrapper -->'.LINE2;
	
	return $html;
}

function sc_getContentWrapper($options=array(), $content='')
{
	$theme = wed_getSystemValue('THEME');
	$file  = THEME_BASE . $theme . DS .'parts/part_content.php';
	$html  = '';
	
	if (file_exists($file))
	{
		ob_start();
		@include $file;
		$html = ob_get_contents();
		ob_end_clean();
	}
	
	return str_replace('%CONTENT%', $content, $html);
}

function sc_getRowWrapper($options=array(), $content='')
{
	$html = '';
	
	$html .= '<div class="row">'.LINE2;
	$html .= $content;
	$html .= '</div><!-- end row -->'.LINE2;
	
	return $html;
}

function sc_getGridWrapper($options=array(), $content='')
{
	$html = '';
	
	$width = (isset($options['width'])) ? $options['width'] : '12' ;
	$class = 'span'.$width;
	
	$html .= '<div class="'.$class.'">'.LINE2;
	$html .= $content;
	$html .= '</div><!-- end '.$class.' -->'.LINE2;
	
	return $html;
}

function sc_getColumn($options=array(), $content='')
{
	$size  = (isset($options['size'])) ? $options['size'] : null ;
	
	if (is_null($size))
	{
		return $content;
	}
	
	return '<div class="span' . $size . '">' . $content . '</div>';
}

function sc_getCarousel($options=array(), $content='')
{
	$name  = (isset($options['name'])) ? $options['name'] : null ;
	$theme = wed_getSystemValue('THEME');
	$file  = THEME_BASE . $theme . DS .'parts/part_carousel_'.$name.'.php';
	$html  = '';
	
	if ( (!is_null($name)) && (file_exists($file)) )
	{
		ob_start();
		@include $file;
		$html = ob_get_contents();
		ob_end_clean();
	}
	
	return $html;
}

function sc_getSideBar($options=array(), $content='')
{
	$theme = wed_getSystemValue('THEME');
	$file  = THEME_BASE . $theme . DS .'parts/part_sidebar.php';
	$html  = '';
	
	if (file_exists($file))
	{
		ob_start();
		@include $file;
		$html = ob_get_contents();
		ob_end_clean();
	}
	
	return $html;
}

// Creates a full width tag line across the page.
function sc_getTagLine($options=array(), $content='')
{
	$html = '';
	$text = (isset($options['text'])) ? $options['text'] : null ;
	
	if (!is_null($text))
	{
		$html = '<div class="row"><div class="span12"><div class="keywordbox">'.$text.'</div></div></div><!-- end row // keywords-->';
	}

	return $html;
}


function sc_getInfoBox($options=array(), $content='')
{
	$html = '';
	$theme   = wed_getSystemValue('THEME');
	$showbox = wed_getSystemValue('SHOW_INFO_BOX','NO');
	$file  = THEME_BASE . $theme . DS .'parts/part_row_infoarea.php';
	
	if ( (strtoupper($showbox)==='YES') && (file_exists($file)) )
	{
		ob_start();
		@include $file;
		$html = ob_get_contents();
		ob_end_clean();
	}
	
	return $html;
}

function sc_getFeatureRow($options=array(), $content='')
{
	// Images for this feature row are 370 X 200
	global $walt;
	$screen = $walt->getImagineer('screenwriter');
	
	// Basic Image Object
	$img_options['CATEGORY'] = 'gnrl';
	$img_options['SIZE']     = '370_200';
	$img_obj                 = wed_getImageObject($img_options);
	
	$html = '';
	
	$codes   = (isset($options['codes'])) ? $options['codes'] : null ;
	$number  = (isset($options['number'])) ? $options['number'] : 3 ;
	
	If (is_null($codes))
	{
		return '<div class="row">Content not available</div>';
	}
	
	$code_array = explode(',', $codes);
	$count      = 0;
	
	foreach ($code_array as $value)
	{
		// load each code into screenwriter
		$screen->newArticle($value);
	}

	foreach ($code_array as $value)
	{
		$loop_html = '';
		$link      = $screen->getDetail($value,'SEARCH_LINK','#');
		$video     = $screen->getDetail($value,'VIDEO_LINK');
		$title     = $screen->getTitle($value,'Great News!');
		$excerpt   = $screen->getExcerpt($value);
		
		$img_obj->NAME     = $screen->getDetail($value,'IMAGE','RANDOM');
		$img_obj->CATEGORY = $screen->getDetail($value,'CATEGORY');
		$image_path        = $img_obj->getImageFilePath();
		
		$loop_html .= '<div class="span4 box">'.LINE1;
		
		if (!is_null($video))
		{
			$loop_html .= '<a href="'.$video.'" class="hoverBorder" rel="prettyPhoto">'.LINE1;
			$loop_html .= '<img style="position:absolute;z-index:99;top:65px;left:150px;" src="/themes/Kallyas/images/video_button.png" >'.LINE1;
		}
		else
		{
			$link = (substr($link,0,4)==='http') ? $link : 'index.php?page='.$link ;
			$loop_html .= '<a href="'.$link.'" class="hoverBorder">'.LINE1;
		}
		
		$loop_html .= '<img src="'.$image_path.'" alt="">'.LINE1;
		
		if (is_null($video))
		{
			$loop_html .= '<h6>Read more +</h6>'.LINE1;
		}
		else
		{
			$loop_html .= '<h6>Watch Video +</h6>'.LINE1;
		}
		
		$loop_html .= '</a>'.LINE1;
		$loop_html .= '<h3 class="m_title">'.$title.'</h3>'.LINE1;
		$loop_html .= $excerpt.LINE1;
		$loop_html .= '</div><!-- end span -->'.LINE2;
		
		$html .= $loop_html;
		
		$count++;
		
		if ($count==$number)
		{
			break;
		}
	}
	
	return '<div class="row image-boxes imgboxes_style1">'.LINE1.$html.'</div>'.LINE1;
}

function sc_getCircleMore($options=array(), $content='')
{
	$html = '';
	
	$title   = (isset($options['title'])) ? $options['title'] : null ;
	$text    = (isset($options['text'])) ? $options['text'] : null ;
	$circle  = (isset($options['circle'])) ? $options['circle'] : 'Find Out More' ;
	$link    = (isset($options['link'])) ? $options['link'] : '#' ;
	
	if (!is_null($title))
	{
		$html .= '<div class="row"><div class="span7"><h3 class="m_title" style="margin-top:25px;">'.LINE1;
		$html .= $title.'</h3>'.LINE1;
		$html .= '<p>'.$text.'</p>'.LINE1;
		$html .= '</div>'.LINE1;
		$html .= '<div class="span2"><a href="'.$link.'" class="circlehover with-symbol" data-size="" data-position="top-left" data-align="right">'.LINE1;
		$html .= '<span class="text">'.$circle.'</span>'.LINE1;
		$html .= '<span class="symbol"><img src="/themes/Kallyas/images/ok.png" alt=""></span>'.LINE1;
		$html .= '</a></div></div><!-- end row // circlehover -->'.LINE2;
	}
	
	return $html;
}

function sc_getSlogan($options=array(), $content='')
{
	$html = '';
	
	$code   = (isset($options['code'])) ? $options['code'] : 'random' ;
	$size   = (isset($options['size'])) ? $options['size'] : 'span7' ;
	
	$content_db = wed_getDBObject('content_main');
	
	if ($code=='random')
	{
		if ($content_db->searchArticlesByContentType('slogan'))
		{
			$rec = 0;
			$slogans = array();
			
			while ($content_db->moveRecordList($rec))
			{	
				// Actions go here
				$slogans[] = $rec;							
				$rec++;
			}
			
			$x = rand(0,$rec-1);
			$content_db->moveRecordList($x);
		}
	}
	elseif (!is_null($code))
	{
		if (!$content_db->loadArticle($code))
		{
			return null;
		}
	}

	$title   = $content_db->getDetail('TITLE');
	$text    = $content_db->getValue('fullarticle');
	$circle  = $content_db->getDetail('CIRCLE','Find Out More') ;
	$link    = $content_db->getDetail('LINK','#');
	
	if (!is_null($title))
	{
		$html .= '<div class="row"><div class="'.$size.'">'.LINE1;
		$html .= '<h3 class="m_title" style="margin-top:25px;">'.$title.'</h3>'.LINE1;
		$html .= $text.LINE1;
		$html .= '</div>'.LINE1;
		$html .= '<div class="span2"><a href="'.$link.'" class="circlehover with-symbol" data-size="" data-position="top-left" data-align="right">'.LINE1;
		$html .= '<span class="text">'.$circle.'</span>'.LINE1;
		$html .= '<span class="symbol"><img src="/themes/Kallyas/images/ok.png" alt=""></span>'.LINE1;
		$html .= '</a></div></div><!-- end row // circlehover -->'.LINE2;
	}
	
	return $html;
}

//
//	*****************************************************************
//	******** sc_getRegisterButton Function **************************
//	*****************************************************************
//
function sc_getRegisterButton($options=array(), $content='')
{
	$html = '';
	
	$sport      = (isset($options['sport'])) ? $options['sport'] : null ;
	$list       = (isset($options['list'])) ? $options['list'] : null ;
	$start      = (isset($options['start_date'])) ? $options['start_date'] : false ;
	$end        = (isset($options['end_date'])) ? $options['end_date'] : false ;
	
	if (is_null($sport))
	{
		return null;
	}
	
	if (!wed_getMomentInTime($start,$end))
	{
		$html .= '<h4>'.'Online Registration is Closed for '.$sport.'.</h4>'.LINE1;
		$html .= '<p>The deadline date for registration has passed. Please contact our office for more information.</p>';
		return $html;
	}
	
	$html .= '<h3>'.'Register Online Now for '.$sport.'!</h3>'.LINE1;
	
	$html .= '<p>Select your division below and click on the link to register online. 
		You must be 18 years or older and have a valid Visa, MasterCard or Discover to register online. 
		If you are not 18 yet, be sure to ask your parent or guardian to register you.</p>'.LINE1;
	
	// list should be formatted: 'Under 8|33;Under 12|44;Under 14|22'
	$list_of_events = explode(';', $list);
	$link           = 'http://208.106.191.140/html/alabama/registrationStep0.asp?action=&sportID=';
	
	foreach ($list_of_events as $event)
	{
		$split = explode('|', $event);
		$html .= '<p class="register" ><a href="'.$link.$split[1].'"><button class="btn btn-primary" type="button">Register Online</button></a> '.$split[0].'</p>'.LINE1;
	}
	
	return $html;	
}

//
//	*****************************************************************
//	******** sc_getRegisterMailButton Function **************************
//	*****************************************************************
//
function sc_getRegisterMailButton($options=array(), $content='')
{
	$html = '';
	
	$sport      = (isset($options['sport'])) ? $options['sport'] : null ;
	$list       = (isset($options['list'])) ? $options['list'] : null ;
	$start      = (isset($options['start_date'])) ? $options['start_date'] : false ;
	$end        = (isset($options['end_date'])) ? $options['end_date'] : false ;
	
	if (is_null($sport))
	{
		return null;
	}
	
	if (!wed_getMomentInTime($start,$end))
	{
		$html .= '<h4>'.'Registration is Closed for '.$sport.'.</h4>'.LINE1;
		$html .= '<p>The deadline date for registration has passed. Please contact our office for more information.</p>';
		return $html;
	}
	
	$html .= '<h3>'.'Register By Mail Now for '.$sport.'!</h3>'.LINE1;
		
	$html .= '<p>In order to register by mail, download the complete registration packets below.  
		Please be sure to check off events you are entering on the Registration Chart,  
		complete either the Individual or Team Entry Form A or B and be sure to sign the Waiver Form(s).  
		You only need to submit one Team Entry Form. Clip out the Registration Chart and Official Entry Form(s) and mail with Entry Fee to:</p>'.LINE1;
		
	$html .= '<address>';
	$html .= 'Alabama Sports Festival<br>'.LINE1;
	$html .= 'P.O. Box 20327<br>'.LINE1;
	$html .= 'Montgomery, AL 36120<br>'.LINE1;
	$html .= '</address>';
	
	// list should be formatted: 'Archery Registration Packet|arch/registration_packet.pdf'
	$list_of_events = explode(';', $list);
	
	foreach ($list_of_events as $event)
	{
		$split    = explode('|', $event);
		$path     = FILE_BASE . 'documents' . DS . $split[1];
		$path_web = FILE_BASE_WEB . 'documents' . DS . $split[1];
		
		if (file_exists($path))
		{
			$html .= '<p class="register" ><a href="'.$path_web.'"><button class="btn btn-success" type="button">Download Packet</button></a> '.$split[0].'</p>'.LINE1;
		}
	}
	
	return $html;	
}



function sc_showMap($options=array(), $content='')
{
	$html = '';
	
	$link   = (isset($options['link'])) ? $options['link'] : null ;
	
	if (!is_null($link))
	{
		$html .= '<p><a href="'.$link.'" target="_blank" class="map-link"><span class="icon-map-marker"></span> Open in Google Maps</a></p>'.LINE1;
	}
	
	return $html;
}

function sc_showButton($options=array(), $content='')
{
	$html = '';
	
	$title  = (isset($options['title'])) ? $options['title'] : 'Click' ;
	$link   = (isset($options['link'])) ? $options['link'] : null ;
	$size   = (isset($options['size'])) ? $options['size'] : 'medium' ;
	$color  = (isset($options['color'])) ? $options['color'] : 'blue' ;
	
	$colors = array(
		'blue'   => 'btn-primary',
		'red'    => 'btn-danger',
		'green'  => 'btn-success',
		'yellow' => 'btn-warning',
		'black'  => 'btn-inverse',
		'white'  => ''
	);
	
	$sizes = array(
		'large'  => 'btn-large',
		'medium' => '',
		'small'  => 'btn-small',
		'mini'   => 'btn-mini'
	);
	
	$class = 'btn '. $colors[$color] . ' '.$sizes[$size];
	
	if (!is_null($link))
	{
		$html .= '<a href="'.$link.'"><button class="'.$class.'" type="button">'.$title.'</button></a>'.LINE1;
	}
	
	return $html;
}

function sc_showResults($options=array(), $content='')
{	
	$sport   = (isset($options['sport'])) ? $options['sport'] : 'ALL' ;
	$year    = (isset($options['year'])) ? $options['year'] : '2012' ;
	
	$file    = 'http://www.alagames.com/results-online/index.php?sport='.$sport.'&year='.$year;
	$curlobj = wed_getCurlObject(array('URL'=>$file));
	
	return $curlobj->getOutput();
}

function sc_getCountdown($options=array(), $content='')
{
	$html = '';
	
	$title           = (isset($options['title'])) ? $options['title'] : 'Countdown' ;
	$countdown_date  = (isset($options['date'])) ? $options['date'] : null ;
	$font_size       = (isset($options['fontsize'])) ? $options['fontsize'] : '22px' ;
	
	if (!is_null($countdown_date))
	{
		$style = '<style>#Counter {float:right;} #Counter li {list-style: none;float: left;line-height: 30px;padding: 0px 8px 0px 0px;font-size: %FONT-SIZE%]];}#Counter li.timer_title {margin-right: 10px;}</style>';
		$style = str_replace('%FONT-SIZE%', $font_size, $style);
		
		$script = 'counter.init("' . $countdown_date . '","' . $title . '");';
		
		global $walt;
		$js_dir  = $walt->getImagineer('jsdirector');
		$css_dir = $walt->getImagineer('cssdirector');
		$js_dir->loadJSAssets(array('COUNTDOWN','COUNTDOWNCUSTOM'));
		
		$js_array = array(
			'ID'   => 'COUNTDOWNINIT',
			'LOAD' =>  true,
			'KEY'  => 'JS_FILES',
			'TYPE' => 'SCRIPT',
			'SCRIPT' => $script);
		
		$js_dir->addJSAsset($js_array);
	
		$css_array = array(
			'ID'            => 'COUNTDOWN',
			'LOAD'          =>  true,
			'TYPE'          => 'STYLE_STRING',
			'STYLE_STRING'  => $style);
		
		$css_dir->addCSSAsset($css_array);
	
		$html = '<ul id="Counter"></ul>';
	}

	return $html;
}

function sc_getBreadcrumb($options=array(), $content='')
{
	$version = (isset($options['version'])) ? $options['version'] : null ;
	$class   = (is_null($version)) ? 'breadcrumbs' : 'breadcrumbs_'.$version;

	$html  = '<ul class="'.$class.' fixclear">';
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
	return $html;
}

function sc_getGallerySampler($options=array(), $content='')
{
	$options['type']      = 'gallery';
	$options['setup']     = 'gallery_simple';
	$options['heading']   = '{{GROUP_TITLE}} Photo Gallery';
	$options['size']      = '1200_500';
	$options['crop_size'] = '190_79';
	$options['max']       = 6;
	$options['random']    = true;
	$options['show_more'] = true;
	
	// Here we actually call the shortcode function for just gallery
	return sc_galleryPresentation($options, $content);
}


?>