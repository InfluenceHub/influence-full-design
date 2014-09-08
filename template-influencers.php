<?php
/*
* Template Name: Influencers
*/
get_header();
	the_post(); ?>
  <section id="content" class="influencers">
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