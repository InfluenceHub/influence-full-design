<?php
include('functions_two.php');
function crb_init_theme() {
	if (class_exists('instagrate_to_wordpress')) {
		remove_action( 'template_redirect', 'instagrate_to_wordpress::auto_post_images');
	}
	# Enqueue jQuery
	wp_enqueue_script('jquery');

	if (is_admin()) { /* Front end scripts and styles won't be included in admin area */
		if (isset($_GET['page']) && $_GET['page'] == 'instagratetowordpress') {
			wp_enqueue_style('instagratetowp', get_bloginfo('stylesheet_directory') . '/css/instagratetowp.css', array(), '1.0', 'all');
		}
		wp_enqueue_style('theme-custom-admin', get_bloginfo('stylesheet_directory') . '/css/admin.css', array(), '1.0');
		return;
	}
	# Enqueue Custom Scripts
	# @wp_enqueue_script attributes -- id, location, dependancies, version
	//wp_enqueue_script('custom-script', get_bloginfo('stylesheet_directory') . '/js/custom-script.js', array('jquery'), '1.0');
	wp_enqueue_script('modernizr', get_bloginfo('stylesheet_directory') . '/js/modernizr-2.6.1.min.js', array(), '2.6.1');
	wp_enqueue_script('jquery-caroufredsel', get_bloginfo('stylesheet_directory') . '/js/jquery.carouFredSel-6.2.1-packed.js', array('jquery'), '6.2.1');
	wp_enqueue_script('jquery-isotope', get_bloginfo('stylesheet_directory') . '/js/jquery.isotope.min.js', array('jquery'), '1.5.25');
	wp_enqueue_script('jquery-infinitescroll', get_bloginfo('stylesheet_directory') . '/js/jquery.infinitescroll.min.js', array('jquery'), '2.0');
	wp_enqueue_script('jquery-colorbox', get_bloginfo('stylesheet_directory') . '/js/jquery.colorbox-min.js', array('jquery'), '1.4.29');
  wp_enqueue_script('icheck', get_bloginfo('stylesheet_directory') . '/js/icheck.min.js', array('jquery'), '1.4.29');
  wp_enqueue_script('flexslider', get_bloginfo('stylesheet_directory') . '/js/jquery.flexslider.js', array('jquery'), '1.4.29');
  wp_enqueue_script('tubePlayer', get_bloginfo('stylesheet_directory') . '/js/jQuery.tubeplayer.min.js', array('jquery'));
	wp_enqueue_script('jquery-functions', get_bloginfo('stylesheet_directory') . '/js/functions.js', array('jquery'), time());
	wp_enqueue_style('google-font-chivo', 'http://fonts.googleapis.com/css?family=Chivo:400,400italic,900,900italic');

	if(wp_script_is('jquery-colorbox', 'queue')) {
		wp_enqueue_style('style-colorbox', get_bloginfo('stylesheet_directory') . '/css/colorbox.css');
	}

}

