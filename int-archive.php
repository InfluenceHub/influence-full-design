<?php
/*
* Template Name: Interview Archive
*/
get_header();
the_post();
?>
<section id="content">
  <div class="shell">
      <ul class="slides">
          <?php
            $attachments = new Attachments('inf_interview_attachments', $post->ID);
            $attachments_type = 'attachments';
            $i = 0;
            while($attachment = $attachments->get()) {
              $title = $attachments->field('title');
              $image = wp_get_attachment_image_src($attachments->id(), 'inf_interviewslider');
              echo '<li data-index="' . $i . '"><img src="' . $image[0] . '" alt="' . $title . '" width="1214" /></li>';
              $i++;
            }
          ?>
          </ul><!-- /.slides -->
        <?php
          $args = array(
            'numberposts' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'inf-interview',
            'post_status' => 'publish'
          );
          $interviews = get_posts($args);
          setup_postdata($interview[0]);
         
          if (count($interviews) > 0) {
            $blockcount = 0;
            foreach($interviews as $key=>$interview) {
              if ($post->ID != $interview->ID) {
                $title = $interview->post_title;
                $link = get_permalink($interview->ID);
                $image = wp_get_attachment_image_src($attachments->id(), 'inf_interviewslider');
                $blockcount++;
                if ($blockcount == 4) { $last = ' last'; }
                if ($blockcount == 1) { echo '<h2>In Focus</h2>'; }
               
                ?>
                <div class="slides <?php echo $last; ?>">
                <a href="<?php echo $link; ?>">
                <h3><?php echo $title; ?></h3>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $title; ?>" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/int_more_link.png" />
                </a>
                </div>
                <?php
              }
            }
          }
        ?>
    </div>
</section>
<?php inf_browse_by(); ?>
<?php get_footer(); ?>