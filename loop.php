<?php 
  global $title; //The Browse By category (The Latest, On the Street, etc.)
  //$profile_flag is true if loop is called from the Influencer Profile template (single-inf_influencer.php)
  if ($profile_flag == true) {
    $profile_class = ' profile-loop';
  }
  
  if ($profile_flag != true) {
    global $query_string;
    query_posts( $query_string . '&posts_per_page=12' );
  }
?>
<?php if(have_posts()) : ?>
    <div class="content_wrapper">
    <div class="row browse-row<?php echo $profile_class; ?>">
     <?php 
        if ($profile_flag == true) {
      ?>
      <div class="archive-col">
			  <div class="text-holder">
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
						<?php 
              if (empty($current_user_influencers)) { $current_user_influencers = array(); }
              if (!empty($influencer_id)) {
              if(in_array($influencer_id, $current_user_influencers)) {
            ?>
							<input type="hidden" name="influencer_unsubscribe" value="<?php echo $influencer_id; ?>">
							<a class="in-circle active<?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>"></a>
							<div class="shop-subscribe"><a class="sub-link<?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe-arrow-right.png" width="30" height="20" alt="" />UNSUBSCRIBE</a><img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe-arrow-left.png" width="30" height="20" alt="" /></div><!-- /.flag -->
						<?php } else { ?>
							<input type="hidden" name="influencer_subscribe" value="<?php echo $influencer_id; ?>">
							<a class="in-circle<?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>"></a>
							<div class="shop-subscribe"><a class="sub-link<?php echo $extraclass; ?>" href="<?php echo home_url().'/my-influence/'; ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe-arrow-right.png" width="30" height="20" alt="" />SUBSCRIBE<img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe-arrow-left.png" width="30" height="20" alt="" /></a></div><!-- /.flag -->
						<?php
              }
              }
            ?>
						</form>
            <h1 class="profile-title"><?php echo $influencer_name; ?></h1>
						<?php //} ?>
					</div><!-- /.browse-type -->
          <?php if ($profile_flag != true) { ?>
					<h2><?php the_title(); ?></h2>
					<?php //the_content(); ?>
					<a href="<?php echo get_permalink($influencer_id); ?>" class="shop-viewall">VIEW ALL <?php echo $influencer_name; ?> LOOKS<img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe-arrow-right.png" alt="" /></a>
          <?php } ?>
				</div><!-- /.text-holder -->
        <h2 class="profile-inactive flag shop">RECENT LOOKS</h2>
        <?php 
          echo $profile_image;
        ?>
			</div><!-- /.right-col -->
      <?php
      }
      $i = 0;
      while(have_posts()) : the_post();
      $i++;
      $inf_name = inf_name_from_post(get_the_ID());
      $end_class = '';
      if ($i == 2) {
        if ($profile_flag != true) {
        ?>
           <div class="archive-col blocked-title">
            <div>
              <h2>The Influencers</h2>
              <h3><?php echo $title; ?></h3>
            </div>
           </div>
          <?php } ?>
           <div class="archive-col">
             <div class="ad-300-600">
                <a href="http://bit.ly/1o4amur">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/300x600-dstld.jpg" />
                </a>
                <!-- BEGIN IFRAME TAG - theinfluence 300x600 < - DO NOT MODIFY -->
                <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2438106&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="600"></IFRAME>-->
                <!-- END TAG -->
             </div>
           </div>
        <?php
      }
      if ($i == 3 and $profile_flag != true) {
        ?>
           <div class="archive-col">
             <div class="ad-300-250">
          <a href="http://click.linksynergy.com/fs-bin/click?id=pwlaa2*cgnI&offerid=276224.10013358&subid=0&type=4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/nordstrom1.jpg" />
          </a>
                <!-- BEGIN IFRAME TAG - theinfluence 300x250 < - DO NOT MODIFY -->
                <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2411077&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="250"></IFRAME>-->
                <!-- END TAG -->
             </div>
           </div>
        <?php
      }
      if ($i == 5 and $profile_flag == true) {
        ?>
           <div class="archive-col">
             <div class="ad-300-250">
          <a href="http://click.linksynergy.com/fs-bin/click?id=pwlaa2*cgnI&offerid=338823.10000514&subid=0&type=4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/asos1.gif" />
          </a>
                <!-- BEGIN IFRAME TAG - theinfluence 300x250 < - DO NOT MODIFY -->
                <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2411077&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="250"></IFRAME>-->
                <!-- END TAG -->
             </div>
           </div>
        <?php
      }
      $shortDesc = get_the_title(get_the_ID());
      if (strlen($shortDesc) > 100) {
        $shortDesc = substr(get_the_title(get_the_ID()), 0, 100) . '<span style="font: bold;">READ MORE</span>';
      }
      if (get_post_type($lp->ID) == 'rewardstyle_products') {
        $permalink = get_post_meta(get_the_ID(), 'product_url', true);
        $blankattr = ' target="_blank"';
      } else {
        $permalink = get_permalink($lp->ID);
        $blankattr = '';
      }
    ?>
      <div class="infinite-block archive-col<?php echo $end_class; ?>">
        <div class="img-hold">
          <a href="<?php echo $permalink; ?>"<?php echo $blankattr; ?>>
            <?php
              if ($profile_flag == true) {
                echo get_the_post_thumbnail($lp->ID, 'inf_profile_loop');
              } else {
                echo get_the_post_thumbnail($lp->ID, 'inf_profile_loop');
              }
            ?>
            <span class="text-box">
              <span class="shop-link"></span>
              <?php if ($profile_flag != true) { ?>
              <h4><?php echo $inf_name; ?></h4>
              <?php } ?>
              <p><?php echo $shortDesc; ?></p>
            </span>
          </a>
        </div>
      </div>
      <?php if ($i == 9 and $profile_flag != true) { ?>
        <div class="archive-col">
          <div class="ad-300-250">
          <a href="http://click.linksynergy.com/fs-bin/click?id=pwlaa2*cgnI&offerid=338823.10000514&subid=0&type=4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/asos1.gif" />
          </a>
            <!-- BEGIN IFRAME TAG - theinfluence 300x250 < - DO NOT MODIFY -->
            <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2411077&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="250"></IFRAME>-->
            <!-- END TAG -->
          </div>
        </div>
      <?php } ?>
		<?php endwhile; ?>
	</div><!-- /.row -->
  </div><!-- /.row -->
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<div class="row posts-navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries')); ?></div>
			<div class="cl">&nbsp;</div>
		</div>
	<?php endif;
else : ?>
	<div id="container" class="row">
		<div class="item error404 not-found">
			<div class="entry">
				<?php  
					if ( is_category() ) { // If this is a category archive
						printf("<p>Sorry, but there aren't any posts in the %s category yet.</p>", single_cat_title('',false));
					} else if ( is_date() ) { // If this is a date archive
						echo("<p>Sorry, but there aren't any posts with this date.</p>");
					} else if ( is_author() ) { // If this is a category archive
						$userdata = get_user_by('id', get_queried_object_id());
						printf("<p>Sorry, but there aren't any posts by %s yet.</p>", $userdata->display_name);
					} else if ( is_search() ) {
						echo("<p>No posts found. Try a different search?</p>");
					} else {
						echo("<p>No posts found.</p>");
					}
				?>
			</div>
		</div>
	</div>
<?php endif; ?>