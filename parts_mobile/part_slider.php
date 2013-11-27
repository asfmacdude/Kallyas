<?php
defined( '_GOOFY' ) or die();

global $walt;
$js_director = $walt->getImagineer('jsdirector');
$css_director = $walt->getImagineer('cssdirector');
$js_director->loadJSAssets(array('IOSSLIDERA','IOSSLIDERB','IOSSLIDERC'));
$css_director->loadCSSAssets(array('IOSSLIDER'));

?>

<style>

a.title_big_a {
	color: white;
}

a.title_big_a:hover {
	color: red;
}

</style>



<div id="slideshow" class="gradient">
        	
	<div class = "iosSlider">
	
		<div class="slider">
			
            <div class = "item">
				<img src="files/images/headers/1600_637/open_slide_fworks1.jpg" alt="" /><!-- slide image -->
                <div class="caption style1">
                	<h2 class="main_title">OPENING CEREMONIES<br>JUNE 21, 2013<br>BJCC ARENA - Birmingham</h2>
					<h3 class="title_big"><a class="title_big_a" href="#">MORE INFORMATION</a></h3>
					<a href="#" class="more"><img src="themes/Kallyas/sliders/iosslider/arr01.png" alt=""></a>
					<h4 class="title_small">GET GOING AND GET IN THE GAMES!</h4>
                </div>
			</div><!-- end item -->
            
			<div class = "item">
                <img src="files/images/headers/1600_637/open_paradekids.jpg" alt="" />
                <div class="caption style1">
                	<h2 class="main_title">STATE GAMES<br>JUNE 21-23, 2013<br>BIRMINGHAM AL</h2>
					<h3 class="title_big"><a class="title_big_a" href="#">REGISTER NOW!</a></h3>
					<a href="#" class="more"><img src="themes/Kallyas/sliders/iosslider/arr01.png" alt=""></a>
					<h4 class="title_small">GET GOING AND GET IN THE GAMES!</h4>
                </div>
			</div><!-- end item -->
			
			<div class = "item">
				<img src="files/images/headers/1600_637/open_torchcarriers.jpg" alt="" />
                <div class="caption style1 fromright">
                	<h2 class="main_title">OPENING CEREMONIES<br>JUNE 21, 2013<br>BJCC ARENA - Birmingham</h2>
					<h3 class="title_big"><a class="title_big_a" href="#">MORE INFORMATION</a></h3>
					<a href="#" class="more"><img src="themes/Kallyas/sliders/iosslider/arr01.png" alt=""></a>
					<h4 class="title_small">GET GOING AND GET IN THE GAMES!</h4>
                </div>
			</div><!-- end item -->
			
			<div class = "item">
				<img src="files/images/headers/1600_637/open_widecrowdshot.jpg" alt="" />
                <div class="caption style1 fromright">
                	<h2 class="main_title">OPENING CEREMONIES<br>JUNE 21, 2013<br>BJCC ARENA - Birmingham</h2>
					<h3 class="title_big"><a class="title_big_a" href="#">MORE INFORMATION</a></h3>
					<a href="#" class="more"><img src="themes/Kallyas/sliders/iosslider/arr01.png" alt=""></a>
					<h4 class="title_small">GET GOING AND GET IN THE GAMES!</h4>
                </div>
			</div><!-- end item -->
            
            <div class = "item">
                <img src="files/images/headers/1600_637/open_cleanfireworks.jpg" alt="" />
                <div class="caption style1">
                	<h2 class="main_title">STATE GAMES<br>JUNE 21-23, 2013<br>BIRMINGHAM AL</h2>
					<h3 class="title_big"><a class="title_big_a" href="#">REGISTER NOW!</a></h3>
					<a href="#" class="more"><img src="themes/Kallyas/sliders/iosslider/arr01.png" alt=""></a>
					<h4 class="title_small">GET GOING AND GET IN THE GAMES!</h4>
                </div>
			</div><!-- end item -->
		
		</div>
		
		<div class="prev">
			<div class="btn-label">PREV</div>
		</div>
		
		<div class="next">
			<div class="btn-label">NEXT</div>
		</div>
		
		<div class="selectorsBlock bullets">
			<div class="selectors">
				<div class="item first selected"></div>
				<div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
			</div>
		</div>
        
	</div><!-- end iosSlider -->
    <div class="scrollbarContainer"></div>
</div><!-- end slideshow -->