define('CRB_THEME_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
add_action('init', 'crb_init_theme');
add_action('after_setup_theme', 'crb_setup_theme');

# To override theme setup process in a child theme, add your own crb_setup_theme() to your child theme's
# functions.php file.
if (!function_exists('crb_setup_theme')) {
	function crb_setup_theme() {
		include_once(CRB_THEME_DIR . 'lib/common.php');
		include_once(CRB_THEME_DIR . 'lib/carbon-fields/carbon-fields.php');

		# Theme supports
		add_theme_support('automatic-feed-links');
		
		# Manually select Post Formats to be supported - http://codex.wordpress.org/Post_Formats
		// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
		//add_theme_support('post-thumbnails', array('inf_influencer', 'post', 'rewardstyle_products', 'inf_video'));
    add_theme_support('post-thumbnails');

		# Register Theme Menu Locations
		add_theme_support('menus');
		register_nav_menus(array(
			'main-navigation'=>__('Main Menu'),
			'footer-navigation'=>__('Footer Menu')
		));

		# Register CPTs
		include_once(CRB_THEME_DIR . 'options/post-types.php');
		
		# Attach custom widgets
		#include_once(CRB_THEME_DIR . 'options/widgets.php');
		
		# Add Actions
		#add_action('widgets_init', 'crb_widgets_init');

		add_action('carbon_register_fields', 'crb_attach_theme_options');
		add_action('carbon_after_register_fields', 'crb_attach_theme_help');
		add_action( 'p2p_init', 'inf_connection_types' );
		add_action('wp_head', 'inf_attach_scripts');

    
		# Add Custom image sizes
    add_image_size('inf_home_slide',                   342, 416, true);
    
    
		//add_image_size('inf_most_popular',                 256, 387, true);
    add_image_size('inf_most_popular',                 227, 333, array('center', 'top'));

		add_image_size('inf_influencer_listing',           237, 369, true);
		//add_image_size('inf_influencer_post_listing',      176, 268      );
    add_image_size('inf_influencer_post_listing',      183, 346, true);
		add_image_size('inf_influencer_single',            365, 584, true);
		add_image_size('inf_influencer_product',           168, 173, true);
		add_image_size('inf_influencer_item_of_the_day',   365, 365, true);

		add_image_size('rewardstyle_products',             179, 205, true);

		//add_image_size('inf_post_single',                  300, 475, true);
    add_image_size('inf_post_single',                  412, 674, true);
		add_image_size('inf_post_single_thumb',            99,  118, true);
		add_image_size('inf_post_listing',                 264, 427, true);
		add_image_size('inf_post_might_like',              228, 272, true);
		//add_image_size('inf_post_product',                 105, 145, true);
    //add_image_size('inf_post_product_small',           116, 134, true);
    //add_image_size('inf_post_product',                 140, 163, true);
    add_image_size('inf_post_product_small_nocrop',           116, 134, false);
    add_image_size('inf_post_product_nocrop',                 140, 163, false);
    add_image_size('inf_post_az',                      153, 180, true);
		
		add_image_size('inf_beauty_product',               179, 190, true);
		add_image_size('inf_beauty_product_no_labels',     168, 167, true);

		add_image_size('inf_home_ad',                      158, 111, true);
		//add_image_size('inf_home_featured',                214, 320, true);
    add_image_size('inf_home_featured',                500, 938, true);
    add_image_size('inf_products_image',               560, 188, true);
    //add_image_size('inf_home_instagram',              313, 313, true);
    add_image_size('inf_home_instagram_nocrop',              298, 298, false);
    //add_image_size('inf_home_inst_prod',              313, 263, true);
    add_image_size('inf_home_inst_prod_nocrop',              298, 298, false);
    add_image_size('inf_home_inst_prod_nocrop_quad',		 298, 298, false);

		add_image_size('inf_admin_thumbnail',              0,   40,  true);
		//add_image_size('inf_video_thumbnail',              157, 96,  true);
    add_image_size('inf_video_thumbnail',              230, 294,  true);
		add_image_size('inf_video_sections_video_thumb',   168, 168, true);
		//add_image_size('inf_latest_post',                  220, 333, true);
    add_image_size('inf_latest_post',                  226, 427, true);
		//add_image_size('inf_item_of_the_day',              315, 330, true);
    add_image_size('inf_item_of_the_day_nocrop',              315, 330, false);
		add_image_size('inf_browse_menu_image',            24,  23,  true);
    add_image_size('inf_profile_image',                478,  670,  true);
    
    add_image_size('inf_beauty',                       218,  258,  true);
		# Add Filters
	}
}

# Register Sidebars
# Note: In a child theme with custom crb_setup_theme() this function is not hooked to widgets_init
/*function crb_widgets_init() {
	register_sidebar(array(
		'name' => 'Default Sidebar',
		'id' => 'default-sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}*/

function crb_attach_theme_options() {
	# Attach fields
	include_once(CRB_THEME_DIR . 'options/theme-options.php');
	include_once(CRB_THEME_DIR . 'options/custom-fields.php');
}

function crb_attach_theme_help() {
	# Theme Help needs to be after options/theme-options.php
	include_once(CRB_THEME_DIR . 'lib/theme-help/theme-readme.php');
}

//Hide admin bar for all but admins
//Never allow non-admins in the dashboard
if (is_user_logged_in() and !current_user_can('manage_options')) {
  show_admin_bar(false);
  if (is_admin()) {
    wp_redirect(home_url());
    exit;
  }
}

function inf_get_social_networks($part = 'header') {

	if($part == 'header') {
		$network_array = array(
			'youtube' => 'https://www.youtube.com/user/TheInfluenceStyle',
      'instagram' => 'http://instagram.com/theinfluence',
      'tumblr' => 'http://theinfluencecom.tumblr.com/',
			'twitter' => 'http://twitter.com/theinfluence',
			'pinterest' => 'http://www.pinterest.com/theinfluencepin',
			'facebook' => 'http://fb.me'
		);
	} else {
		$network_array = array(
			'tumblr' => 'http://theinfluencecom.tumblr.com/',
			'twitter' => 'http://twitter.com/theinfluence',
			'pinterest' => 'http://www.pinterest.com/theinfluencepin',
      'facebook' => 'http://fb.me'
		);
	}

	return $network_array;
}

function inf_list_social_networks($part = 'header') {
	$social_networks = inf_get_social_networks($part);
	foreach($social_networks as $network_name => $network_address) {
		$current_network_address = carbon_get_theme_option($network_name . '_' . $part);
		if(empty($current_network_address)) {
			continue;
		} ?>
		<li><a href="<?php echo esc_url($current_network_address); ?>" target="_blank" class="<?php echo $network_name; ?>" title="<?php echo $network_name; ?>"></a></li>
	<?php }
}

function inf_sitename($return = false) {

	$sitename = esc_attr(get_bloginfo('name'));

	if($return) {
		return $sitename;
	}

	echo $sitename;
}

function inf_connection_types() {
	p2p_register_connection_type( array(
		'name' => 'posts_to_influencers',
		'from' => 'post',
		'to' => 'inf_influencer'
	) );

    p2p_register_connection_type( array(
        'name' => 'users_to_influencers',
        'from' => 'inf_influencer',
        'to' => 'user'
    ) );

    //inf_do_this_daily();
}

add_action('save_post', 'inf_influencer_letter_meta');
function inf_influencer_letter_meta($post_id) {
	$post_obj = get_post($post_id);
	$first_letter = strtolower(substr($post_obj->post_title, 0, 1));
	update_post_meta($post_id, '_first_letter', $first_letter);
}

add_action( 'publish_post', 'inf_publish_post' );
function inf_publish_post($post_id) {
    $post_obj = get_post($post_id);
    $args = array(
        'connected_type' => 'posts_to_influencers',
        'connected_items' => $post_id,
        'posts_per_page' => 1
    );
    $connected = get_posts($args);

    foreach($connected as $influencer)
    {
        update_post_meta($influencer->ID, "lastEmailListUpdate", time());
        /*$users = get_users( array(
            'connected_type' => 'users_to_influencers',
            'connected_items' => $influencer->ID
        ) );

        foreach($users as $user)
        {
            $userID = $user->ID;
            $userEmailInfluencerList = get_user_meta($userID, "influencerEmailList");
            if(!$userEmailInfluencerList) $userEmailInfluencerList = array();
            $userEmailInfluencerList[$influencer->ID] = $post_id;
            update_user_meta($userID, "influencerEmailList", $userEmailInfluencerList);
            update_user_meta($userID, "lastEmailListUpdate", time());
        }*/
    }

}

add_action( 'wp', 'inf_setup_schedule' );
/**
 * On an early action hook, check if the hook is scheduled - if not, schedule it.
 */
function inf_setup_schedule() {
/*
    if ( ! wp_next_scheduled( 'inf_daily_event' ) ) {
        $timeoffset = strtotime('midnight')+((24+5+8)*HOUR_IN_SECONDS);
        if($timeoffset < time()) $timeoffset+(24*HOUR_IN_SECONDS);
        wp_schedule_event( $timeoffset, 'daily', 'inf_daily_event');
    }*/
}

add_action( 'inf_daily_event', 'inf_do_this_daily' );
/**
 * On the scheduled action hook, run a function.
 */
function inf_do_this_daily($daysBackToCollect = 1) {

    $time = strtotime("today");
    $time -= (24 * 60 * 60 * $daysBackToCollect);

    //$influencers = get_posts(array('meta_key' => 'lastEmailListUpdate', "type" => "influencer", 'meta_value' => $time,));
    $influencers = get_posts(array('meta_key' => 'lastEmailListUpdate', 'meta_value' => $time, 'meta_compare' => ">", "post_type" => "inf_influencer"));


    include "lib/smarty/Smarty.class.php";
    $smarty = new \Smarty();
    $smarty->template_dir = dirname(__FILE__) .  '/templates/';
    $smarty->compile_dir  = dirname(__FILE__) .  '/templates/compiled/';
    $smarty->config_dir   = dirname(__FILE__) .  '/templates/configs/';
    $smarty->cache_dir    = dirname(__FILE__) .  '/templates/cache/';
    $smarty->compile_check = true;
    $host = $_SERVER['HTTP_HOST'];
    $smarty->assign("imgBase", "http://" . $host .  "/");
    $smarty->assign("baseDomain", "http://" . $host);

    $emailDataArray = array();
    $emailAddresses = array();
    foreach($influencers as $influencer)
    {
        $infID = $influencer->ID;
        $args = array(
            'connected_type' => 'posts_to_influencers',
            'connected_items' => $infID,
            'connected_direction' => "to",
            'date_query' => array(
                array(
                   "after" => "$daysBackToCollect days ago"
                ),
            ),
        );

        $todaysPosts = get_posts($args);

        foreach($todaysPosts as $iPost)
        {
            $meta = carbon_get_post_meta($iPost->ID, 'inf_post_products_sections', "complex");
            if($meta)
            {
                $iPost->productImages = array();
                $products = $meta[0]['products'];
                foreach($products as $product) { //loop through products in first section
                    //Examples of retrieving product info
                    $product_image    = get_the_post_thumbnail($product, array(64,64));
                    $iPost->productImages[] = $product_image;
                    //Do something with product info
                }
            }
            else $iPost->productImages = null;
        }

        if(empty($todaysPosts)) continue;

        $users = get_users( array(
            'connected_type' => 'users_to_influencers',
            'connected_items' => $infID,
            'suppress_filters' => false,
            'nopaging' => true
        ) );

        foreach($users as $user)
        {
            $userID = $user->ID;

            if(!isset($emailDataArray[$userID])) $emailDataArray[$userID] = array("user" => $user, "influencers" => array());

            $emailDataArray[$userID]['influencers'][$infID] = array("influencer" => $influencer, "posts" =>$todaysPosts);

        }
    }

    $subRenders = array();
    foreach($emailDataArray as $emailData)
    {
    	//$emailAddresses[] = 'philip@newthink.com';
        $emailAddresses[] = $emailData['user']->user_email;

        $smarty->assign("influencers", $emailData['influencers']);
        $render = $smarty->fetch("influencerdaily.tpl");
        //UNCOMMENT THIS TO RENDER EMAIL DIRECTLY TO BROWSER
        //die($render);
		
        $subRenders[] = $render;
    }

    include "lib/sendgrid-php/sendgrid-php.php";

    $sendgrid = new SendGrid('theinfluence', 'theinfluence1');
    $email       = new SendGrid\Email();

    $recipients = $emailAddresses;
    $email->setFrom("updates@theinfluence.com")->
        setFromName("The Influence")->
        setSubject('Your Influence Daily Update')->
        setTos($recipients)->
        addSubstitution("%subRender%", $subRenders)->
        setHtml("%subRender%");

    $result = $sendgrid->send($email);

}

function inf_letters() {
	$letter_array = array(
		'a' => array(),
		'b' => array(),
		'c' => array(),
		'd' => array(),
		'e' => array(),
		'f' => array(),
		'g' => array(),
		'h' => array(),
		'i' => array(),
		'j' => array(),
		'k' => array(),
		'l' => array(),
		'm' => array(),
		'n' => array(),
		'o' => array(),
		'p' => array(),
		'q' => array(),
		'r' => array(),
		's' => array(),
		't' => array(),
		'u' => array(),
		'v' => array(),
		'w' => array(),
		'x' => array(),
		'y' => array(),
		'z' => array()
	);

	return $letter_array;
}

function inf_get_influencers() {
	$user_id = get_current_user_id();
	return carbon_get_user_meta($user_id, 'inf_user_unfluencers');
}

function inf_content_edit() {
	the_content(__('<p class="serif">Read the rest of this page &raquo;</p>')); ?>
	<div class="cl">&nbsp;</div>
	<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
	<?php
}

add_action('template_redirect', 'inf_handle_users');
function inf_handle_users() {
	//if user not logged in
  global $formerror;
  global $formmessage;
  global $formvals;
  if (!is_user_logged_in() and $_POST['form-id'] == 'az-signup') {
    $info = array();
    $info['user_email']    = trim($_POST['az-email']);
    $info['user_password'] = trim($_POST['az-password']);
    //azFreq checkboxes
    $info['user_login']    = sanitize_user($info['user_email']);

    $formerror = array();
    $formvals  = $info;
    if($info['user_email'] <= '') {
      $formerror[] = 'email';
    } 
    if(!filter_var($info['user_email'], FILTER_VALIDATE_EMAIL)) {
      $formerror[] = 'emailbad';
    } 
    if ($info['user_password'] <= '') {
      $formerror[] = 'password';
    }
    if(count($formerror) > 0) {
      return;
    } else {
      if (email_exists($info['user_email']) == false and username_exists($info['user_email'])  == false) {
        $user_id = wp_create_user($info['user_login'], $info['user_password'], $info['user_email']);
        wp_signon($info, false);
        $redirect_to = get_permalink($post->ID).'?signedin=true';
      } else {
        $signon = wp_signon($info, false);
        if (is_wp_error($signon)) {
          $formerror[] = 'password';
          return;
        } else {
          $redirect_to = get_permalink($post->ID).'?signedin=true';
        }
      }
    }
  }
  
  //Update influencers for current user
  if(isset($_POST['influencers']) && $_POST['influencers'] != '') {
		$influencers = $_POST['influencers'];

		if(is_array($influencers)) {
			if (empty($user_id)) {
        $user_id = get_current_user_id();
      }
            $prevInfluencers = get_user_meta($user_id, "_inf_user_unfluencers");
            if($prevInfluencers && isset($prevInfluencers[0]))
            {
                $influencersToRemove = array_diff($prevInfluencers[0], $influencers);
            }


			update_usermeta($user_id, '_inf_user_unfluencers', $influencers);

            //Connect influencers using a different connection scheme for better/faster queries (e.g. getting all users connected to a particular influencer)
            foreach($influencers as $influencerID)
            {
                p2p_type( 'users_to_influencers' )->connect( $influencerID, $user_id, array(
                ) );
            }

            //Disconnect influencers that were unchecked in the form
            foreach($influencersToRemove as $influencerToRemoveID)
            {
                p2p_type( 'users_to_influencers' )->disconnect( $influencerToRemoveID, $user_id);
            }
		}
	}

	if(isset($_POST['influencer_subscribe']) && $_POST['influencer_subscribe'] != '') {
		$influencer_subscribe = intval($_POST['influencer_subscribe']);

		$post_obj = get_post($influencer_subscribe);

		if($post_obj) {
			$user_id = get_current_user_id();
			$current_user_influencers = carbon_get_user_meta($user_id, 'inf_user_unfluencers');
      if (empty($current_user_influencers)) { $current_user_influencers = array(); }
            array_push($current_user_influencers, $post_obj->ID);

            /**
             * Connect influencers using a different connection scheme for better/faster queries (e.g. getting all users connected to a particular influencer)
             * This is the most efficient way to do this using the plugins, apis and utilities provided to us by wordpress, but it is definitely not
             * the most efficient way overall. If the site starts to see performance issues later on, improvements could be made here using more raw and direct
             * database linkage schemas and queries.
             * */
            p2p_type( 'users_to_influencers' )->connect( $post_obj->ID, $user_id, array(
            ) );

			update_usermeta($user_id, '_inf_user_unfluencers', $current_user_influencers);
		}
	}

	if(isset($_POST['influencer_unsubscribe']) && $_POST['influencer_unsubscribe'] != '') {
		$influencer_unsubscribe = intval($_POST['influencer_unsubscribe']);

		$post_obj = get_post($influencer_unsubscribe);

		if($post_obj) {
			$user_id = get_current_user_id();
			$current_user_influencers = carbon_get_user_meta($user_id, 'inf_user_unfluencers');

			if(($key = array_search($influencer_unsubscribe, $current_user_influencers)) !== false) {
				unset($current_user_influencers[$key]);
			}

            p2p_type( 'users_to_influencers' )->disconnect( $post_obj->ID, $user_id);
			update_usermeta($user_id, '_inf_user_unfluencers', $current_user_influencers);
		}
	}
  
  //Reload page if signing in/up
  if (!empty($redirect_to)) {
    wp_redirect($redirect_to); exit;
  }
}

function inf_users_can_register() {
	return get_option('users_can_register');
}

function inf_get_post_categories() {
	$args = array(
		'taxonomy' => 'category',
		'hide_empty' => false
	);

	$cats = get_categories($args);

	$category_ids[''] = 'None';

	foreach($cats as $cat) {
		$category_ids[$cat->term_id] = $cat->name;
	}

	return $category_ids;
}

function inf_attach_scripts() {  
  return false;
?>
	<script type="text/javascript">
	(function(d){
		var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
		p.type = 'text/javascript';
		p.async = true;
		p.src = '//assets.pinterest.com/js/pinit.js';
		f.parentNode.insertBefore(p, f);
	}(document));
	</script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<script src="//platform.tumblr.com/v1/share.js" type="text/javascript"></script>
<?php }

function inf_get_thumb_url($src, $w = '', $h = '', $zc = 1, $ap = '') {
	$src = urlencode($src);
	return get_bloginfo('template_directory') . '/lib/timthumb.php?src=' . $src . ( ($w) ? '&amp;w=' . $w : '') . ( ($h) ? '&amp;h=' . $h : '') . '&amp;zc=' . $zc . ($ap != '' ? $ap : '');
}

add_filter('manage_post_posts_columns', 'inf_custom_post_columns');
function inf_custom_post_columns($defaults) {
	$defaults['featured_image'] = __('Featured image', 'inf');
	$defaults['inf_featured'] = __('Featured on home page?', 'inf'); //featured_post
	return $defaults;
}

add_action('manage_post_posts_custom_column', 'inf_custom_post_column_values', 10, 2);
function inf_custom_post_column_values($column_name, $post_id) {
	if( $column_name == 'inf_featured' ) {
		$featured = carbon_get_post_meta($post_id, 'inf_featured');
		if($featured == 'yes') {
			echo '<span class="green-checkmark" title="This post is featured"></span>';
		}
	}
	if( $column_name == 'featured_image' ) {
		if(has_post_thumbnail($post_id)) {
			echo get_the_post_thumbnail($post_id, 'inf_admin_thumbnail', array('style' => 'display: block;'));
		}
	}
}

function inf_get_id_by_template($template) {
	$template_page = get_posts(array('post_type'=>'page', 'posts_per_page'=>1, 'meta_query'=>array(array('key'=>'_wp_page_template', 'value'=>$template)) ));

	if (!empty($template_page)) {
		return $template_page[0]->ID;
	}

	return false;
}

function inf_get_video_id($video_url) {
	$video_id = '';

	if (preg_match('~youtu~', $video_url)) {
		$pattern = '%^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch\?v=))([\w-]{10,12})$%x';
	    $result = preg_match($pattern, $video_url, $matches);
	    if (false !== $result) {
	        $video_id = $matches[1];
	    }
	} elseif (preg_match('~vimeo~', $video_url)) {
		preg_match('~vimeo.com/([\d]+)~', $video_url, $video_id);
		return $video_id[1];
	}

	return $video_id;
}

function inf_generate_iframe($video_url, $width = 610, $height = 355) {

	$video_id = inf_get_video_id($video_url);

	if(is_numeric($video_id)) {
		$link = 'http://player.vimeo.com/video/' . $video_id;
	} else {
		$link = 'http://www.youtube.com/embed/' . $video_id . '?rel=0&amp;wmode=transparent';
	} ?>
	<iframe width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="<?php echo $link; ?>" frameborder="0" allowfullscreen></iframe>
<?php }

add_action('wp_head', 'inf_create_posts_views_table');
function inf_create_posts_views_table() {
	global $wpdb;
	$table_name = $wpdb->prefix . "posts_views";
	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		  	meta_id int(11) NOT NULL AUTO_INCREMENT,
		  	post_id int(11) NOT NULL,
		  	date_viewed datetime NOT NULL,
		  	PRIMARY KEY (meta_id)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}

function inf_get_post_view_count($id) {
	global $wpdb;
	$sql = "SELECT COUNT(post_id) as count
			FROM {$wpdb->prefix}posts_views
			WHERE post_id = {$id}";
	return $wpdb->get_results($sql);
}

function inf_update_posts_views($postID) {
	global $wpdb;
	$table_name = $wpdb->prefix . "posts_views";
	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO $table_name (post_id,date_viewed) VALUES ($postID, '$date')";
	$wpdb->query($sql);
}

function inf_get_most_popular_posts($count = 5, $interval = '') {
	global $wpdb;
	$where = '';
	if ($interval) {
		$where = "
		WHERE TIMESTAMP(date_viewed) > ( NOW() - INTERVAL $interval DAY)
		";
	}
	$sql = "SELECT post_id, COUNT(post_id) as count
			FROM {$wpdb->prefix}posts_views
			{$where}
			GROUP BY post_id
			ORDER BY count DESC
			LIMIT $count
			";
	$results = $wpdb->get_results($sql);
	return $results;
}

function inf_get_products() {
	$args = array(
		'post_type' => 'rewardstyle_products',
		'posts_per_page' => -1
	);

	$products = get_posts($args);

	$available_products = array();

	if(!empty($products)) {
		$available_products[''] = 'None';
		foreach($products as $ap) {
			$available_products[$ap->ID] = $ap->post_title;
		}
	}

	return $available_products;
}

function inf_get_instagram_feed() {
	if(class_exists('itw_Instagram')) {
		$access_token = get_option('itw_accesstoken');
		$instagram = new itw_Instagram(CLIENT_ID, CLIENT_SECRET, $access_token);
		if(!$access_token){
			// no access token in db
			
			$msg = 'Please login securely to Instagram to authorise the plugin - ';
			$msg_class = 'itw_setup';	
			$loginUrl = $instagram->authorizeUrl(REDIRECT_URI.'?return_uri='.htmlentities(ITW_RETURN_URI));
		
		} else {   

			//logged in
			try {
				$username = get_option('itw_username');
				$userid = get_option('itw_userid');
				$msg = $username;
				$msg_class = 'itw_connected';
				$cache_key = 'instagram_feed_' . $username;
				$cached = get_option($cache_key);

				if ($cached!==-1) {
				    $expires = $cached['expires'];
				    if ($expires > time()) {
						return $cached['data'];
				    }
				}
				
				$data = array();

				$feed = $instagram->get('users/'.$userid.'/media/recent');

				if (!is_wp_error($feed)) {
					if($feed->meta->code == 200) {
						$images = array();
						if(!empty($feed->data) ) {
							$i = 0;
							foreach($feed->data as $img) {
								$i++;
								$data[$img->created_time .  '_' . $i] = array('image_src' => $img->images->standard_resolution->url, 'image_url' => $img->link, 'created_time' => $img->created_time);
							}
						}
					}
				}

				if($data) {
					krsort($data);
					foreach($data as $image) {
						$asc_data[] = $image;
					}
					$data = $asc_data;
				}

				if(empty($data)) {
					$data = get_option($cache_key);
				}
				if (isset($data->errors) && isset($data->error)) {
					$data = isset($cached['data']) ? $cached['data'] : false;
				} else {
					if($data) {
					    update_option($cache_key, array(
					        'expires'=>time() + 3600,
					        'data'=>$data
					    ));

					}
				}
				return $data;

			} catch (Exception $e) {
				
			}

		}
	}

	return false;
}

function inf_page_title($wrapper_start = '<h3 class="page-title">', $wrapper_end = '</h3>') {

	$title = '';

	if(is_home()) :
		$blog_page_id = get_option('page_for_posts');
		if($blog_page_id != 0) :
			$title = get_the_title($blog_page_id);
		endif;
	elseif(is_archive()) :
		if (is_category()) :
			$title = single_cat_title('', false);
		elseif( is_tag() ) :
			$title = 'Posts Tagged &#8216;' . single_tag_title('', false) . '&#8217;';
		elseif (is_day()) :
			$title = 'Archive for ' . get_the_time('F jS, Y');
		elseif (is_month()) :
			$title = 'Archive for ' . get_the_time('F, Y');
		elseif (is_year()) :
			$title = 'Archive for ' . get_the_time('Y');
		elseif (is_author()) :
			$title = 'Author Archive';
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) :
			$title = 'Blog Archives';
		endif;
	elseif(is_404()) :
		$title = 'Error 404 - Not Found';
	elseif(is_search()) :
		$title = 'Search Results for &#8216;' . get_search_query() . '&#8217;';
	else :
		global $post;
		$title = get_the_title($post->ID);
	endif;

	if(!empty($title)) {
		echo $wrapper_start . $title . $wrapper_end;
	}
}

