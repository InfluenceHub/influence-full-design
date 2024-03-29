<?php
/*
* Template Name: Market Story
*/
get_header();
the_post();
?>
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
				<div class="shop-main">
					<!--<div class="breadcrumbs"><a href="#">SHOP ></a> <?php //echo strtoupper(get_the_title()); ?></div> /.breadcrumbs -->
          <div class="column-three" style="border: none;">
          <div class="column adcolumn" style="margin-left: -15px;">
                <a href="http://click.linksynergy.com/fs-bin/click?id=pwlaa2*cgnI&offerid=276224.10013359&subid=0&type=4">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/nordstrom2.jpg" />
                </a>
             </div>  
          <div class="left-col theme left">
						<?php if(has_post_thumbnail()) { ?>
							<?php
                $thisDESC = get_the_content();
                $thisURL = get_permalink();
                $img_obj = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                inf_social_share($thisURL, $influencer_name, $img_obj[0], $thisDESC);
                $category_link = get_category_link($post_categories[0]->term_id);
              ?>
              <div class="inner" style="width: 460px; height: 552px;">
								<ul class="slides"><?php } ?>
								<li><a href="<?php echo $img_obj[0]; ?>" class="colorbox">
									<?php the_post_thumbnail('inf_market', array('class' => 'inf_market')); ?>
								</a></li>
                <?php inf_market_slider(); ?>
                </ul>
                <div class="shop-featured-prev">&nbsp;</div>
                <div class="shop-featured-next">&nbsp;</div>
							</div>
              <!-- /.inner --> 
              <!--<div class="shop-maintag"><a href="<?php echo $category_link; ?>"><?php echo strtoupper($post_categories[0]->name); ?></a></div> -->
						<?php //} ?>
					</div><!-- /.left-col -->
          <br /> <br />
					<div class="right-col right" style="float: left;">
						<?php
						//$exact_items = carbon_get_the_post_meta('inf_influencer_products'); 
            $products_sections = carbon_get_the_post_meta('inf_post_products_sections', 'complex');
            ?>
            <div class="shop-main-theme">
						<div class="text-holder" style="margin-left: -5px; padding-top: 10px;">
              <img class="shop-published-by" style="float: right;" src="<?php bloginfo('stylesheet_directory'); ?>/images/published-by-danielle.png" />
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
              </div>      
						</div><!-- /.text-holder -->
					</div><!-- /.right-col -->
          </div><!-- /.column-three -->
			  </div>	<!-- /.shop-main -->
        <div class="column-three bottom" style="margin-top: 200px;">
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
        
        <div class="ad_banner">
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
  <?php inf_browse_by(); ?>
<?php get_footer(); ?>
<?php
function inf_market_slider_market() {
  global $post;
  $images = carbon_get_post_meta($post->ID, 'inf_featured_image', 'complex');
  foreach($images as $image) {
    $image_full  = wp_get_attachment_image_src($image[inf_featured_image], 'full');
    $image_small = wp_get_attachment_image_src($image[inf_featured_image], 'inf_market');
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
  jQuery('.shop-main .left-col .slides').carouFredSel({
			prev: '.shop-featured-prev',
			next: '.shop-featured-next',
			items: 1,
			auto: false
  });
});
</script>