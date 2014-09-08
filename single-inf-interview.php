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
  <section class="interview">
    <div class="shell group">
    <div class="top_ad-block no-mobile" style="margin-top: 25px;">
<!-- 728x90_Interior -->
<div id='div-gpt-ad-1410204268874-0' style='width:728px; height:90px; margin: 0 auto;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1410204268874-0'); });
</script>
</div>
      <!-- BEGIN IFRAME TAG - theinfluence 728x90 < - DO NOT MODIFY -->
      <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2411079&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="728" HEIGHT="90"></IFRAME>-->
      <!-- END TAG -->
    </div>
<br class="no-mobile" /><br class="no-mobile" /><br class="no-mobile" />
        </div>
        <div id="topSlider" class="interview-slider group">
          <ul class="slides" style=" margin-left: -50px;" >
          <?php
            $attachments = new Attachments('inf_interview_attachments', $post->ID);
            $attachments_type = 'attachments';  
            $i = 0;
            while($attachment = $attachments->get()) {
              $title = $attachments->field('title');
              $image = wp_get_attachment_image_src($attachments->id(), 'inf_interviewslider');
              echo '<li data-index="' . $i . '"><img src="' . $image[0] . '" alt="' . $title . '" width="1191px" height="794px" " /></li>';
              $i++;
            }  
          ?>
          </ul><!-- /.slides -->
          <div class="prev top">&nbsp;</div><!-- /.prev -->
          <div class="next top">&nbsp;</div><!-- /.next -->
        </div><!-- /.interview-slider -->   
        
<div class="interview-slider bottom group">
          <ul class="slides" style="margin-left: 50%">
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
              echo '<li data-index="' . $i . '" style="margin-left: 50%;"><img src="' . $image[0] . '" alt="' . $title . '" /></li>';
              $i++;
            }
          ?> 
          </ul>
          </div>
          </section>
        <section id="content" class="interview">
        <!-- /.interview-slider-bottom -->
                
        <!-- <div class="credits">
        <h2><?php echo $credit_styling; ?></h2>-
        <h2><?php echo $credit_photos; ?></h2>-
        <h2><?php echo $credit_makeup; ?></h2>
        </div> -->
        
        <div id="interview_wrapper">
          <div class="column one">
	  <!--<h2 style="text-align:center;"><?php echo $credit_styling ?></h2>
        <h2 style="text-align:center;"> <?php echo $credit_photos ?></h2>
        <h2 style="text-align:center;"> <?php echo $credit_makeup ?></h2>--><br />
