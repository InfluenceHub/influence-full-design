<?php
/*
* Template Name: Sign In
*/
?>
<div class="sign-in-pop">
	<div class="close">&nbsp;</div><!-- /.close -->
	<div class="inner login">
		<h3>SIGN IN</h3>
    <form id="login" action="login" method="post">
			<input type="text" name="username" id="username" value="EMAIL:" title="EMAIL:" class="field" style="border: 1px solid #ccc; background: #F4F4F4;"/><br />
			<input type="text" name="password" id="password" value="PASSWORD:" title="PASSWORD:" class="field" style="border: 1px solid #ccc; background: #F4F4F4;" />
			<a class="login-submit" href="#"></a>
      <input class="submit_button" type="submit" value="SUBMIT" name="submit">
			<input type="hidden" name="redirect_to" id="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
      <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
      <p class="status"></p>
		</form>
    <a class="lost switchform">Forgot?</a>
    <a class="sign-up-link switchform">Sign Up</a>
  </div><!-- /.inner -->
  <div class="inner reset">
    <h3>RESET PASSWORD</h3>
    <form id="reset" action="reset" method="post">
			<input type="text" name="username" id="username" value="EMAIL" title="EMAIL" class="field" style="border: 1px solid #ccc; background: #F4F4F4;" /><br />
			<a class="login-submit" href="#"></a>
      <input class="submit_button" type="submit" value="SUBMIT" name="submit">
			<input type="hidden" name="redirect_to" id="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
      <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
      <p class="status"></p>
		</form>
    <a class="signin switchform">SIGN IN</a>
	</div><!-- /.inner -->
  <div class="inner register">
		<h3>SIGN UP</h3>
    <form id="register" action="register" method="post">
			<input type="text" name="username" id="username" value="EMAIL" title="EMAIL" class="field" style="border: 1px solid #ccc; background: #F4F4F4;" /><br />
			<input type="text" name="password" id="password" value="PASSWORD" title="PASSWORD" class="field" style="border: 1px solid #ccc; background: #F4F4F4;" />
			<a class="login-submit" href="#"></a>
      <input class="submit_button" type="submit" value="SUBMIT" name="submit">
			<input type="hidden" name="redirect_to" id="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
      <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
      <p class="status"></p>
		</form>
  </div><!-- /.inner -->
</div><!-- /.sign-in-pop -->