function inf_search_filter($query) {
	if(!is_admin()) {
	    if ($query->is_search) {
	        $query->set('post_type', array('post', 'inf_theme')); //'rewardstyle_products', 'inf_influencer'
	    }
	}
	return $query;
}
add_filter('pre_get_posts', 'inf_search_filter');

function inf_link_targets() {
	return array(
		'_blank' => 'A new window/tab',
		'_self' => 'The same window/tab'
	);
}

function inf_get_terms_for_carbon_select($taxonomy) {

	$terms = get_terms($taxonomy);

	$available_terms = array();

	if(!empty($terms)) {
		$available_terms[''] = '';
		foreach($terms as $t) {
			$available_terms[$t->term_id] = $t->name;
		}
	}

	return $available_terms;
}

function inf_footer_signup() { ?>

  <div class="browse">
    <div class="shell">
      <div class="browse-holder">
        <ul class="word-list">
          <div class="browse-email-signup">
            <form action="http://theinfluence.us8.list-manage.com/subscribe/post?u=527260c47d9de3929c883ec2d&amp;id=69a8f6e293" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				Get Influenced By Your Celebrity Style Obsessions & <span style="font-family: 'BaskervilleBT-Italic'; text-transform: none;">Sign Up</span> For Our Daily Newsletter! 
              <input type="email" value="" name="EMAIL" class="required email field">
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_527260c47d9de3929c883ec2d_69a8f6e293" value=""></div>
              <input type="submit" value="+" name="subscribe" class="submit_button">
            </form>
          </div>
        </ul>
      </div>
    </div>
  </div>

<?php }

