<?php
$available_post_categories = inf_get_post_categories();
$available_products = inf_get_products();
$link_targets = inf_link_targets();
/*
Carbon_Container::factory('custom_fields', __('Home template settings', 'inf'))
	->show_on_template(array('template-home.php'))
	->show_on_post_type('page')
	->add_fields(array(
		Carbon_Field::factory('text', 'inf_home_latest_posts_title', 'Latest posts section title')
			->set_default_value('Latest looks'),
		Carbon_Field::factory('text', 'inf_home_videos_section_title', 'Videos section title')
			->set_default_value('Video'),
		Carbon_Field::factory('attachment', 'inf_home_videos_ad_image_id', 'Ad image')
			->help_text('Recommended image dimensions - 158 x 111 pixels.'),
		Carbon_Field::factory('text', 'inf_home_videos_ad_image_link_url', 'Ad link'),
		Carbon_Field::factory('select', 'inf_home_videos_ad_image_link_target', 'Open link in')
			->add_options($link_targets),
		Carbon_Field::factory('text', 'inf_home_social_section_title', 'Social section title')
			->set_default_value('SOCIAL')
	));
*/
Carbon_Container::factory('custom_fields', __('Product of the Day', 'inf'))
	->show_on_template(array('template-home.php'))
	->show_on_post_type('page')
	->add_fields(array(
    Carbon_Field::factory('relationship', 'inf_product_of_the_day', 'Products')
			->set_post_type(array('rewardstyle_products'))
			->set_max(1),
	));
Carbon_Container::factory('custom_fields', __('Video settings', 'inf'))
	->show_on_post_type(array('inf_video'))
	->add_fields(array(
		Carbon_Field::factory('text', 'inf_video_url', 'YouTube URL')
			->help_text('Please use only YouTube links.'),
    Carbon_Field::factory('text', 'inf_video_url_rev', 'Revelens Video URL')
			->help_text('Leave YouTube URL blank if entering a value here.'),
    Carbon_Field::factory('text', 'inf_video_slug_rev', 'Revelens Video Slug')
			->help_text('Leave YouTube URL blank if entering a value here.'),
    Carbon_Field::factory('attachment', 'inf_video_thumb', 'Video Thumbnail Image')
			->set_required(true)
			->help_text('Recommended image dimensions - 133 x 133 pixels.')
	));
Carbon_Container::factory('custom_fields', __('Additional settings', 'inf'))
	->show_on_post_type(array('post'))
	->add_fields(array(
		Carbon_Field::factory('checkbox', 'inf_featured', 'Featured?'),
	));
Carbon_Container::factory('user_meta', __('User influencers', 'inf'))
	->add_fields(array(
		Carbon_Field::factory('relationship', 'inf_user_unfluencers', 'My influencers')
			->set_post_type(array('inf_influencer'))
			->set_max(-1),
	));
Carbon_Container::factory('custom_fields', __('Description settings', 'inf'))
	->show_on_post_type(array('inf_influencer', 'post'))
	->add_fields(array(
		Carbon_Field::factory('rich_text', 'inf_influencer_listing_description', 'Listing description'),
		Carbon_Field::factory('relationship', 'inf_influencer_products', 'Products')
			->set_post_type(array('rewardstyle_products'))
			->set_max(-1),
	));
  
Carbon_Container::factory('custom_fields', __('Instagram Product', 'inf'))
	->show_on_post_type(array('inf_instagram'))
	->add_fields(array(
    Carbon_Field::factory('relationship', 'inf_instagram_products', 'Products')
			->set_post_type(array('rewardstyle_products'))
			->set_max(1),
	));
Carbon_Container::factory('custom_fields', __('Influencers template settings', 'inf'))
	->show_on_template(array('template-influencers.php'))
	->show_on_post_type('page')
	->add_fields(array(
		Carbon_Field::factory('text', 'inf_popular_posts_section_title', '\'Most popular\' section title')
			->set_default_value('Most Popular'),
		Carbon_Field::factory('select', 'inf_popular_posts_category', '\'Most popular\' category')
			->add_options($available_post_categories),
	));
