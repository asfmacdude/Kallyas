<?php
defined( '_GOOFY' ) or die();

$login_menu = '<li><a href="/?call=logout" >LOGOUT</a></li>';

if (!wed_loggedIn())
{
	$login_menu = '<li><a href="#" onclick="toggleSupportPanels(\'login_panel\',160)">LOGIN</a></li>';
}

?>


<header id="header" class="style2">
		<div class="container">

			<!-- logo -->
			<h1 id="logo"><a href="{{ASFF_LINK}}"><img src="/themes/Kallyas/images-asff/asff_logo_100h.png" alt="ASF Foundation Logo"></a></h1>

			<ul class="topnav navRight">
				<li><a href="#" onclick="toggleSupportPanels('contact_panel',130)">
						<span class="icon-remove-circle icon-white"></span> CONTACT US
					</a>
				</li>
				<?php echo($login_menu); ?>
			</ul><!-- end topnav // right aligned -->

			<ul class="topnav navLeft">
				<li class="languages drop"><a href="#"><span class="icon-globe icon-white"></span> ASF FOUNDATION PROGRAMS</a>
					<div class="pPanel">
						<ul class="inner">
							<li class="active"><a href="{{STATE_GAMES_LINK}}">Alabama State Games <span class="icon-ok"></span></a></li>
							<li><a href="{{WEE_LINK}}">Wee Can Fight Obesity</a></li>
							<li><a href="{{HEROES_LINK}}">Honoring Our Heroes</a></li>
							<li><a href="{{SCHOLARSHIP_LINK}}">Academic Scholarships</a></li>
							<li><a href="{{STUDENT_LINK}}">Student Ambassadors</a></li>
							<li><a href="{{AOY_LINK}}">Athlete of the Year</a></li>
							<li><a href="{{HEALING_LINK}}">Healing Hands Award</a></li>					
						</ul>
					</div>
				</li>
				<!--
<li class="drop"><a href="#">MY CART</a>
					<div class="pPanel">
						<div class="inner">
							<span class="cart_details">3 items, Total of <strong>$599 USD</strong> <a href="#" class="checkout">Checkout <span class="icon-chevron-right"></span></a></span>
						</div>
					</div>
				</li>
-->
			</ul><!-- end topnav // left aligned -->
			
			<ul class="topnav navRight social-icons">
				<li class="social-twitter"><a href="{{TWITTER_LINK}}">Twitter</a></li>
				<li class="social-facebook"><a href="{{FACEBOOK_LINK}}">Facebook</a></li>
				<li class="social-youtube"><a href="{{YOUTUBE_LINK}}">Youtube</a></li>
			</ul><!-- end social-icons -->

			<!-- search -->
			<div id="search">
				<a href="#" class="searchBtn"><span class="icon-search icon-white"></span></a>
				<div class="search">
					<form action="/search" method="post">
						<input name="q" type="hidden" />
						<input name="search" maxlength="20" class="inputbox" type="text" size="20" value="SEARCH ..." onBlur="if (this.value=='') this.value='SEARCH ...';" onFocus="if (this.value=='SEARCH ...') this.value='';" />
						<input type="submit" value="go" class="button icon-search"/>
					</form>
				</div>
			</div><!-- end search -->
            
			{[parts/part_mainmenu.php]}

		</div>
	</header>