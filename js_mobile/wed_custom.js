$(function() {
 	$('#navigation').click(function() {
 		$('.navigation').slideToggle('fast');
 		return false;
 	});
});


$(".customizeWindow").click(function() {
	$(".customizeMe").css("display", "block");
});

$("#close").click(function() {
	$(".customizeMe").css("display", "none");
});

$("#custSearch").click(function() {
	$(".customizeMe").css("display", "none");
	$("#tweet_box h1 em").html($("#keyword").val());
});

// $(".tweets").liveTweets({operator: "#envato", liveTweetsToken: "xNj9VrwKjCd5MKeSgLxt61H6fwxwX9555WOVaY8ev0"});

/*
$(function(){
   SyntaxHighlighter.all();
 });
 $(window).load(function(){
   $('.flexslider').flexslider({
     animation: "slide",
     controlNav: "thumbnails",
     start: function(slider){
       $('body').removeClass('loading');
     }
   });
 });
*/