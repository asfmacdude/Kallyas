/*
function ppOpen(panel, width){
	jQuery.prettyPhoto.close();
	setTimeout(function() {
		jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: width, theme:'pp_kalypso'});
		jQuery.prettyPhoto.open(panel);
	}, 300);
}
*/ // function to open different panel within the panel
	
jQuery(document).ready(function($) {
	jQuery("a[data-rel^='prettyPhoto'], .prettyphoto_link").prettyPhoto({theme:'pp_kalypso',social_tools:false, deeplinking:false});
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({theme:'pp_kalypso'});
	jQuery("a[data-rel^='prettyPhoto[login_panel]']").prettyPhoto({theme:'pp_kalypso', default_width:650, social_tools:false, deeplinking:false});
	
	jQuery(".prettyPhoto_transparent").click(function(e){
		e.preventDefault();
		jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: 980, theme:'pp_kalypso transparent', opacity: 0.95});
		jQuery.prettyPhoto.open($(this).attr('href'),'','');
	});
});
