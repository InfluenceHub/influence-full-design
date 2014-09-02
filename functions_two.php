<?php
  //Set to true to force CSS to load uncached, false for production
  $dev_flag = true;
  if ($dev_flag == true) {
    $version = time();
  } else {
    $version = 134; //update to force reload of CSS
  }

  add_theme_support('post-thumbnails');
  add_image_size('inf_makrket_slider',               460, 552, false);
  add_image_size('inf_home_slider',                  330, 518, false);
  add_image_size('hslide_image',                     330, 518, false);
  add_image_size('inf_home_latest',                  210, 400, true);
  add_image_size('inf_home_latest_shoplook',         90, 400, true);
  add_image_size('inf_styleseeker',                  268, 268, true);

  //add_image_size('inf_single_image',                  372, 576, true);
  add_image_size('inf_single_image',                  331, 518, true);
  add_image_size('inf_influencer_single_image',       300, 323, true);
  //add_image_size('inf_single_product',                124, 144, false);
  add_image_size('inf_single_product_small',          144, 164, false);
  add_image_size('inf_single_product_large',          250, 600, false);
  add_image_size('inf_single_product',                144, 164, false);
  add_image_size('inf_single_more_like',              186, 352, true);
  add_image_size('inf_profile_loop',                  300, 542, true);

  add_image_size('inf_instagram',                     314, 314, false);
  //add_image_size('inf_instagram',                     230, 230, true);
  add_image_size('inf_inst_product',                  314, 314, false);
  add_image_size('inf_hash_influenced',               232, 232, false);


  //add_image_size('inf_homevid_thumb',                  215, 130, true);
  //add_image_size('inf_homevid',                        650, 370, true);
  add_image_size('inf_homevid_thumb',                  133, 133, true);
  add_image_size('inf_homevid',                        830, 401, true);

  add_image_size('inf_interview_featured',             267, 267, true);
  add_image_size('inf_interviewslider',                1214, 794, false);
  add_image_size('inf_interviewslider_small',          114, 72, true);
  add_image_size('inf_interviewmore', 220, 235, true);


// Items of The Week
function inf_items() {
$args = array(
    'post_type' => 'inf_home_items',
    'posts_per_page' => 1
    );
  $postID = get_posts($args)[0]->ID; // this gets an array of wordpress posts
  
  $image1ID = get_post_meta($postID, '_itemofweek1'); 
  $image2ID = get_post_meta($postID, '_itemofweek2');
  $image3ID = get_post_meta($postID, '_itemofweek3');
  $image4ID = get_post_meta($postID, '_itemofweek4');
  $image5ID = get_post_meta($postID, '_itemofweek5');
  
  $image1SRC = get_post($image1ID[0])->guid;
  $image2SRC = get_post($image2ID[0])->guid;
  $image3SRC = get_post($image3ID[0])->guid;
  $image4SRC = get_post($image4ID[0])->guid;
  $image5SRC = get_post($image5ID[0])->guid;

 $link1 = (get_post_meta($postID, '_item1_link_url', true)); 
 $link2 = get_post_meta($postID, '_item2_link_url', true); 
 $link3 = get_post_meta($postID, '_item3_link_url', true); 
 $link4 = get_post_meta($postID, '_item4_link_url', true); 
 $link5 = get_post_meta($postID, '_item5_link_url', true); 



 //$link1 = get_post($link1ID[0]);
 //$link2 = get_post($link2ID[0]);
 //$link3 = get_post($link3ID[0]);
 //$link4 = get_post($link4ID[0]);
 //$link5 = get_post($link5ID[0]);


  ?>
 <div class="favorites_center">
  <div class="favorites_container">
   <div class="favorites_title">
    <?php echo get_the_title($postID); ?>
  </div>
  <div class="favorites" style="border-left: 10px solid #d5f7ec;">
   <a href="<?php echo $link1; ?>">
    <img src="<?php echo $image1SRC; ?>" width="133px" height="133px" />
    </a>
  </div>
  <div class="favorites">
   <a href="<?php echo $link2; ?>">
    <img src="<?php echo $image2SRC; ?>" width="133px" height="133px" />
    </a>
  </div>
  <div class="favorites">
   <a href="<?php echo $link3; ?>">
    <img src="<?php echo $image3SRC; ?>" width="133px" height="133px" />
    </a>
  </div>
  <div class="favorites">
   <a href="<?php echo $link4; ?>">
    <img src="<?php echo $image4SRC; ?>" width="133px" height="133px" />
    </a>
  </div>
  <div class="favorites">
   <a href="<?php echo $link5; ?>">
    <img src="<?php echo $image5SRC; ?>" width="133px" height="133px"/>
    </a>
  </div>
  </div>
</div>
<?php
}