Carbon_Container::factory('custom_fields', __('Product settings', 'inf'))
	->show_on_post_type(array('inf_product'))
	->add_fields(array(
		Carbon_Field::factory('text', 'inf_product_price', 'Price'),
		Carbon_Field::factory('text', 'inf_product_link', 'Buy link')
	));
Carbon_Container::factory('custom_fields', __('Credits', 'inf'))
	->show_on_post_type(array('inf-interview'))
	->add_fields(array(
      Carbon_Field::factory('text', 'inf_credit_styling', 'Styling'),
      Carbon_Field::factory('text', 'inf_credit_photo', 'Photography'),
      Carbon_Field::factory('text', 'inf_credit_makeup', 'Make-up and Hair')
	));
  
Carbon_Container::factory('custom_fields', __('Interview Products', 'inf'))
	->show_on_post_type(array('inf-interview'))
	->add_fields(array(
		Carbon_Field::factory('complex', 'inf_post_products_sections', 'Product sections')
			->add_fields(array(
				Carbon_Field::factory('text', 'section_name', 'Section name')
					->set_required(true),
				Carbon_Field::factory('relationship', 'products', 'Products')
					->set_post_type(array('rewardstyle_products'))
					->set_max(-1)
					->set_required(true)
			))
	));
Carbon_Container::factory('custom_fields', __('Products settings', 'inf'))
        ->show_on_post_type(array('post'))
        ->add_fields(array(
                Carbon_Field::factory('complex', 'inf_post_products_sections', 'Product sections')
                        ->add_fields(array(
                                Carbon_Field::factory('text', 'section_name', 'Section name')
                                        ->set_required(true),
                                Carbon_Field::factory('relationship', 'products', 'Products')
                                        ->set_post_type(array('rewardstyle_products'))
                                        ->set_max(-1)
                                        ->set_required(true)
                        ))
        ));
  
Carbon_Container::factory('custom_fields', __('Right Column Quotes', 'inf'))
	->show_on_post_type(array('inf-interview'))
	->add_fields(array(
      Carbon_Field::factory('complex', 'inf_product_quotes', 'Quote Images')
        ->add_fields(array(
          Carbon_Field::factory('attachment', 'inf_product_quote', 'Image')
            ->help_text('Recommended image width - 494 pixels.')
        ))
	));
Carbon_Container::factory('custom_fields', __('Images settings', 'inf'))
	->show_on_post_type(array('post'))
	->add_fields(array(
		Carbon_Field::factory('image', 'inf_products_image', 'Products image (if featured on home page)')
			->help_text('Recommended image dimensions - 560 x 188 pixels.'),
		Carbon_Field::factory('complex', 'inf_gallery_images', 'Images')
			->add_fields(array(
				Carbon_Field::factory('image', 'image', 'Image')
					->set_required(true)
					->help_text('Recommended image dimensions - 384 x 457 pixels.')
			))
	));
  
Carbon_Container::factory('custom_fields', __('Market Images', 'inf'))
	->show_on_post_type(array('post', 'inf_theme'))
	->add_fields(array(
		Carbon_Field::factory('complex', 'inf_featured_images', 'Images')
			->add_fields(array(
				Carbon_Field::factory('attachment', 'inf_featured_image', 'Image'),
				Carbon_Field::factory('textarea', 'inf_caption2', 'Caption'),
			))
	));

Carbon_Container::factory('term_meta', __('Category settings', 'inf'))
	->show_on_taxonomy('category')
	->add_fields(array(
		Carbon_Field::factory('attachment', 'inf_category_image', 'Category image')
			->help_text('Recommended image dimensions - 24 x 31 pixels.<br/>Shown on single post page.')
	));
