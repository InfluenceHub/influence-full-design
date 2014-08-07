<?php
/*
* Template Name: Featured Themes
*/
get_header();

	the_post();
?>
<section id="content">
    <div class="shell">
      <div class="column-two">
          <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featuredthemes.png" /></h1>
          <div class="section-heading">
        <div class="featured-theme">
          <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/_temp-featured-theme.jpg" alt="Favorite Items of the Moment" />
          <h2>featured theme</h2>
          <p>BEYONCE KILLING IT WEARING LEOPARD<br />SKINNY JEANS AT THE COACHELL A FESTIVAL</p>
        </div>
        <div class="featured-theme">
          <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/_temp-featured-theme.jpg" alt="Favorite Items of the Moment" />
          <h2>featured theme</h2>
          <p>BEYONCE KILLING IT WEARING LEOPARD<br />SKINNY JEANS AT THE COACHELL A FESTIVAL</p>
        </div>
        <div class="featured-theme">
          <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/_temp-featured-theme.jpg" alt="Favorite Items of the Moment" />
          <h2>featured theme</h2>
          <p>BEYONCE KILLING IT WEARING LEOPARD<br />SKINNY JEANS AT THE COACHELL A FESTIVAL</p>
        </div>
        <div class="featured-theme">
          <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/_temp-featured-theme.jpg" alt="Favorite Items of the Moment" />
          <h2>featured theme</h2>
          <p>BEYONCE KILLING IT WEARING LEOPARD<br />SKINNY JEANS AT THE COACHELL A FESTIVAL</p>
        </div>
      </div>
      </div>
    </div>
   </div>
 </section>
<?php inf_browse_by(); ?>
<?php get_footer(); ?>   