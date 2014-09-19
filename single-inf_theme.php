<?php get_header();
  error_reporting(0);
	inf_update_posts_views(get_the_ID());
	the_post();
	if(is_user_logged_in()) {
		$current_user_influencers = inf_get_influencers();
	} ?>
	<section id="content">
		<div class="shell shop">
			<?php $post_categories = wp_get_post_terms( get_the_ID(), 'category' );
			$args = array(
				'connected_type' => 'posts_to_influencers',
				'connected_items' => get_the_ID(),
				'nopaging' => true,
				'posts_per_page' => 1
			);
			$influencer = get_posts($args);
			//if(!empty($influencer)) {
        ?>
<SCRIPT LANGUAGE="JavaScript">function mailpage() 
{ 
mail_str = "mailto:?subject= Check Out What I Read at THEINFLUENCE.COM! --  " + document.title; 
mail_str += "&body= " + document.title; 
mail_str += "... at: " + location.href; 
location.href = mail_str; 
} 
</SCRIPT>
				<div class="shop-main theme">
	  <div class="shop-main-social"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo ($current_url) ?>&redirect_uri=<?php echo urlencode($current_url) ?>" class="facebook"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_fb.jpg" /></a> <a href="javascript:mailpage()" target="_top"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_email.png" /></a> <a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode($current_url) ?>&media=<?php echo $img_obj[0]; ?>&description=<?php echo str_replace(" ", "+", get_the_title(get_the_ID())); ?>" class="pinterest"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_pin.jpg" /></a></div>

        <div class="shop-main-title-theme"><?php echo get_the_title(get_the_ID()); ?></div>
					<!--<div class="breadcrumbs"><a href="#">SHOP ></a> <?php //echo strtoupper(get_the_title()); ?></div> /.breadcrumbs -->
          <div class="column-three" style="border: none; height: auto;">
          <div class="column adcolumn no-mobile">
<!-- ROS_300x600 -->
<div id='div-gpt-ad-1410302527331-0' style='width:300px; height:600px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1410302527331-0'); });
</script>
</div>
</div>
<!--              </div>
 -->          <div class="left-col theme" style="width: 60%;">
               <div class="theme-date">            
                     <img class="shop-published-by1" style="display:inline; margin:0px 0px 10px;" src="<?php bloginfo('stylesheet_directory'); ?>/images/published-by-danielle.png" />
                    <?php the_time('F j, Y'); ?>
                </div>
<!-- 				<div class="shop-main-title-theme"><?php echo get_the_title(get_the_ID()); ?></div>-->

          <div class="text-holder" style="margin-bottom:25px; padding:0; height:auto;">
              <?php //if(!empty($post_categories) || is_user_logged_in()) { ?>
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
     <img class="shop-published-by1" style="position:absolute; right: 375px; display:block; margin:0px 0px 10px;" src="<?php bloginfo('stylesheet_directory'); ?>/images/published-by-danielle.png" />

 <!-- 
						<?php if(has_post_thumbnail()) { ?>
							<?php
                $thisDESC = get_the_content();
                $thisURL = get_permalink();
                $img_obj = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                $category_link = get_category_link($post_categories[0]->term_id);
              }
              ?> -->
              <!-- style="width: ; height:640px; margin-right:24px;" -->
<!--               <div class="inner no-mobile" style="margin-right:24px; width:426px; height:640px;">
 -->		
       </div>
 <ul class="theme-ul">
<!-- 								<li class="theme-list">
									<?php the_post_thumbnail('inf_featured_theme', array('class' => 'inf_featured_theme')); ?>
								</li> -->
                <?php inf_theme_slider_theme(); ?>
<!--        <div class="shop-main-title-theme"><?php echo get_the_title(get_the_ID()); ?></div>-->
              </ul>
       </div>
<!--                 <div class="shop-featured-prev">&nbsp;</div>
                <div class="shop-featured-next">&nbsp;</div>
							</div> -->
              <!-- /.inner -->
              <!--<div class="shop-maintag"><a href="<?php echo $category_link; ?>"><?php echo strtoupper($post_categories[0]->name); ?></a></div> -->
						<?php //} ?>
					</div><!-- /.left-col -->