Carbon_Container::factory('custom_fields', __('Sections settings', 'inf'))
	->show_on_post_type('page')
	->show_on_template('template-beauty.php')
	->add_fields(array(
		Carbon_Field::factory('complex', 'inf_beauty_sections', 'Product sections')
			->add_fields(array(
				Carbon_Field::factory('select', 'layout', 'Layout')
					->add_options(array(
						'normal' => 'Normal',
						'no_title' => 'No product labels'
					)),
				Carbon_Field::factory('text', 'section_title', 'Section title')
					->set_required(true),
				Carbon_Field::factory('relationship', 'products', 'Products')
					->set_post_type(array('inf_product'))
					->set_max(-1)
					->set_required(true)
			))
	));
Carbon_Container::factory('custom_fields', __('"Videos" template settings', 'inf'))
	->show_on_post_type('page')
	->show_on_template('template-videos.php')
	->add_fields(array(
		Carbon_Field::factory('complex', 'inf_video_sections', 'Video sections')
			->add_fields(array(
				Carbon_Field::factory('text', 'section_title', 'Section title')
					->set_required(true),
				Carbon_Field::factory('relationship', 'videos', 'Videos')
					->set_post_type(array('inf_video'))
					->set_max(-1)
					->set_required(true)
			))
	));
  
Carbon_Container::factory('custom_fields', __('#Influencer', 'inf'))
	->show_on_post_type('inf_hash_influencer')
	->add_fields(array(
		Carbon_Field::factory('text', 'inf_hinfluencer_link_url', 'Link URL')
  ));
  
Carbon_Container::factory('custom_fields', __('Q & A', 'inf'))
	->show_on_post_type('inf_qanda')
	->add_fields(array(
		Carbon_Field::factory('text', 'inf_qa_question', 'Question'),
    Carbon_Field::factory('text', 'inf_qa_question_n', 'Questioner Name'),
    Carbon_Field::factory('text', 'inf_qa_answer', 'Answer'),
    Carbon_Field::factory('text', 'inf_qa_answer_n', 'Answer Name')
  ));
  
Carbon_Container::factory('custom_fields', __('Favorite Items', 'inf'))
	->show_on_template(array('template-home.php'))
	->show_on_post_type('page')
	->add_fields(array(
    Carbon_Field::factory('relationship', 'inf_favorite_items', 'Products')
			->set_post_type(array('rewardstyle_products'))
			->set_max(6)
	));
  
Carbon_Container::factory('custom_fields', __('Featured Theme', 'inf'))
	->show_on_template(array('template-home.php'))
	->show_on_post_type('page')
	->add_fields(array(
    Carbon_Field::factory('textarea', 'inf_theme_intro_one', 'Theme Intro Copy'),
    Carbon_Field::factory('attachment', 'inf_theme_one_image', 'Home Page Image')
		//	->set_required(true)
			->help_text('Image dimensions - 644 x 158 pixels.'),
    Carbon_Field::factory('relationship', 'inf_theme_one', 'Featured Theme Link')
			->set_post_type(array('inf_theme'))
			->set_max(1)
	));
