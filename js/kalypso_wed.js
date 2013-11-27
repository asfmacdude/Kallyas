/*
Title:   Main JS Scripts file dedicated to this template
Author:  http://themeforest.net/user/hogash // Marius Hogas  */

var domainroot="http://hogash.com/demo/kalypso_html/"; // Specify your domain below. The search results will only be made for your website

var hasChaser = 0;			// Enable Chaser menu (open on scroll) ?   1 - Yes / 0 - No

;(function($){
	
	if(hasChaser == 1) {
		$(window).load(function(){
			var doc = $(document), 
				win = $(window), chaser, forch,
				forchBottom, visible;
			function shown() { visible = true; }
			function hidden() { visible = false; }
			
			
			
			chaser = $('#main_menu ul.sf-menu').clone().hide()
				.appendTo(document.body)
				.wrap("<div class='chaser'><div class='container'><div class='row'><div class='span12'></div></div></div></div>");
				
			$('.chaser ul.sf-menu').supersubs({ minWidth: 12, maxWidth: 27, extraWidth: 1}).superfish({delay:250, dropShadows:false, autoArrows:true, speed:300});
			
			forch = $('#content').first();
			forchBottom = forch.offset().top + 2;
			hidden();
			win.on('scroll', function () {
				var top = doc.scrollTop();
				if (!visible && top > forchBottom) {
					//chaser.slideDown(300, shown);
					chaser.fadeIn(300, shown);
				} else if (visible && top < forchBottom) {
					//chaser.slideUp(200, hidden);
					chaser.fadeOut(200, hidden);
				}
			});
			/* Activate Superfish Menu for Chaser */
			/* $('.chaser ul.sf-menu').supersubs({ minWidth: 12, maxWidth: 27, extraWidth: 1}).superfish({delay:250, dropShadows:false, autoArrows:true, speed:300}); */
		});
	}

	$(document).ready(function(e) {
		
		// activate placeholders for older browsers
        $('input, textarea').placeholder();
		
		/* Activate Superfish Menu */
		var sfDelay = 200;
		if($('html').hasClass('isie'))
			sfDelay = 300;
		$('#main_menu > ul')
		.supersubs({ 
            minWidth:    12,   // minimum width of sub-menus in em units 
            maxWidth:    27,   // maximum width of sub-menus in em units 
            extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
        }).superfish({
			delay:sfDelay,
			dropShadows:false,
			autoArrows:true,
			speed:300
		});
		
		// --- search panel
		var searchBtn = $('#search').children('.searchBtn'),
			searchPanel = searchBtn.next(),
			searchP = searchBtn.parent();
		searchBtn.click(function(e){
			e.preventDefault();
			var _t = $(this);
			if(!_t.hasClass('active')) {
				_t.addClass('active')
				.find('span')
				.removeClass('icon-search icon-white')
				.addClass('icon-remove');
				searchPanel.show();
			} else {
				_t.removeClass('active')
				.find('span')
				.addClass('icon-search icon-white')
				.removeClass('icon-remove');
				searchPanel.hide();
			}
		}); // searchBtn.click //
		$(document).click(function(){
			searchBtn.removeClass('active')
				.find('span')
				.addClass('icon-search icon-white')
				.removeClass('icon-remove');
			searchPanel.hide(0);
		});
		searchP.click(function(event){
			event.stopPropagation();
		});
		// --- end search panel

		/* sliding panel toggle (support panel) */
		var contact_panel = $('#contact_panel');
		
		
		$('#open_contact_panel').toggle(function(e){
			e.preventDefault();
			login_panel.animate({  height:0 }, {duration:100, queue:false, easing:'easeOutQuint'});
			$(this).removeClass('active');
			contact_panel.animate({  height:130 }, {duration:100, queue:false, easing:'easeOutQuint'});
			$(this).addClass('active');
		}, function(){
			contact_panel.animate({  height:0 }, {duration:100, queue:false, easing:'easeOutQuint'});
			$(this).removeClass('active');
		});
		// --- end sliding panel
		
		/* sliding panel toggle (support panel) */
		var login_panel = $('#login_panel');
		$('#open_login_panel').toggle(function(e){
			e.preventDefault();
			contact_panel.animate({  height:0 }, {duration:100, queue:false, easing:'easeOutQuint'});
			$(this).removeClass('active');
			login_panel.animate({  height:160 }, {duration:100, queue:false, easing:'easeOutQuint'});
			$(this).addClass('active');
		}, function(){
			login_panel.animate({  height:0 }, {duration:100, queue:false, easing:'easeOutQuint'});
			$(this).removeClass('active');
		});
		// --- end sliding panel
		
		/* scroll to top */
        function totop_button(a) {
            var b = $("#totop");
            b.removeClass("off on");
            if (a == "on") { b.addClass("on") } else { b.addClass("off") }
        }
        window.setInterval(function () {
            var b = $(this).scrollTop();
            var c = $(this).height();
            if (b > 0) { var d = b + c / 2 } else { var d = 1 }
            if (d < 1e3) { totop_button("off") } else { totop_button("on") }
        }, 300);
		
        $("#totop").click(function (e) {
            e.preventDefault();
            $('body,html').animate({scrollTop:0},800, 'easeOutExpo');
        });
		// --- end scroll to top
		
		// activate tooltips
		$('*[data-rel="tooltip"], *[rel="tooltip"]').tooltip();
		
		//activate collapsible accordions
		$(".collapse").collapse();

		// LOAD DATA INTO THE CURRENT-DATE DIV
		$.ajax({
		  url: "/themes/Kallyas/php_helpers/date.php",
		  success: function(data){
			$("#current-date").html(data);
		  }
		});
		
		
		// PREPARE THE NEWSLETTER AND SEND DATA TO MAILCHIMP
		$('#newsletter_subscribe').submit(function() {
			$.ajax({
				url: '/themes/Kallyas/php_helpers/newsletter_asff.php',
				type: 'POST',
				data: {
					email: $('#nl-email').attr('value'),
					yname: 'Kalypso Template User' // Change here with something different
				},
				success: function(data){
					$('#result').html(data).css('color', 'green');
				},
				error: function() {
					$('#result').html('Sorry, an error occurred.').css('color', 'red');
				}
			});
			return false;
		});
		
	});	// doc.ready end //
	
	$(window).load(function(){
		
		/*
		* ### HOW TO CREATE A VALID ID TO USE: ### 
		* Go to www.twitter.com and sign in as normal, go to your settings page. 
		* Go to Widgets on the left hand side. 
		* Create a new widget for what you need eg user timeline or search etc.  
		* Feel free to check exclude replies if you dont want replies in results. 
		* Now go back to settings page, and then go back to widgets page, you should 
		* see the widget you just created. Click edit. 
		* Now look at the URL in your web browser, you will see a long number like this: 
		* 345735908357048478 
		* Use this as your ID below instead! 
		*/
		// twitterFetcher.fetch('377164872720449536', 'twitterFeed', 1, true, false);
		
		if($('body').hasClass('slider_fixed')) {
			
			//$('.slider_fixed #slideshow').
			$('.inner-page').css({'top':(parseInt($('.slider_fixed #slideshow .item').first().css('height'))-10)+'px', 'background-color': $('body').css('background-color')});
		}
		var pageLoading = $("#page-loading");
		if(pageLoading.length > 0){
			setTimeout(function() {
				pageLoading.fadeOut();
			}, 1000);
		}
		
		$('.hoverBorder').each(function(index, element) {
            $(this).find('img').wrap('<span class="hoverBorderWrapper"/>').after('<span class="theHoverBorder"></span>');
        });
		
		//grayscale effect
	    var grayHover = $('.grayHover'),
	        grayHoverImg = grayHover.find('img'),
	        spd = 200;
		
	    grayHoverImg.each(function(){
	        var el = $(this);
			el.parent().css({width:el.width(), height:el.height()});
	        el.clone().addClass('grayscale').css({"z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
	            var el = $(this);
	            el.dequeue();
	        });
	        this.src = grayscale(this.src);
	        el.css({"top":"-"+ el.height() +"px"});
	    });
	    grayHover.mouseover(function(){
	        $(this).find('img:first').animate({opacity:1}, {queue:false, duration: spd});
	    });
	    grayHover.mouseout(function(){
	        $(this).find('img.grayscale').animate({opacity:0}, {queue:false, duration: spd});
	    }); // end grayscale efect
		
		// hover effect
		$('.hover_effect').each(function(){
			var hoverLink = $(this),
				hoverLinkImg = hoverLink.find('img'),
				hoverLinkTitle = hoverLink.attr('title');
			hoverLink.css({'width':hoverLinkImg.width(), 'height':hoverLinkImg.height()}).append("<span class=\"title\">"+hoverLinkTitle+"</span>");
		});
		
		//hoverlink
		$("a.hoverLink").each(function(index, element) {
            var $t = $(this),
				dtype = $t.data('type'),
				img = $t.find('img'),
				sp = 'fast',
				app = '<span class="icon_wrap"><span class="icon '+dtype+'"></span></span>';
			$t.append(app);
			
			$t.hover(function(){
				img.animate({'opacity': 0.5}, sp);
				$t.find('.icon_wrap').animate({'opacity': 1}, sp);
			}, function(){
				img.animate({'opacity': 1}, sp);
				$t.find('.icon_wrap').animate({'opacity': 0}, sp);
			});
        });
		
	});
	
})(jQuery);


