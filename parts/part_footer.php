<?php
defined( '_GOOFY' ) or die();
?>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h3 class="m_title">MEET OUR STAFF</h3>
				[article code="info_staff" format="snippet"]
			</div>
			<div class="col-md-4">
				<div class="newsletter-signup">
					<h3 class="m_title">NEWSLETTER SIGNUP</h3>
					<p>By subscribing to our mailing list you will always be update with the latest news from us.</p>
					<form method="post" id="newsletter_subscribe" name="newsletter_form">
						<input type="text" name="nl-email" id="nl-email" value="" placeholder="your.address@email.com" />
						<input type="submit" name="submit" id="nl-submit" value="JOIN US" />
					</form>
					<span id="newsltr_result">Our monthly email newsletter is full of information!</span>
					<p><small>We never spam!</small></p>
				</div><!-- end newsletter-signup -->
			</div>
			<div class="col-md-3">
				<div class="contact-details">
					<h3 class="m_title">GET IN TOUCH</h3>
					<p><strong>(800) 467-0422</strong><br />
					<strong>(334) 280-0065</strong><br />
					Email: <span class="cloaked" title="com|alagames|sports::true"></p>
					<p>ASF Foundation, Inc.<br />
					Mailing: <br />
					PO Box 20327<br />
					Montgomery, AL 36120<br />
					Physical: <br />
					2530 East South Blvd.<br />
					Montgomery, AL 36116</p>
					<p><a href="http://goo.gl/maps/EomdB" target="_blank" class="map-link"><span class="icon-map-marker icon-white"></span> Open in Google Maps</a></p>
				</div><!-- end contact-details -->
			</div>
		</div><!-- end row -->
		
		<div class="row">
			<div class="col-md-6">
				<div class="twitter-feed">
				
					<!-- twitter feeds -->
					<div class="tweets" id="twitterFeed"><small>Please wait whilst our latest tweets load</small></div>
					<a href="{{TWITTER_LINK}}" class="twitter-follow-button" data-show-count="false">Follow @alagames</a><!-- follow button -->
					

				</div><!-- end twitter-feed -->
			</div>
			<div class="col-md-6">
				<ul class="social-share fixclear">
					<li class="sc-facebook">
						<div class="fb-like" data-href="http://facebook.com/alagames" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-font="lucida grande"></div>
					</li><!-- facebook like -->
					<li class="sc-twitter">
						<a href="https://twitter.com/share" class="twitter-share-button" data-text="Get in the Games!" data-via="alagames" data-hashtags="template">Tweet</a>
					</li><!-- tweet button -->
				</ul>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><!-- twitter script -->
			</div>
		</div><!-- end row -->
		
		<div class="row">
			<div class="col-md-12">
				<div class="bottom fixclear">
					<ul class="social-icons fixclear">
						<li class="title">GET SOCIAL</li>
						<li class="social-twitter"><a href="{{TWITTER_LINK}}">Twitter</a></li>
						<li class="social-facebook"><a href="{{FACEBOOK_LINK}}">Facebook</a></li>
						<li class="social-youtube"><a href="{{YOUTUBE_LINK}}">Youtube</a></li>
					</ul><!-- end social-icons -->
					
				</div><!-- end bottom -->
			</div>
		</div><!-- end row -->
		
	</div>
</footer>