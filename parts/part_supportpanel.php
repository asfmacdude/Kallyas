<?php
defined( '_GOOFY' ) or die();

$login_html = '';

if (!wed_loggedIn())
{
	$login_html = '{[parts/part_login.php]}';
}

?>

<div class="support_panel" id="contact_panel">
	<div class="container">
		<div class="row">
			<div class="span9">
				<h4 class="m_title">CONTACT US</h4>
				<div class="m_content how_to_shop">
					<div class="row">
						<div class="span3">
							Visit our contact page for more information about the ASF Foundation.
							<a href="/contact" class="btn">Visit Our Contact Page</a>
						</div>
						<div class="span3">
							<strong>Call Us</strong><br>
							800.467.0422<br>
							334.280.0065<br>
							334.280.0988 Fax
						</div>
						<div class="span3">
							<strong>Mail Us</strong><br>
							PO Box 20327<br>
							Montgomery, AL 36120
						</div>
					</div>
				</div><!-- end how to shop steps -->
			</div>
			<div class="span3">
				<h4 class="m_title">Office Hours</h4>
				<div class="m_content">
				Mon-Fri 8:30 AM - 5:00 PM<br>
				Physical Address<br>
				2530 East South Blvd.<br>
				Montgomery, AL 36116
				</div>
			</div>
		</div>
	</div>
</div><!-- end support panel -->

<?php echo($login_html); ?>