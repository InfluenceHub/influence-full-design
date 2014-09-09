<?php
/*
* Template Name: Videos
*/
get_header();
	the_post(); ?>
	<section id="content">
		
		<? $args = array(
			'post_type' => 'inf_video',
			'posts_per_page' => -1,
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key' => '_inf_video_url',
					'value' => '',
					'compare' => '!='
				),
				array(
					'key' => '_thumbnail_id',
					'value' => '',
					'compare' => '!='
				)
			),
			'orderby' => 'menu_order',
			'order' => 'ASC'
		);
		$videos = get_posts($args);
		if(!empty($videos)) : ?>
			<div class="video-row">
				<div class="shell">
					<div class="inner-video">
						<h2><span><?php the_title(); ?></span></h2>
						<div class="left-part right">
							<ul class="slides">
								<?php foreach($videos as $v) :
									$entry_id = $v->ID;
									$video_url = carbon_get_post_meta($entry_id, 'inf_video_url'); ?>
									<li>
										<?php inf_generate_iframe($video_url, 650, 400); ?>
										<h5><?php echo get_the_title($entry_id); ?></h5>
										<?php echo wpautop($v->post_content); ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</div><!-- /.left-part -->
						<div class="right-part left">
							<div class="inner">
								<ul class="slides">
									<?php foreach($videos as $index => $v) :
										$entry_id = $v->ID; ?>
										<li data-num="<?php echo $index; ?>">
											<?php echo get_the_post_thumbnail($entry_id, 'inf_video_thumbnail'); ?>
											<div class="text-box">
												<h4><?php echo get_the_title($entry_id); ?></h4>
											</div><!-- /.text-box -->
										</li>
									<?php endforeach; ?>
								</ul><!-- /.slides -->
								<div class="v-prev"></div><!-- /.v-prev -->
								<div class="v-next"></div><!-- /.v-next -->
							</div><!-- /.inner -->
							<?php if(!empty($ad_image_id)) :
								$ad_link_url = carbon_get_the_post_meta('inf_home_videos_ad_image_link_url'); 
								if(!empty($ad_link_url)) :
									$ad_link_target = carbon_get_the_post_meta('inf_home_videos_ad_image_link_target'); ?>
									<a href="<?php echo esc_url($ad_link_url); ?>" target="<?php echo $ad_link_target; ?>">
								<?php endif;
								echo wp_get_attachment_image($ad_image_id, 'inf_home_ad');
								if(!empty($ad_link_url)) : ?>
									</a>
								<?php endif;
							endif; ?>
						</div><!-- /.right-part -->
						<div class="cl">&nbsp;</div>
					</div><!-- /.inner-video -->
				</div><!-- /.shell -->
			</div><!-- /.video-row -->
		<?php endif;
		$video_sections = carbon_get_the_post_meta('inf_video_sections', 'complex');
		if(!empty($video_sections)) : ?>
			<div class="shell">
				<?php foreach($video_sections as $s) :
					$videos = $s['videos'];
					if(!empty($videos)) : ?>
						<div class="cols">
							<?php if(!empty($s['section_title'])) : ?>
								<div class="flag"><a href="#">VIDEO ></a> <?php echo $s['section_title']; ?></div><!-- /.flag -->
							<?php endif; ?>
							<div class="row">
								<?php $index = 1;
								foreach($videos as $v) :
									if(has_post_thumbnail($v)) :
										$video_url = carbon_get_post_meta($v, 'inf_video_url');
										if(!empty($video_url)) : ?>
											<div class="col_5">
												<a href="<?php echo esc_url($video_url); ?>" target="_blank">
													<?php echo get_the_post_thumbnail($v, 'inf_video_sections_video_thumb'); ?>
												</a>
											</div><!-- /.col_5 -->
											<?php if($index%5 == 0 && $index != count($videos)) : ?>
												<div class="cl">&nbsp;</div>
											<?php endif;
											$index++;
										endif;
									endif;
								endforeach; ?>
							</div><!-- /.row -->
						</div><!-- /.cols -->
					<?php endif;
				endforeach; ?>
			</div><!-- /.shell -->
		<?php endif; ?>
	</section><!-- /#content -->
<?php get_footer(); ?>