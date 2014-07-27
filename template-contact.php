<?php
/*
* Template Name: Contact
*/
get_header();

	the_post();
?>
	<section id="content" class="contactpage">
		
		<div class="shell">
      <div class="section-heading" style="margin-bottom: 70px;">
        <h1><span>CONTACT</span>us</h1>
        <div class="line"></div>
      </div><!-- /.section-heading -->
      <?php the_content(); ?>
		</div>
	</section>
  <?php inf_browse_by(); ?>
<?php get_footer(); ?>