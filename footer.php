		<!-- Footer -->
		<footer id="footer" style="background-color= #F4F4F4;">
			<div class="shell">
				<div class='foot-copy'>
				<?php $copyright_text = carbon_get_theme_option('inf_copyright_text');

				if(!empty($copyright_text)) { ?>
        <img style="display: inline-block; vertical-align: middle;" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/footer-in.png" width="30" height="30" alt="In Logo" />
				<p class="copy"><?php echo str_replace('{year}', date('Y'), $copyright_text); ?></p>
			</div>
				<?php
        }
        wp_nav_menu( array(
					'theme_location'  => 'footer-navigation',
					'container'       => '', 
					'container_class' => '', 
					'menu_class'      => 'foot-nav', 
					'fallback_cb'     => '',
				));
        ?>
			</div>	

		</footer>
		<!-- END Footer -->
		<?php wp_footer(); ?>
	</body>
</html>