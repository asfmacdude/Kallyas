<?php
defined( '_GOOFY' ) or die();

// Images for this sponsor carousel are 232 X 100
global $walt;
$js_director = $walt->getImagineer('jsdirector');
$js_director->loadJSAssets(array('CAROUSEL','CAROUSELPARTNERS','MOUSEW','TOUCHS'));

$img_options['CATEGORY'] = 'spon';
$img_options['SIZE']     = '232_100';
$img_obj = wed_getImageObject($img_options);

?>


<div class="row partners_carousel">
	<div class="span2">
		<h3 class="m_title" style="line-height:1.1;"><span>ASF Foundation Partners</span></h3>
		<div class="controls">
			<a href="#" class="prev"><span class="icon-chevron-left"></span></a>
			<a href="#" class="next"><span class="icon-chevron-right"></span></a>
		</div>
	</div>
	<div class="span10">
		<ul id="partners_carousel" class="fixclear">
		
		<?php
			if ($img_obj->loadImageDirectory())
			{
				$html = '';
				$file = 0;
				
				while ($img_obj->moveFileListPointer($file))
				{
					$image_src = $img_obj->getCurrentFilePath();
					$html .= '<li><a href="#"><img src="'.$image_src.'" alt="" /></a></li>'.LINE1;
					$file++;
				}
			
				echo $html;
			}
		?>
		
		</ul>
	</div>
</div><!-- end row // partners carousel -->