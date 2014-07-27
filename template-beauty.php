<?php
/*
* Template Name: Beauty
*/
get_header();

	the_post();?>
	<section id="content" class="beauty">
    <div class="shell">
      <div class="section-heading">
        <h1><?php the_title(); ?></h1>
          <div class="line"></div>
      </div><!-- /.section-heading -->
      <div class="inner">
    <?php
    $args = array(
      'numberposts' => 9999,
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'post_type' => 'inf-beauty',
      'post_status' => 'publish'
    ); 
    $list_items = get_posts($args);
    $listblock = '';

    if (count($list_items) > 0) {
      foreach ($list_items as $key => $list_item ) {
        $custom_fields = get_post_custom($list_item->ID);
        $title      = trim(get_the_title($list_item->ID));
        if (strlen($title) > 45) {
          $title = substr($thisTitle, 0, 37) . '...';
        }
        //$position = trim($custom_fields['wpcf-staff-title'][0]);
        //$content  = get_post_field('post_content', $list_item->ID);
        //$slide_link = trim($custom_fields['wpcf-hslide-link-url'][0]);
        //$image_one  = trim($custom_fields['wpcf-hslide-image'][0]);
        //list($width_one, $height_one) = getimagesize($image_one);
        //$image_two  = trim($custom_fields['wpcf-hslide-bottom-image'][0]);
        //list($width_two, $height_two) = getimagesize($image_two);
        //$content    = apply_filters('the_content', get_post_field('post_content', $list_item->ID));
        $image      = wp_get_attachment_image_src(get_post_thumbnail_id($list_item->ID), 'inf_beauty');
      ?>
        <div class="inf-beauty-img">
      <?php
        if (trim($image[0]) > '') {
          echo '<img src="' . $image[0] . '" width="' . $image[1] . '" height="' . $image[2] . '" alt="' . $title . '" />';
        }
      ?>
          <span class="text-box">
            <h4><?php echo $title; ?></h4>
          </span>
        </div>
      <?php
      }
    }
    ?>
      </div><!-- /.inner -->
    </div><!-- /.shell -->
	</section><!-- /#content -->
<?php inf_browse_by(); ?>
<?php get_footer(); ?>