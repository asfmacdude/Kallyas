<?php
$menu_db = wed_getDBObject('wed_menus_connect');
$menu_db->searchMenuCode('stategames_top_menu');
$menu_array = $menu_db->buildMenuArray();

$menu_options = array();
$menu_options['TYPE'] = 'wed_menu';
$menu_options['NAME'] = 'top_menu';
$menu_options['LIST'] = $menu_db->buildMenuArray();

$menu_html = wed_getPresentation($menu_options);

// Start Program Bar
$pmenu_db = wed_getDBObject('wed_menus_connect');
$pmenu_db->searchMenuCode('asf_programs_bar');
$pmenu_array = $pmenu_db->buildMenuArray();

$pmenu_options = array();
$pmenu_options['TYPE'] = 'wed_menu';
$pmenu_options['NAME'] = 'top_menu'; // menu formats
$pmenu_options['LIST'] = $pmenu_db->buildMenuArray();

$pmenu_html = wed_getPresentation($pmenu_options);


?>


<header class="navbar navbar-inverse navbar-fixed-top navbar-inverse fhmm" role="banner"> 
  
  <!--
<div class="row" style="background-color:#bbb;">
  	<div class="container">
  	<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		<ul class="nav navbar-nav">       
		<?php echo $pmenu_html; ?>        
		</ul>
	</nav>
  	</div>
  </div>
-->

  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>   
    </div>

    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <!-- <a href="{{STATE_GAMES_LINK}}" class="navbar-brand"><i class="fa fa-home"></i></a> -->
      <a href="{{STATE_GAMES_LINK}}" class="navbar-brand"><img src="/files/images/stgm/logos/logo_100_100.png" /></a>
      <ul class="nav navbar-nav">        
        <?php echo $menu_html; ?>       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      	<li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="/files/images/logos/asff/asff_logo_20.png" style="margin-top:-9px;"> ASF Foundation <b class="caret"></b></a>
      		<ul class="dropdown-menu fullwidth">
                <li class="fhmm-content">
                	[presentation type="content" code="asffoundation_megamenu" format="snippet" /]
                </li>
      		</ul>
      	</li>
      
      
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-search"></i> Search<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <form class="navbar-form navbar-right" action="/search" method="post" role="search">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<input name="search" type="text" class="form-control" placeholder="Search">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<button type="submit" class="btn btn-primary small">Submit</button>
						</div>							
					</form>
                </li>
            </ul>
        </li>
    </ul><!-- end nav navbar-nav navbar-right -->
      
      
      
      
		<!--
<form class="navbar-form navbar-right" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
-->
    </nav>
  </div>
</header>