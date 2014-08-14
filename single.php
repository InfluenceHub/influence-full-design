<?php get_header();
  error_reporting(0);
	inf_update_posts_views(get_the_ID());

	the_post();

	if(is_user_logged_in()) {
		$current_user_influencers = inf_get_influencers();
	} ?>
	<section id="content">
    <div class="ad_banner no-mobile">
      <a href="http://shop.theinfluence.com">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shop-banner.gif" />
      </a>
    </div>
		<div class="shell shop">
			<?php $post_categories = wp_get_post_terms( get_the_ID(), 'category' );

      $influencer_id = get_influencer_id_by_connected_post($post);

			if(!is_null($influencer_id)) :

        $influencer_name = get_the_title($influencer_id);
        $influencer_name_parts = explode(' ', $influencer_name);
        $influencer_name_first = $influencer_name_parts[0];
        ?>
				<div class="shop-main">
					<!--<div class="breadcrumbs"><a href="#">SHOP ></a> <?php //echo strtoupper(get_the_title()); ?></div> /.breadcrumbs -->
          <div class="column-three">
					<div class="left-col left">
						<?php if(has_post_thumbnail()) : ?>
							<?php
                $thisDESC = get_the_content();
                $thisURL = get_permalink();
                $img_obj = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                inf_social_share($thisURL, $influencer_name, $img_obj[0], $thisDESC);
                $category_link = get_category_link($post_categories[0]->term_id);
              ?>
              <div class="inner">
								<ul class="slides"><?php endif; ?>
								<li><a href="<?php echo $img_obj[0]; ?>" class="colorbox">
									<?php the_post_thumbnail('inf_single_image', array('class' => 'inf_single_image')); ?>
								</a></li>
                <?php inf_shop_slider(); ?>
                </ul>
                <!--<div class="shop-featured-prev">&nbsp;</div>
                <div class="shop-featured-next">&nbsp;</div> -->
							</div><!-- /.inner -->
						<?php endif; ?>
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
					</div><!-- /.left-col -->
					<div class="right-col right">
						<?php

						//$exact_items = carbon_get_the_post_meta('inf_influencer_products'); 
            $products_sections = carbon_get_the_post_meta('inf_post_products_sections', 'complex');
            ?>
						<div class="text-holder">
              <?php if(!empty($post_categories) || is_user_logged_in()) : ?>                  
							<h1><a class="shop-inf-name" href="<?php echo get_permalink($influencer_id); ?>"><?php echo $influencer_name; ?></a></h1>
              									<div class="browse-type">
											<?php //if(is_user_logged_in()) { 
                        if(!is_user_logged_in()) {
                          //$extraclass = ' class="sign-in-link"';
                        }
                        if(is_user_logged_in()) {
                          $extraclass = ' subscribe-link';
                        }
                      ?>
													<form method="post" class="interact-with-influencer">
														<?php if(in_array($influencer_id, $current_user_influencers)) { ?>
															<input type="hidden" name="influencer_unsubscribe" value="<?php echo $influencer_id; ?>">
															<a class="in-circle active<?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>"></a>
															<div class="shop-subscribe"><a class="sub-link<?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>">UNSUBSCRIBE</a></div><!-- /.flag -->
														<?php } else { ?>
															<input type="hidden" name="influencer_subscribe" value="<?php echo $influencer_id; ?>">
															<a class="in-circle<?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>"></a>
															<div class="shop-subscribe"><a class="sub-link<?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>">SUBSCRIBE</a></div><!-- /.flag -->
                            <?php } ?>
													</form>
											<?php //} ?>
									</div><!-- /.browse-type -->
							<h2><?php the_title(); ?></h2>
							<?php
                the_content();
                //echo get_the_content();
                /*
                $content = get_the_content();
                $content = apply_filters($content);
                if (strlen($content) > 120) {
                  $content = substr($content, 0, 120) . '...';
                }
                echo $content;
                */
              ?>			
		<!--<a href="<?php //echo get_permalink($influencer_id); ?>" class="shop-viewall">VIEW ALL <?php //echo $influencer_name; ?> LOOKS</a>-->
              <img class="shop-published-by" src="<?php bloginfo('stylesheet_directory'); ?>/images/published-by-danielle.png" />
						</div><!-- /.text-holder -->

          </div><!-- /.right-col -->
						<?php 
            
            //if(!empty($exact_items)) : 
            if(!empty($products_sections)) : 
            ?>
							<h2 class="prod-section">THE LOOK</h2>
							<div id="shop-slider-small" class="prod-row small">
								<ul class="slides" style="text-align: center;">
									<?php 
                  
                  //foreach($exact_items as $post_id) :
                  $prodCount = count($products_sections[0]['products']);
                  foreach($products_sections[0]['products'] as $key=>$post_id) {
										if ($key == $prodCount) {
                      $last_class = ' class="last"';
                    }
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
												<?php if(has_post_thumbnail($post_id)) : ?>
													<span class="img-hold">
														<?php echo get_the_post_thumbnail($post_id, 'inf_single_product_new'); ?>
													</span> 
												<?php endif; ?>
                      <a href="<?php echo esc_url($product_link); ?>" target="_blank" title="<?php echo $product_designer . ' -- ' . get_the_title($post_id); ?>">
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
                              </a>
                              <?php
                            }
                          }
                        ?>
										</li>
									<?php } ?>
								</ul>
                <div class="prev" style="z-index: 100;">&nbsp;</div><!-- /.prev -->
                <div class="next" style="z-index: 100;">&nbsp;</div><!-- /.next -->
                
							</div><!-- /.prod-row small -->
						<?php endif; ?>
					</div><!-- /.right-col -->
          </div><!-- /.column-three -->
				</div><!-- /.shop-main -->
       
        <div class="bottom">
				<?php $products_sections = carbon_get_the_post_meta('inf_post_products_sections', 'complex');

				if(!empty($products_sections)) :

					foreach($products_sections as $key=>$ps) {
            if ($key > 0) {
              $products = $ps['products'];

              if(!empty($products)) : ?>
                <h2 class="prod-section" style="font-family: futura-pt; font-weight: lighter; font-size: 16px; color: #000; text-transform: uppercase;"><?php echo $ps['section_name']; ?></h2>
                <div id="shop-slider-<?php echo $key; ?>" class="prod-row">
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
                    <div class="no-mobile prev-<?php echo $key; ?>">&nbsp;</div><!-- /.prev -->
                    <div class="no-mobile next-<?php echo $key; ?>">&nbsp;</div><!-- /.next -->
                </div><!-- /.prod-row -->
              <?php endif;
            }
					}

				endif;
      ?>
        </div>
        
        <div class="ad_banner no-mobile" style="margin-top: 50px; padding-bottom: 25px;">
        <a href="http://shop.theinfluence.com">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shop-banner.gif" />
        </a>
          <!-- BEGIN IFRAME TAG - theinfluence 728x90 < - DO NOT MODIFY -->
          <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2411079&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="728" HEIGHT="90"></IFRAME>-->
          <!-- END TAG -->
        </div>
      <?php

			endif;

			// showing random ("related") below
			$args = array(
				'post_type' => 'post',
				'orderby' => 'rand',
				'posts_per_page' => 5,
        'exclude' => $post->ID,
				'meta_query' => array(
					array(
						'key' => '_thumbnail_id',
						'value' => '',
						'compare' => '!='
					)
				)
			);

			$random = get_posts($args);

			if(!empty($random)) : ?>
				<div class="cols morelike">
          <h2 class="prod-section" style="font-family: 'AvenirNext LT Pro Regular', arial, sans-serif; font-weight: lighter; font-size: 24px; color: #000; text-align: center; text-transform: uppercase;">More Like This</h2>
					<div class="row no-border">
						<?php foreach($random as $r) :

							$args = array(
								'connected_type' => 'posts_to_influencers',
								'connected_items' => $r->ID,
								'posts_per_page' => 1
							);

							$influencer = get_posts($args);
              
              $thisTitle = get_the_title($r->ID);
              if (strlen($thisTitle) > 40) {
                $thisTitle = substr($thisTitle, 0, 40) . '...';
              }
              
              //echo get_the_title($influencer[0]->ID);

							?>
								<div class="col_5">
									<a href="<?php echo get_permalink($r->ID); ?>">
										<div class="img-hold">
                      <?php echo get_the_post_thumbnail($r->ID, 'inf_single_more_like'); ?>
                      <div class="shop-link">SHOP</div>
                    </div>
										<p class="more-likey"><?php echo $thisTitle; ?></p>
									</a>
								</div><!-- /.col_5 -->
							<?php

						endforeach; ?>
					</div><!-- /.row -->
				</div><!-- /.cols -->
			<?php endif; ?>
		</div><!-- /.shell -->
    
    
	</section><!-- /#content -->
 <?php inf_footer_signup() ?>
<?php get_footer(); ?>

<?php
function inf_shop_slider() {
  global $post;
  $images = carbon_get_post_meta($post->ID, 'inf_featured_images', 'complex');
  foreach($images as $image) {
    $image_full  = wp_get_attachment_image_src($image[inf_featured_image], 'full');
    $image_small = wp_get_attachment_image_src($image[inf_featured_image], 'inf_single_image');
    ?>
    <li><a href="<?php echo $image_full[0]; ?>" class="colorbox">
      <img src="<?php echo $image_small[0]; ?>" class="inf_single_image" />
		</a></li>
    <?php
  }
}
?>

<script>
jQuery(window).load(function() {
  //jQuery('.shop-main .inner.slides').flexslider();
  var $slides = jQuery('.shop-main .left-col .slides');
  // herp derp we shouldnt be initializing sliders when there is one image in the collection
  if ($slides.length > 1) {
    $slides.siblings('.shop-featured-next, .shop-featured-prev').show();
    $slides.carouFredSel({
  			prev: '.shop-featured-prev',
  			next: '.shop-featured-next',
  			items: {
          minimum: 0
        },
        // items: 1,
  			auto: false
    });
  }
});
</script>
