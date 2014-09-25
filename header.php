<?php
  //Set to true to force CSS to load uncached, false for production
  $dev_flag = true;
  if ($dev_flag == true) {
    $version = time();
  } else {
    $version = 134; //update to force reload of CSS
  }
require_once 'lib/Mobile_Detect.php';
$detect = new Mobile_Detect;
?>
<!DOCTYPE html>
<html>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="Description" content="Get the latest outfit updates from your favorite celebrities, and easily shop their looks!" />
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/favicon.ico?ver=<?php echo $version; ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/apple-touch-icon.png?ver=<?php echo $version; ?>" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/apple-touch-icon-57x57.png?ver=<?php echo $version; ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/apple-touch-icon-72x72.png?ver=<?php echo $version; ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/apple-touch-icon-76x76.png?ver=<?php echo $version; ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/apple-touch-icon-114x114.png?ver=<?php echo $version; ?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/apple-touch-icon-120x120.png?ver=<?php echo $version; ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/apple-touch-icon-144x144.png?ver=<?php echo $version; ?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/images/icons/apple-touch-icon-152x152.png?ver=<?php echo $version; ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo $version; ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/davidtemp.css?ver=<?php echo $version; ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/semantic.css?ver=<?php echo $version; ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta name="google-site-verification" content="vUzgkCun4eFlulAAb_uAY1b-42sLiFWZeTAXk9v-uSE" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
    <script type="text/javascript" src="//use.typekit.net/lzr4wxq.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/javascript/semantic.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mobile.css<?php echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen and (max-width: 700px)" />
    <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>  
  </head>
<!-- REPLACE HEADER SCRIPT WITH ALL OF THIS -->
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>
<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/61413193/300x600', [300, 600], 'div-gpt-ad-1411173041444-0').addService(googletag.pubads());
googletag.defineSlot('/61413193/300x500BCBG', [300, 600], 'div-gpt-ad-1410554390932-0').addService(googletag.pubads());
googletag.defineSlot('/61413193/BCBG_HEADER', [970, 120], 'div-gpt-ad-1411160635394-0').addService(googletag.pubads());
googletag.defineSlot('/61413193/Right_Skin', [120, 1000], 'div-gpt-ad-1409963968603-2').addService(googletag.pubads());
googletag.defineSlot('/61413193/Skin_Sides', [120, 1000], 'div-gpt-ad-1409963968603-3').addService(googletag.pubads());
googletag.defineSlot('/61413193/728x90_Interior', [728, 90], 'div-gpt-ad-1410204268874-0').addService(googletag.pubads());
googletag.defineSlot('/61413193/ROS_970x120', [970, 120], 'div-gpt-ad-1410297406212-0').addService(googletag.pubads());
googletag.defineSlot('/61413193/300x250_ROS', [300, 250], 'div-gpt-ad-1410811923506-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<!--END HEADER SCRIPT -->
	<body <?php body_class(); ?>>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1404104409810179',
          xfbml      : true,
          version    : 'v2.0'
        });
      };
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
  <!-- Google Tag Manager 1 -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NQL75C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NQL75C');</script>
<!-- End Google Tag Manager 1 -->
<!-- Google Tag Manager 2-->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MCHHLQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MCHHLQ');</script>
<!-- End Google Tag Manager 2-->
<div class="fixed_social_block"><a href="https://www.facebook.com/ShopTheInfluence" target="_blank">Facebook</a><a href="https://instagram.com/theinfluence" target="_blank">instagram<a href="http://www.pinterest.com/theinfluencepin/" target="_blank">pinterest</a><a href="https://twitter.com/theinfluence" target="_blank">twitter</a><a href="https://www.youtube.com/user/TheInfluenceStyle" target="_blank">youtube</a><a href="http://theinfluencecom.tumblr.com/" target="_blank">tumblr</a></div>
    <?php if (is_front_page()) { ?>
    <?php } ?>
    <!-- <div class="newsletter-pop">
      <div class="close">&nbsp;</div>
      <div class="inner">
        <h3>ARE YOU UNDER THE INFLUENCE?</h3>
        <form action="http://theinfluence.us8.list-manage.com/subscribe/post?u=527260c47d9de3929c883ec2d&amp;id=69a8f6e293" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <input type="email" value="" name="EMAIL" class="required email field" id="mce-EMAIL">
          <div id="mce-responses" style="display:none">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_527260c47d9de3929c883ec2d_69a8f6e293" value=""></div>
          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="submit_button">
        </form>
      </div>
    </div>
