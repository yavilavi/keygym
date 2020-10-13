<?php get_header();

	while(have_posts()): the_post();

	  #Getting meta values...
	  $meta_set = get_post_meta($post->ID, '_workout_settings', true);
	  if($GLOBALS['force_enable'] == true)
	  	$page_layout = $GLOBALS['page_layout'];
	  else
	  	$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : $GLOBALS['page_layout'];

	  $feature_image = "blog-threecol";

	  #Better image size...
	  switch($page_layout) {
		  case "content-full-width":
			  $feature_image = "gallery-twocol";
			  break;
	  }

	  #Breadcrump section...
      get_template_part('includes/breadcrumb_section');
	  global $dt_allowed_html_tags; ?>

      <div id="main">
          <!-- main-content starts here -->
          <div id="main-content">
              <div class="container">
                  <div class="dt-sc-hr-invisible"></div>
                  <div class="dt-sc-hr-invisible"></div>
  
                  <?php if($page_layout == 'with-left-sidebar'): ?>
                      <section class="secondary-sidebar secondary-has-left-sidebar" id="secondary-left"><?php get_sidebar('left'); ?></section>
                  <?php elseif($page_layout == 'with-both-sidebar'): ?>
                      <section class="secondary-sidebar secondary-has-both-sidebar" id="secondary-left"><?php get_sidebar('left'); ?></section>
                  <?php endif; ?>
  
                  <?php if($page_layout != 'content-full-width'): ?>
                        <section id="primary" class="page-with-sidebar page-<?php echo $page_layout; ?>">
                  <?php else: ?>
                        <section id="primary" class="content-full-width">
                  <?php endif; ?>

                  <article id="post-<?php the_ID(); ?>" <?php post_class('workout-single'); ?>>
					  <h3 class="border-title"> <span><?php the_title(); ?></span></h3>
                      <div class="dt-sc-workout-detail">
                          <div class="dt-excersise-title title"><?php
						  	  $wmeta = get_post_meta(get_the_id(), '_workout_settings', true);
							  if(!empty($wmeta['nosteps'])): ?>
                                  <p class="count">
                                      <a href="javascript:void(0)"><?php echo wp_kses($wmeta['nosteps'], $dt_allowed_html_tags); ?> <br><span><?php _e('Steps', 'dt_themes'); ?></span></a>
                                  </p><?php
							  endif; ?>
                              <h5><?php the_title(); ?></h5>
                          </div>
                          <div class="dt-sc-hr-invisible-small"></div>
                          <div class="dt-sc-one-half column first">
                              <div class="dt-excersise-thumb"><?php
								  $item = isset( $wmeta['feature_video'] ) ? $wmeta['feature_video'] : '';
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
                          </div>
                          <div class="dt-sc-one-half column">
                              <div class="dt-excersise-detail"><?php
							  	  if(!empty($wmeta['subtitle'])) ?>
	                                  <h4><a href="javascript:void(0)"><?php echo wp_kses($wmeta['subtitle'], $dt_allowed_html_tags); ?></a></h4><?php
								  if(!empty($wmeta['muscle_group'])) ?>
									  <h6><?php _e('Muscle Group:', 'dt_themes'); ?></h6><p class="dt-excersise-meta"><?php echo wp_kses($wmeta['muscle_group'], $dt_allowed_html_tags); ?></p>									  

                                  <h6><?php _e('Categories:', 'dt_themes'); ?></h6>
                                  <p class="dt-excersise-meta"><?php echo get_the_term_list($post->ID, 'workout_entries', ' ', ', ', ' '); ?></p><?php

								  if(!empty($wmeta['equipment'])) ?>
									  <h6><?php _e('Equipment:', 'dt_themes'); ?></h6><p class="dt-excersise-meta"><?php echo wp_kses($wmeta['equipment'], $dt_allowed_html_tags); ?></p>
                              </div>
                          </div>
                          <div class="dt-sc-hr-invisible"></div>
                          <div class="dt-sc-clear"></div>
                      </div><?php
					  the_content();
                      wp_link_pages(array('before' => '<div class="page-link"><strong>'.__('Pages:', 'dt_themes').'</strong> ', 'after' => '</div>', 'next_or_number' => 'number'));
                      edit_post_link(__('Edit', 'dt_themes'), '<span class="edit-link">', '</span>' ); ?>
                      <div class="dt-sc-hr-invisible"></div>
                      <div class="dt-sc-clear"></div>

                      <h3 class="border-title"> <span> <?php _e('Photo Gallery', 'dt_themes'); ?> </span></h3>
                      <div class="portfolio-single-slider-wrapper"><?php
                          #Workout slider...
                          if(isset($wmeta['items']) != ""):
                              echo "<ul class='portfolio-single-slider'>";
                                  foreach ( $wmeta['items'] as $key => $item ):
                                      echo "<li>";
                                          if($wmeta['items_name'][$key] != 'video'):
                                              echo "<img src='".$item."' alt='".$wmeta['items_name'][$key]."'>";
                                          else:
                                              #For vimeo...
                                              if (strpos($item, "vimeo")) :
                                                  $url = substr( strrchr($item, "/"),1);
                                                  echo "<iframe src='https://player.vimeo.com/video/{$url}' width='1170' height='700' frameborder='0'></iframe>";
    
                                              #For youtube...
                                              elseif(strpos($item, "?v=")):
                                                  $url = substr( strrchr($item, "="),1);
                                                  echo "<iframe src='https://www.youtube.com/embed/{$url}?wmode=opaque' width='1170' height='700' frameborder='0'></iframe>";
                                              endif;
                                          endif;
                                      echo "</li>";
                                  endforeach;
                              echo "</ul>";
    
                              echo "<div id='bx-pager'>"; $i = 0;
    
                                  foreach ( $wmeta['items'] as $key => $item ):
                                          if($wmeta['items_name'][$key] != 'video'):
                                              echo "<a data-slide-index='".$i."' href=''><img src='{$item}' alt='".$wmeta['items_name'][$key]."' /></a>";
                                          else:
                                              #For vimeo...
                                              if (strpos($item, "vimeo")) :
                                                  $url = substr( strrchr($item, "/"),1);
												  $url = apply_filters('dt_get_vimeo_thumb', $url);
                                                  echo "<a data-slide-index='".$i."' href=''><img src='".$url."' alt='".$wmeta['items_name'][$key]."' /></a>";													
                                              #For youtube...
                                              elseif(strpos($item, "?v=")):
                                                  $url = substr( strrchr($item, "="),1);
                                                  echo "<a data-slide-index='".$i."' href=''><img src='https://img.youtube.com/vi/{$url}/0.jpg' alt='".$wmeta['items_name'][$key]."' /></a>";
                                              endif;
                                          endif;
                                          $i += 1;
                                  endforeach;

                              echo "</div>";
                          endif; ?>
                      </div>
					  <div class="dt-sc-hr-invisible-small"></div><?php
					  #Comment template...
					  if(dt_theme_option('general', 'disable-workout-comment') != true && (isset($wmeta['comment']) != "")) {
						 comments_template('', true);
					  } ?>
                  </article>
                  </section>

                  <?php if($page_layout == 'with-right-sidebar'): ?>
                    <section class="secondary-sidebar secondary-has-right-sidebar" id="secondary-right"><?php get_sidebar('right'); ?></section>
                  <?php elseif($page_layout == 'with-both-sidebar'): ?>
                    <section class="secondary-sidebar secondary-has-both-sidebar" id="secondary-right"><?php get_sidebar('right'); ?></section>
                  <?php endif; ?>

              </div>
              <div class="dt-sc-hr-invisible-large"></div>
          </div>
      </div><?php

    endwhile;

get_footer(); ?>