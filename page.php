<?php get_header();

	the_post(); ?>
	<section id="content">
		
		<div class="shell">
      <div class="section-heading">
        <h1><?php the_title(); ?></h1>
        <div class="line"></div>
      </div><!-- /.section-heading -->
			<div class="post default-layout">
				<div class="entry">
					<?php the_content(__('<p class="serif">Read the rest of this page &raquo;</p>')); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				</div>
			</div>
		</div>
	</section>
  <?php inf_browse_by(); ?>
<?php get_footer(); ?>