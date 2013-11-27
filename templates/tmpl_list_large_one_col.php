<?php

/***********
 *
 * List template display larger picture on left, one column format
 * Used mainly for large feature type listings
 */

$list_setup = array();

$list_setup['FIELD_VALUES'] = array("TITLE","DESCRIPTION","OBJECT_LINK","LINK","IMAGE_PATH","IMAGE","TYPE");
$list_setup['IMAGE_SIZE']   = '370_200';

// CONTAINER template to wrap entire list
$list_setup['CONTAINER']    = <<<ENDHTML
<div class="row hg-portfolio ">
	<div class="span9">
		%CONTENT%
	</div>
</div>
ENDHTML;

// IMAGE only template which will be inserted into the ITEM
$list_setup['IMAGE'] = <<<ENDHTML
<div class="span4">
	<div class="img-intro">
		<a href="%OBJECT_LINK%" data-rel="prettyPhoto" data-type="%TYPE%" class="hoverLink" ><img src="%IMAGE_PATH%"  /></a>
	</div><!-- img intro -->
</div>
ENDHTML;

// ITEM template
$list_setup['ITEM'] = <<<ENDHTML
<div class="row">
	%IMAGE%
	<div class="span5">
		<h3 class="title"><a href="%LINK%" >%TITLE%</a></h3>
		<div class="pt-cat-desc">
			%DESCRIPTION%
		</div><!-- pt cat desc -->
		%TAGS%
	</div>
	<div class="span9">
		<hr class="bs-docs-separator">
	</div>
</div>
ENDHTML;

// TAGS setup template
$list_setup['TAGS']['WRAP'] = <<<ENDHTML
<div class="itemTagsBlock">
	<span class="icon-tags"></span>
	<span>Tagged under:</span>
		<ul class="itemTags">
			%CONTENT%
		</ul>
	<div class="clear"></div>
</div><!-- end tags blocks -->
ENDHTML;

$list_setup['TAGS']['ITEM'] = <<<ENDHTML
<li><a href="%TAG_LINK%">%TAG_NAME%</a>, </li>
ENDHTML;

return $list_setup;