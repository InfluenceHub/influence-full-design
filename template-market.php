<?php
/*
* Template Name: Market Story
*/
get_header();

the_post();
//Detect mobile
?>
<?php
function inf_market_slider() {
  global $post;
  $images = carbon_get_post_meta($post->ID, 'inf_featured_image', 'complex');
  foreach($images as $image) {
    $image_full  = wp_get_attachment_image_src($image[inf_featured_image], 'full');
    $image_small = wp_get_attachment_image_src($image[inf_featured_image], 'inf_market_slider');
    ?>
    <li><a href="<?php echo $image_full[0]; ?>" class="colorbox">
      <img src="<?php echo $image_small[0]; ?>" class="inf_single_image" />
		</a></li>
    <?php
  }
}
?>