-->
<br class="no-mobile" /><br class="no-mobile" /><br class="no-mobile" />
	<header id="header">
			<div id="header_inner" class="inner_wrap">
				<?php
          //Create login/out link
          if(is_user_logged_in()) {
            $signinlink = '<li><a href="' . wp_logout_url(esc_url($_SERVER['HTTP_HOST']) . $_SERVER['REQUEST_URI']) . '">SIGN OUT</a></li>';
          } else {
            $signinlink = '<li><a href="" class="sign-in-link">SIGN IN</a></li>';
            //$signinlink = '<li><a href="" class="sign-in-link">SIGN IN</a></li><li class="up">/<a href="" class="sign-up-link">UP</a></li>';
          }
        ?>
        <a id="logo" style="padding-top: 5px;" href="<?php echo get_home_url(null, '/'); ?>"><img  class="no-mobile"src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" /></a>
        <a href="#" id="hamburger" style="width: 100%; height: 45px; margin-top: -5px;">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hamz.png" style="z-index: 2; background-color: #fff; margin-top: 5px;" width="35x" height="35px" />

	  </a>
    <div class="mobile-logo mobile-only">
      <a href="<?php bloginfo('url'); ?>" target="_self">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/header-influence.gif" height="25px"/>
      </a>
    </div>
    
        <div class="nav">
          <div class="nav-icons">
           <ul class="soc-list">
              <?php inf_list_social_networks('header'); ?>
              <li>
              <form action="<?php bloginfo('url'); ?>" method="get" class="search">
                <input type="text" value="" title="" name="s" class="field" />
                <input type="submit" value="" />
              </form>
              </li>
            </ul>
          </div><!-- /.nav-icons -->
          <?php wp_nav_menu( array(
            'theme_location'  => 'main-navigation',
            'container'       => '',
            'container_class' => '',
            'menu_class'      => '',
            'fallback_cb'     => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . $signinlink . '<li class="stretcher"></li></ul>'
          )); ?>
          <div class="mobile-form mobile-only">
            <?php get_search_form(); ?>
          </div>
          <div class="mobile-form mobile-subscribe mobile-only">
            <form action="http://theinfluence.us8.list-manage.com/subscribe/post?u=527260c47d9de3929c883ec2d&amp;id=69a8f6e293" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <p>Subscribe to our email list:</p>
              <input placeholder="email" type="email" value="" name="EMAIL" class="required email field">
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_527260c47d9de3929c883ec2d_69a8f6e293" value=""></div>
              <input type="submit" value="+" name="subscribe" class="submit_button">
            </form>
          </div>

      <?php
      $_iDropdownHtml = '<div class="influencer-menu-wrapper" id="influencer_menu"><ul><li class="top-cat-name"><span>Influencers</span></li>';
      foreach (range('a', 'e') as $letter) {
        $_iDropdownHtml .= '<li class="i_letter letter_'.$letter.'"><span>'.$letter . '</span><ul class="influencer_list">';
        $args = array(
          'post_type' => 'inf_influencer',
          'posts_per_page' => 6,
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
        foreach($inf_posts as $pp) {
          //Replace first space with br
          $args = array(
            'connected_type' => 'posts_to_influencers',
            'connected_items' => $pp->ID,
            'posts_per_page' => -1
          );
          $connected = get_posts($args);
          if (count($connected) > 0) {
            $_iDropdownHtml .= '<li class="influencer_link"><a href="' . get_permalink($pp->ID) . '">' . '<span>' . $pp->post_title . '</span></a></li>';
          } else {
            $_iDropdownHtml .= '<li class="influencer_link">' . '<span>' . $pp->post_title . '</span></li>';
          }
        }
        $_iDropdownHtml .= '<li class="influencer_link">' . '<span>...</span></li></ul></li>';
      }
      $_iDropdownHtml .= '</ul><div class="readmore"><a href="/influencers/"><img src="' . get_bloginfo('stylesheet_directory') . '/images/the-influencer-readmore.jpg" /></a></div></div>';
      echo $_iDropdownHtml;
      ?>
         <!-- <div class="subscribe-mobile mobile-only">
            <form action="http://theinfluence.us8.list-manage.com/subscribe/post?u=527260c47d9de3929c883ec2d&amp;id=69a8f6e293" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <input type="email" value="" name="EMAIL" class="required email field">
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_527260c47d9de3929c883ec2d_69a8f6e293" value=""></div>
              <input type="submit" value="+" name="subscribe" class="submit_button">
            </form>
          </div>-->
        </div><!-- /.nav -->
			</div><!-- /#header_inner -->
      <?php include('template-sign_in.php'); ?>
		</header><!-- /#header -->
