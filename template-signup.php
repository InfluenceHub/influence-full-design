<?php
/*
* Template Name: Sign Up
*/
?>
<div class="sign-up-pop pop">
	<div class="inner">
		<h2>Create an account to follow<br/> your favorite influencers</h2>
		<div class="left-pop">
			<h4>GET Weekly UPDATES ON YOUR<br/> FAVES LATEST LOOKS</h4>
			<form action="<?php echo wp_registration_url(); ?>" method="POST">
				<input type="text" name="user_login" value="USERNAME" title="USERNAME" class="field" />
				<input type="text" name="user_email" value="EMAIL" title="EMAIL" class="field" />
				<a href="<?php echo wp_login_url(); ?>?loginFacebook=1&amp;redirect=<?php echo $_SERVER['HTTP_REFERER']; ?>" class="facebook-btn" onclick="window.location = '<?php echo wp_login_url(); ?>?loginFacebook=1&amp;redirect='+window.location.href; return false;">&nbsp;</a>
			</form><!-- /.check -->
		</div>
		<div class="right-link">
			<a href="#" class="colorbox-close">MAYBE LATER.</a>
		</div><!-- /.right-link -->
	</div><!-- /.inner -->
</div><!-- /.sign-up-pop -->