function inf_browse_by() { ?>
	<div class="browse">
		<div class="shell">
			<div class="browse-holder">
				<?php $letters_influencers = inf_letters();

					$args = array(
						'post_type' => 'inf_influencer',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'ASC'
					);

				 $influencers = get_posts($args);

				foreach($influencers as $influencer) :

					$first_letter = strtolower(substr($influencer->post_title, 0, 1));

					$letters_influencers[$first_letter][] = $influencer;

				endforeach; ?>
				<ul class="word-list">
					<li class="browse-by-az">Browse By influencer</li>
          <?php $influencers_count = 0;

					$influencers_page_id = inf_get_id_by_template('template-influencers.php');

					if($influencers_page_id) {
						$influencers_link = get_permalink($influencers_page_id);
					} else {
						$influencers_link = '#';
					}

					foreach($letters_influencers as $letter => $influencers) :
						$extraClass = '';
            if ($letter == 'a') { $extraClass = ' class="first"'; }
            if ($letter == 'z') { $extraClass = ' class="last"'; }
           ?>
            <li<?php echo $extraClass; ?>>
							<a href="<?php echo $influencers_link . '#az-' . $letter; ?>"><?php echo $letter; // lowercase ?></a>
							<?php
              if(!empty($influencers)) :
              
              ?>
								<ul>
									<li class="first"><?php echo $letter; ?></li>
                  <?php foreach($influencers as $key=>$influencer) { 
                    if ($key < 6 ) {
                  ?>
										<li>
											<a href="<?php echo get_permalink($influencer->ID); ?>">
												<?php echo get_the_title($influencer->ID); ?>
											</a>
										</li>
										<?php
                      
                      }
                      $influencers_count++;
                    
									}
                  if ($key >= 6 ) {
                  ?>
                  <li class="last">
									<a href="<?php echo $influencers_link . '#az-' . $letter; ?>">
										VIEW ALL <?php echo strtoupper($letter); ?>
									</a>
									</li>
                  <?php } ?>
								</ul>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
            <li class="top-button"><div><a class="news"></a><a class="scrolltop"></a></div></li>
				</ul>
			</div><!-- /.browse-holder -->
		</div>
	</div><!-- /.browse -->
<?php }

