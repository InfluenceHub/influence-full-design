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
    
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
    
    <script type="text/javascript" src="//use.typekit.net/lzr4wxq.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/javascript/semantic.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mobile.css<?php echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen and (max-width: 700px)" />
  </head>


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
    <?php if (is_front_page()) { ?>
    <div id="top_ad-block" class="top_ad-block no-mobile">
      <a href="http://shop.theinfluence.com">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shop-banner.gif" />
      </a>
      <!-- BEGIN IFRAME TAG - theinfluence 728x90 < - DO NOT MODIFY -->
      <!--<IFRAME SRC="http://ib.adnxs.com/tt?id=2411079&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="728" HEIGHT="90"></IFRAME>-->
      <!-- END TAG -->
    </div>
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
        <a id="logo" style="padding-top: 5px;"href="<?php echo get_home_url(null, '/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" /></a>
        <a href="#" id="hamburger" style="width: 100%; height: 45px; margin-top: -5px;"> 
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hamz.png" style="z-index: 2; background-color: #fff; margin-top: 5px;" width="35x" height="35px" />
	<div style="padding-left: 60px; margin-top: -30px; z-index: 5;"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/header-influence.gif" height="25px"/></div>    
      </a>

				<div class="nav">
					<div class="nav-icons" style="display:none;">
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
