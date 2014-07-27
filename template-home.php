<?php
/*
* Template Name: Home
*/
get_header();

the_post();

//Detect mobile
$iPod     = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone   = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad     = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android  = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$mobileOS = false;
if ($iPod || $iPhone || $iPad || $Android) { $mobileOS = true; }
?>
  <section id="content">
    <div class="shell">
      <?php inf_home_topslider(); ?>
    </div><!-- /.shell -->

    <div class="ad_wrapper">
      <?php inf_browse_by(); ?>
      <div class="content_wrapper">
    <?php
      inf_home_latest();

    $args = array(
      'post_type' => 'inf_video',
      'posts_per_page' => -1,
      'meta_query' => array(
        'relation' => 'AND',
        /*
        array(
          'key' => '_inf_video_url',
          'value' => '',
          'compare' => '!='
        ),
        */
        array(
          'key' => '_thumbnail_id',
          'value' => '',
          'compare' => '!='
        )
      )
      //'orderby' => 'menu_order',
      //'order' => 'ASC'
    );

    $videos = get_posts($args);

    if(!empty($videos)) :
    ?>
<!--<div class="in-video"> -->
<div class="in-video" style="margin-top: -50px;">
 <div class="video-row" id="videos">
  <br />
        <div class="section-heading">
          <h2 style="width: 400px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TITLES_IN VIDEO.svg" /></h2></div><!-- /.section-heading -->
        <div class="column-two">
          <div class="player-part">
            <div class="playbutton"></div>
              <img src="" />
              <script src="https://api.revelens.com/swfobject.js" type="text/javascript"></script>
              <div id="revelensWrapper">
                <div id="flashContent"></div>
              </div>
            </div><!-- /.player-part -->
            <h3 class="video-title"></h3>
            <div class="section-heading more-videos">
              <h2>more videos</h2>
              <div class="line"></div>
            </div><!-- /.section-heading -->
            <div class="slider-part">
              <ul class="slides">
                <?php foreach($videos as $index => $v) {
                    $entry_id  = $v->ID;
                    $video_url = carbon_get_post_meta($entry_id, 'inf_video_url');
                    if (!$mobileOS) {
                      $video_url_revelens = carbon_get_post_meta($entry_id, 'inf_video_url_rev'); //mediaStream
                      $video_slug_revelens = carbon_get_post_meta($entry_id, 'inf_video_slug_rev'); //exhibitSlug
                    }
                    $video_temp = explode('?v=', $video_url);
                    $video_id = $video_temp[1];
                    
                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($v->ID),'inf_homevid', true);
                    $video_info_img = $image_url[0];
                    
                    //$video_thumbID = carbon_get_post_meta($v->ID, 'inf_video_thumb');
                    //$video_thumb = wp_get_attachment_image_src($video_thumbID,'inf_homevid_thumb', true);
                    
                    $video_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($v->ID),'inf_homevid_thumb', true);
                    //$video_thumb_info_img = $video_thumb[0];
                  ?>
                <li data-num="<?php echo $index; ?>" data-id="<?php echo $video_id; ?>">
                  <img src="<?php echo $video_thumb[0]; ?>" width="215" height="130" alt="<?php echo get_the_title($entry_id); ?>" title="<?php echo get_the_title($entry_id); ?>" data-info-image="<?php echo $video_info_img; ?>" data-info-mediaStream="<?php echo $video_url_revelens; ?>" data-info-exhibitSlug="<?php echo $video_slug_revelens; ?>" />
                  <div class="playbutton-small"></div>
                  <h3><?php echo get_the_title($entry_id); ?></h3>
                </li>
                <?php } ?>
              </ul><!-- /.slides -->
              <div class="v-prev"></div><!-- /.v-prev -->
              <div class="v-next"></div><!-- /.v-next -->
            </div><!-- /.slider-part -->
          </div><!-- /.column-two -->
          <div class="column video-slider">
             <div class="arrows"><a class="prev-v" target="_blank" style="display: block;"></a><a class="next-v" target="_blank" style="display: block;"></a></div>
             <ul class="slides">
                <?php foreach($videos as $index => $v) {
                    $entry_id  = $v->ID;
                    $video_url = carbon_get_post_meta($entry_id, 'inf_video_url');
                    if (!$mobileOS) {
                      $video_url_revelens = carbon_get_post_meta($entry_id, 'inf_video_url_rev'); //mediaStream
                      $video_slug_revelens = carbon_get_post_meta($entry_id, 'inf_video_slug_rev'); //exhibitSlug
                    }
                    $video_temp = explode('?v=', $video_url);
                    $video_id = $video_temp[1];
                    $video_title = get_the_title($entry_id);
                    
                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($v->ID),'inf_homevid', true);
                    $video_info_img = $image_url[0];
                    
                    $video_thumbID = carbon_get_post_meta($v->ID, 'inf_video_thumb');
                    $video_thumb = wp_get_attachment_image_src($video_thumbID,'inf_homevid_thumb', true);
                    
                    //$video_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($v->ID),'inf_homevid_thumb', true);
                    //$video_thumb_info_img = $video_thumb[0];
                  ?>
                <li data-num="<?php echo $index; ?>" data-id="<?php echo $video_id; ?>">
                  <img src="<?php echo $video_thumb[0]; ?>" width="215" height="130" alt="<?php echo $video_title; ?>" title="<?php echo $video_title; ?>" data-info-image="<?php echo $video_info_img; ?>" data-info-mediaStream="<?php echo $video_url_revelens; ?>" data-info-exhibitSlug="<?php echo $video_slug_revelens; ?>" />
                  <div class="playbutton-small"></div>
                  <div class="hoverbox"></div>
                  <h3><?php echo $video_title; ?></h3>
                </li>
                <?php } ?>
              </ul><!-- /.slides -->

           <!-- <div style="width: 300px; height: 600px; background: #000;"></div> -->