//Get the thumbnail for a youtube or vimeo video
function inf_video_image($url){
  $image_url = parse_url($url);
  if($image_url['host'] == 'www.youtube.com' || $image_url['host'] == 'youtube.com'){
    $array = explode("&", $image_url['query']);
    return "http://img.youtube.com/vi/".substr($array[0], 2)."/0.jpg";
  } else if($image_url['host'] == 'www.vimeo.com' || $image_url['host'] == 'vimeo.com'){
    $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".substr($image_url['path'], 1).".php"));
    return $hash[0]["thumbnail_medium"];
  }
}

//Get influencer name from post for this influencer
function inf_name_from_post($post_id) {
  $args = array(
    'connected_type' => 'posts_to_influencers',
    'connected_items' => $post_id,
    'posts_per_page' => 1
  );
  $connected = get_posts($args);
  if(!empty($connected)) {
    $cid = $connected[0]->ID;
  } else {
    $cid = -1;
  }
  return get_the_title($cid);
}

//AJAX LOGIN
function ajax_login_init(){
    wp_register_script('ajax-login-script', get_template_directory_uri() . '/js/ajax-login-script.js', array('jquery') ); 
    wp_enqueue_script('ajax-login-script');
    wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('')
    ));
    
    //Login
    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
    
    //Password Reset
    // Enable the user with no privileges to run ajax_reset() in AJAX
    add_action( 'wp_ajax_nopriv_ajax_reset', 'ajax_reset' );
    
    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajax_registration', 'ajax_registration' );
}
// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}

