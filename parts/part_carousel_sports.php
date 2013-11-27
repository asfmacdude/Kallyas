<?php
defined( '_GOOFY' ) or die();

global $walt;
$db     = $walt->getImagineer('communicore');
$js_director = $walt->getImagineer('jsdirector');
$js_director->loadJSAssets(array('CAROUSEL','CAROUSELSPORTS','MOUSEW','TOUCHS'));

$sports = $db->loadDBObject('games_sports');
$sport_list   = $sports->loadActiveSports();

$sport_count = count($sport_list);

$image_path   = 'files/images/sliders/sports/197_89/%s.jpg';
$default_path = 'files/images/sliders/sports/197_89/default.jpg';
$link_str     = '/index.php?page=sport_%s';

// Optimal image size 197 X 89
?>


<div class="row recentwork_carousel default-style">
	<div class="span3">
		<h3 class="m_title">SPORTS LINEUP</h3>
		<p>Choose below from <?php echo $sport_count; ?> different sports and over 100 events. The 2013 Games will be June 21-23, 2013 in Birmingham. Registration is open now!</p>
		<div class="controls">
			<a href="#" class="sport_prev"><span class="icon-chevron-left"></span></a>
			<a href="#" class="complete"><span class="icon-th"></span></a>
			<a href="#" class="sport_next"><span class="icon-chevron-right"></span></a>
		</div>
	</div>
	<div class="span9">
		<ul id="sports_lineup" class="fixclear">
			
			<?php
			$html = '';
			
			$rec = 0;

			while ($sports->moveRecordList($rec))
			{
				$title = $sports->getValue('title','Great Sport!');
				$code  = $sports->getValue('code');
				$venue = $sports->getDetail('VENUE','Location To Be Announced');
				$link  = sprintf($link_str,$code);
				$image = sprintf($image_path,$code);
				
				if (!file_exists($image))
				{
					$image = $default_path;
				}
				
				$html .= '<li>'.LINE1;
				$html .= '<a href="'.$link.'">'.LINE1;
				$html .= '<span class="hover">'.LINE1;
				$html .= '<img src="'.$image.'" />'.LINE1;
				$html .= '<span class="hov"></span>'.LINE1;
				$html .= '</span>'.LINE1;
				$html .= '<div class="details">'.LINE1;
				$html .= '<span class="bg"></span>'.LINE1;
				$html .= '<h4>'.$title.'</h4>'.LINE1;
				$html .= '<span>'.$venue.'</span>'.LINE1;
				$html .= '</div>'.LINE1;
				$html .= '</a>'.LINE1;
				$html .= '</li>'.LINE1;
				
				$rec++;
			}
			
			echo $html;
			
			?>
			
		</ul>
	</div>
</div><!-- end row // recentworks_carousel default-style -->