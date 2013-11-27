<?php
defined( '_GOOFY' ) or die();

/*
global $walt;
$js_director = $walt->getImagineer('jsdirector');
$css_director = $walt->getImagineer('cssdirector');
$js_director->loadJSAssets(array('SUPERFISH','SUPERFISHSUBS'));
$css_director->loadCSSAssets(array('SUPERFISH'));
*/

$menu_specs['TYPE'] = 'menu';
$menu_specs['NAME'] = 'Main Menu Mobile';

?>

<?php echo wed_getPresentation($menu_specs); ?>