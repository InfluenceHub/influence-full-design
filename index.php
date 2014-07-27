<?php get_header(); ?>
	<section id="content">
		<div class="shell">
			<div class="cols browse-col">
				<?php if(is_home()) {
					$title = 'LATEST LOOKS';
				} elseif(is_category()) {
					$title = strtoupper(single_cat_title( '', false ));
				} else {
					$title = 'BROWSE';
				} ?>
				<h1 class="flag shop"><?php echo $title; ?></h1>
				<?php get_template_part( 'loop' ); ?>
			</div><!-- /.cols -->
		</div><!-- /.shell -->
	</section><!-- /#content -->
  <?php inf_browse_by(); ?>
<?php get_footer(); ?>