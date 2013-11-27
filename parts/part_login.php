<?php
defined( '_GOOFY' ) or die();
?>

<div class="support_panel" id="login_panel">
	<div class="container">
		<div class="row">
			<div class="span9">
					<div class="inner-container login-panel">
						<h3 class="m_title">SIGN IN YOUR ACCOUNT <span id="result"></span></h3>
						<form id="login_form" name="login_form" method="post">
							<input type="text" id="lgn_username" name="username" class="inputbox" placeholder="Username" value="">
							<input type="password" id="lgn_password" name="password" class="inputbox" placeholder="Password">
							<input type="submit" id="login" name="submit" value="LOG IN">				
						</form>
						<div class="links"><a href="#" onclick="toggleSupportPanels('forgot_panel',200)">FORGOT YOUR USERNAME?</a> / <a href="#" onclick="toggleSupportPanels('forgot_panel',200)">FORGOT YOUR PASSWORD?</a> / <a href="#" onclick="toggleSupportPanels('account_panel',400)">CREATE AN ACCOUNT</a></div>
					</div>
			</div>
		</div>
	</div>
</div>

<div class="support_panel" id="account_panel">
	<div class="container">
		<div class="row">
			<div class="span9">
				<div class="inner-container account-panel">
					<h3 class="m_title">CREATE ACCOUNT</h3>
					<form id="account_form" name="account_form" method="post">
						<p><input type="text" id="acc_username" name="username" class="inputbox" placeholder="Username"></p>
						<p><input type="text" id="acc_fullname" name="fullname" class="inputbox" placeholder="Your full name"></p>
						<p><input type="text" id="acc_email" name="email" class="inputbox" placeholder="Your email"></p>
		                <p><input type="password" id="acc_password" name="password" class="inputbox" placeholder="Desired password"></p>
						<p><input type="password" id="acc_confirm_password" name="confirm_password" class="inputbox" placeholder="Confirm password"></p>
						<p><input type="submit" id="signup" name="submit" value="CREATE MY ACCOUNT"></p>
					</form>
					<div class="links"><a href="#" onclick="toggleSupportPanels('login_panel',160)">ALREADY HAVE AN ACCOUNT?</a></div>
				</div><!-- end register panel -->
			</div>
		</div>
	</div>
</div>

<div class="support_panel" id="forgot_panel">
	<div class="container">
		<div class="row">
			<div class="span9">
				<div class="inner-container forgot-panel">
					<h3 class="m_title">FORGOT YOUR DETAILS?</h3>
					<form id="forgot_form" name="forgot_form" method="post">
						<p><input type="text" id="forgot-email" name="email" class="inputbox" placeholder="Email Address"></p>
						<p><input type="submit" id="recover" name="submit" value="SEND MY DETAILS!"></p>
					</form>
					<div class="links"><a href="#" onclick="toggleSupportPanels('login_panel',160)">AAH, WAIT, I REMEMBER NOW!</a></div>
				</div><!-- end forgot panel -->
			</div>
		</div>
	</div>
</div>