<?php
	#Performing gallery post layout...
	$page_layout = dt_theme_option('specialty', 'post-archives-layout');
	$page_layout = !empty($page_layout) ? $page_layout : 'content-full-width';
	
	$post_layout = dt_theme_option('specialty', 'post-archives-post-layout');
	$post_layout = !empty($post_layout) ? $post_layout : 'one-third-column';

	$article_class = "";
	$feature_image = "blog-twocol";
	$column = "";

	#Post layout check...
	switch($post_layout) {
		case "one-column":
			$article_class = "column dt-sc-one-half"; $feature_image = "blog-twocol"; $column = 2; break;

		case "one-half-column":
			$article_class = "column dt-sc-one-half"; $feature_image = "blog-twocol"; $column = 2; break;

		case "one-third-column":
			$article_class = "column dt-sc-one-third"; $feature_image = "blog-threecol"; $column = 3; break;
	}
	#Better image size...
	switch($page_layout) {
		case "with-left-sidebar":
			$article_class = $article_class." with-sidebar";
			$feature_image = $feature_image."-sidebar";
			break;
		
		case "with-right-sidebar":
			$article_class = $article_class." with-sidebar";
			$feature_image = $feature_image."-sidebar";
			break;

		case "with-both-sidebar":
			$article_class = $article_class." with-sidebar";
			$feature_image = $feature_image."-bothsidebar";
			break;
	}

	#Performing query...
	global $wp_query;

	if(have_posts()): $i = 1;
	 echo '<div class="tpl-blog-holder apply-isotope">';
	 while(have_posts()): the_post();

		$temp_class = "";

		if($i == 1) $temp_class = $article_class." first"; else $temp_class = $article_class;
		if($i == $column) $i = 1; else $i = $i + 1;

		$wmeta = get_post_meta(get_the_id(), '_workout_settings', true); ?>
		<div class="<?php echo $temp_class; ?>">
			<article id="post-<?php the_ID(); ?>" <?php post_class("workout-entry"); ?>>
				<div class="dt-excersises type2">
					<div class="dt-excersise-thumb"><?php
						$item = $wmeta['feature_video'];
						if(!empty($item)):
							#For vimeo...
							if (strpos($item, "vimeo")) :
								$url = substr( strrchr($item, "/"),1);
								echo "<iframe src='https://player.vimeo.com/video/{$url}' width='100%' height='250' frameborder='0'></iframe>";

							#For youtube...
							elseif(strpos($item, "?v=")):
								$url = substr( strrchr($item, "="),1);
								echo "<iframe src='https://www.youtube.com/embed/{$url}?wmode=opaque' width='100%' height='250' frameborder='0'></iframe>";
							endif;
						else:
							if(has_post_thumbnail()):
								$attr = array('title' => get_the_title(), 'alt' => get_the_title());
								the_post_thumbnail($feature_image, $attr);
							else: ?>
								<img src="http<?php dt_theme_ssl(true);?>://placehold.it/1170X800.jpg&text=<?php the_title(); ?>" alt="<?php the_title(); ?>" /><?php
							endif;
						endif; ?>
					</div>
					<div class="dt-excersise-detail">
						<div class="dt-excersise-title"><?php
							if(!empty($wmeta['nosteps'])): ?>
								<p class="count">
									<a href="javascript:void(0)"><?php echo $wmeta['nosteps']; ?> <br><span><?php _e('Steps', 'dt_themes'); ?></span></a>
								</p><?php
							endif; ?>
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						</div>
						<div class="dt-excersise-content"><?php
							if($excerpt_length != "" || $excerpt_length != 0) $out .= dt_theme_excerpt($excerpt_length);
							if($show_meta != 'false'):
								if(!empty($wmeta['muscle_group'])) ?>
									<h6><?php _e('Muscle Group:', 'dt_themes'); ?></h6><p class="dt-excersise-meta"><?php echo $wmeta['muscle_group']; ?></p>

								<h6><?php _e('Categories:', 'dt_themes'); ?></h6>
								<p class="dt-excersise-meta"><?php echo get_the_term_list($post->ID, 'workout_entries', ' ', ', ', ' '); ?></p><?php

								if(!empty($wmeta['equipment'])) ?>
									<h6><?php _e('Equipment:', 'dt_themes'); ?></h6><p class="dt-excersise-meta"><?php echo $wmeta['equipment']; ?></p><?php
							endif; ?>
							<a data-hover="<?php _e('View Exercise', 'dt_themes'); ?>" href="<?php the_permalink(); ?>" class="dt-sc-button small"><?php _e('View Exercise', 'dt_themes'); ?></a>
						</div>
					</div>
				</div>
			</article>
		</div><?php
	 endwhile;
	 echo '</div>';
	 if($wp_query->max_num_pages > 1): ?>
	    <div class="pagination">
		    <?php if(function_exists("dt_theme_pagination")) echo dt_theme_pagination("", $wp_query->max_num_pages, $wp_query); ?>
	    </div><?php
	 endif;
	else: ?>
		<h2><?php _e('Nothing Found.', 'dt_themes'); ?></h2>
		<p><?php _e('Apologies, but no results were found for the requested archive.', 'dt_themes'); ?></p><?php
	endif; ?>