<!-- 					<div class="right-col left" style="float: left; width:225px;">
						<?php
						//$exact_items = carbon_get_the_post_meta('inf_influencer_products');
            $products_sections = carbon_get_the_post_meta('inf_post_products_sections', 'complex');
			global $wp;
			$current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
            ?> -->

        <div class="column-three bottom" style="margin-top: 100px; display: none;">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/shopthetrend.jpg" class="" style="margin:0 auto; display:block; margin-bottom:80px;" />
				<?php $products_sections = carbon_get_the_post_meta('inf_post_products_sections', 'complex');
				if(!empty($products_sections)) {
					foreach($products_sections as $key=>$ps) {
              $products = $ps['products'];
              if(!empty($products)) { ?>
              <br /><br />
                <h2 class="prod-section"><?php echo $ps['section_name']; ?></h2>
                <div id="shop-slider-<?php echo $key+1; ?>" class="prod-row">
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
                    <div class="prev-<?php echo $key+1; ?>">&nbsp;</div><!-- /.prev -->
                    <div class="next-<?php echo $key+1; ?>">&nbsp;</div><!-- /.next -->
                </div><!-- /.prod-row -->
              <?php }
            }
				}
      ?>
        </div>
        <div class="ad_banner no-mobile" style="display: none;">
        <a href="http://shop.theinfluence.com">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shop-banner.gif" />
        </a>
          <!-- BEGIN IFRAME TAG - theinfluence 728x90 < - DO NOT MODIFY -->
          <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2411079&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="728" HEIGHT="90"></IFRAME>-->
          <!-- END TAG -->
        </div>
      <?php
			//}
			// showing random ("related") below
			$args = array(
				'post_type' => 'post',
				'orderby' => 'rand',
				'posts_per_page' => 5,
				'meta_query' => array(
					array(
						'key' => '_thumbnail_id',
						'value' => '',
						'compare' => '!='
					)
				)
			);
			//$random = get_posts($args);
			if(!empty($random)) { ?>
				<div class="cols column-three morelike">
          <h2>more like this</h2>
					<div class="row no-border">
						<?php foreach($random as $r) {
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
										<p><?php echo $thisTitle; ?></p>
									</a>
								</div><!-- /.col_5 -->
							<?php
						} ?>
					</div><!-- /.row -->
				</div><!-- /.cols -->
			<?php } ?>
		</div><!-- /.shell -->
	</section><!-- /#content -->
  <?php #inf_browse_by(); ?>
  <?php
  ini_set('display_errors', 1);
  // The interviews page displays the latest interview for now
  $args = array(
    'numberposts' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'inf_theme',
    'post_status' => 'publish'
  );
  $interviews = get_posts($args);
  #print_r($interviews);
  $key = 0;
  ?>
  <div class="more_interviews">
	<div class="more_interviews_wrapper">
	<?php foreach ($interviews as $_interview):
		$image_id = get_post_thumbnail_id($_interview->ID);
		$thumbnail = wp_get_attachment_image_src($image_id, 'medium');
		$_interviewLink = get_permalink($_interview->ID);
	?>
			<div class="more_int_block">
                <a href="<?php echo $_interviewLink; ?>">
            <div class="home-feed-side-by-side home-feed-post-img-wrap">
                <img src="<?php echo $thumbnail[0]; ?>" alt="<?php echo $_interview->post_title; ?>" width="100%" />
                </div>
				<h3><?php echo $_interview->post_title; ?></h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_viewmore.jpg" />
                </a>
            </div>
	<?php
	endforeach; ?>
		</div>
  </div>
<?php get_footer(); ?>
<?php
function inf_theme_slider_theme() {
  global $post;
  $images = carbon_get_post_meta($post->ID, 'inf_featured_images', 'complex');
  #$captions = carbon_get_post_meta($post->ID,'inf_featured_images', 'complex');
  $i = 1;
  #print_r($captions); die();
  foreach($images as $image) {
    $image_full  = wp_get_attachment_image_src($image['inf_featured_image'], 'full');
    $image_small = wp_get_attachment_image_src($image['inf_featured_image'], 'inf_featured_theme');
    ?>
    <li class="theme-list">
      <img src="<?php echo $image_small[0]; ?>" class="inf_single_image" />
	  <?php if($image['inf_caption2']): ?><div class="slide-text"><?php echo $image['inf_caption2'] ?><br /></div><?php endif; ?>
<!--     <?php if ($image['inf_caption2']): ?><div class="slide_text" style="vertical-align: top; position: absolute; top:0;" id ="slide_text_"><a href="<?php echo $image['inf_caption_url'] ?>"><?php echo $image['product_name'] ?></a></div><?php endif; ?>
 -->	</li>
     <?php
	 $i++;
    }
  }
?>
<script>
// jQuery(window).load(function() {
//   //jQuery('.shop-main .inner.slides').flexslider();
//   jQuery('.shop-main .left-col .slides').carouFredSel({
// 			prev: '.shop-featured-prev',
// 			next: '.shop-featured-next',
// 			items: 1,
// 			auto: false,
// 			scroll: {
// 				onBefore: function() {
// 					var pos = jQuery(".shop-main .left-col .slides").triggerHandler("currentPosition");
// 					if (jQuery("#slide_text_" + pos).length) {
// 						jQuery("#text_holder").text(jQuery("#slide_text_" + pos).text());
// 					} else {
// 						jQuery("#text_holder").text(jQuery("#post_content").text());
// 					}
// 				}
// 			}
//   });
// });
// </script>