/*
wpcf-hslide-title-two
wpcf-hslide-link-url
wpcf-hslide-image
wpcf-hslide-bottom-image
inf-hslide-title-two
inf-hslide-link-url
inf-hslide-image
inf-hslide-bottom-image
*/
Carbon_Container::factory('custom_fields', __('Slide Options', 'inf'))
	->show_on_post_type(array('post','inf-slide-home'))
  ->add_fields(array(
  		Carbon_Field::factory( 'textarea', 'hslide_subtext', 'Subtext'),
		Carbon_Field::factory('text', 'hslide_title_two', 'Secondary Title'),
		Carbon_Field::factory('text', 'hslide_link_url', 'Link URL'),
		Carbon_Field::factory('attachment', 'hslide_image', 'Image')
			->help_text('Image dimensions - 332 × 423 pixels.'),
		Carbon_Field::factory('attachment', 'hslide_side_image1', 'Side Attachment 1')
			->help_text('Image dimensions - 130 × 130 pixels.'),
		Carbon_Field::factory('attachment', 'hslide_side_image2', 'Side Attachment 2')
			->help_text('Image dimensions - 130 × 130 pixels.'),
		Carbon_Field::factory('attachment', 'hslide_side_image3', 'Side Attachment 3')
			->help_text('Image dimensions - 130 × 130 pixels.')
	));
 Carbon_Container::factory('custom_fields', __('Box Options', 'inf'))
	->show_on_post_type('inf_home_box1')
  ->add_fields(array(
		Carbon_Field::factory('text', 'homebox1_link_url', 'Link URL'),
	)); 
  Carbon_Container::factory('custom_fields', __('Box Options 2', 'inf'))
	->show_on_post_type('inf_home_box2')
  ->add_fields(array(
		Carbon_Field::factory('text', 'homebox2_link_url', 'Link URL'),
	)); 
   Carbon_Container::factory('custom_fields', __('Box Options 3', 'inf'))
	->show_on_post_type('inf_home_box3')
  ->add_fields(array(
		Carbon_Field::factory('text', 'homebox3_link_url', 'Link URL'),
	)); 
  Carbon_Container::factory('custom_fields', __('Box Options 4', 'inf'))
	->show_on_post_type('inf_home_box4')
  ->add_fields(array(
		Carbon_Field::factory('text', 'homebox4_link_url', 'Link URL'),
	)); 
/*
Carbon_Container::factory('custom_fields', __('Featured Theme Two', 'inf'))
	->show_on_template(array('template-home.php'))
	->show_on_post_type('page')
	->add_fields(array(
    Carbon_Field::factory('text', 'inf_theme_intro_two', 'Theme Two Description'),
    Carbon_Field::factory('relationship', 'inf_theme_two', 'Posts')
			->set_post_type(array('post'))
			->set_max(4)
	));
*/
//Market Story  
Carbon_Container::factory('custom_fields', __('More Featured Images', 'inf'))
	->show_on_post_type(array('post', 'inf_market'))
	->add_fields(array(
		Carbon_Field::factory('complex', 'inf_market_slider', 'Images')
			->add_fields(array(
				Carbon_Field::factory('attachment', 'inf_market_slider', 'Image')
			))
	));
//Items of The Week Home Banner
	Carbon_Container::factory('custom_fields', __('Items of The Week Options', 'inf'))
	->show_on_post_type(array('post','inf_home_items'))
    ->add_fields(array(
		Carbon_Field::factory('text', 'item1_link_url', 'Item 1 URL'),
        Carbon_Field::factory('text', 'item2_link_url', 'Item 2 URL'),
		Carbon_Field::factory('text', 'item3_link_url', 'Item 3 URL'),
		Carbon_Field::factory('text', 'item4_link_url', 'Item 4 URL'),
		Carbon_Field::factory('text', 'item5_link_url', 'Item 5 URL'),
		Carbon_Field::factory('attachment', 'itemofweek1', 'First Item')
			->help_text('Image dimensions - 133 x 133 pixels.'),
		Carbon_Field::factory('attachment', 'itemofweek2', 'Second Item')
			->help_text('Image dimensions - 133 × 133 pixels.'),
		Carbon_Field::factory('attachment', 'itemofweek3', 'Third Item')
			->help_text('Image dimensions - 133 × 133 pixels.'),
		Carbon_Field::factory('attachment', 'itemofweek4', 'Fourth Item')
			->help_text('Image dimensions - 133 × 133 pixels.'),
		Carbon_Field::factory('attachment', 'itemofweek5', 'Fith Item')
			->help_text('Image dimensions - 133 × 133 pixels.')
	));
/*
Carbon_Container::factory('term_meta', __('Category settings', 'inf'))
	->show_on_taxonomy('category')
	->add_fields(array(
		Carbon_Field::factory('attachment', 'inf_category_image', 'Category image')
	));*/