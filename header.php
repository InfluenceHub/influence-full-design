<?php
  //Set to true to force CSS to load uncached, false for production
//$dev_flag = true;
  if ($dev_flag == true) {
    $version = time();
  } else {
    $version = 134; //update to force reload of CSS
  }
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
    <meta name="viewport" content="width=1200" />
    <script type="text/javascript" src="//use.typekit.net/lzr4wxq.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="https://staging.cosmiccart.com/shop/widget"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/javascript/semantic.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
  </head>
	<body <?php body_class(); ?>>
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
    <div id="top_ad-block" class="top_ad-block">
      <a href="http://shop.theinfluence.com">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shopbanner.png" />
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
  <br /><br />
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
        <a id="logo" href="<?php echo get_home_url(null, '/'); ?>"><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 233 80" enable-background="new 0 0 233 80" xml:space="preserve">
<g>
<circle cx="40" cy="40" r="38.9"/>
<g>
<path fill="#FFFFFF" d="M38.9,20.6C38.9,20.6,38.9,20.6,38.9,20.6l0.6-0.3c0,0,0,0,0,0l0.6-0.1h1.5c0.1,0,0.1,0,0.1,0.1
c0.3,1.7,4.1,20.5,4.7,23.3c0.5,2.4,1.9,7.1,2.3,8.7c0.1,0.5,0.2,0.3,0.3,0c0.6-1.8,1.9-7.9,2.2-9.3c0.4-1.8,2.8-13.7,3.4-16.7
c0.5-2.8,1.7-9,1.9-9.9c0-0.1,0.1-0.1,0.1-0.1l1.7-0.1c0.1,0,0.2,0.1,0.2,0.2c0,1.1-1,6.7-1.5,9.6c-1.1,6-4.4,22-5.2,25.4
c-0.8,3.4-1.7,7.1-1.8,7.9c-0.1,0.5-0.2,0.9-0.2,1.1c0,0.1-0.1,0.1-0.1,0.1h-1.6c-0.1,0-0.1,0-0.1-0.1c-0.2-0.8-1.3-5.9-1.7-7.4
C45.9,51.3,42,35.2,41.5,32c-0.4-2.2-0.9-4.4-1.1-5.5c0-0.3-0.2-0.3-0.3,0c-0.6,2.7-1.8,11.1-2,12.7c-0.2,2-0.9,7.2-1,10.3
c-0.2,2.8-0.4,9.6-0.5,10.7c0,0.1-0.1,0.1-0.1,0.1h-1.6c-0.1,0-0.1-0.1-0.1-0.1c0-1-0.2-6.7,0.2-11.6
C35.4,43.3,37.1,26.1,38.9,20.6z"/>
<path fill="#FFFFFF" d="M27.8,18h1.9c0.1,0,0.1,0.1,0.1,0.1c0,0,0,1.8-0.2,2.7c-0.2,1-2.7,10.7-5.1,26.7c-0.7,5-0.8,13.9-0.9,14.2
c-0.1,0.2-2,0.2-2,0c-0.2-0.7-0.6-6.5,1-17.2c1.5-9.9,4.6-24.2,5-26.3C27.7,18,27.7,18,27.8,18z"/>
</g>
</g>
<g>
<path d="M91,35.6c-0.2,0-0.4-0.1-0.4-0.4V12.6c0-0.1-0.1-0.2-0.2-0.2H86c-0.2,0-0.4-0.1-0.4-0.4v-0.2c0-0.2,0.1-0.4,0.4-0.4h10.5
c0.2,0,0.4,0.1,0.4,0.4V12c0,0.2-0.1,0.4-0.4,0.4h-4.5c-0.1,0-0.2,0.1-0.2,0.2v22.6c0,0.2-0.1,0.4-0.4,0.4H91z"/>
<path d="M103.1,11.8c0-0.2,0.1-0.4,0.4-0.4h0.3c0.2,0,0.4,0.1,0.4,0.4v10.6c0,0.1,0.1,0.2,0.2,0.2h7.3c0.1,0,0.2-0.1,0.2-0.2V11.8
c0-0.2,0.1-0.4,0.4-0.4h0.3c0.2,0,0.4,0.1,0.4,0.4v23.4c0,0.2-0.1,0.4-0.4,0.4h-0.3c-0.2,0-0.4-0.1-0.4-0.4V23.8
c0-0.1-0.1-0.2-0.2-0.2h-7.3c-0.1,0-0.2,0.1-0.2,0.2v11.4c0,0.2-0.1,0.4-0.4,0.4h-0.3c-0.2,0-0.4-0.1-0.4-0.4V11.8z"/>
<path d="M120.9,11.8c0-0.2,0.1-0.4,0.4-0.4h7.5c0.2,0,0.4,0.1,0.4,0.4V12c0,0.2-0.1,0.4-0.4,0.4h-6.6c-0.1,0-0.2,0.1-0.2,0.2v10
c0,0.1,0.1,0.2,0.2,0.2h5.8c0.2,0,0.4,0.1,0.4,0.4v0.2c0,0.2-0.1,0.4-0.4,0.4h-5.8c-0.1,0-0.2,0.1-0.2,0.2v10.4
c0,0.1,0.1,0.2,0.2,0.2h6.6c0.2,0,0.4,0.1,0.4,0.4v0.2c0,0.2-0.1,0.4-0.4,0.4h-7.5c-0.2,0-0.4-0.1-0.4-0.4V11.8z"/>
<path d="M90.7,44.5c0-0.2,0.1-0.4,0.4-0.4h0.3c0.2,0,0.4,0.1,0.4,0.4v23.4c0,0.2-0.1,0.4-0.4,0.4H91c-0.2,0-0.4-0.1-0.4-0.4V44.5z"
/>
<path d="M101.1,44.5c0-0.2,0.1-0.4,0.4-0.4h0.5c0.3,0,0.5,0.1,0.6,0.4l7.6,21.1h0.1V44.5c0-0.2,0.1-0.4,0.4-0.4h0.3
c0.2,0,0.4,0.1,0.4,0.4v23.4c0,0.2-0.1,0.4-0.4,0.4h-0.5c-0.3,0-0.5-0.1-0.6-0.4l-7.6-21.3h-0.1v21.3c0,0.2-0.1,0.4-0.4,0.4h-0.3
c-0.2,0-0.4-0.1-0.4-0.4V44.5z"/>
<path d="M120.6,44.5c0-0.2,0.1-0.4,0.4-0.4h7.5c0.2,0,0.4,0.1,0.4,0.4v0.2c0,0.2-0.1,0.4-0.4,0.4h-6.6c-0.1,0-0.2,0.1-0.2,0.2v10.1
c0,0.1,0.1,0.2,0.2,0.2h5.8c0.2,0,0.4,0.1,0.4,0.4v0.2c0,0.2-0.1,0.4-0.4,0.4h-5.8c-0.1,0-0.2,0.1-0.2,0.2v11.1
c0,0.2-0.1,0.4-0.4,0.4H121c-0.2,0-0.4-0.1-0.4-0.4V44.5z"/>
<path d="M136.2,44.5c0-0.2,0.1-0.4,0.4-0.4h0.3c0.2,0,0.4,0.1,0.4,0.4v22.6c0,0.1,0.1,0.2,0.2,0.2h6.6c0.2,0,0.4,0.1,0.4,0.4v0.2
c0,0.2-0.1,0.4-0.4,0.4h-7.5c-0.2,0-0.4-0.1-0.4-0.4V44.5z"/>
<path d="M150.6,62.8V44.5c0-0.2,0.1-0.4,0.4-0.4h0.3c0.2,0,0.4,0.1,0.4,0.4v18.3c0,3.3,1.6,4.8,3.9,4.8s3.9-1.5,3.9-4.8V44.5
c0-0.2,0.1-0.4,0.4-0.4h0.3c0.2,0,0.4,0.1,0.4,0.4v18.3c0,3.9-2,5.7-4.9,5.7C152.6,68.6,150.6,66.7,150.6,62.8z"/>
<path d="M169.1,44.5c0-0.2,0.1-0.4,0.4-0.4h7.5c0.2,0,0.4,0.1,0.4,0.4v0.2c0,0.2-0.1,0.4-0.4,0.4h-6.6c-0.1,0-0.2,0.1-0.2,0.2v10
c0,0.1,0.1,0.2,0.2,0.2h5.8c0.2,0,0.4,0.1,0.4,0.4v0.2c0,0.2-0.1,0.4-0.4,0.4h-5.8c-0.1,0-0.2,0.1-0.2,0.2v10.4
c0,0.1,0.1,0.2,0.2,0.2h6.6c0.2,0,0.4,0.1,0.4,0.4v0.2c0,0.2-0.1,0.4-0.4,0.4h-7.5c-0.2,0-0.4-0.1-0.4-0.4V44.5z"/>
<path d="M184.7,44.5c0-0.2,0.1-0.4,0.4-0.4h0.5c0.3,0,0.5,0.1,0.6,0.4l7.6,21.1h0.1V44.5c0-0.2,0.1-0.4,0.4-0.4h0.3
c0.2,0,0.4,0.1,0.4,0.4v23.4c0,0.2-0.1,0.4-0.4,0.4H194c-0.3,0-0.5-0.1-0.6-0.4l-7.6-21.3h-0.1v21.3c0,0.2-0.1,0.4-0.4,0.4h-0.3
c-0.2,0-0.4-0.1-0.4-0.4V44.5z"/>
<path d="M203.2,56.2c0-7.2,0.1-8.2,0.5-9.2c0.7-2.1,2.2-3.1,4.4-3.1c2.6,0,4.2,1.8,4.6,4.5c0,0.2,0,0.4-0.2,0.5l-0.3,0.1
c-0.2,0.1-0.4,0-0.4-0.2c-0.4-2.4-1.5-3.9-3.7-3.9c-1.7,0-2.8,0.8-3.4,2.5c-0.3,0.9-0.4,1.8-0.4,8.9s0.1,8,0.4,8.9
c0.6,1.7,1.7,2.5,3.4,2.5c2.1,0,3.3-1.5,3.7-3.9c0-0.2,0.2-0.3,0.4-0.2l0.3,0.1c0.2,0.1,0.2,0.2,0.2,0.5c-0.4,2.8-2,4.5-4.6,4.5
c-2.2,0-3.7-1-4.4-3.1C203.3,64.4,203.2,63.4,203.2,56.2z"/>
<path d="M220.1,45.5c0-0.2,0.1-0.3,0.3-0.3h7.2c0.2,0,0.3,0.1,0.3,0.3v0.2c0,0.2-0.1,0.3-0.3,0.3h-6.3c-0.1,0-0.2,0.1-0.2,0.2v9.6
c0,0.1,0.1,0.2,0.2,0.2h5.6c0.2,0,0.3,0.1,0.3,0.3v0.2c0,0.2-0.1,0.3-0.3,0.3h-5.6c-0.1,0-0.2,0.1-0.2,0.2v9.9
c0,0.1,0.1,0.2,0.2,0.2h6.3c0.2,0,0.3,0.1,0.3,0.3v0.2c0,0.2-0.1,0.3-0.3,0.3h-7.2c-0.2,0-0.3-0.1-0.3-0.3V45.5z"/>
</g>
</svg></a>


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
            </ul><!-- /.soc-list -->
				  </div><!-- /.nav-icons -->
          <?php wp_nav_menu( array(
						'theme_location'  => 'main-navigation',
						'container'       => '', 
						'container_class' => '', 
						'menu_class'      => '', 
						'fallback_cb'     => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . $signinlink . '<li class="stretcher"></li></ul>'
					)); ?>
				</div><!-- /.nav -->
			</div><!-- /#header_inner -->
      
      <?php include('template-sign_in.php'); ?>
		</header><!-- /#header -->