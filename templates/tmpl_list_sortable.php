<?php

/***********
 *
 * List template display sortable portfolio page
 * Uses isotope plugin for sorting
 */

$list_setup = array();

$list_setup['FIELD_VALUES']     = array("TITLE","DESCRIPTION","OBJECT_LINK","LINK","IMAGE_PATH","TYPE","ITEM_CATEGORIES_LIST","ITEM_CATEGORY","ITEM_DATE");
$list_setup['CONTAINER_VALUES'] = array("ITEM_CATEGORIES_LIST");
$list_setup['IMAGE_SIZE']       = '370_200';

// CONTAINER template to wrap entire list
$list_setup['CONTAINER']    = <<<ENDHTML
<div class="row hg-portfolio ">
	<div>
		<div class="hg-portfolio-sortable">
			<div id="sorting" class="fixclear">
				<span class="sortTitle"> Sort By: </span>
				<ul id="sortBy" class="option-set " data-option-key="sortBy" data-default="">
					<li><a href="#sortBy=name" data-option-value="name">Name</a></li>
					<li><a href="#sortBy=date" data-option-value="date">Date</a></li>
				</ul>				
				<span class="sortTitle"> Direction: </span>
				<ul id="sort-direction" class="option-set " data-option-key="sortAscending">
					<li><a href="#sortAscending=true" data-option-value="true">ASC</a></li>
					<li><a href="#sortAscending=false" data-option-value="false">DESC</a></li>
				</ul>				
			</div><!-- end sorting toolbar -->
			<ul id="portfolio-nav" class="fixclear">
				<li class="current"><a href="#" data-filter="*">All</a></li>
				%ITEM_CATEGORIES_LIST%
			</ul><!-- end nav toolbar -->
			
			<div class="clear"></div>
		
			<ul id="thumbs" class="fixclear">
				%CONTENT%
			</ul><!-- end items list -->
							
		</div><!-- end Portfolio page -->
	</div>
</div><!-- end row -->
ENDHTML;

// IMAGE only template which will be inserted into the ITEM
//
// data-rel="prettyPhoto" data-type="%TYPE%"
// 
$list_setup['IMAGE'] = <<<ENDHTML
<a href="%OBJECT_LINK%" class="hoverLink thumbnail lightbox" >
	<img src="%IMAGE_PATH%" alt="" />
</a>
ENDHTML;

// ITEM template
$list_setup['ITEM'] = <<<ENDHTML
<li class="item %ITEM_CATEGORY% even" data-date="%ITEM_DATE%">
	<div class="inner-item">
		%IMAGE%
		<h4 class="title">
			<a href="%LINK%"><span class="name">%TITLE%</span></a>
		</h4>
		<span class="moduleDesc">
			<p>%DESCRIPTION%</p>
		</span>
		<div class="clear"></div>
	</div><!-- end ITEM (.inner-item) -->
</li>
ENDHTML;

// NO TAGS setup template

return $list_setup;