<!-- 	   <h3><?php get_the_title(); ?></h3>
 -->            <?php echo the_content(); ?>              
          </div>
          
            <?php 
            
            //if(!empty($exact_items)) { 
            if(!empty($products_sections)) { 
            ?>
              <h2 class="prod-section">THE LOOK</h2>
              <div id="shop-slider-small" class="prod-row small">
                <ul class="slides">
                  <?php 
                  //foreach($exact_items as $post_id) {
                  $prodCount = count($products_sections[0]['products']);
                  foreach($products_sections[0]['products'] as $key=>$post_id) {
                    $product_designer = get_post_meta($post_id, 'designer', true);
                    $shortDesigner = $product_designer;
                    if (strlen($shortDesigner) > 24) {
                      $shortDesigner = substr($shortDesigner, 0, 24) . '...';
                    }
                    $product_price = get_post_meta($post_id, 'price', true);
                    $product_link = get_post_meta($post_id, 'product_url', true);
                    $shortTitle = get_the_title($post_id);
                    if (strlen($shortTitle) > 24) {
                      $shortTitle = substr($shortTitle, 0, 24) . '...';
                    }
                     ?>
                    <li>
                      <?php //inf_social_share($product_link, get_the_title($post_id), wp_get_attachment_thumb_url($post_id), get_the_title($post_id)); ?>
                      <a href="<?php echo esc_url($product_link); ?>" target="_blank" title="<?php echo $product_designer . ' -- ' . get_the_title($post_id); ?>">
                        <?php if(has_post_thumbnail($post_id)) { ?>
                          <span class="img-hold">
                            <?php echo get_the_post_thumbnail($post_id, 'inf_single_product'); ?>
                          </span> 
                        <?php } ?>
                        <h5 style="font-weight: bold;"><?php echo $shortDesigner; ?></h5>
                        <h5><?php echo $shortTitle; ?></h5>
                        <?php
                          if(!empty($product_price)) {
                            if ($product_price == 'not in stock') {
                              ?>
                                <h6>(<?php echo $product_price; ?>)</h6>
                              <?php
                            } else {
                              ?>
                                <h6>$<?php echo $product_price; ?></h6>
                              <?php
                            }
                          }
                        ?>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
                <div class="prev">&nbsp;</div><!-- /.prev -->
                <div class="next">&nbsp;</div><!-- /.next -->
              </div><!-- /.prod-row small -->
            <?php } ?>
          </div><!-- /.right-col -->
          </div><!-- /.column-three -->
        </div><!-- /.shop-main -->
        <?php
        if (!empty($post_categories)) {
          echo '<div class="category-list">';
          $caption = the_post_thumbnail_caption($post->ID);
          if (trim($caption) > '') {
            echo '<span>' . trim($caption) . '</span> ';
          }
          foreach($post_categories as $post_category) {
            $category_link = get_category_link($post_category->term_id);
            echo '<a href="'.$category_link.'">'.strtolower($post_category->name).'</a>';
          }
          echo '</div>';
        }
        ?>
      <div class="shop">
      <div class="column-three bottom" style="margin-top: 75px;">
       <h1> Shop The Shoot </h1>
        <?php $products_sections = carbon_get_the_post_meta('inf_post_products_sections', 'complex');
        if(!empty($products_sections)) {
          foreach($products_sections as $key=>$ps) {
              $products = $ps['products'];
              if(!empty($products)) { ?>
                <div id="shop-slider-<?php echo $key; ?>" class="prod-row interview" style="border-bottom: 1px solid #ccc;"> 
                  <ul class="slides">
                    <?php $index = 1;
                    foreach($products as $p) {
                      $post_obj = get_post($p);
                      if(!empty($post_obj)) {
                        $post_id = $post_obj->ID;
                        $post_title = get_the_title($post_id);
                        $shortTitle = $post_title;
                        if (strlen($post_title) > 24) {
                          $shortTitle = substr($shortTitle, 0, 24) . '...';
                        }
                        
                        $product_designer = get_post_meta($post_id, 'designer', true);
                        $shortDesigner = $product_designer;
                        if (strlen($shortDesigner) > 24) {
                          $shortDesigner = substr($shortDesigner, 0, 24) . '...';
                        }
                        $buy_link = get_post_meta($post_id, 'product_url', true);
                        $product_price = get_post_meta($post_id, 'price', true); ?>
                        <li>
                          <?php //inf_social_share($buy_link, get_the_title($post_id), wp_get_attachment_thumb_url($post_id), get_the_title($post_id)); ?>
                          <a href="<?php echo esc_url($buy_link); ?>" target="_blank" title="<?php echo $product_designer . ' -- ' . $post_title; ?>">
                            <?php if(has_post_thumbnail($post_id)) { ?>
                              <span class="img-hold">
                                <?php echo get_the_post_thumbnail($post_id, 'inf_single_product'); ?>
                              </span>
                            <?php } ?>
                            <h5 style="font-weight: bold;"><?php echo $shortDesigner; ?></h5>
                            <h5><?php echo $shortTitle; ?></h5>
                            <?php if(!empty($product_price)) { ?>
                              <h6>$<?php echo $product_price; ?></h6>
                            <?php } ?>
                          </a>
                        </li>
                        <?php  ?>
                          
                        <?php
                        $index++;
                      }
                    } ?>
                  </ul>
                    <div class="prev-<?php echo $key; ?> no-mobile" >&nbsp;</div><!-- /.prev -->
                    <div class="next-<?php echo $key; ?> no-mobile">&nbsp;</div><!-- /.next -->
                </div><!-- /.prod-row -->
              <?php }
            }
        }
      ?> 
    </div>
   </div>
      <div class="more_interviews">
        <?php
          $args = array(
            'numberposts' => 9999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'inf-interview',
            'post_status' => 'publish'
          );
          $interviews = get_posts($args);
          //setup_postdata($interview[0]);
         
          if (count($interviews) > 1) {
            $blockcount = 0;
            foreach($interviews as $key=>$interview) {
              if ($post->ID != $interview->ID) {
                $title = $interview->post_title;
                $link = get_permalink($interview->ID);
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($interview->ID), 'inf_interviewmore');
                $blockcount++;
                if ($blockcount == 4) { $last = ' last'; }
                if ($blockcount == 1) { echo '<h2>More Interviews</h2>'; }
               
                ?>
                <div class="more_int_block<?php echo $last; ?>">
                <a href="<?php echo $link; ?>">
                <h3><?php echo $title; ?></h3>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $title; ?>" width="200" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/int_more_link.png" />
                </a>
                </div>
                <?php
              }
            }
          }
        ?>
      </div>
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
      
      if ($_GET['testing']) {
        foreach($interviews as $key=>$interview) {
          print_r($interview);
        }
      }
    ?>
    <div class="more_interviews">
    
    </div>
  </section><!-- /#content -->
    
  <?php } ?>
<?php get_footer(); ?>
