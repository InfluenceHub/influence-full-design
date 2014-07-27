<?php get_header(); ?>
	<section id="content">
		
		<div class="shell">
			<?php inf_page_title(); ?>
			<div class="post default-layout" style="text-align: center;">
				<div class="entry">
					<p><?php printf(__('Please check the URL for proper spelling and capitalization.<br/>If you\'re having trouble locating a destination, try visiting the <a href="%1$s">home page</a>.'), get_option('home')); ?></p>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>