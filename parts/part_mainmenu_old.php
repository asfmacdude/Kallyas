<?php
defined( '_GOOFY' ) or die();

global $walt;
$js_director = $walt->getImagineer('jsdirector');
$css_director = $walt->getImagineer('cssdirector');
$js_director->loadJSAssets(array('SUPERFISH'));
$css_director->loadCSSAssets(array('SUPERFISH'));

$pres = $walt->getImagineer('presentations');
$id   = $pres->newPresentation(array('TYPE' => 'menu','MENU_NAME' => 'menu_main'));

$menu_html = $pres->getHTML(array('ID' => $id));

?>

<nav id="main_menu">
	<?php echo $menu_html; ?>
	<!--
<ul class="sf-menu clearfix">
		<li class="active"><a href="index.php">HOME</a></li>
		<li><a href="about-us.html">ABOUT US</a>
			<ul>
				<li><a href="index.php?page=info_about">About Us</a>
				<li><a href="index.php?page=info_faq">FAQ</a>
				<li><a href="index.php?page=page_contact">Contact Us</a>
				<li><a href="index.php?page=info_privacy">Privacy Policy</a>
			</ul>
		</li>
		
		<li><a href="#">SPORTS</a>
			<ul>
				<li><a href="index.php?page=sport_arch">Archery</a>
				<li><a href="index.php?page=sport_base">Baseball</a>
				<li><a href="index.php?page=sport_bask">Basketball</a>
				<li><a href="index.php?page=sport_bass">Bass Fishing</a>
				<li><a href="index.php?page=sport_bmxx">BMX</a>
				<li><a href="index.php?page=sport_bowl">Bowling</a>
				<li><a href="index.php?page=sport_disc">Disc Golf</a>
				<li><a href="index.php?page=sport_dive">Diving</a>
				<li><a href="index.php?page=sport_foot">Flag Football</a>
				<li><a href="index.php?page=sport_gymn">Gymnastics</a>
				<li><a href="index.php?page=sport_lacr">Lacrosse</a>
				<li><a href="index.php?page=sport_rugb">Olympic-Style Rugby</a>
				<li><a href="index.php?page=sport_shot">Shooting Sports</a>
				<li><a href="index.php?page=sport_socc">Soccer</a>
				<li><a href="index.php?page=sport_soft">Softball</a>
				<li><a href="index.php?page=sport_swim">Swimming</a>
				<li><a href="index.php?page=sport_tabt">Table Tennis</a>
				<li><a href="index.php?page=sport_taek">Taekwondo</a>
				<li><a href="index.php?page=sport_trak">Track & Field</a>
				<li><a href="index.php?page=sport_tria">Triathlon</a>
				<li><a href="index.php?page=sport_ultf">Ultimate Frisbee</a>
				<li><a href="index.php?page=sport_voll">Volleyball-Indoor</a>
				<li><a href="index.php?page=sport_volo">Volleyball-Outdoor</a>
				<li><a href="index.php?page=sport_wres">Wrestling</a>
			</ul>
		</li>
		
		<li><a href="#">INFORMATION</a>
			<ul>
				<li><a href="index.php?page=info_open">OPENING CEREMONY</a></li>
				<li><a href="index.php?page=search&tag=hotels">HOTELS</a></li>
				<li><a href="http://www.alagames.com/forms_lib/index.php?form=volun-register2012">VOLUNTEER</a></li>
			</ul>
		</li>
		
		<li><a href="http://images.asffoundation.org/">GALLERY</a></li>
		
	</ul>
-->
</nav><!-- end main_menu -->