// Call Out Boxes Functions
  function inf_home_box1() {
    $args = array(
      'post_type' => 'inf_home_box1',
      'posts_per_page' => 1
    );
    $box1 = get_posts($args);
    if(isset($box1[0])){
      return $box1[0];
   }
return null;


  }

  function inf_home_box2(){
    $args = array(
      'post_type' => 'inf_home_box2',
      'posts_per_page' => 1
    );
    $box2 = get_posts($args);

    if(isset($box2[0])){
      return $box2[0];
    }
    return null;
  


  }

    function inf_home_box3(){
    $args = array(
      'post_type' => 'inf_home_box3',
      'posts_per_page' => 1
    );
    $box3 = get_posts($args);
    if(isset($box3[0])){
      return $box3[0];
    }
    return null;

  }

    function inf_home_box4(){
    $args = array(
      'post_type' => 'inf_home_box4',
      'posts_per_page' => 1
    );
    $box4 = get_posts($args);

    if(isset($box4[0])){
      return $box4[0];
    }
    return null;

  }



  //Attachments metabox customization
  function inf_interview_attachments($attachments) {
    $args = array(
      'label' => 'Slider Images',
      'post_type' => array('inf-interview'),
      'filetype' => 'image', // allowed file type(s) (array) (image|video|text|audio|application)
      'note' => '',
      'button_text' => __('Upload Images', 'attachments'),
      'modal_text' => __('Attach', 'attachments'),
      'fields' => array(
        array(
        'name'        => 'title', // unique field name
        'type'        => 'text', // registered field type
        'label'       => __('Title', 'attachments'), // label to display
        'default'   => 'title'
        )
      ),
    );
    $attachments->register('inf_interview_attachments', $args);
  }
  add_action('attachments_register', 'inf_interview_attachments');

  //Home Top Slider
  function inf_home_topslider() {
      //here are get post options
     
      $args = array(
        'numberposts' => 9999,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'inf-slide-home',
        'post_status' => 'publish'
      );

      //get posts
      $list_items = get_posts($args);

      //slide container
      ?>
      <ul class="slides">
      <?php

      //iterate
      foreach ($list_items as $key => $list_item ) {
        //get some content from post
        $title      = trim(get_the_title($list_item->ID));
        $title_two  = trim(carbon_get_post_meta($list_item->ID, 'hslide_title_two'));
        $slide_link = trim(carbon_get_post_meta($list_item->ID, 'hslide_link_url'));
        $subtext = trim(carbon_get_post_meta($list_item->ID, 'hslide_subtext'));
        $longTitle = $title . ' ' . $title_two;

        //retrieve images from post meta data
        $image_oneID = carbon_get_post_meta($list_item->ID, 'hslide_image');
        $image_oneA = wp_get_attachment_image_src($image_oneID,'full', true);
        $image_one = $image_oneA[0];

        $side_oneID = carbon_get_post_meta($list_item->ID, 'hslide_side_image1');
        $side_image1A = wp_get_attachment_image_src($side_oneID,'full', true);
        $side_one = $side_image1A[0];
        $side_twoID = carbon_get_post_meta($list_item->ID, 'hslide_side_image2');
        $side_image2A = wp_get_attachment_image_src($side_twoID,'full', true);
        $side_two = $side_image2A[0];
        $side_threeID = carbon_get_post_meta($list_item->ID, 'hslide_side_image3');
        $side_image3A = wp_get_attachment_image_src($side_threeID,'full', true);
        $side_three = $side_image3A[0];

        // PAGELY PERFORMACE HACK
        // $image_one is the url to the image, so getimagesize downloads the image (from cloudflare and on the miss case all the way back to us
        // you must use the local file
        // lets get it a hacky way
        $image_one_file = '/httpdocs/'.str_replace(get_option('siteurl'), '', $image_one);
        list($width_one, $height_one) = getimagesize($image_one_file);

        //get da content
        $content    = apply_filters('the_content', get_post_field('hslide_title_two', $list_item->ID));
        //build homepage slide
      ?>
        <li>
          <div class="image-wrap">
            <div class="main">
              <img class="look-overlay" src="<?php echo get_stylesheet_directory_uri(); ?>/images/TheLook_overlay.png" />
              <a href="<?php echo $slide_link; ?>" title="<?php echo $longTitle; ?>">
              <?php
              if (trim($image_one) > '') {
                    echo '<img src="' . $image_one . '" width="' . $width_one . '" height="' . $height_one . '" alt="' . $longTitle . '" />';
                  }
              ?>
              </a>
            </div>
            <a href="<?php echo $slide_link; ?>" title="<?php echo $longTitle; ?>">
            <div class='right'>
              <div style="margin-bottom: 40px;"> <img src="<?php echo $side_one ?>" height="130px" width="130px"></div>
              <div style="margin-bottom: 40px;"> <img src="<?php echo $side_two ?>" height="130px" width="130px"></div>
              <div> <img src="<?php echo $side_three ?>" height="130px" width="130px"></div>
            </div>
            </a>
          </div>
          <div class='text-wrap'>
            <h2 class="boxes"><?php echo($longTitle); ?></h2>
            <p class="slide-text"><?php
              echo($subtext);
              ?></p>
          <p class="slide-text">
            <a href="<?php echo $slide_link; ?>" title="<?php echo $longTitle; ?>" class="cta-shop-look">
               <!-- <img style="text-align: center;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopthelook.png" /> -->
            </a>
              </p>
          </div>
        </li>

      <?php
      }
      // close ul container
       ?>
      </ul>


  <?php
  }

    function inf_home_thelatestslide() {
    ?>
    <ul class="slides">
    <?php
      $args = array(
        'numberposts' => 9999,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'inf-slide-home',
        'post_status' => 'publish'
      );
      $list_items = get_posts($args);
      $listblock = '';

      foreach ($list_items as $key => $list_item ) {
        /* old fields
        $custom_fields = get_post_custom($list_item->ID);
        $title      = trim(get_the_title($list_item->ID));
        $title_two  = trim($custom_fields['wpcf-hslide-title-two'][0]);
        $longTitle = $title . ' ' . $title_two;
        $shortTitle = '<span>' . $title . '</span> ' . $title_two;
        if (strlen(strip_tags($title_two)) > 38) {
          $shortTitle = '<span>' . $title . '</span> ' . substr($title_two, 0, 38) . '...';
        }
        //$position = trim($custom_fields['wpcf-staff-title'][0]);
        //$content  = get_post_field('post_content', $list_item->ID);
        $slide_link = trim($custom_fields['wpcf-hslide-link-url'][0]);
        $image_one  = trim($custom_fields['wpcf-hslide-image'][0]);
        $image_two  = trim($custom_fields['wpcf-hslide-bottom-image'][0]);
        */

        //NEW FIELDS
        $title      = trim(get_the_title($list_item->ID));
        $title_two  = trim(carbon_get_post_meta($list_item->ID, 'hslide_title_two'));
        $slide_link = trim(carbon_get_post_meta($list_item->ID, 'hslide_link_url'));
        $image_oneID = carbon_get_post_meta($list_item->ID, 'hslide_image');
        $image_oneA = wp_get_attachment_image_src($image_oneID,'full', true);
        $image_one = $image_oneA[0];
        $image_twoID = carbon_get_post_meta($list_item->ID, 'hslide_bottom_image');
        $image_twoA = wp_get_attachment_image_src($image_twoID,'inf_home_slider', true);
        $image_two = $image_twoA[0];
        $longTitle = $title . ' ' . $title_two;
        $shortTitle = '<span>' . $title . '</span> ' . $title_two;
        if (strlen(strip_tags($title_two)) > 80) {
          $shortTitle = '<span>' . $title . '</span> ' . substr($title_two, 0, 79) . '...';
        }

  // PAGELY PERFORMACE HACK
  // $image_one is the url to the image, so getimagesize downloads the image (from cloudflare and on the miss case all the way back to us
  // you must use the local file
  // lets get it a hacky way
   $image_one_file = '/httpdocs/'.str_replace(get_option('siteurl'), '', $image_one);
   $image_two_file = '/httpdocs/'.str_replace(get_option('siteurl'), '', $image_two);

        list($width_one, $height_one) = getimagesize($image_one_file);
        list($width_two, $height_two) = getimagesize($image_two_file);
        $content    = apply_filters('the_content', get_post_field('post_content', $list_item->ID));
        //$image      = wp_get_attachment_image_src(get_post_thumbnail_id($list_item->ID), 'inf_home_slider');
    ?>
          <li>
          <
            <a href="<?php echo $slide_link; ?>" title="<?php echo $longTitle; ?>">
              <div class="image-wrap">
                <div class="main">
                <?php
                  if (trim($image_one) > '') {
                    echo '<img src="' . $image_one . '" width="' . $width_one . '" height="' . $height_one . '" alt="' . $longTitle . '" />';
                  }
                ?>
                <div class="text-box">
                  <div class="products-box">
                    <?php
                      if (trim($image_two) > '') {
                        echo '<img src="' . $image_two . '" width="' . $width_two . '" height="' . $height_two . '" alt="' . $longTitle . '" />';
                      }
                    ?>
                  </div><!-- /.products-box -->
                  <h4 class="boxes"><?php echo $shortTitle; ?></h4>
                </div><!-- /.text-box -->
              </div><!-- /.inner-slide -->
              </div>
            </a>
          </li>
    <?php
      }
    ?>
      </ul><!-- /.slides -->
    <div class="prev">&nbsp;</div><!-- /.prev -->
    <div class="next">&nbsp;</div><!-- /.next -->
  </div><!-- /.top-slider -->
  <?php
  }

  //Home Page Latest Looks
  function inf_home_latest() {
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 8,
      'meta_query' => array(
        array(
          'key' => '_thumbnail_id',
          'value' => '',
          'compare' => '!='
        )
      )
    );
    $latest_posts = get_posts($args);


    $extraclass = '';
    $current_user_influencers = array();
    if(is_user_logged_in()) {
      $extraclass = 'subscribe-link';
      $current_user_influencers = inf_get_influencers();
    }


     ?>
      <div class="latest-home group">
        <div class="sideads_wrapper no-mobile">
          <div class="sidead leftad">
          </div>
          <div class="sidead rightad">
          </div>
        </div>
        <div class="shell">
         <h2 class="no-mobile"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/styleset.png" /></h2><br class="no-mobile" />
         <ul>
            <?php
              $latest_theme = inf_get_latest_theme();
              global $post;
              foreach($latest_posts as $k => $post) {

                $influencer_id = get_influencer_id_by_connected_post($post);
                ?>
                <?php if($k <= 3): // Show the first 4 posts as two column posts ?>
                  <li class="column-two home-feed-post">
                        <div class="home-feed-post-img-wrap">
                        <a href="<?php the_permalink(); ?>">
                          <?php
                                echo the_post_thumbnail('inf_home_latest');
                                $post_categories = wp_get_post_categories(get_the_id());
                                if(!empty($post_categories[0])){
                                  $cat = get_category($post_categories[0]);
                                  $category_link = get_category_link($cat); // Refactor to use category obj?
                                  ?> </a>

                          <?php } // endif !empty($post_categories[0]) ?>
                        </div>
                        <div class="home-feed-post-info">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_title("<h2>", "</h2>"); ?>
                          </a>

                          <div class="home-feed-subheading-options">
                            <?php if($influencer_id): ?>
                              <form method="post" class="interact-with-influencer">
                                <div class="home-feed-subscribe-options">
                                  <?php if(in_array($influencer_id, $current_user_influencers)) { ?>
                                    <input type="hidden" name="influencer_unsubscribe" value="<?php echo $influencer_id; ?>">
                                    <a class="in-circle active <?php echo $extraclass ?>" href="<?php echo home_url().'/my-influence/'; ?>"></a>
                                    <div class="shop-subscribe"><a class="sub-link <?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>">UNSUBSCRIBE</a></div><!-- /.flag -->
                                  <?php } else { ?>
                                    <input type="hidden" name="influencer_subscribe" value="<?php echo $influencer_id; ?>">
                                    <a class="in-circle <?php echo $extraclass ?>" href="<?php echo home_url().'/my-influence/'; ?>"></a>
                                    <div class="shop-subscribe"><a class="sub-link <?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>">SUBSCRIBE</a></div><!-- /.flag -->
                                  <?php } ?>
                                </div>
                              </form>
                            <?php endif; // $influencer_id ?>

                            <div class="home-feed-pint-options no-mobile">
                              <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&amp;media=<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>&amp;description=<?php echo urlencode($post->post_content) ?>" target="_blank" class="home-feed-pint-link" title="Pin This">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/pinterest-logo-black.jpg" class="home-feed-pint-img">
                                Pin it
                              </a>
                            </div>

                          </div>

                          <?php

                                $content = $post->post_content;
                                if (strlen($content) > 180) {
                                  $content = substr($content, 0, 180).'...';
                                }
                          ?>
                          <p class="home-feed-pcontent">
                            <?php echo $content ?>
                            <a href="<?php the_permalink(); ?>" class="home-feed-post-view-more">
                              VIEW MORE<span class="home-feed-post-view-more-arrow">&rsaquo;</span>
                            </a>
                          </p>

                          <?php $products_sections = carbon_get_the_post_meta('inf_post_products_sections', 'complex'); ?>

                          <?php if(!empty($products_sections)): ?>
                            <?php
                              $products_section = $products_sections[0];
                              $products = $products_section['products'];
                            ?>
                            <div class="home-feed-prod-row prod-row small">
                              <ul class="home-feed-prod-list group">
                                  <?php foreach ($products as $k => $post_id): ?>
                                    <?php
                                      if ($k >2) { // Only list first three products
                                        break;
                                      }
                                      $product_designer = get_post_meta($post_id, 'designer', true);
                                      $shortDesigner = $product_designer;
                                      // NOTE : String truncation is taken care of with CSS
                                      // if (strlen($shortDesigner) > 24) {
                                      //   $shortDesigner = substr($shortDesigner, 0, 24) . '...';
                                      // }
                                      $product_price = get_post_meta($post_id, 'price', true);
                                      $product_link = get_post_meta($post_id, 'product_url', true);
                                      $shortTitle = get_the_title($post_id);
                                      // if (strlen($shortTitle) > 24) {
                                      //   $shortTitle = substr($shortTitle, 0, 24) . '...';
                                      // }
                                    ?>
                                    <li class="home-feed-prod-list-item">
                                      <a href="<?php the_permalink()?>" title="<?php echo $product_designer . ' -- ' . get_the_title($post_id); ?>">
                                        <?php if(has_post_thumbnail($post_id)) : ?>
                                          <span class="img-hold">
                                            <?php echo get_the_post_thumbnail($post_id, 'inf_single_product'); ?>
                                          </span>
                                        <?php endif; ?>
                                        <h5 style="font-weight: bold;"><?php echo $shortDesigner; ?></h5>
                                        <h5><?php echo $shortTitle; ?></h5>
                                      </a>
                                    </li>
                                <?php endforeach; ?>
                              </ul>
                            </div>
        <!--
                            <a href="<?php echo esc_url($category_link); ?>">
                               <?php echo strtoupper($cat->cat_name); ?>
                           </a>
        -->
                          <a href="<?php the_permalink(); ?>" class="home-feed-post-view-more shop-look" style="font-weight:bold;">
                            SHOP THE LOOK <span class="home-feed-post-view-more-arrow">&rsaquo;</span>
                          </a>
                          <?php endif; ?>

                        </div> <!-- END .home-feed-post-info -->
                  </li>

<!--                 <img width="600px" height="59px" src='<?php echo get_stylesheet_directory_uri(); ?>/images/breaker.png' />

 -->
                <?php elseif ($k == 7 && !is_null($latest_theme)): // replace the last one with a featured theme, if it exists ?>

                  <?php $post = $latest_theme ?>

                  <li class="column home-feed-post home-feed-side-by-side">
                        <div class="home-feed-post-img-wrap">
                          <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) {
                              the_post_thumbnail('inf_featured_theme');
                            } ?>
                          </a>
                        </div>
                        <div class="home-feed-post-info">
                          <div class="home-feed-meta-content">
                            <?php the_time('F j, Y'); ?>
                             <span class="meta-content-divider">|</span>
                            Featured Theme
                          </div>
                          <a href="<?php the_permalink(); ?>">
                          <?php

                                $title = $post->post_title;
                                if (strlen($title) > 50) {
                                  $title = substr($title, 0, 50) . '...';
                                }
                          ?>
                          <h2><?php echo $title ?></h2>
                          </a>
                          <?php

                                $content = $post->post_content;
                                if (strlen($content) > 90) {
                                  $content = substr($content, 0, 90) . '...';
                                }
                          ?>
                          <p class="home-feed-pcontent"><?php echo $content ?></p>
                          <a href="<?php the_permalink(); ?>" class="home-feed-post-view-more">
                            VIEW MORE <span class="home-feed-post-view-more-arrow">&rsaquo;</span>
                          </a>
                        </div>
                  </li>
                <?php else: // Show the last 4 posts as single column posts ?>
                  <li class="column home-feed-post home-feed-side-by-side">
                        <div class="home-feed-post-img-wrap">
                          <a href="<?php the_permalink(); ?>">
                            <?php echo the_post_thumbnail('inf_single_image'); ?>
                          </a>
                        </div>
                        <div class="home-feed-post-info">
                          <div class="home-feed-meta-content">
                            <?php the_time('F j, Y'); ?>
                              <?php
                                    $post_categories = wp_get_post_categories(get_the_id());
                                    if(!empty($post_categories[0])){
                                      $cat = get_category($post_categories[0]);
                                      $category_link = get_category_link($cat); // Refactor to use category obj?
                              ?>

                                    <span class="meta-content-divider">|</span>
                                    <a href="<?php echo esc_url($category_link); ?>">
                                        <?php echo $cat->cat_name; ?>
                                      </a>

                              <?php } // end if !empty ?>

                          </div>
                          <a href="<?php the_permalink(); ?>">
                          <?php

                                $title = $post->post_title;
                                if (strlen($title) > 50) {
                                  $title = substr($title, 0, 50) . '...';
                                }
                          ?>
                            <h2><?php echo $title ?></h2>
                          </a>

                          <?php

                                $content = $post->post_content;
                                if (strlen($content) > 90) {
                                  $content = substr($content, 0, 90) . '...';
                                }
                          ?>
                          <p class="home-feed-pcontent"><?php echo $content ?></p>
                          <a href="<?php the_permalink(); ?>" class="home-feed-post-view-more">
                            VIEW MORE <span class="home-feed-post-view-more-arrow">&rsaquo;</span>
                          </a>

                        </div> <!-- END .home-feed-post-info -->

                  </li>
                <?php endif; ?>

                  <?php

                wp_reset_postdata();

              } // end foreach $latest_posts as $post
            ?>

          </ul><!-- /.recent-list -->
          <!-- HOME PAGE 300 X 900 AD SPACE -->
          <div class="column adcolumn no-mobile">
          <a href="http://www.anrdoezrs.net/click-7580048-11914509">
           <img src="<?php bloginfo('stylesheet_directory'); ?>/images/nastydenim.gif" />
          </a>
          <a href="https://www.thehunt.com/the-hunt/6Dmf7D-janel-on-the-hunt-">
           <img src="<?php bloginfo('stylesheet_directory'); ?>/images/thehunt.jpg" />
          </a>

            <!-- BEGIN IFRAME TAG - theinfluence 300x600 < - DO NOT MODIFY -->
            <!-- <IFRAME SRC="http://ib.adnxs.com/tt?id=2438106&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="600"></IFRAME> -->
            <!-- END TAG -->
            <div class="line" style="margin-top: 7px; padding-top: 7px;"></div>
            <?php inf_favorite_items(); ?>
            <a href="<?php echo home_url(); ?>/my-influence" class="subscribe-img-home"></a>
            <div class="line" style="margin-top: 7px; padding-top: 7px;"></div>
            <?php inf_item_of_the_day(); ?>
            <div class="line" style="margin-top: 7px; padding-top: 7px;"></div>
            <?php inf_qa(); ?>
            <!-- <div class="hash-influence"></div> -->
            <?php // inf_hash_influencer() ?>
          </div>
          <div class="viewall-latest">
            <a href="<?php echo home_url(); ?>/the-latest/">VIEW ALL LATEST LOOKS</a>
          </div>
        </div><!-- /.shell -->

         <?php //inf_featured_theme('one'); ?>

        <?php inf_home_instagram(); ?>

        <?php //inf_featured_theme('two'); ?>

      </div><!-- /.latest -->
  <?php
  }

  //Featured Themes
  function inf_featured_theme($theme_num) {
    $home_id = get_option('page_on_front');
    $theme_type = '_inf_theme_' . $theme_num;
    $theme_items = get_post_meta($home_id, $theme_type, true);
    $title = get_post_meta($home_id, '_inf_theme_intro_' . $theme_num, true);
    $date = get_post_time('n.j.Y', false, $theme_items[0], false);
    $style = '';
    if ($theme_num == 'two') {
      $style = ' style="margin-top: 70px; padding-bottom: 20px;"';
    }

    $imgID = carbon_get_post_meta($home_id, '_inf_theme_' . $theme_num . '_image');
    $image = wp_get_attachment_image_src($imgID,'full', true);
    $link_url  = get_permalink($theme_items[0]);
    ?>
      <div class="featured-theme home"<?php echo $style; ?>>
      <!--<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/_temp-featured-theme.jpg" alt="Favorite Items of the Moment" />-->
      <a href="<?php echo $link_url; ?>"><img src="<?php echo $image[0]; ?>" width="644" height="158" alt="Featured Theme" /></a>
    <?php
    if(!empty($theme_items)) {
      /*
      foreach($theme_items as $key=>$this_id) {
        $link_url  = get_permalink($this_id);
        $image     = wp_get_attachment_image_src(get_post_thumbnail_id($this_id), 'inf_inst_product');
        if (($key+1) == count($theme_items)) {
          $last = 'class="last" ';
        }
        ?>
        <a <?php echo $last; ?>href="<?php echo $link_url; ?>"><img src="<?php echo $image[0]; ?>" width="158" height="158" /></a>
        <?php
      }
      */
    }
    ?>
        <!--<h2>featured theme</h2>-->
        <p class="theme_date">PUBLISHED <?php echo $date; ?></p><br />
        <p><?php echo $title; ?> <a class="viewmore" href="<?php echo $link_url; ?>">VIEW MORE &gt;</a></p>
      </div>
    <?php
  }

  function inf_get_latest_theme() {
    $args = array(
      'post_type' => 'inf_theme',
      'posts_per_page' => 1
    );
    $themes = get_posts($args);
    if(isset($themes[0])){
      return $themes[0];
    }
    return null;
  }

  //Favorite Items
  function inf_favorite_items() {
    $home_id = get_option('page_on_front');
    $fav_items = get_post_meta($home_id, '_inf_favorite_items', true);
    if(!empty($fav_items)) {
      ?>
        <div class="favorite-items">
          <h2><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/header-fav-items.png" alt="Favorite Items of the Moment" /></h2>
          <div class="fav-items-grid">
            <div class="fav-items-grid">
              <?php
                foreach($fav_items as $key => $this_id) {
                  $product_url     = get_post_meta($this_id, 'product_url', true);
                  $product_image    = wp_get_attachment_image_src(get_post_thumbnail_id($this_id), 'inf_home_inst_prod_nocrop');
                  $row_alt = 'left';
                  if ($key % 2 != 0) { $row_alt = 'right'; }
                  ?>
                    <div class="fav-item <?php echo $row_alt; ?>"><a href="<?php echo $product_url; ?>"><img src="<?php echo $product_image[0]; ?>" /></a></div>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>
      <?php
    }
  }

  //Q&A
  function inf_qa() {
    $args = array(
      'post_type' => 'inf_qanda',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $qa = get_posts($args);

    if(!empty($qa)) {
      ?>
        <div class="styleseeker home_feature">
          <div class="arrows"><a class="prev"></a><a class="next"></a></div>
          <h2><img class="qa" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/header-qa.png" alt="Q and A" /></h2>
          <div class="qa-slider">
            <ul class="slides">
      <?php
      foreach($qa as $key => $this_qa) {
        $entry_id  = $this_qa->ID;
        $inf_url = carbon_get_post_meta($this_qa, 'inf_hinfluencer_link_url');

        $question   = carbon_get_post_meta($entry_id, 'inf_qa_question');
        $question_n = carbon_get_post_meta($entry_id, 'inf_qa_question_n');
        $answer     = carbon_get_post_meta($entry_id, 'inf_qa_answer');
        $answer_n   = carbon_get_post_meta($entry_id, 'inf_qa_answer_n');
        $image      = wp_get_attachment_image_src(get_post_thumbnail_id($entry_id), 'inf_inst_product', true);

          //$custom_fields = get_post_custom($post->ID);
          //$question   = trim($custom_fields['wpcf-home-style-question'][0]);
          //$question_n = trim($custom_fields['wpcf-home-style-question-name'][0]);
          //$answer     = trim($custom_fields['wpcf-home-style-answer'][0]);
          //$answer_n   = trim($custom_fields['wpcf-home-style-answer-name'][0]);
          //$image      = trim($custom_fields['wpcf-home-style-image'][0]);

          //Q & A
          //$question   = 'Can you help me find Miranda Kerr`s top?';
          //$question_n = 'Amanda, NY';
          //$answer     = 'That is <span style="text-decoration: underline;">name goes here blouse</span> by Tory Burch';
          //$answer_n   = 'Danielle, Editor';
          //$image = get_bloginfo('stylesheet_directory') . '/images/styleseeker.jpg';
      ?>
        <li class="slide">
          <p class="question"><?php echo $question; ?></p>
          <div class="name">- <?php echo $question_n; ?></div>
            <div class="image-container">
              <img class="main" src="<?php echo $image[0]; ?>" width="280" height="280" alt="" />
              <p class="answer"><?php echo $answer; ?></p>
            <div class="name two">- <?php echo $answer_n; ?></div>
          </div>
        </li>
      <?php
      }
      ?>
            </ul>
          </div>
          <div class="bottom-contact">
            <a href="mailto:styleseeker@theinfluence.com"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/qa-email.png" alt="" /></a>
          </div>
        </div>
      <?php
    }
  }

  //#Influencer
  function inf_hash_influencer() {
    $args = array(
      'post_type' => 'inf_hash_influencer',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $hash_infs = get_posts($args);

    if(!empty($hash_infs)) {
      ?>
        <div class="hash-influence home_feature">
          <h2>#INFLUENCED</h2>
          <div class="arrows"><a class="prev"></a><a class="next"></a></div>
          <div id="hash-inf-slider">
            <ul class="slides">
      <?php
      foreach($hash_infs as $key => $this_inf) {
        $entry_id  = $this_inf->ID;
        $inf_url = carbon_get_post_meta($entry_id, 'inf_hinfluencer_link_url');
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($entry_id), 'inf_hash_influenced', true);
        echo '<li class="slide">';
        ?>
          <a href="http://instagram.com/theinfluence" target="_blank"><img src="<?php echo $image[0]; ?>" /></a>
        <?php
        echo '</li>';
      }
      ?>
            </ul>
          </div>
        </div>
      <?php
    }
  }

  //Home Page Latest Looks -- Replaced 5/20/14 DC
  function inf_home_latest_old() {
        $args = array(
      'post_type' => 'post',
      'posts_per_page' => 6,
      'meta_query' => array(
        array(
          'key' => '_thumbnail_id',
          'value' => '',
          'compare' => '!='
        )
      )
    );
    $latest_posts = get_posts($args);


     ?>
      <div class="latest-home group">
        <div class="sideads_wrapper">
          <div class="sidead leftad">
          </div>
          <div class="sidead rightad">
          </div>
        </div>
        <div class="shell">
          <div class="section-heading first">
           <h2><a href="<?php echo home_url().'/the-latest'; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thelatest2.png" /></a></h2><br />
          </div><!-- /.section-heading -->
          <ul>
            <?php
              $i=0;
              foreach($latest_posts as $lp) {
                $args = array(
                  'connected_type' => 'posts_to_influencers',
                  'connected_items' => $lp->ID,
                  'nopaging' => true,
                  'posts_per_page' => 1
                );
                $connected = new WP_Query($args);
                //if($connected->have_posts()) {
                  $i++;
                  //while($connected->have_posts()) {
                    //$connected->the_post();
                    $infTitle = inf_name_from_post($lp->ID);
                    if (trim($infTitle) <= '') { $infTitle = '&nbsp;'; }
                    $thisTitle = get_the_title($lp->ID);

                    $custom_fields = get_post_custom($lp->ID);
                    $image  = trim($custom_fields['wpcf-post-shop-the-look'][0]);
                    if ($image <= '') {
                      $image = get_bloginfo('stylesheet_directory') . '/images/home-shoplook-placeholder.jpg';
                    }
                    list($width_one, $height_one) = getimagesize($image);
                    if (strlen($thisTitle) > 70) {
                      $thisTitle = substr($thisTitle, 0, 70) . '...';
                    }
                    $extra_class = '';
                    if ($i % 2 == 0) {
                      $extra_class = ' last';
                    }
                    ?>
                    <li class="column<?php echo $extra_class; ?>">
                      <a href="<?php echo get_permalink($lp->ID); ?>">
                        <?php echo get_the_post_thumbnail($lp->ID, 'inf_home_latest'); ?>
                        <img class="shoplook" src="<?php echo $image; ?>" width="90" height="400" alt="Shop the Look" />
                        <h4><?php echo $infTitle; ?></h4>
                        <p><?php echo $thisTitle; ?></p>
                      </a>
                    </li>
                  <?php
                  //}
                //}

                wp_reset_postdata();

              }
            ?>
          </ul><!-- /.recent-list -->
          <div class="column adcolumn">
            <div style="width: 300px; height: 600px; background: #000;"></div>
            <!-- BEGIN IFRAME TAG - theinfluence 300x600 < - DO NOT MODIFY -->
            <!-- <IFRAME SRC="http://ib.adnxs.com/tt?id=2438106&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="600"></IFRAME> -->
            <!-- END TAG -->
            <div class="line" style="margin-top: 7px; padding-top: 7px;"></div>
            <div class="favorite-items">
              <h2><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/header-fav-items.png" alt="Favorite Items of the Moment" /></h2>

              <div class="fav-items-grid">
                <div class="fav-items-grid">
                  <?php
                    $fav_items = array('x','x','x','x','x','x');
                    foreach($fav_items as $key=>$fav_item) {
                      $row_alt = 'left';
                      if ($key % 2 != 0) { $row_alt = 'right'; }
                  ?>
                    <div class="fav-item <?php echo $row_alt; ?>"><a href="#"></a></div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <a href="<?php echo home_url(); ?>/my-influence" class="subscribe-img-home"></a>
            <div class="line" style="margin-top: 7px; padding-top: 7px;"></div>
            <?php inf_item_of_the_day(); ?>
            <div class="line" style="margin-top: 7px; padding-top: 7px;"></div>
            <?php
              //Style Seeker
              $custom_fields = get_post_custom($post->ID);
              $question   = trim($custom_fields['wpcf-home-style-question'][0]);
              $question_n = trim($custom_fields['wpcf-home-style-question-name'][0]);
              $answer     = trim($custom_fields['wpcf-home-style-answer'][0]);
              $answer_n   = trim($custom_fields['wpcf-home-style-answer-name'][0]);
              $image      = trim($custom_fields['wpcf-home-style-image'][0]);

              //Q & A
              $question   = 'Can you help me find Miranda Kerr`s top?';
              $question_n = 'Amanda, NY';
              $answer     = 'That is <span style="text-decoration: underline;">name goes here blouse</span> by Tory Burch';
              $answer_n   = 'Danielle, Editor';
              $image = get_bloginfo('stylesheet_directory') . '/images/styleseeker.jpg';
            ?>
            <div class="styleseeker">
              <div class="arrows"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/home-block-arrows.png" alt="" /></div>
              <h2><img class="qa" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/header-qa.png" alt="Q and A" /></h2>
              <p class="question"><?php echo $question; ?></p>
              <div class="name">- <?php echo $question_n; ?></div>

              <div class="image-container">
                <img class="main" src="<?php echo $image; ?>" width="280" height="280" alt="" />

                <p class="answer"><?php echo $answer; ?></p>
                <div class="name two">- <?php echo $answer_n; ?></div>
              </div>
              <div class="bottom-contact">
                <a href="mailto:styleseeker@theinfluence.com"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/qa-email.png" alt="" /></a>
              </div>
            </div>
            <div class="hash-influence">
            </div>
          </div>
          <div class="viewall-latest">
            <a href="<?php echo home_url(); ?>/the-latest/">VIEW ALL LATEST LOOKS</a>
          </div>
        </div><!-- /.shell -->

        <div class="featured-theme">
          <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/_temp-featured-theme.jpg" alt="Favorite Items of the Moment" />
          <h2>featured theme</h2>
          <p>BEYONCE KILLING IT WEARING LEOPARD<br />SKINNY JEANS AT THE COACHELL A FESTIVAL</p>
        </div>

        <?php inf_home_instagram(); ?>

        <div class="featured-theme" style="margin-top: 70px; padding-bottom: 20px;">
          <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/_temp-featured-theme.jpg" alt="Favorite Items of the Moment" />
          <h2>featured theme</h2>
          <p>BEYONCE KILLING IT WEARING LEOPARD<br />SKINNY JEANS AT THE COACHELL A FESTIVAL</p>
        </div>

      </div><!-- /.latest -->
  <?php
  }

  function inf_home_instagram() {
    //Get Shop Instagram items
      $args = array(
        'numberposts' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'inf_instagram',
        'post_status' => 'publish'
      );
      $inst_items = get_posts($args);

        $instagram_one_prod = get_post_meta($inst_items[0]->ID, '_inf_instagram_products', true);
        $instagram_one_prodID   = $instagram_one_prod[0];
        $instagram_two_prod = get_post_meta($inst_items[1]->ID, '_inf_instagram_products', true);
        $instagram_two_prodID   = $instagram_two_prod[0];

        $image_one = wp_get_attachment_image_src(get_post_thumbnail_id($inst_items[0]->ID), 'inf_home_inst_prod_nocrop_quad');
        $title_one = trim(get_the_title($inst_items[0]->ID));
        if (strlen($title_one) > 20) {
          $title_one = substr($title_one, 0, 10) . '...';
        }
        $page_object = get_page($inst_items[0]->ID);
        $caption_one = $page_object->post_content;
        if (strlen($caption_one) > 25) {
          $caption_one = substr($caption_one, 0, 0)  . ' <span style="font-weight; bold; text-transform: uppercase;">READ MORE ></span>';
        }
        /*
        $product_title_one    = get_the_title($instagram_one_prodID);
        if (strlen($product_title_one) > 45) {
          $product_title_one = substr($product_title_one, 0, 45) . '...';
        }
        $product_designer_one = get_post_meta($instagram_one_prodID, 'designer', true);
        $product_price_one    = get_post_meta($instagram_one_prodID, 'price', true);
				$product_link_one     = get_post_meta($instagram_one_prodID, 'product_url', true);
        $product_image_one    = wp_get_attachment_image_src(get_post_thumbnail_id($instagram_one_prodID), 'inf_home_inst_prod_nocrop');
        */

        $image_two = wp_get_attachment_image_src(get_post_thumbnail_id($inst_items[1]->ID), 'inf_home_inst_prod_nocrop_quad');
        $title_two = trim(get_the_title($inst_items[1]->ID));
        if (strlen($title_two) > 30) {
          $title_two = substr($title_two, 0, 25) . '...';
        }
        $page_object = get_page($inst_items[1]->ID);
        $caption_two = $page_object->post_content;
        if (strlen($caption_two) > 25) {
          $caption_two = substr($caption_two, 0, 0) . ' <span style="font-weight; bold; text-transform: uppercase;">READ MORE ></span>';
        }
        /*
        $product_title_two    = get_the_title($instagram_two_prodID);
        if (strlen($product_title_two) > 45) {
          $product_title_two = substr($product_title_two, 0, 45) . '...';
        }
        $product_designer_two = get_post_meta($instagram_two_prodID, 'designer', true);
        $product_price_two    = get_post_meta($instagram_two_prodID, 'price', true);
				$product_link_two     = get_post_meta($instagram_two_prodID, 'product_url', true);
        $product_image_two    = wp_get_attachment_image_src(get_post_thumbnail_id($instagram_two_prodID), 'inf_home_inst_prod_nocrop');
        */
        $image_three = wp_get_attachment_image_src(get_post_thumbnail_id($inst_items[2]->ID), 'inf_home_inst_prod_nocrop_quad');
        $title_three = trim(get_the_title($inst_items[2]->ID));
        if (strlen($title_three) > 30) {
          $title_three = substr($title_three, 0, 25) . '...';
        }
        $page_object = get_page($inst_items[2]->ID);
        $caption_three = $page_object->post_content;
        if (strlen($caption_three) > 25) {
          $caption_three = substr($caption_three, 0, 0) . ' <span style="font-weight; bold; text-transform: uppercase;">READ MORE ></span>';
        }
        $image_four = wp_get_attachment_image_src(get_post_thumbnail_id($inst_items[3]->ID), 'inf_home_inst_prod_nocrop_quad');
        $title_four = trim(get_the_title($inst_items[3]->ID));
        if (strlen($title_four) > 30) {
          $title_four = substr($title_four, 0, 35) . '...';
        }
        $page_object = get_page($inst_items[3]->ID);
        $caption_four = $page_object->post_content;
        if (strlen($caption_four) > 24) {
          $caption_four = substr($caption_four, 0, 0) . ' <span style="font-weight; bold; text-transform: uppercase;">READ MORE ></span>';
        }
    ?>
     <!-- <div class="instagram-posts">
        <div class="section-heading" style="margin-top: -15px;">
          <h2><a href="<?php echo home_url().'/shop-this-instagram'; ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopthisinsta.png" /></a></h2>
        </div>
        <a href="<?php echo home_url().'/shop-this-instagram'; ?>">
              <div class="shop-instagram one" style="margin-top: -15px;">
                <div class="instagram-photo">
                  <img src="<?php echo $image_one[0]; ?>" alt="<?php echo $title_one; ?>" />
                  <p><span style="color: #000;"><?php echo $title_one; ?></span>
                  <?php echo $caption_one; ?></p>
                </div>
              </div>
            </a>
            <a href="<?php echo home_url().'/shop-this-instagram';//$product_link; ?>">
              <div class="shop-instagram" style="margin-top: -15px; margin-left: 35px;">
                <div class="instagram-photo">
                  <img src="<?php echo $image_two[0]; ?>" alt="<?php echo $title_two; ?>" />
                <p><span style="color:#000;"><?php echo $title_two; ?></span>
                <?php echo $caption_two; ?></p>
                </div>
              </div>
            </a>
            <a href="<?php echo home_url().'/shop-this-instagram';//$product_link; ?>">
              <div class="shop-instagram" style="margin-top: -35px;">
                <div class="instagram-photo">
                  <img src="<?php echo $image_three[0]; ?>" alt="<?php echo $title_three; ?>" />
                <p><span style="color:#000;"><?php echo $title_three; ?></span>
                <?php echo $caption_three; ?></p>
                </div>
              </div>
            </a>
            <a href="<?php echo home_url().'/shop-this-instagram';//$product_link; ?>">
              <div class="shop-instagram" style="margin-top: -35px; margin-left: 35px;">
                <div class="instagram-photo">
                  <img src="<?php echo $image_four[0]; ?>" alt="<?php echo $title_four; ?>" />
                <p><span style="color:#000;"><?php echo $title_four; ?></span>
                <?php echo $caption_four; ?></p>
                </div>
              </div>
            </a>
      </div>
      <div class="viewall-latest">
        <a href="<?php echo home_url(); ?>/shop-this-instagram/">VIEW ALL INSTAGRAM</a>
      </div>
      <div style="clear: left;"></div>  -->
    <?php
  }

  function inf_item_of_the_day() {
    $home_id = get_option('page_on_front');
    ?>
      <div class="item-of-the-day">
          <?php
          //$item_of_the_day = carbon_get_theme_option('inf_item_of_the_day');
          $home_products = get_post_meta($home_id, '_inf_product_of_the_day', true);
          $home_prodID   = $home_products[0];

        $product_title    = get_the_title($home_prodID);
        if (strlen($product_title) > 45) {
          $product_title = substr($product_title, 0, 45) . '...';
        }
        $product_designer = get_post_meta($home_prodID, 'designer', true);
        $product_price    = get_post_meta($home_prodID, 'price', true);
				$product_url     = get_post_meta($home_prodID, 'product_url', true);
        $product_image    = wp_get_attachment_image_src(get_post_thumbnail_id($home_prodID), 'inf_home_inst_prod_nocrop');
    ?>
          <a href="<?php echo esc_url($product_url); ?>" target="_blank">
            <h2>Item of the Day</h2>
            <img src="<?php echo $product_image[0] ?>" width="<?php echo $product_image[1]; ?>" height="<?php echo $product_image[2]; ?>" alt="Item of the Day" />
             <h5><span style="text-transform: uppercase; font-weight: bold;"><?php echo $product_designer?></span></h5><h6><?php echo $product_title; ?>, $<?php echo $product_price; ?></h6>
          </a>
      </div><!-- /.item-of-the-day -->
    <?php
  }

  function the_post_thumbnail_caption($post_id) {
    //global $post;

    $thumbnail_id    = get_post_thumbnail_id($post_id);
    $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

    if ($thumbnail_image && isset($thumbnail_image[0])) {
      $caption = $thumbnail_image[0]->post_excerpt;
    }

    return $caption;
  }

  // Pass in a WP_Post object connected to an influencer
  function get_influencer_id_by_connected_post($post){
    $args = array(
      'connected_type' => 'posts_to_influencers',
      'connected_items' => $post->ID,
      'nopaging' => true,
      'posts_per_page' => 1
    );
    $influencer = get_posts($args);

    $influencer_id = null;
    if(isset($influencer[0])){
      $influencer_id = $influencer[0]->ID;
    }
    return $influencer_id;
  }
    ?>