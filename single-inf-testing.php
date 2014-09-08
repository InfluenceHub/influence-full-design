<?php
  get_header();
	if (empty($interview_flag)) {
    the_post();
  } else { // The interviews page displays the latest interview for now
    global $post;
    $post = $interview[0];
    setup_postdata($interview[0]);
  }
  if ($_GET['test']) {
?>
	
<?php } else { ?>
  <section id="content" class="interview">
		<div class="shell group">
        <h1 style="text-align: center;">INTERVIEWS - <?php echo get_the_title(); ?></h1>
        <!--
        <div class="interview-social-bar">
          <?php
            $thisDESC = urlencode(get_the_content());
            $thisURL = urlencode(get_permalink());
            $influencerName = urlencode(get_the_title());
            $img_obj = urlencode(wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'));
          ?>
          <div class="social-vert">
            <a class="pint" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $thisURL; ?>&amp;media=<?php echo $thisIMG; ?>&amp;description=<?php echo $thisDESC; ?>"></a>
            <a class="tw" target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $thisURL; ?>"></a>
            <a class="tumblr" target="_blank" href="http://www.tumblr.com/share/link?url=<?php echo $thisURL; ?>&amp;name=<?php echo $thisTITLE; ?>&amp;description=<?php echo $thisDESC; ?>"></a>
          </div>
        </div>
        -->
        <div id="topSlider" class="interview-slider group">
          <ul class="slides">
          <?php
            $attachments = new Attachments('inf_interview_attachments', $post->ID);
            $attachments_type = 'attachments';
            $i = 0;
            while($attachment = $attachments->get()) {
              $title = $attachments->field('title');
              $image = wp_get_attachment_image_src($attachments->id(), 'inf_interviewslider');
              echo '<li data-index="' . $i . '"><img src="' . $image[0] . '" alt="' . $title . '" width="1218" /></li>';
              $i++;
            }
          ?>
          </ul><!-- /.slides -->
          <div class="prev top">&nbsp;</div><!-- /.prev -->
          <div class="next top">&nbsp;</div><!-- /.next -->
        </div><!-- /.interview-slider -->
        
        <div class="interview-slider bottom group">
          <ul class="slides">
          <?php
            $attachments = new Attachments('inf_interview_attachments', $post->ID);
            $attachments_type = 'attachments';
            $i = 0;
            //$credit_styling = 'Styling by Danielle Combs';
            //$credit_photos  = 'Photography by Lauren Dukoff';
            //$credit_makeup  = 'Make-up and Hair by Haley MAu';
            
            $credit_styling = 'Styling by ' . carbon_get_the_post_meta('inf_credit_styling');
            $credit_photos   = 'Photography by ' . carbon_get_the_post_meta('inf_credit_photo');
            $credit_makeup  = 'Make-up and Hair by ' . carbon_get_the_post_meta('inf_credit_makeup');
            while($attachment = $attachments->get()) {
              $title = $attachments->field('title');
              $image = wp_get_attachment_image_src($attachments->id(), 'inf_interviewslider_small');
              echo '<li data-index="' . $i . '"><img src="' . $image[0] . '" alt="' . $title . '" width="90" /></li>';
              $i++;
            }
          ?>
          </ul><!-- /.slides -->
          <div class="prev bottom">&nbsp;</div><!-- /.prev -->
          <div class="next bottom">&nbsp;</div><!-- /.next -->
        </div><!-- /.interview-slider-bottom -->
        
        <h2><?php echo get_the_title(); ?></h2>
        
        <div class="credits">
        <h3><?php echo $credit_styling; ?></h3>-
        <h3><?php echo $credit_photos; ?></h3>-
        <h3><?php echo $credit_makeup; ?></h3>
        </div>
        
        <div id="interview_wrapper">
          <div class="column one">
            <h3>THE INTERVIEW</h3>
            <?php echo get_the_content(); ?>
          </div>
          <div class="column two">
            <?php
              $quote_images = carbon_get_the_post_meta('inf_product_quotes', 'complex');
              $products_sections  = carbon_get_the_post_meta('inf_post_products_sections', 'complex');
              if(!empty($products_sections)) {
                foreach($products_sections as $key=>$ps) {
                  if ($key == 0) {
                  $products = $ps['products'];
                  if(!empty($products)) : ?>
                    <h3><?php echo $ps['section_name']; ?></h3>
                    <div class="prod-row">
                      <ul>
                        <?php $index = 1;
                        foreach($products as $p) {
                          $post_obj = get_post($p);
                          if(!empty($post_obj)) :
                            $post_id = $post_obj->ID;
                            $post_title = get_the_title($post_id);
                            $shortTitle = $post_title;
                            if (strlen($shortTitle) > 35) {
                              $shortTitle = substr($shortTitle, 0, 35) . '...';
                            }
                            
                            $product_designer = get_post_meta($post_id, 'designer', true);
                            $buy_link = get_post_meta($post_id, 'product_url', true);
                            $product_price = get_post_meta($post_id, 'price', true); ?>
                            <li>
                              <?php //inf_social_share($buy_link, get_the_title($post_id), wp_get_attachment_thumb_url($post_id), get_the_title($post_id)); ?>
                              <a href="<?php echo esc_url($buy_link); ?>" target="_blank" title="<?php echo $product_designer . ' -- ' . $post_title; ?>">
                                <?php if(has_post_thumbnail($post_id)) : ?>
                                  <span class="img-hold">
                                    <?php echo get_the_post_thumbnail($post_id, 'inf_single_product_large'); ?>
                                  </span>
                                <?php endif; ?>
                                <h5 style="font-weight: bold;"><?php echo $product_designer; ?></h5>
                                <h5><?php echo $shortTitle; ?></h5>
                                <?php if(!empty($product_price)) { ?>
                                  <h6>$<?php echo $product_price; ?></h6>
                                <?php } ?>
                              </a>
                            </li>
                             <?php
                          endif;
                        } ?>
                      </ul>
                    </div><!-- /.prod-row -->
                    <?php 
                      if (!empty($quote_images[$key])) {
                        $image_quote  = wp_get_attachment_image_src($quote_images[$key][inf_product_quote], 'inf_interview_quote');
                        echo '<img src="' . $image_quote[0] . '" class="quote_image" />';
                      }
                    ?>
                  <?php endif;
                  }
                }
              }
            ?>
          </div>
          
          <div class="more_interviews">
        <?php
          $args = array(
            'numberposts' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'inf-interview',
            'post_status' => 'publish'
          ); 
          $interviews = get_posts($args);
          //setup_postdata($interview[0]);
          
          if (count($interviews) > 0) {
            $blockcount = 0;
            foreach($interviews as $key=>$interview) {
              //if ($post->ID != $interview->ID) {
                $title = $interview->post_title;
                $link = get_permalink($interview->ID);
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($interview->ID), 'inf_interviewmore');
                $blockcount++;
                if ($blockcount == 4) { $last = ' last'; }
                if ($blockcount == 1) { echo '<h2>More Interviews '. $post->ID . '</h2>'; }
                
                ?>
                <div class="more_int_block<?php echo $last; ?>">
                <a href="<?php echo $link; ?>">
                <h3><?php echo $title; ?></h3>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $title; ?>" width="200" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/int_more_link.png" />
                </a>
                </div>
                <?php
              //}
            }
          }
        ?>
        <style>
  .more_interviews {
    margin: 0 auto;
    width: 940pxpx;
  }
  #content.interview .more_interviews h2 {
    border-bottom: 1px solid #ccc;
    border-top: 0 none;
  }
  #content.interview .more_int_block h3 {
    font: 15px "AvenirNext LT Pro MediumCn",sans-serif;
    letter-spacing: 1px;
  }
  .more_int_block {
    display: inline-block;
    margin: 0 20px 0 0;
    width: 220px;
  }
  .more_int_block.last {
    margin: 0;
  }
        </style>
      </div>
      
      
        </div>
    </div>
	</section><!-- /#content -->
  
  
  
  
  
  
  
  <?php } ?>
  <?php inf_browse_by(); ?>
<?php get_footer(); ?>