<?php
/*
* Template Name: Browse By
*/
get_header();

the_post();
?>
	<section id="content" class="browse-by">
    <div class="section-heading">
      <h1><?php the_title(); ?></h1>
      <div class="line"></div>
    </div><!-- /.section-heading -->
<?php
    inf_browse_by();

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 4,
      'meta_query' => array(
        array(
          'key' => '_thumbnail_id',
          'value' => '',
          'compare' => '!='
        )
      )
    );
    $latest_posts = get_posts($args);

    if(!empty($latest_posts)) {
      $latest_posts_section_title = carbon_get_the_post_meta('inf_home_latest_posts_title'); ?>
      <div class="latest browse-cat group">
        <h2 class="flag shop">LATEST LOOKS</h2>
        <div class="shell">
          <?php if(!empty($latest_posts_section_title)) { ?>
            <div class="section-heading">
              <h2><?php echo $latest_posts_section_title; ?></h2>
              <div class="line"></div>
            </div><!-- /.section-heading -->
          <?php } ?>
          <ul class="recent-list">
            <?php foreach($latest_posts as $lp) :
              $args = array(
                'connected_type' => 'posts_to_influencers',
                'connected_items' => $lp->ID,
                'nopaging' => true,
                'posts_per_page' => 1
              );
              $connected = new WP_Query($args);
              if($connected->have_posts()) :
                while($connected->have_posts()) {
                  $connected->the_post();
                  $thisTitle = get_the_title($lp->ID);
                  if (strlen($thisTitle) > 45) {
                    $thisTitle = substr($thisTitle, 0, 45) . '...';
                  }
                  ?>
                  <li>
                    <div class="img-hold">
                      <a href="<?php echo get_permalink($lp->ID); ?>">
                        <?php echo get_the_post_thumbnail($lp->ID, 'inf_latest_post'); ?>
                        <span class="text-box">
                          <span class="shop-link"></span>
                          <h4><?php the_title(); ?></h4>
                          <p><?php echo $thisTitle; ?></p>
                        </span>
                      </a>
                    </div>
                  </li>
                <?php }
              endif;

              wp_reset_postdata();

            endforeach; ?>
            <li id="latest_viewall"><a href="<?php echo home_url(); ?>/the-latest/"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/home_latest_viewall.png" width="41" height="427" alt="View All" /></a></li>
          </ul><!-- /.recent-list -->
        </div><!-- /.shell -->
      </div><!-- /.latest -->
      <?php } ?>
      
      <?php
        $browse_cats = wp_get_nav_menu_items('Main Menu');
        $post_ID = get_the_ID();
        $i = 0;
        foreach ($browse_cats as $item) {
          if ($post_ID == $item->object_id) { $menu_parent = $item->ID; }
          if (isset($menu_parent) && $item->menu_item_parent == $menu_parent) {
            if ($i > 0) {
              //Browse Category
              $args = array(
                'post_type' => 'post',
                'category'  => $item->object_id,
                'posts_per_page' => 4,
                'meta_query' => array(
                  array(
                    'key' => '_thumbnail_id',
                    'value' => '',
                    'compare' => '!='
                  )
                )
              );
              $cat_posts = get_posts($args);

              if(!empty($cat_posts)) {
              ?>
                <div class="latest browse-cat group">
                  <h2 class="flag shop"><?php echo $item->title; ?></h2>
                  <div class="shell">
                  <ul class="recent-list">
                    <?php foreach($cat_posts as $lp) {
                      $args = array(
                        'connected_type' => 'posts_to_influencers',
                        'connected_items' => $lp->ID,
                        'nopaging' => true,
                        'posts_per_page' => 1
                      );
                      $connected = new WP_Query($args);
                      if($connected->have_posts()) {
                        while($connected->have_posts()) {
                          $connected->the_post();
                          $thisTitle = get_the_title($lp->ID);
                          if (strlen($thisTitle) > 45) {
                            $thisTitle = substr($thisTitle, 0, 45) . '...';
                          }
                          ?>
                          <li>
                            <div class="img-hold">
                              <a href="<?php echo get_permalink($lp->ID); ?>">
                                <?php echo get_the_post_thumbnail($lp->ID, 'inf_latest_post'); ?>
                                <span class="text-box">
                                  <span class="shop-link"></span>
                                  <h4><?php the_title(); ?></h4>
                                  <p><?php echo $thisTitle; ?></p>
                                </span>
                              </a>
                            </div>
                          </li>
                        <?php }
                      }
                      wp_reset_postdata();
                    }
                    ?>
                    <li id="latest_viewall"><a href="<?php echo $item->url; ?>"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/home_latest_viewall.png" width="41" height="427" alt="View All" /></a></li>
                  </ul><!-- /.recent-list -->  
                  </div><!-- /.shell -->  
                </div>
      <?php 
              }
            }
            $i++;
          }
        }
      ?>
    <div class="ad_banner">
          
    </div>
    <div class="section-heading">
      <h2>BROWSE BY</h2>
        <div class="line"></div>
    </div><!-- /.section-heading -->
    <div class="az-links">
      <ul>
      <?php
        foreach (range('a', 'z') as $letter) {
          ?>
          <li class="<?php echo $letter; ?> scr-link"><a href="az-<?php echo $letter; ?>"><?php echo strtoupper($letter); ?></a></li>
          <?php
        }
      ?>
      </ul>
    </div>
      <?php
        //A-Z Browse
        $args = array(
					'post_type' => 'inf_influencer',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC'
				);
        $influencers = get_posts($args);
        $influencers_count = count($influencers);
        
        ?>
        <div class="shell browse-az">
        <?php
        foreach($influencers as $key=>$influencer) {
          $first_letter = strtolower(substr($influencer->post_title, 0, 1));
          $next_letter  = strtolower(substr($influencers[$key+1]->post_title, 0, 1));
          if ($first_letter != $last_letter) {
            echo '<div class="az-row">';
            echo '<h2 class="az-' . $first_letter . '">' . strtoupper($first_letter) . '</h2>';
            echo '<div class="az-column">';
          }
          echo '<span><a href="' . get_permalink($influencer->ID) . '">' . $influencer->post_title . '</a></span>';
          if ($next_letter != $first_letter) {
            echo '</div>';
            echo '</div>';
          }
          $last_letter = $first_letter;
        }
        ?>
        </div><!-- /.shell -->  
        <?php
        
        
        
      ?>
	</section><!-- /#content -->
  <?php inf_footer_signup() ?>
<?php get_footer(); ?>