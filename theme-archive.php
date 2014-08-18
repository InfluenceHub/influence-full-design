<?php
/*
* Template Name: Theme Archive
*/
get_header();
the_post();
?>
<section id="content">
  <div class="shell">

      <div class="section-heading" style="margin-bottom: 70px;">
        <h1><span>Featured</span>THEMES</h1>
        <div class="line"></div>
      </div>

        <?php
          $num_posts = 4;
          $args = array(
            'numberposts' => $num_posts,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'inf_theme',
            'post_status' => 'publish'
          );
          $themes = get_posts($args);

          if (count($themes) > 0) { ?>

            <?php 
            $blockcount = 0;
            
            foreach ($themes as $k => $post) {
                setup_postdata($post);
                $attachments = new Attachments('inf_featured_images', $post->ID);
              ?>

                <div class="column-three">
                    <div class="theme-archive-column-left">
                    <a href="<?php the_permalink() ?>" class="theme-archive-image-link">
                      <div class="theme-image-sizer">

                          <?php if (has_post_thumbnail()) {
                              the_post_thumbnail('inf_featured_theme');
                          } ?>  
                       </div>
                        <h3 style="font-family: BaskervilleBT-Italic; font-weight: 300; text-transform: none; font-size: 30px;"><?php the_title(); ?></h3>
                      </a>
                    </div>
                    <!--<div class="column-right int-archive-column-right">
                      <div class="int-archive-image-link-wrap">
                        <?php 
                          if($attachments->exist()){
                            $first_attachment = $attachments->get_single(0);

                            $image = wp_get_attachment_image_src($first_attachment->id, 'inf_featured_images');

                            echo '<img src="'.$image[1].'" style="width:100%">';

                          }
                          ?>
                        <a href="<?php the_permalink() ?>" class="int-archive-image-link-overlay">
                        View More
                        </a>
                      </div>
                    </div>
                </div> -->
              <?php 

              $blockcount++;

              if($blockcount != count($themes)){
                echo '<div class="theme-archive-item-divider"></div>';
              }

            }
          }
         
        ?>
    </div>
</section>
<?php inf_footer_signup() ?>
<?php get_footer(); ?>