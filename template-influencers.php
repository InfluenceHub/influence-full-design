<?php
/*
* Template Name: Influencers
*/
get_header();

	the_post(); ?>
  <section id="content" class="influencers">
		<div class="shell">
      <div class="section-heading no-mobile">
        <h1 style="padding-bottom: -5px;"><img class="hide-me" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/fashionarchive.png"></h1><br class="no-mobile" /><br class="no-mobile" /><br class="no-mobile" />
     </div><!-- /.section-heading --><br class="no-mobile" /> <br class="no-mobile" /><br class="no-mobile" />

      <div class="column-two">
        <h2 class='no-mobile'>most popular</h2>
        <?php
          $popular_category = carbon_get_the_post_meta('inf_popular_posts_category');
          if(!empty($popular_category)) {
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

            $popular_posts = get_posts($args);
            if(!empty($popular_posts)) {
              $popular_section_title = carbon_get_the_post_meta('inf_popular_posts_section_title');
            ?>
            <div id="topSlider" class="influencers-slider group no-mobile">
              <ul class="slides">
                <?php foreach($popular_posts as $pp) {
                  $related = p2p_type( 'posts_to_influencers' )->get_related( $pp->ID );
                  $inf_name = inf_name_from_post($pp->ID);
                  $shortDesc = get_the_title($pp->ID);
                  if (strlen($shortDesc) > 60) {
                    $shortDesc = substr(get_the_title($pp->ID), 0, 50) . '...';
                  }
                ?>
                <li>
                  <a href="<?php echo get_permalink($pp->ID); ?>">
                    <?php echo get_the_post_thumbnail($pp->ID, 'inf_most_popular'); ?>
                    <h3><?php echo $inf_name; ?></h3>
                    <p><?php echo $shortDesc; ?></p>
                  </a>
                </li>
                <?php } ?>
              </ul>
              <div class="prev">&nbsp;</div><!-- /.prev -->
              <div class="next">&nbsp;</div><!-- /.next -->
            </div>
          <?php
            }
          }
        ?>
        
        <div class="section-heading a-z">
          <h2><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/a-z2.png" width="600" height="87" alt="the influencer index" /></h2>
        </div><!-- /.section-heading -->
        <div class="az-links">
          <ul>
          <?php
            foreach (range('a', 'z') as $letter) {
              ?>
              <li class="<?php echo $letter; ?> scr-link"><a href="#" data-scrollto="az-<?php echo $letter; ?>"><?php echo strtoupper($letter); ?></a></li>
              <?php
            }
          ?>
          </ul>
        </div>
      </div>
      <div class="column adcolumn no-mobile">
      <a href="http://www.tkqlhce.com/click-7580048-11850643">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/nasty1.gif" />
        </a>
        <!-- BEGIN IFRAME TAG - theinfluence 300x600 < - DO NOT MODIFY -->
        <!-- <IFRAME SRC="http://ib.adnxs.com/tt?id=2438106&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="600"></IFRAME> -->
        <!-- END TAG -->
        <?php inf_item_of_the_day(); ?>
        <a href="<?php echo home_url(); ?>/my-influence" class="subscribe-img"></a>
      </div>
    </div>
    <div class="sorted-content influencers-az">
		<?php 
    foreach (range('a', 'z') as $letter) {
      $args = array(
        'post_type' => 'inf_influencer',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
          array(
            'key' => '_first_letter',
            'value' => $letter,
            'compare' => '=='
          )
        )
		  );
      $inf_posts = get_posts($args);
      ?>
      
      <?php if(!empty($inf_posts)) { ?>
          <h2 class="az-<?php echo $letter; ?>" id="az-<?php echo $letter; ?>"><?php echo strtoupper($letter); ?></h2>
          <a class='az-return' href="#"> ^ </a>
  
          <ul>
						<?php foreach($inf_posts as $pp) { 
            
            //Replace first space with br
            $args = array(
                'connected_type' => 'posts_to_influencers',
                'connected_items' => $pp->ID,
                'posts_per_page' => -1
              );
              $connected = get_posts($args);
              
              if (count($connected) > 0) {
            ?>
              <li>
								<a href="<?php echo get_permalink($pp->ID); ?>">
									<?php echo get_the_post_thumbnail($pp->ID, 'inf_post_az'); ?>
                  <h3><?php echo preg_replace('/ /', '<br />', $pp->post_title, 1); ?></h3>
								</a>
							</li>
						<?php 
              } else {
            ?>
              <li>
								<?php echo get_the_post_thumbnail($pp->ID, 'inf_post_az'); ?>
                <h3><?php echo preg_replace('/ /', '<br />', $pp->post_title, 1); ?></h3>
							</li>
						<?php 
              }
            } 
            
            ?>
					</ul>
				<?php } ?>
    <?php 
    }
		?>
     
      </div>
      
      <div class="ad_banner no-mobile" style="margin-bottom: 40px;">
       <a href="http://shop.theinfluence.com">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shop-banner.gif" />
      </a>
      <!-- BEGIN IFRAME TAG - theinfluence 728x90 < - DO NOT MODIFY -->
      <!-- <IFRAME SRC="http://ib.adnxs.com/tt?id=2411079&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="728" HEIGHT="90"></IFRAME> -->
      <!-- END TAG -->
    </div>
  </section>

    

    

 <?php inf_footer_signup() ?>
<?php get_footer(); ?>