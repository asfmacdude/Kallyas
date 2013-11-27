<?php
defined( '_GOOFY' ) or die();

$title_obj   = wed_getContentInfo("title_bar_heading");
$title       = $title_obj->getValue('fullarticle');
$header_html = '<h4 class="text">' . $title . '</h4>';
	
?>

<div id="action_box" data-arrowpos="center">
	<div class="container">
		<div class="row">
			<div class="span8">
				<?php echo $header_html; ?>
			</div>
			<div class="span4 align-center">
				<a href="https://www.alagames.com/forms_lib/index.php?form=volun-register2012" class="btn">Volunteer</a>
				<a href="/support-asff/index.php" class="btn">Donate</a>
			</div>
		</div>
	</div>
</div><!-- end action box -->