<?php
/*
* Template Name: Interview Archive
*/
get_header();
the_post();
?>
<style>
@font-face {
  font-family: 'AvenirNext LT Pro MediumCn';
  src: url('fonts/AvenirNextLTPro-MediumCn.eot'); /* IE9 Compat Modes */
  src: url('fonts/AvenirNextLTPro-MediumCn.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('fonts/AvenirNextLTPro-MediumCn.woff') format('woff'), /* Modern Browsers */
       url('fonts/AvenirNextLTPro-MediumCn.ttf')  format('truetype'), /* Safari, Android, iOS */
       url('fonts/AvenirNextLTPro-MediumCn.svg#45bd2a838130e26af6af9e7ad5c4bbd6') format('svg'); /* Legacy iOS */
       
  font-style:   normal;
  font-weight:  400;
}
@font-face {
  font-family: 'AvenirNext LT Pro AvenirNextLTPro-BoldCn';
  src: url('fonts/AvenirNextLTPro-BoldCn.eot'); /* IE9 Compat Modes */
  src: url('fonts/AvenirNextLTPro-BoldCn.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('fonts/AvenirNextLTPro-BoldCn.woff') format('woff'), /* Modern Browsers */
       url('fonts/AvenirNextLTPro-BoldCn.ttf')  format('truetype'), /* Safari, Android, iOS */
       url('fonts/AvenirNextLTPro-BoldCn.svg#a86e9067e3ebeec02dfcd4a9c594ca4d') format('svg'); /* Legacy iOS */
       
  font-style:   normal;
  font-weight:  700;
}


@font-face {
  font-family: 'AvenirNext LT Pro Regular';
  src: url('fonts/AvenirNextLTPro-Regular.eot'); /* IE9 Compat Modes */
  src: url('fonts/AvenirNextLTPro-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('fonts/AvenirNextLTPro-Regular.woff') format('woff'), /* Modern Browsers */
       url('fonts/AvenirNextLTPro-Regular.ttf')  format('truetype'), /* Safari, Android, iOS */
       url('fonts/AvenirNextLTPro-Regular.svg#fa20c367c6a148cda65f50238befb5f2') format('svg'); /* Legacy iOS */
       
  font-style:   normal;
  font-weight:  400;
}
@font-face {font-family: 'BaskervilleBT-Italic';src: url('webfonts/2A93D2_0_0.eot');src: url('webfonts/2A93D2_0_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2A93D2_0_0.woff') format('woff'),url('webfonts/2A93D2_0_0.ttf') format('truetype');}
</style>
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
<?php inf_browse_by(); ?>
<?php get_footer(); ?>