function toggleSupportPanels(panel,height)
{
	var panel_toggle = $("#"+panel);
	var panel_toggle_open = panel_toggle.hasClass('active');
	
	console.log(panel_toggle_open);
	
	$(".support_panel").each(function(index, element){
		var checkClass = $(this).hasClass('active');
		console.log(checkClass);
		
		if (checkClass)
		{
			console.log("removing active");
			$(this).animate({  height:0 }, {duration:100, queue:false, easing:'easeOutQuint'});
			$(this).removeClass('active');
		}
	});
	
	if (!panel_toggle_open)
	{
		panel_toggle.animate({  height:Number(height) }, {duration:500, queue:false, easing:'easeOutQuint'});
		panel_toggle.addClass('active');
	}
}
		

function grayscale(src) {
      
	var canvas = document.createElement('canvas');
	var ctx = canvas.getContext('2d');
	var imgObj = new Image();
	imgObj.src = src;
	canvas.width = imgObj.width;
	canvas.height = imgObj.height;
	ctx.drawImage(imgObj, 0, 0);
	var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
	for(var y = 0; y < imgPixels.height; y++){
		for(var x = 0; x < imgPixels.width; x++){
			var i = (y * 4) * imgPixels.width + x * 4;
			var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
			imgPixels.data[i] = avg;
			imgPixels.data[i + 1] = avg;
			imgPixels.data[i + 2] = avg;
		}
	}
	ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
	return canvas.toDataURL();
   
}

function Gsitesearch(curobj){
	curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
}