function ajax_login(){
  // First check the nonce, if it fails the function will break
  check_ajax_referer( 'ajax-login-nonce', 'security' );

  // Nonce is checked, get the POST data and sign user on
  $info = array();
  $info['user_login'] = $_POST['username'];
  $info['user_password'] = $_POST['password'];
  $info['remember'] = true;

  $user_signon = wp_signon($info, false);
    
  if ( is_wp_error($user_signon) ){
    echo json_encode(array('loggedin'=>false, 'message'=>__('error')));
  } else {
    echo json_encode(array('loggedin'=>true, 'message'=>__('success')));
  }

  die();
}

function ajax_reset(){
  // First check the nonce, if it fails the function will break
  check_ajax_referer( 'ajax-login-nonce', 'security' );

  //Include wp-load.php for retrieve_password() function
  $user_login = sanitize_text_field($_POST['username']);

  $user_reset = inf_retrieve_password($user_login);
  if (!$user_reset) {
    echo json_encode(array('message'=>__('Sorry, couldn\'t find that email.')));
  } else {
    echo json_encode(array('message'=>__('Check your email for a link to create a new password.')));
  }

  die();
}

function ajax_registration(){
  // First check the nonce, if it fails the function will break
  check_ajax_referer( 'ajax-login-nonce', 'security' );

  // Nonce is checked, get the POST data and sign user on
  $info = array();
  $info['user_email']    = trim($_POST['username']);
  $info['user_password'] = trim($_POST['password']);
  if ($info['user_email'] == 'EMAIL') { $info['user_email'] = ''; }
  if ($info['user_password'] == 'PASSWORD') { $info['user_password'] = ''; }
  $info['user_login']    = sanitize_user($info['user_email']);

  $myerror = '';

  if($info['user_email'] <= '') {
    $myerror .= 'email ';
  } 
  if(!filter_var($info['user_email'], FILTER_VALIDATE_EMAIL)) {
    $myerror .= 'email ';
  } 
  if ($info['user_password'] <= '') {
    $myerror .= 'password ';
  }
  if($myerror != '') {
    echo json_encode(array('message'=>__("$myerror")));
  } else {
    if (email_exists($info['user_email']) == false and username_exists($info['user_email'])  == false) {
      $user_id = wp_create_user($info['user_login'], $info['user_password'], $info['user_email']);
      wp_signon($info, false);
      echo json_encode(array('loggedin'=>true, 'message'=>__('success')));
    } else {
      echo json_encode(array('loggedin'=>false, 'message'=>__('emailexists')));
    }
  }
  die();
}

