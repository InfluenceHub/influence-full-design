<?php get_header();

	the_post(); 
  if(is_user_logged_in()) {
		$current_user_influencers = inf_get_influencers();
	}
  ?>
	<section id="content">
		<div class="shell">
			<div class="cols browse-col"><!-- /.breadcrumbs -->
				<?php 	$args = array(
					'connected_type' => 'posts_to_influencers',
					'connected_items' => get_the_ID(),
					'nopaging' => true,
					'posts_per_page' => 1
				);

				query_posts($args);
        
        $influencer_id = $post->ID;
        $influencer_name = get_the_title($post->ID);
        $influencer_name_parts = explode(' ', $influencer_name);
        $influencer_name_first = $influencer_name_parts[0];
        //echo $influencer_id . ' -- ' . $influencer_name;
        
        $img_obj = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
				$profile_image = '<a class="profile-image colorbox" href="' . $img_obj[0] . '">' . get_the_post_thumbnail($post->ID, 'inf_influencer_single_image', array('class' => 'inf_influencer_single_image')) . '</a>';

				//get_template_part('loop');
        $profile_flag = true;
        include(locate_template('loop.php'));

				wp_reset_query(); ?>
			</div><!-- /.cols -->
		</div><!-- /.shell -->
	</section><!-- /#content -->
<?php inf_footer_signup() ?>
<?php get_footer(); ?>