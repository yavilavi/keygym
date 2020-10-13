<?php
if (! class_exists ( 'DTGalleryPostType' )) {
	class DTGalleryPostType {
		
		/**
		 */
		function __construct() {
			// Add Hook into the 'init()' action
			add_action ( 'init', array (
					$this,
					'dt_init' 
			) );
			
			// Add Hook into the 'admin_init()' action
			add_action ( 'admin_init', array (
					$this,
					'dt_admin_init' 
			) );
			
			add_filter ( 'template_include', array (
					$this,
					'dt_template_include' 
			) );
		}
		
		/**
		 * A function hook that the WordPress core launches at 'init' points
		 */
		function dt_init() {
			$this->createPostType ();
			add_action ( 'save_post', array (
					$this,
					'save_post_meta' 
			) );
		}
		
		/**
		 * A function hook that the WordPress core launches at 'admin_init' points
		 */
		function dt_admin_init() {
			wp_enqueue_script ( 'jquery-ui-sortable' );
			
			remove_filter( 'manage_posts_custom_column', 'likeThisDisplayPostLikes');
			
			add_action ( 'add_meta_boxes', array (
					$this,
					'dt_add_gallery_meta_box' 
			) );
			
			add_filter ( "manage_edit-dt_galleries_columns", array (
					$this,
					"dt_galleries_edit_columns" 
			) );
			
			add_action ( "manage_posts_custom_column", array (
					$this,
					"dt_galleries_columns_display" 
			), 10, 2 );
		}
		
		/**
		 */
		function createPostType() {
			$labels = array (
					'name' => __ ( 'Galleries', 'dt_themes' ),
					'all_items' => __ ( 'All Galleries', 'dt_themes' ),
					'singular_name' => __ ( 'Gallery', 'dt_themes' ),
					'add_new' => __ ( 'Add New', 'dt_themes' ),
					'add_new_item' => __ ( 'Add New Gallery', 'dt_themes' ),
					'edit_item' => __ ( 'Edit Gallery', 'dt_themes' ),
					'new_item' => __ ( 'New Gallery', 'dt_themes' ),
					'view_item' => __ ( 'View Gallery', 'dt_themes' ),
					'search_items' => __ ( 'Search Galleries', 'dt_themes' ),
					'not_found' => __ ( 'No Galleries found', 'dt_themes' ),
					'not_found_in_trash' => __ ( 'No Galleries found in Trash', 'dt_themes' ),
					'parent_item_colon' => __ ( 'Parent Gallery:', 'dt_themes' ),
					'menu_name' => __ ( 'Galleries', 'dt_themes' ) 
			);
			
			$args = array (
					'labels' => $labels,
					'hierarchical' => false,
					'description' => 'This is custom post type galleries',
					'supports' => array (
							'title',
							'editor',
							'comments',
							'thumbnail'
					),
					
					'public' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					'menu_position' => 5,
					'menu_icon' => plugin_dir_url ( __FILE__ ) . 'images/icon_gallery.png',
					
					'show_in_nav_menus' => true,
					'publicly_queryable' => true,
					'exclude_from_search' => false,
					'has_archive' => true,
					'query_var' => true,
					'can_export' => true,
					'rewrite' => true,
					'capability_type' => 'post'
			);

			register_post_type ( 'dt_galleries', $args );

			register_taxonomy ( "gallery_entries", array (
					"dt_galleries" 
			), array (
					"hierarchical" => true,
					"label" => "Categories",
					"singular_label" => "Category",
					"show_admin_column" => true,
					"rewrite" => true,
					"query_var" => true 
			) );
		}

		/**
		 */
		function dt_add_gallery_meta_box() {
			add_meta_box ( "dt-gallery-default-metabox", __ ( 'Default Options', 'dt_themes' ), array (
					$this,
					'dt_default_metabox' 
			), 'dt_galleries', "normal", "default" );
		}
		
		/**
		 */
		function dt_default_metabox() {
			include_once plugin_dir_path ( __FILE__ ) . 'metaboxes/dt_gallery_default_metabox.php';
		}
		
		/**
		 *
		 * @param unknown $columns        	
		 * @return multitype:
		 */
		function dt_galleries_edit_columns($columns) {
			$newcolumns = array (
				"cb" => "<input type=\"checkbox\" />",
				"dt_gallery_thumb" => "Image",
				"title" => "Title",
				"likes"	=> "Likes",
				"author" => "Author"
			);
			$columns = array_merge ( $newcolumns, $columns );
			return $columns;
		}

		/**
		 *
		 * @param unknown $columns
		 * @param unknown $id
		 */
		function dt_galleries_columns_display($columns, $id) {
			global $post;
			
			switch ($columns) {
				
				case "dt_gallery_thumb" :
				
				    $image = wp_get_attachment_image(get_post_thumbnail_id($id), array(75,75));
					if(!empty($image)):
					  	echo $image;
				    else:
						$gallery_settings = get_post_meta ( $post->ID, '_gallery_settings', TRUE );
						$gallery_settings = is_array ( $gallery_settings ) ? $gallery_settings : array ();
					
						if( array_key_exists("items_thumbnail", $gallery_settings)) {
							$item = $gallery_settings ['items_thumbnail'] [0];
							$name = $gallery_settings ['items_name'] [0];
						
							if( "video" === $name ) {
								echo '<span class="dt-video"></span>';
							}else{
								echo "<img src='{$item}' height='75px' width='75px' />";
							}
						}
					endif;
				break;

				case "likes":
					$likes = get_post_meta($post->ID, "_likes");
					if ($likes) {
					  echo $likes[0];
					} else {
					  echo 0;
					}
				break;
			}
		}
		
		/**
		 */
		function save_post_meta($post_id) {

			if( key_exists ( '_inline_edit',$_POST )) :
				if ( wp_verify_nonce($_POST['_inline_edit'], 'inlineeditnonce')) return;
			endif;

			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

			if (!current_user_can('edit_post', $post_id)) :
				return;
			endif;

			if ( (key_exists('post_type', $_POST)) && ('dt_galleries' == $_POST['post_type']) ) :

				if(isset($_POST['layout'])) :

					$settings = array ();
					$settings ['layout'] = isset ( $_POST ['layout'] ) ? $_POST ['layout'] : "";
	
					if($_POST['layout'] == 'with-both-sidebar') {
						$settings['disable-everywhere-sidebar-left'] = $_POST['disable-everywhere-sidebar-left'];
						$settings['disable-everywhere-sidebar-right'] = $_POST['disable-everywhere-sidebar-right'];
						$settings['widget-area-left'] =  array_unique(array_filter($_POST['mytheme']['widgetareas-left']));
						$settings['widget-area-right'] =  array_unique(array_filter($_POST['mytheme']['widgetareas-right']));
					} elseif($_POST['layout'] == 'with-left-sidebar') {
						$settings['disable-everywhere-sidebar-left'] = $_POST['disable-everywhere-sidebar-left'];
						$settings['widget-area-left'] =  array_unique(array_filter($_POST['mytheme']['widgetareas-left']));
					} elseif($_POST['layout'] == 'with-right-sidebar') {
						$settings['disable-everywhere-sidebar-right'] = $_POST['disable-everywhere-sidebar-right'];
						$settings['widget-area-right'] =  array_unique(array_filter($_POST['mytheme']['widgetareas-right']));
					}
	
					$settings ['client'] = isset ( $_POST ['_client'] ) ? stripslashes ( $_POST ['_client'] ) : "";
					$settings ['location'] = isset ( $_POST ['_location'] ) ? stripslashes ( $_POST ['_location'] ) : "";
					$settings ['url'] = isset ( $_POST ['_url'] ) ? stripslashes ( $_POST ['_url'] ) : "";
					
					$settings ['show-social-share'] = isset ( $_POST ['mytheme-social-share'] ) ? $_POST ['mytheme-social-share'] : "";
					$settings ['show-related-items'] = isset ( $_POST ['mytheme-related-item'] ) ? $_POST ['mytheme-related-item'] : "";
					$settings ['comment'] = isset ( $_POST ['mytheme-gallery-comment'] ) ? $_POST ['mytheme-gallery-comment'] : "";
					$settings ['items'] = isset ( $_POST ['items'] ) ? $_POST ['items'] : "";
					$settings ['items_thumbnail'] = isset ( $_POST ['items_thumbnail'] ) ? $_POST ['items_thumbnail'] : "";
					$settings ['items_name'] = isset ( $_POST ['items_name'] ) ? $_POST ['items_name'] : "";
					
					update_post_meta ( $post_id, "_gallery_settings", array_filter ( $settings ) );
		
					//For default category...
					$terms = wp_get_object_terms ( $post_id, 'gallery_entries' );
					if (empty ( $terms )) :
						wp_set_object_terms ( $post_id, 'Uncategorized', 'gallery_entries', true );
					endif;
				endif;
			endif;	
		}
		
		/**
		 * To load gallery pages in front end
		 *
		 * @param string $template        	
		 * @return string
		 */
		function dt_template_include($template) {
			if (is_singular( 'dt_galleries' )) {
				if (! file_exists ( get_stylesheet_directory () . '/single-dt_galleries.php' )) {
					$template = plugin_dir_path ( __FILE__ ) . 'templates/single-dt_galleries.php';
				}
			} elseif (is_tax ( 'gallery_entries' )) {
				if (! file_exists ( get_stylesheet_directory () . '/taxonomy-gallery_entries.php' )) {
					$template = plugin_dir_path ( __FILE__ ) . 'templates/taxonomy-gallery_entries.php';
				}
			}
			return $template;
		}
	}
}
?>