/**
 * Modified retrieve password function
 * Handles sending password retrieval email to user.
 *
 * @uses $wpdb WordPress Database object
 * @param string $user_login User Login or Email
 * @return bool true on success false on error
 */
function inf_retrieve_password($user_login) {
    global $wpdb, $current_site;

    if ( empty( $user_login) ) {
        return false;
    } else if ( strpos( $user_login, '@' ) ) {
        $user_data = get_user_by( 'email', trim( $user_login ) );
        if ( empty( $user_data ) )
           return false;
    } else {
        $login = trim($user_login);
        $user_data = get_user_by('login', $login);
    }

    do_action('lostpassword_post');


    if ( !$user_data ) return false;

    // redefining user_login ensures we return the right case in the email
    $user_login = $user_data->user_login;
    $user_email = $user_data->user_email;

    do_action('retreive_password', $user_login);  // Misspelled and deprecated
    do_action('retrieve_password', $user_login);

    $allow = apply_filters('allow_password_reset', true, $user_data->ID);

    if ( ! $allow )
        return false;
    else if ( is_wp_error($allow) )
        return false;

    $key = $wpdb->get_var($wpdb->prepare("SELECT user_activation_key FROM $wpdb->users WHERE user_login = %s", $user_login));
    if ( empty($key) ) {
        // Generate something random for a key...
        $key = wp_generate_password(20, false);
        do_action('retrieve_password_key', $user_login, $key);
        // Now insert the new md5 key into the db
        $wpdb->update($wpdb->users, array('user_activation_key' => $key), array('user_login' => $user_login));
    }
    $message = __('Someone requested that the password be reset for the following account:') . "\r\n\r\n";
    $message .= network_home_url( '/' ) . "\r\n\r\n";
    $message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
    $message .= __('If this was a mistake, just ignore this email and nothing will happen.') . "\r\n\r\n";
    $message .= __('To reset your password, visit the following address:') . "\r\n\r\n";
    $message .= '<' . network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login') . ">\r\n";

    if ( is_multisite() )
        $blogname = $GLOBALS['current_site']->site_name;
    else
        // The blogname option is escaped with esc_html on the way into the database in sanitize_option
        // we want to reverse this for the plain text arena of emails.
        $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

    $title = sprintf( __('[%s] Password Reset'), $blogname );

    $title = apply_filters('retrieve_password_title', $title);
    $message = apply_filters('retrieve_password_message', $message, $key);

    if ( $message && !wp_mail($user_email, $title, $message) )
        wp_die( __('The e-mail could not be sent.') . "<br />\n" . __('Possible reason: your host may have disabled the mail() function...') );

    return true;
}

//Vertical social share buttons
function inf_social_share($thisURL, $thisTITLE, $thisIMG, $thisDESC) {
  $thisURL   = urlencode($thisURL);
  $thisDESC  = urlencode($thisDESC);
  $thisIMG   = urlencode($thisIMG );
  $thisTITLE = urlencode($thisTITLE);
  
  ?>
  <div class="social-vert">
      <a class="pint" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $thisURL; ?>&amp;media=<?php echo $thisIMG; ?>&amp;description=<?php echo $thisDESC; ?>"></a>
      <a class="tw" target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $thisURL; ?>"></a>
      <a class="tumblr" target="_blank" href="http://www.tumblr.com/share/link?url=<?php echo $thisURL; ?>&amp;name=<?php echo $thisTITLE; ?>&amp;description=<?php echo $thisDESC; ?>"></a>
      <a class="fb" target="_blank" href="http://facebook.com/sharer.php?u=<?php echo $thisURL; ?>"></a>
    </div><!-- .social-vert -->
  <?php
}
?>