<!--/* Revive Adserver iFrame Tag v3.0.4 */-->

<!--
<iframe id='ad099d26' name='ad099d26' src='http://theinfluence.com/revive/www/delivery/afr.php?campaignid=4&amp;target=_blank&amp;cb=INSERT_RANDOM_NUMBER_HERE' frameborder='0' scrolling='no' width='300' height='600'><a href='http://theinfluence.com/revive/www/delivery/ck.php?n=abb7539a&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://theinfluence.com/revive/www/delivery/avw.php?campaignid=4&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=abb7539a' border='0' alt='' /></a></iframe>

-->

            <!-- BEGIN IFRAME TAG - theinfluence 300x600 < - DO NOT MODIFY -->
            <!-- <IFRAME SRC="http://ib.adnxs.com/tt?id=2438106&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="600"></IFRAME> -->
            <!-- END TAG -->
          </div>
          <!--</div> --><!--in-video-->
        <div class="cl">&nbsp;</div>
      </div><!-- /.video-row -->
   </div>
    <?php endif; ?>

    <!-- Bottom Section -->
    <?php
      //$section_title = carbon_get_the_post_meta('inf_home_social_section_title');
    ?>
    <div class="bottom-section" style="border-top: 1px solid #ccc; margin-top: -30px;">
      <!--<div class="section-heading">
        <h2 style="width: 400px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TITLES_UNDER THE INFLUENCE.svg" style="top: -5px;" /></h2>
      </div> -->
      <br />
      <div class="shell" style="margin-top: -10px;">
        <?php
        $pinterest_username = carbon_get_theme_option('inf_home_pinterest_username');
        //theinfluence
        if(!empty($pinterest_username)) { ?>
          <div class="column-two">
            <h2><img height="30px" width="30px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest-logo-black.jpg" /></h2>
            <div class="shop-pinterest-inner">
              <?php echo do_shortcode('[prw username="theinfluencepin" maxfeeds="8" thumbwidth="160" thumbheight="160" showfollow="none"]'); ?>
            </div><!-- /.shop-pinterest-inner -->
           <!-- <div class="home-social">
              <h2>SOCIAL</h2>
              <div class="social-links">
                <a class="soc-twitter" href="<?php echo carbon_get_theme_option('twitter_header'); ?>" target="_blank"></a>
                <a class="soc-youtube" href="<?php echo carbon_get_theme_option('youtube_header'); ?>" target="_blank"></a>
                <a class="soc-tumblr" href="<?php echo carbon_get_theme_option('tumblr_header'); ?>" target="_blank"></a>
                <a class="soc-pinterest" href="<?php echo carbon_get_theme_option('pinterest_header'); ?>" target="_blank"></a>
                <a class="soc-instagram" href="<?php echo carbon_get_theme_option('instagram_header'); ?>" target="_blank"></a>
                <a class="soc-facebook" href="<?php echo carbon_get_theme_option('facebook_header'); ?>" target="_blank"></a>
              </div> 
            </div> -->
            <div class="home-instagram">
              <h2 ><img height="30px" width="30px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.jpg" /></h2>
              <?php
                $instagram_data = inf_get_instagram_feed();
                $access_token = get_option('itw_accesstoken');
                //echo $access_token;
                //print_r($instagram_data);
              ?>
              <div class="istragram-box">
                <ul class="pins-feed-list">
                  <?php 
                    if (count($instagram_data) > 0) {
                      foreach($instagram_data as $index => $id) {
                        $last = ''; if($index == 3) { $last = ' margin-right: 0;'; }
                      ?>
                        <li style="width:160px; <?php echo $last; ?>" class="pins-feed-item">
                          <a href="<?php echo esc_url($id['image_url']); ?>" target="_blank"><div class="nailthumb-container" style="padding: 0px; width: 160px; height: 160px;"><img src="<?php echo $id['image_src']; ?>" width="160" height="160" alt="" /></div></a>
                        </li>
                      <?php
                        if($index == 3) {
                          break;
                        }
                      }
                    }
                  ?>
                </ul>
              </div><!-- /.istragram-box -->
            </div>
            <h2 style="clear: both; padding-bottom: 5px;">NEWSLETTER</h2>
            <div class="home-newsletter">
              <form action="http://theinfluence.us8.list-manage.com/subscribe/post?u=527260c47d9de3929c883ec2d&amp;id=69a8f6e293" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <input type="email" value="" name="EMAIL" class="required email field">
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_527260c47d9de3929c883ec2d_69a8f6e293" value=""></div>
                <input type="submit" value="" name="subscribe" class="submit_button">
              </form>
            </div>
          </div><!-- /.column-two -->
          <div class="column adcolumn" style="border-left: 1px solid #ccc;">
            <h2>FEATURED INFLUENCER</h2>
            <a href="<?php echo home_url(); ?>/interviews/"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/jchung.jpg" width="300" height="415" alt="Featured Influencer" /></a>
          <div class="ad-300-250">
          <a href="http://click.linksynergy.com/fs-bin/click?id=pwlaa2*cgnI&offerid=338823.10000514&subid=0&type=4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/asos1.gif" />
          </a>
            <!-- BEGIN IFRAME TAG - theinfluence 300x250 < - DO NOT MODIFY -->
            <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2411077&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="250"></IFRAME>-->
            <!-- END TAG -->
          </div>
            <!--
            <link rel="stylesheet" type="text/css" href="http://cache.blogads.com/302168405/feed.css" />
            <script language="javascript" src="http://cache.blogads.com/302168405/feed.js"></script>
            -->
          </div>
        <?php } 
        
        $custom_fields = get_post_custom($post->ID);
        $featured_post_img = trim($custom_fields['wpcf-bottom-left-image'][0]);
        $featured_post_url = trim($custom_fields['wpcf-bottom-left-link-url'][0]);
        ?>
      </div>    
    </div>      
    <!-- END Bottom Section -->
    <!--MODAL -->
