<?php
/*
* Template Name: Home
*/
get_header();
the_post();
//Detect mobile
?>
<?php inf_footer_signup() ?>
<!-- BCBG_HEADER -->
<div id='div-gpt-ad-1410551574695-0' style='width:970px; height:120px; margin-top: 100px; margin-right: 20px; margin-top 15px; margin-left: auto;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1410551574695-0'); });
</script>
</div>
  <section id="callout">
  <div class="top-block" id="swiped">
    <div class="callout_container swipe-wrap">
      <div class="callout swipe-slide">
        <!--<img class="callout callout-overlay" src="<?php echo get_stylesheet_directory_uri(); ?>/images/editors-pick.png"> -->
       <?php $box1 = inf_home_box1(); ?>
        <a href="<?php echo get_post_meta($box1->ID, '_homebox1_link_url')[0]; ?>">
          <?php echo get_the_post_thumbnail($box1->ID, 'inf_home_box1'); ?>
        </a>
		<div class="callout_hover_container"><div class="callout_hover"><span><?php echo get_the_title($box1->ID) ?> <a href="<?php echo get_post_meta($box1->ID, '_homebox1_link_url')[0]; ?>">View More></a></span></div></div>
        </div>
        <div class="callout swipe-slide">
        <!--<img class="callout callout-overlay" src="<?php echo get_stylesheet_directory_uri(); ?>/images/in-focu.png"> -->
       <?php $box2 = inf_home_box2(); ?>
        <a href="<?php echo get_post_meta($box2->ID, '_homebox2_link_url')[0]; ?>">
          <?php echo get_the_post_thumbnail($box2->ID, 'inf_home_box2'); ?>
        </a>
		<div class="callout_hover_container"><div class="callout_hover"><span><?php echo get_the_title($box2->ID) ?> <a href="<?php echo get_post_meta($box2->ID, '_homebox2_link_url')[0]; ?>">View More></a></span></div></div>
        </div>
        <div class="callout swipe-slide">
        <!--<img class="callout callout-overlay" src="<?php echo get_stylesheet_directory_uri(); ?>/images/trend-report.png"> -->
        <?php $box3 = inf_home_box3(); ?>
        <a href="<?php echo get_post_meta($box3->ID, '_homebox3_link_url')[0]; ?>">
          <?php echo get_the_post_thumbnail($box3->ID, 'inf_home_box3'); ?>
        </a>
		<div class="callout_hover_container"><div class="callout_hover"><span><?php echo get_the_title($box3->ID) ?> <a href="<?php echo get_post_meta($box3->ID, '_homebox3_link_url')[0]; ?>">View More></a></span></div></div>
        </div>
        <div class="callout swipe-slide">
        <!--<img class="callout callout-overlay" src="<?php echo get_stylesheet_directory_uri(); ?>/images/just-spotted.png"> -->
       <?php $box4 = inf_home_box4(); ?>
        <a href="<?php echo get_post_meta($box4->ID, '_homebox4_link_url')[0]; ?>">
          <?php echo get_the_post_thumbnail($box4->ID, 'inf_home_box4'); ?>
        </a>
		<div class="callout_hover_container"><div class="callout_hover"><span><?php echo get_the_title($box4->ID) ?> <a href="<?php echo get_post_meta($box4->ID, '_homebox4_link_url')[0]; ?>">View More></a></span></div></div>
        </div>
    </div>
   <div class="no-mobile"><?php inf_items(); ?></div><!--favorites-->
  </div>

  <div class="mobile-only swipe-hint">
    <p> &#8596; </p>
  </div>  

</section>

  <section id="content" style="margin-top:-100px;">
    <div class="ad_wrapper-block">
      <?php //inf_browse_by(); ?>
	  <div class="content_wrapper" style="position:relative;">
	  <!-- Skin_Sides -->
<div id='div-gpt-ad-1409963968603-3' class="no-mobile" style='width:120px; height:1000px;position:fixed; top:138px; left:0;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1409963968603-3'); });
</script>
</div>
<!-- Right_Skin -->
<div id='div-gpt-ad-1409963968603-2' class="no-mobile" style='width:120px; height:1000px;position:fixed; top:138px; right:0;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1409963968603-2'); });
</script>
</div>
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
<div id="pubexchange_below_content" class="no-mobile"></div>
<!--<div class="in-video"> -->
<div class="in-video no-mobile" style="margin-top: -50px;">
 <div class="video-row" id="videos">
  <br />
        <div class="section-heading">
          <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/invideo.png" /></h2></div><br /><br /><!-- /.section-heading -->
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
    <div class="bottom-section no-mobile" style="border-top: 1px solid #ccc; margin-top: -30px;">
      <!--<div class="section-heading">
        <h2 style="width: 400px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TITLES_UNDER THE INFLUENCE.svg" style="top: -5px;" /></h2>
      </div> -->
      <br />
      <div class="shell" style="margin-top: -10px;">
        <?php $pinterest_username = carbon_get_theme_option('inf_home_pinterest_username'); ?>
        <?php if(!empty($pinterest_username)) { ?>
          <div class="column-three">
            <h2><img height="30px" width="30px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest-logo-black.jpg" /></h2>
            <div class="shop-pinterest-inner">
              <?php echo do_shortcode('[prw username="theinfluencepin" maxfeeds="12" thumbwidth="153" thumbheight="153" showfollow="none"]'); ?>
            </div>
            <div class="home-instagram">
              <h2 ><img height="30px" width="30px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.jpg" /></h2>
              <?php
                $instagram_data = inf_get_instagram_feed();
                $access_token = get_option('itw_accesstoken');
                //echo $access_token;
                //print_r($instagram_data);
              ?>
              <div class="istragram-box group">
                <ul class="pins-feed-list">
                  <?php
                    if (count($instagram_data) > 0) {
                      foreach($instagram_data as $index => $id) {
                      ?>
                        <li style="width:153px;" class="pins-feed-item">
                          <a href="<?php echo esc_url($id['image_url']); ?>" target="_blank">
                            <div class="nailthumb-container" style="padding: 0px; width: 153px; height: 153px;">
                              <img src="<?php echo $id['image_src']; ?>" width="153" height="153" alt="" />
                            </div>
                          </a>
                        </li>
                      <?php
                        if($index == 11) {
                          break;
                        }
                      }
                    }
                  ?>
                </ul>
              </div><!-- /.istragram-box -->
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <!-- END Bottom Section -->
    <!--MODAL -->
<!--<div class="ui basic modal no-mobile">
  <div class="content no-mobile" style="background-color: #fff; height: 550px; width: 100%;">
  <br /><br />
  <div class="form-wrapper no-mobile">
    <form action="http://theinfluence.us8.list-manage.com/subscribe/post?u=527260c47d9de3929c883ec2d&amp;id=69a8f6e293" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="container" target="_blank" novalidate class="container">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/signup5.jpg" alt="The Influence" />
      <br />
      <div class="input-wrapper no-mobile">
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
-->
 <script>
 console.log(jQuery('.top-block .slides'));
 jQuery('.top-block .slides').carouFredSel({
  prev: '.left-arrow',
  next: '.right-arrow',
  items:1,
  scroll: { items: 1 },
  auto: false
 });
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
  </div><!-- /.ad_wrapper-block -->
  </section><!-- /#content -->
<?php get_footer(); ?>
