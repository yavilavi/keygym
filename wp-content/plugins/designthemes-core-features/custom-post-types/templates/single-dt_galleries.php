<?php get_header();

	while(have_posts()): the_post();

	  #Getting meta values...
	  $meta_set = get_post_meta($post->ID, '_gallery_settings', true);
	  if($GLOBALS['force_enable'] == true)
	  	$page_layout = $GLOBALS['page_layout'];
	  else
	  	$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : $GLOBALS['page_layout'];

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

                  <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-single'); ?>>
                      <div class="portfolio-single">
                          <div class="portfolio-single-slider-wrapper"><?php
                              #Gallery slider...
                              if(isset($meta_set['items']) != ""):
                                  echo "<ul class='portfolio-single-slider'>";
                                      foreach ( $meta_set['items'] as $key => $item ):
                                          echo "<li>";
                                              if($meta_set['items_name'][$key] != 'video'):
                                                  echo "<img src='".$item."' alt='".$meta_set['items_name'][$key]."'>";
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
    
                                      foreach ( $meta_set['items'] as $key => $item ):
                                              if($meta_set['items_name'][$key] != 'video'):
                                                  echo "<a data-slide-index='".$i."' href=''><img src='{$item}' alt='".$meta_set['items_name'][$key]."' /></a>";
                                              else:
                                                  #For vimeo...
                                                  if (strpos($item, "vimeo")) :
                                                      $url = substr( strrchr($item, "/"),1);
													  $url = apply_filters('dt_get_vimeo_thumb', $url);
                                                      echo "<a data-slide-index='".$i."' href=''><img src='".$url."' alt='".$meta_set['items_name'][$key]."' /></a>";													
                                                  #For youtube...
                                                  elseif(strpos($item, "?v=")):
                                                      $url = substr( strrchr($item, "="),1);
                                                      echo "<a data-slide-index='".$i."' href=''><img src='https://img.youtube.com/vi/{$url}/0.jpg' alt='".$meta_set['items_name'][$key]."' /></a>";
                                                  endif;
                                              endif;
                                              $i += 1;
                                      endforeach;
    
                                  echo "</div>";
                              endif; ?>
                          </div>
                          <div class="dt-sc-hr-invisible-medium"></div>
                          <div class="column dt-sc-two-third first">
                              <h4 class="border-title"> <span><?php the_title(); ?></span> </h4><?php
                              the_content();
                              wp_link_pages(array('before' => '<div class="page-link"><strong>'.__('Pages:', 'dt_themes').'</strong> ', 'after' => '</div>', 'next_or_number' => 'number'));
                              edit_post_link(__('Edit', 'dt_themes'), '<span class="edit-link">', '</span>' ); ?>
                              <p class="tags"><span class="fa fa-tag"></span> <?php echo get_the_term_list($post->ID, 'gallery_entries', __('Posted In:', 'dt_themes').'&nbsp;&nbsp;&nbsp;&nbsp;', ', ', ' '); ?></p>
                          </div>
                          <div class="column dt-sc-one-third">
                              <div class="content-box">
                                  <h5 class="border-title"> <span><?php _e('Other Details', 'dt_themes'); ?></span> </h5>
                                  <ul class="project-details">
                                      <?php if(isset($meta_set['client'])): ?><li><span class="fa fa-user"></span><strong><?php _e('Organizer : ', 'dt_themes'); ?></strong><?php echo wp_kses($meta_set['client'], $dt_allowed_html_tags); ?></li><?php endif; ?>
                                      <?php if(isset($meta_set['location'])): ?><li><span class="fa fa-map-marker"></span><strong><?php _e('Location : ', 'dt_themes'); ?></strong><?php echo wp_kses($meta_set['location'], $dt_allowed_html_tags); ?></li><?php endif; ?>
                                      <?php if(isset($meta_set['url'])): ?><li><span class="fa fa-link"></span><strong><?php _e('Website : ', 'dt_themes'); ?></strong><a href="<?php echo wp_kses($meta_set['url'], $dt_allowed_html_tags); ?>" target="_blank"><?php echo $meta_set['url']; ?></a></li><?php endif; ?>
                                      <li><span class="fa fa-calendar"></span><strong><?php _e('Submitted On : ', 'dt_themes');?></strong><?php echo get_the_date('d')." ".get_the_date('M')." ".get_the_date('Y'); ?></li>
                                  </ul>
                                  <?php if(isset($meta_set['show-social-share'])): ?><div class="gallery-share"><?php dt_theme_social_bookmarks('sb-gallery'); ?></div><?php endif; ?>
                              </div>
                          </div>
                          <div class="dt-sc-hr-invisible-medium"></div>
                          
                          <div class="post-nav-container">
                              <div class="prev-post">
                                  <?php previous_post_link('%link', '<span class="fa fa-angle-left"></span> '.__('Previous', 'dt_themes')); ?>
                              </div>
                              <div class="next-post">
                                  <?php next_post_link('%link', __('Next', 'dt_themes').' <span class="fa fa-angle-right"></span>'); ?>
                              </div>
                          </div>
                          <div class="dt-sc-hr-invisible-medium"></div>
                          <div class="dt-sc-clear"></div><?php

                          #Show related posts items...
                          if(isset($meta_set['show-related-items']) != ""): ?>
                              <h2 class="border-title"> <span><?php _e('Related Gallery', 'dt_themes'); ?></span> </h2><?php

							  $li_class = "portfolio dt-sc-one-half column";
							  $feature_image = "gallery-twocol-sidebar";
							  $count = 4;

							  #Post layout check...
							  switch($page_layout) {
								  case "with-left-sidebar":
									  $li_class = "portfolio dt-sc-one-half column with-sidebar"; $feature_image = "gallery-twocol-sidebar"; $count = 2;
									  break;

								  case "with-right-sidebar":
									  $li_class = "portfolio dt-sc-one-half column with-sidebar"; $feature_image = "gallery-twocol-sidebar"; $count = 2;
									  break;

								  case "content-full-width":
									  $li_class = "portfolio dt-sc-one-fourth column"; $feature_image = "gallery-fourcol"; $count = 4;
									  break;
							  }
							  #Performing query...
                              $args = array('orderby' => 'rand', 'post_type' => 'dt_galleries', 'post__not_in' => array(get_the_ID()), 'posts_per_page' => $count);							
                              $the_query = new WP_Query($args);
                              if($the_query->have_posts()):
                                echo '<div class="dt-sc-portfolio-container related-gallery">';
                                  while($the_query->have_posts()): $the_query->the_post(); ?>
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
                                  endwhile;
								  wp_reset_postdata();
                                echo '</div>';
                              endif;
                          endif; ?>
                          <div class="dt-sc-hr-invisible-small"></div><?php
                          #Comment template...
                          if(dt_theme_option('general', 'disable-gallery-comment') != true && (isset($meta_set['comment']) != "")) {
                              comments_template('', true);
                          } ?>
                      </div>
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