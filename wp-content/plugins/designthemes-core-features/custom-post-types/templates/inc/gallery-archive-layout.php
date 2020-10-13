<?php
	#Performing gallery post layout...
	$page_layout = dt_theme_option('specialty', 'gallery-archives-layout');
	$page_layout = !empty($page_layout) ? $page_layout : 'content-full-width';
	
	$post_layout = dt_theme_option('specialty', 'gallery-archives-post-layout');
	$post_layout = !empty($post_layout) ? $post_layout : 'one-half-column';

	$li_class = "";
	$feature_image = "";

	#Post layout check...
	switch($post_layout) {
		case "one-column":
			$li_class = "portfolio dt-sc-one-half column"; $feature_image = "gallery-twocol"; break;

		case "one-half-column":
			$li_class = "portfolio dt-sc-one-half column"; $feature_image = "gallery-twocol"; break;

		case "one-third-column":
			$li_class = "portfolio dt-sc-one-third column"; $feature_image = "gallery-threecol"; break;

		case "one-fourth-column":
			$li_class = "portfolio dt-sc-one-fourth column"; $feature_image = "gallery-fourcol"; break;
	}
	#Better image size...
	switch($page_layout) {
		case "with-left-sidebar":
			$li_class = $li_class." with-sidebar";
			$feature_image = $feature_image."-sidebar";
			break;
		
		case "with-right-sidebar":
			$li_class = $li_class." with-sidebar";
			$feature_image = $feature_image."-sidebar";
			break;

		case "with-both-sidebar":
			$li_class = $li_class." with-sidebar";
			$feature_image = $feature_image."-bothsidebar";
			break;
	}

	global $wp_query;	#For pagination purpose...
	if(have_posts()): ?>
     <div class="dt-sc-portfolio-container"><?php
		while(have_posts()): the_post(); ?>

            <div class="<?php echo $li_class; ?>">
                <div class="portfolio-thumb"><?php
					$fullimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
					$currenturl = $fullimg[0]; $currenticon = "fa-plus";
					$pmeta_set = get_post_meta($post->ID, '_gallery_settings', true);
					if( @array_key_exists('items_thumbnail', $pmeta_set) && ($pmeta_set ['items_name'] [0] == 'video' )) {
						$currenturl = $pmeta_set ['items'] [0];
						$currenticon = "fa-video-camera";
					}
					#Gallery images...
					if(has_post_thumbnail()):
						$attr = array('title' => get_the_title(), 'alt' => get_the_title());
						the_post_thumbnail($feature_image, $attr);
					else: ?>
						<img src="http<?php dt_theme_ssl(true);?>://placehold.it/1170X800.jpg&text=<?php the_title(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /><?php
					endif; ?>
                    <div class="image-overlay">
                        <div class="fig-content-wrapper">
                            <div class="fig-overlay">
                              <p>
                                  <a class="zoom" title="<?php the_title(); ?>" data-gal="prettyPhoto[gallery]" href="<?php echo $currenturl; ?>"><span class="fa <?php echo $currenticon; ?>"> </span></a>
                                  <a class="link" href="<?php the_permalink(); ?>"> <span class="fa fa-link"> </span> </a>
                              </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-detail">
                    <div class="portfolio-title">
                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php echo get_the_term_list($post->ID, 'gallery_entries', ' ', ', ', ' '); ?></p>
                    </div>
                    <?php if(dt_theme_is_plugin_active('roses-like-this/likethis.php')): ?>
                        <div class="views">
                            <span><i class="fa fa-heart-o"></i><br><?php printLikes($post->ID); ?></span>
                        </div>
					<?php endif; ?>
                </div>
            </div><?php
		endwhile; ?>
     </div><?php
	 if($wp_query->max_num_pages > 1): ?>
		<div class="pagination">
			<?php if(function_exists("dt_theme_pagination")) echo dt_theme_pagination("", $wp_query->max_num_pages, $wp_query); ?>
		</div><?php
	 endif;
	 else: ?>
		<h2><?php _e('Nothing Found.', 'dt_themes'); ?></h2>
		<p><?php _e('Apologies, but no results were found for the requested archive.', 'dt_themes'); ?></p><?php
	endif; ?>