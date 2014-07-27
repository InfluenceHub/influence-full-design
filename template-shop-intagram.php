<?php
/*
* Template Name: Shop Instagram
*/
get_header();

	the_post();
?>

	<section id="content" class="instagram-posts group">
    <div class="shell">
      <div class="column-two">
        <div class="section-heading">
          <h1 style="width: 400px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TITLES_SHOP THIS INSTAGRAM.svg" /></h1>
        </div><!-- /.section-heading -->
        <?php
    $args = array(
      'numberposts' => 9999,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'inf_instagram',
      'post_status' => 'publish'
    ); 
    $list_items = get_posts($args);
    $listblock = '';

    if (count($list_items) > 0) {
      foreach ($list_items as $key => $list_item ) {
        $instagram_products = get_post_meta($list_item->ID, '_inf_instagram_products', true);
        $instagram_prodID   = $instagram_products[0];
       
        
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($list_item->ID), 'inf_instagram');
        $title = trim(get_the_title($list_item->ID));
        if (strlen($title) > 30) {
          $title_one = substr($title, 0, 30) . '...';
        }
        $page_object = get_page($list_item->ID);
        $caption = $page_object->post_content;
        $product_title    = get_the_title($instagram_prodID);
        if (strlen($product_title) > 30) {
          $product_title = substr($product_title, 0, 30) . '...';
        }
				$product_link     = get_post_meta($instagram_prodID, 'product_url', true);
        $product_image    = wp_get_attachment_image_src(get_post_thumbnail_id($instagram_prodID), 'inf_inst_product');
        
        ?>
        <a href="<?php echo $product_link; ?>" target="_blank">
          <div class="shop-instagram<?php echo $extra_class; ?>">
            <div class="instagram-photo">
              <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1] ?>" height="<?php echo $image[2] ?>" alt="<?php echo $title; ?>" />
              <br />
              <h4><?php echo $title; ?></h4>
              <p><?php echo $caption; ?></p><br /><br /><br />
              <br /><br />
            </div>
            <div class="product-photo">
              <img src="<?php echo $product_image[0] ?>" width="<?php echo $product_image[1] ?>" height="<?php echo $product_image[2] ?>" alt="" />
              <div class="shop-link">SHOP</div>
            </div>
          </div>

        </a>
        <br /> <br /> <br /><br />


        <?php
      }
    }
    ?>

  </div>
    <div class="column adcolumn">
     <?php inf_item_of_the_day(); ?>
     <br />
        <a href="http://click.linksynergy.com/fs-bin/click?id=pwlaa2*cgnI&offerid=276224.10013359&subid=0&type=4">
           <img src="<?php bloginfo('stylesheet_directory'); ?>/images/nordstrom2.jpg" />
        </a>
     <br /><br />
    <?php inf_favorite_items(); ?>
    <br />
      <a href="http://click.linksynergy.com/fs-bin/click?id=pwlaa2*cgnI&offerid=338823.10000514&subid=0&type=4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/asos1.gif" />
      </a>
    </div>
                <!-- BEGIN IFRAME TAG - theinfluence 300x600 < - DO NOT MODIFY -->
                <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2438106&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="600"></IFRAME>-->
                <!-- END TAG -->
    </div><!-- /.shell -->



	</section><!-- /#content -->
<?php inf_browse_by(); ?>
<?php get_footer(); ?>
