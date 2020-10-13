<?php
if (! class_exists ( 'DTCoreCustomPostTypes' )) {

	/**
	 *
	 * @author iamdesigning11
	 *        
	 */
	class DTCoreCustomPostTypes {
		function __construct() {

			// Gallery custom post type
			require_once plugin_dir_path ( __FILE__ ) . '/dt-gallery-post-type.php';
			if (class_exists ( 'DTGalleryPostType' )) {
				new DTGalleryPostType ();
			}

			// Workout custom post type
			require_once plugin_dir_path ( __FILE__ ) . '/dt-workout-post-type.php';
			if (class_exists ( 'DTWorkoutPostType' )) {
				new DTWorkoutPostType ();
			}

			// Add Hook into the 'admin_init()' action
			add_action ( 'admin_init', array (
					$this,
					'dt_admin_init'
			) );

			// Add Hook into getting video thumb
			add_filter ( 'dt_get_vimeo_thumb', array (
					$this,
					'dt_get_vimeo_videothumb'
			), 10, 1 );
		}

		/**
		 * A function hook that the WordPress core launches at 'admin_init' points
		 */
		function dt_admin_init() {
			wp_enqueue_style ( 'dt-custom-post-css', plugin_dir_url ( __FILE__ ) . 'css/styles.css' );
			wp_enqueue_script ( 'dt-metabox-script', plugin_dir_url ( __FILE__ ) . 'js/dt.metabox.js', array (), false, true );
		}

		/**
		 * Get vimeo video thumb url...
		 */
		function dt_get_vimeo_videothumb($id) {
			$data = file_get_contents("https://vimeo.com/api/v2/video/$id.json");
			$data = json_decode($data);
			return $data[0]->thumbnail_medium;
		}
	}
}
?>