<?php
/*
* Template Name: Interviews
*/
get_header();
the_post();
?>

<?php
  // The interviews page displays the latest interview for now
  $args = array(
    'numberposts' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'inf-interview',
    'post_status' => 'publish'
  ); 
  $interview = get_posts($args);
  setup_postdata($interview[0]);
  $interview_flag = true;
  include('single-inf-interview.php');
  die;
?>
	<section id="content" class="interviews">
		<div class="shell">
      <div class="section-heading">
        <h1><?php the_title(); ?></h1>
        <div class="line"></div>
      </div><!-- /.section-heading -->
      <h2>featured influencers</h2>
        <?php
        $args = array(
          'numberposts' => 9999,
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'inf-interview',
          'post_status' => 'publish'
        ); 
        $list_items = get_posts($args);

        if (count($list_items) > 0) {
          foreach ($list_items as $key => $list_item) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($list_item->ID), 'inf_interview_featured');
            $title    = trim(get_the_title($list_item->ID));
            $excerpt  = get_excerpt_by_id($list_item->ID, 25);
            $link_url = get_permalink($list_item->ID);
            $extra_class = '';
            if (($key+1) % 3 == 0) {
              $extra_class = ' last';
            }
            
            ?>
              <a href="<?php echo $link_url; ?>">
                <div class="interview-block<?php echo $extra_class; ?>">
                  <h3><?php echo $title; ?></h3>
                  <div class="inner">
                    <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $title; ?>" />
                    <p><?php echo $excerpt; ?></p>
                    <a class="shootlink" href="<?php echo $link_url; ?>"><span>The Shoot</span></a>
                  </div>
                </div>
              </a>
            <?php
          }
        }
        
        function get_excerpt_by_id($post_id, $excerpt_length){
          $the_post = get_post($post_id);
          $the_excerpt = $the_post->post_content;
          $the_excerpt = strip_tags(strip_shortcodes($the_excerpt));
          $words = explode(' ', $the_excerpt, $excerpt_length + 1);
          if(count($words) > $excerpt_length) {
            array_pop($words);
            array_push($words, '…');
            $the_excerpt = implode(' ', $words);
          }
          $the_excerpt = '<p>' . $the_excerpt . '</p>';
          return $the_excerpt;
        }
       ?>
		</div>
	</section>
  <?php inf_browse_by(); ?>
<?php get_footer(); ?>