<?php
/*
* Template Name: My Influence
*/
  get_header();

	the_post();
?>
	<section id="content" class="browse-by my-inf">
    <div class="section-heading">
      <h1  style="width: 400px;"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/TITLES_MY INFLUENCE.svg"></h1><br /><br />
    </div><!-- /.section-heading -->
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
        
        $current_user_influencers = inf_get_influencers();
        
        inf_content_edit();
        
        if (is_array($formerror)) {
        if (in_array('email', $formerror)) {
          $formmessage .= '<li>Please enter an email address.</li>';
          $extraclass  .= ' emailerror';
        }
        if (in_array('emailbad', $formerror) and !in_array('email', $formerror)) {
          $formmessage .= '<li>Please enter a valid email address.</li>';
          $extraclass  .= ' emailerror';
        }
        if (in_array('password', $formerror)) {
          $formmessage .= '<li>Please check your password and try again.</li>';
          $extraclass  .= ' passerror';
        }
        }
        if ($_GET['signedin'] == 'true') {
          $formmessage .= '<li>Thank you!</li>';
        }
        if ($formmessage > '') {
          $formmessage = '<ul>' . $formmessage . '</ul>';
        }
        if (is_user_logged_in()) {
          $current_user = wp_get_current_user();
          $formvals['user_email'] = $current_user->user_email;
          $formvals['user_password'] = '(hidden)';
          $disabledclass = 'disabled="disabled" ';
        }
        ?>
        <div class="shell browse-az<?php echo $extraclass; ?>">

          <div class="right-side no-mobile">
         <a href="http://www.tkqlhce.com/click-7580048-11850643">
           <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/nasty1.gif" />
         </a>
            <!-- BEGIN IFRAME TAG - theinfluence 300x600 < - DO NOT MODIFY -->
            <!-- <IFRAME SRC="http://ib.adnxs.com/tt?id=2438106&cb=[CACHEBUSTER]&referrer=[REFERRER_URL]&pubclickenc=%5BINSERT_CLICK_TAG%5D" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="300" HEIGHT="600"></IFRAME> -->
            <!-- END TAG -->
           <?php inf_item_of_the_day(); ?>

            <br />
             <a href="<?php echo home_url(); ?>/my-influence" class="subscribe-img" style="margin-top: 4px;"></a>
              
          </div>
          <form method="post" id="myInfluence">
          <?php if (!is_user_logged_in()) { ?>
          <div class="azSteps">
          <h2 style="padding-top: 50px;">Subscribe to <br />your favorite<br /> influencers</h2>
          <br />
          <div class="azStep">
            <div class="azStepIcons"></div> <p class="single-line">CREATE AN ACCOUNT</p> <div class="azArrow"></div><input class="field" type="text" id="az-email" name="az-email" title="EMAIL" value="<?php if (!empty($formvals['user_email'])) { echo $formvals['user_email']; } else { echo 'EMAIL'; } ?>" <?php echo $disabledclass; ?>/> <input class="field" type="text" id="az-password" name="az-password"  title="PASSWORD" value="<?php if (!empty($formvals['user_password'])) { echo $formvals['user_password']; } else { echo 'PASSWORD'; } ?>" <?php echo $disabledclass; ?>/>
          </div>
          <div class="azStep">
            <div class="azStepIcons two"></div><p>CHOOSE INFLUENCERS TO RECEIVE THEIR CUSTOM STYLE UPDATES!</p>
          </div>
          <input type="hidden" id="form-id" name="form-id" value="az-signup" />          
          <div class="form-message"><?php //echo $formmessage; ?></div>
          </div>
          <?php } ?>
          
          <div class="section-heading no-mobile">
            <h2><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/a-z2.png" width="600" height="87" alt="the influencer index" /></h2>           <!-- <h2><span class="text-block">A</span> <span class="text-block">Z</span> the influencer index</h2> -->
          </div><!-- /.section-heading --><br /><br />
          <div class="az-links no-mobile">
            <ul>
            <?php
              foreach (range('a', 'z') as $letter) {
                ?>
                <li class="<?php echo $letter; ?> scr-link"><a href="#" data-scrollto="az-<?php echo $letter; ?>"><?php echo strtoupper($letter); ?></a></li>
                <?php
              }
            ?>
            </ul>
          </div>
          
        <?php
        foreach($influencers as $key=>$influencer) {
          $first_letter = strtolower(substr($influencer->post_title, 0, 1));
          $next_letter  = strtolower(substr($influencers[$key+1]->post_title, 0, 1));
          $checked = '';
          if (is_array($current_user_influencers)) {
            if (in_array($influencer->ID, $current_user_influencers)) {
              $checked = ' checked="checked"';
            }
          }
          
          if ($first_letter != $last_letter) {
            echo '<div class="az-row no-mobile">';
            echo '<h2 class="az-' . $first_letter . '">' . strtoupper($first_letter) . '</h2>';
            echo '<div class="az-column">';
          }
          ?>
          <span>
            <label>
					  <input name="influencers[]" value="<?php echo $influencer->ID; ?>" type="checkbox" <?php echo $checked; ?> /> <?php echo get_the_title($influencer->ID); ?></label>
            </label>
          </span>
          <?php
          //echo '<span><a href="' . get_permalink($influencer->ID) . '">' . $influencer->post_title . '</a></span>';
          if ($next_letter != $first_letter) {
            echo '</div>';
            echo '</div>';
          }
          $last_letter = $first_letter;
        }
        ?>
            <div class="AZ-signup-submit">
              <input type="submit" value="Submit" />
            </div>
          </form>
        </div><!-- /.shell --> 
	</section><!-- /#content -->
<?php inf_footer_signup() ?>
<?php get_footer(); ?>