<div class="ui basic modal">
  <div class="content" style="background-color: #fff; height: 550px; width: 100%;">
  <br /><br />
  <div class="form-wrapper">
    <form action="http://theinfluence.us8.list-manage.com/subscribe/post?u=527260c47d9de3929c883ec2d&amp;id=69a8f6e293" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="container" target="_blank" novalidate class="container">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/signup5.jpg" alt="The Influence" />
<br />
      <div class="input-wrapper">
        <input type="email" value="" name="EMAIL" class="field" id="mce-EMAIL" placeholder="ENTER YOUR EMAIL">
          <div id="mce-responses" style="display:none">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>

      <input type="submit" value="" class="button" />
      </div>
    </form>
</div>
</div>
<a class="close icon"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/skiptosite.png"></a>
</div>

 <script>
  //uncomment to force cookie reset
  //document.cookie = "showHomePopup=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
  var homeCookie = getCookie('showHomePopup');
  document.cookie="showHomePopup=false";
  if (!homeCookie) {
    setTimeout(function(){showSignup()}, 10000);
    function showSignup() {
      $('.ui.modal').modal('show');
    }      
  }

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
  }
</script> 
    </div><!-- /.content_wrapper -->
  </div><!-- /.ad_wrapper -->
  </section><!-- /#content -->
<?php get_footer(); ?>
