<?php
defined( '_GOOFY' ) or die();
?>

<div class="login_register_stuff hide"><!-- Login/Register Modal forms - hidded by default to be opened through modal -->
	<div id="login_panel">
		<div class="inner-container login-panel">
			<h3 class="m_title">SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES</h3>
			<form id="login_form" name="login_form" method="post">
				<a href="#" class="create_account" onClick="ppOpen('#register_panel', '280');">CREATE ACCOUNT</a>
				<input type="text" id="username" name="username" class="inputbox" placeholder="Username">
				<input type="password" id="password" name="password" class="inputbox" placeholder="Password">
				<input type="submit" id="login" name="submit" value="LOG IN">
				<a href="#" class="login_facebook">login with facebook</a>
			</form>
			<div class="links"><a href="#" onClick="ppOpen('#forgot_panel', '350');">FORGOT YOUR USERNAME?</a> / <a href="#" onClick="ppOpen('#forgot_panel', '350');">FORGOT YOUR PASSWORD?</a></div>
		</div>
	</div><!-- end login panel -->

	<div id="register_panel">
		<div class="inner-container register-panel">
			<h3 class="m_title">CREATE ACCOUNT</h3>
			<form id="register_form" name="register_form" method="post">
				<p>
					<input type="text" id="reg-username" name="username" class="inputbox" placeholder="Username">
				</p>
				<p>
					<input type="text" id="fullname" name="fullname" class="inputbox" placeholder="Your full name">
				</p>
				<p>
					<input type="text" id="reg-email" name="email" class="inputbox" placeholder="Your email">
				</p>
                <p>
					<input type="password" id="reg-password" name="password" class="inputbox" placeholder="Desired password">
				</p>
				<p>
					<input type="password" id="confirm_password" name="confirm_password" class="inputbox" placeholder="Confirm password">
				</p>
				<p>
					<input type="submit" id="signup" name="submit" value="CREATE MY ACCOUNT">
				</p>
			</form>
			<div class="links"><a href="#" onClick="ppOpen('#login_panel', '800');">ALREADY HAVE AN ACCOUNT?</a></div>
		</div>
	</div><!-- end register panel -->

	<div id="forgot_panel">
		<div class="inner-container forgot-panel">
			<h3 class="m_title">FORGOT YOUR DETAILS?</h3>
			<form id="forgot_form" name="forgot_form" method="post">
				<p>
					<input type="text" id="forgot-email" name="email" class="inputbox" placeholder="Email Address">
				</p>
				<p>
					<input type="submit" id="recover" name="submit" value="SEND MY DETAILS!">
				</p>
			</form>
			<div class="links"><a href="#" onClick="ppOpen('#login_panel', '800');">AAH, WAIT, I REMEMBER NOW!</a></div>
		</div>
	</div><!-- end register panel -->
</div><!-- end login register stuff -->