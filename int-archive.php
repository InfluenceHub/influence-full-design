<?php
/*
* Template Name: Interview Archive
*/
get_header();
the_post();
?>
<section id="content">
  <div class="shell">

      <div class="section-heading" style="margin-bottom: 70px;">
        <h1><span>IN</span> focus</h1>
        <div class="line"></div>
      </div>

        <?php
          $num_posts = 4;
          $args = array(
            'numberposts' => $num_posts,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'inf-interview',
            'post_status' => 'publish'
          );
          $interviews = get_posts($args);

          if (count($interviews) > 0) { ?>

            <?php 
            $blockcount = 0;
            
            foreach ($interviews as $k => $post) {
                setup_postdata($post);
                $attachments = new Attachments('inf_interview_attachments', $post->ID);
              ?>

                <div class="column-three">
                    <div class="column-left int-archive-column-left">
                      <a href="<?php the_permalink() ?>" class="int-archive-title-link">
                        <h3 style="font-family: BaskervilleBT-Italic; font-weight: 300; text-transform: none; font-size: 30px;"><?php the_title(); ?></h3>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/int_more_link.png" />
                      </a>
                    </div>
                    <div class="column-right int-archive-column-right">
                      <div class="int-archive-image-link-wrap">
                        <?php 
                          if($attachments->exist()){
                            $first_attachment = $attachments->get_single(0);

                            $image = wp_get_attachment_image_src($first_attachment->id, 'inf_interviewslider');

                            echo '<img src="'.$image[0].'" style="width:100%">';

                          }
                          ?>
                        <a href="<?php the_permalink() ?>" class="int-archive-image-link-overlay">
                        View More
                        </a>
                      </div>
                    </div>
                </div>
              <?php 

              $blockcount++;

              if($blockcount != count($interviews)){
                echo '<div class="int-archive-item-divider"></div>';
              }

            }
          }
         
        ?>
    </div>
</section>
<?php inf_footer_signup() ?>
<?php get_footer(); ?>