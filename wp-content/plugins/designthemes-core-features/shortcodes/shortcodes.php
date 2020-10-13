<?php
class DTCoreShortcodesDefination {
	
	function __construct() {
		
		/* Accordion Shortcode */
		add_shortcode ( "dt_sc_accordion_group", array (
				$this,
				"dt_sc_accordion_group" 
		) );

		/* Button Shortcode */
		add_shortcode ( "dt_sc_button", array (
				$this,
				"dt_sc_button" 
		) );

		add_shortcode ( "dt_sc_notify_button", array (
				$this,
				"dt_sc_notify_button"
		) );

		/* BlockQuotes Shortcode */
		add_shortcode ( "dt_sc_blockquote", array (
				$this,
				"dt_sc_blockquote" 
		) );

		/* Callout Box Shortcode */
		add_shortcode ( "dt_sc_callout_box", array (
				$this,
				"dt_sc_callout_box"
		) );

		/* Columns Shortcode */
		add_shortcode ( "dt_sc_one_column", array (
				$this,
				"dt_sc_columns"
		) );

		add_shortcode ( "dt_sc_one_half", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_third", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fourth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_third", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fourth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_five_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		/* Column with inner */
		add_shortcode ( "dt_sc_one_half_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_third_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fourth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_third_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fourth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_four_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_five_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		/* Contact Information */
		#Address
		add_shortcode ( "dt_sc_address", array (
				$this,
				"dt_sc_address"
		) );

		#Timing
		add_shortcode ( "dt_sc_timing", array (
				$this,
				"dt_sc_timing"
		) );

		#Phone
		add_shortcode ( "dt_sc_phone", array (
				$this,
				"dt_sc_phone"
		) );

		#Mobile
		add_shortcode ( "dt_sc_mobile", array (
				$this,
				"dt_sc_mobile"
		) );
		
		#Fax
		add_shortcode ( "dt_sc_fax", array (
				$this,
				"dt_sc_fax"
		) );
		
		#Email
		add_shortcode ( "dt_sc_email", array (
				$this,
				"dt_sc_email"
		) );

		#Web
		add_shortcode ( "dt_sc_web", array (
				$this,
				"dt_sc_web"
		) );

		#Titled Contact
		add_shortcode ( "dt_sc_titled_contact", array (
				$this,
				"dt_sc_titled_contact"
		) );
		/* Contact Information End */

		/* Time Schedule Start */
		add_shortcode ( "dt_sc_ts_time", array (
				$this,
				"dt_sc_ts_time"
		) );

		add_shortcode ( "dt_sc_ts_work", array (
				$this,
				"dt_sc_ts_work"
		) );

		add_shortcode ( "dt_sc_ts_group", array (
				$this,
				"dt_sc_ts_group"
		) );

		add_shortcode ( "dt_sc_ts_wrapper", array (
				$this,
				"dt_sc_ts_wrapper"
		) );
		/* Time Schedule End */

		/* Clients Carousel Shortcode */
		add_shortcode ( "dt_sc_clients_carousel", array (
				$this,
				"dt_sc_clients_carousel"
		) );

		add_shortcode ( "dt_sc_client_item", array (
				$this,
				"dt_sc_client_item"
		) );

		/* Donutchart Start */
		add_shortcode ( "dt_sc_donutchart_small", array ( 
				$this,
				"dt_sc_donutchart"
		) );
		
		add_shortcode ( "dt_sc_donutchart_medium", array ( 
				$this,
				"dt_sc_donutchart"
		) );

		add_shortcode ( "dt_sc_donutchart_large", array ( 
				$this,
				"dt_sc_donutchart"
		) );
		/* Donutchart End */

		add_shortcode ( "dt_sc_donutchart_morris", array ( 
				$this,
				"dt_sc_donutmorris"
		) );

		add_shortcode ( "dt_sc_morris_label", array (
				$this,
				"dt_sc_morrislabel"
		) );

		add_shortcode ( "dt_sc_pie_chart", array ( 
				$this,
				"dt_sc_piechart"
		) );

		add_shortcode ( "dt_sc_pie_data", array ( 
				$this,
				"dt_sc_morrislabel"
		) );

		/* Dividers */

		/* Clear Shortcode */
		add_shortcode ( "dt_sc_clear", array (
				$this,
				"dt_sc_clear"
		) );

		/* HR With Border */
		add_shortcode( "dt_sc_hr_border", array (
				$this,
				"dt_sc_hr_border"
		) );

		add_shortcode ( "dt_sc_hr", array (
				$this,
				"dt_sc_dividers" 
		) );

		add_shortcode ( "dt_sc_hr_top", array (
				$this,
				"dt_sc_hr_top"
		) );
		
		add_shortcode ( "dt_sc_hr_medium", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_large", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_invisible", array (
				$this,
				"dt_sc_dividers" 
		) );
	
		add_shortcode ( "dt_sc_hr_invisible_small", array (
				$this,
				"dt_sc_dividers" 
		) );

		add_shortcode ( "dt_sc_hr_invisible_medium", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_invisible_large", array (
				$this,
				"dt_sc_dividers" 
		) );
		/* Dividers End */
		
		/* Icon Boxes Shortcode */
		add_shortcode ( "dt_sc_icon_box", array (
				$this,
				"dt_sc_icon_box" 
		) );
		/* Icon Boxes Shortcode End*/

		add_shortcode ( "dt_sc_icon_service", array (
				$this,
				"dt_sc_icon_service" 
		) );

		/* Icon Boxes Shortcode */
		add_shortcode ( "dt_sc_icon_box_colored", array (
				$this,
				"dt_sc_icon_box_colored" 
		) );
		/* Icon Boxes Shortcode End*/
		
		/* Dropcap Shortcode */
		add_shortcode ( "dt_sc_dropcap", array (
				$this,
				"dt_sc_dropcap" 
		) );
		
		/* Code Shortcode */
		add_shortcode ( "dt_sc_code", array (
				$this,
				"dt_sc_code" 
		) );

		/* Ordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ol", array (
				$this,
				"dt_sc_fancy_ol" 
		) );
		
		/* Unordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ul", array (
				$this,
				"dt_sc_fancy_ul" 
		) );

		/* Pricing Table */
		add_shortcode ( "dt_sc_pricing_table", array (
				$this,
				"dt_sc_pricing_table" 
		) );
		add_shortcode ( "dt_sc_pricing_table_two", array (
				$this,
				"dt_sc_pricing_table"
		) );

		/* Pricing Table Item */
		add_shortcode ( "dt_sc_pricing_table_item", array (
				$this,
				"dt_sc_pricing_table_item" 
		) );

		add_shortcode ( "dt_sc_pricing_table_item_two", array (
				$this,
				"dt_sc_pricing_table_item_two"
		) );

		/* Progress Bar Shortcode */
		add_shortcode ( "dt_sc_progressbar", array (
				$this,
				"dt_sc_progressbar" 
		) );

		/* Tabs */
		add_shortcode ( "dt_sc_tab", array (
				$this,
				"dt_sc_tab" 
		) );

		add_shortcode ( "dt_sc_tabs_horizontal", array (
				$this,
				"dt_sc_tabs_horizontal" 
		) );

		add_shortcode ( "dt_sc_tabs_vertical", array (
				$this,
				"dt_sc_tabs_vertical" 
		) );

		add_shortcode ( "dt_sc_tabs_vertical_right", array (
				$this,
				"dt_sc_tabs_vertical_right" 
		) );

		add_shortcode ( "dt_sc_tabs_vertical_with_icon", array (
				$this,
				"dt_sc_tabs_vertical" 
		) );

		add_shortcode ( "dt_sc_tabs_vertical_right_with_icon", array (
				$this,
				"dt_sc_tabs_vertical_right" 
		) );

		/* Team Shortcode */
		add_shortcode ( "dt_sc_team_one", array (
				$this,
				"dt_sc_team_one" 
		) );

		add_shortcode ( "dt_sc_team_two", array (
				$this,
				"dt_sc_team_two"
		) );

		/* Testimonial Shortcode */
		add_shortcode ( "dt_sc_testimonial", array (
				$this,
				"dt_sc_testimonial" 
		) );
		
		/* Testimonial Carousel Shortcode */
		add_shortcode ( "dt_sc_testimonial_carousel", array (
				$this,
				"dt_sc_testimonial_carousel"
		) );

		/* Title Shortcode */
		add_shortcode ( "dt_sc_h1", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h2", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h3", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h4", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h5", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h6", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_title_with_icon", array (
				$this,
				"dt_sc_title_with_icon" 
		) );
		/* Title Shortcode End */

		/* Toggle Shortcode */
		add_shortcode ( "dt_sc_toggle", array (
				$this,
				"dt_sc_toggle" 
		) );

		/* Toogle Framed Shortcode */
		add_shortcode ( "dt_sc_toggle_framed", array (
				$this,
				"dt_sc_toggle_framed" 
		) );
		
		/* Titles Box Shortcode */
		add_shortcode ( "dt_sc_titled_box", array (
				$this,
				"dt_sc_titled_box" 
		) );
		
		/* Tooltip Shortcode */
		add_shortcode ( "dt_sc_tooltip", array (
				$this,
				"dt_sc_tooltip"
		) );

		add_shortcode ( "dt_sc_tip_one", array (
				$this,
				"dt_sc_tip_one"
		) );

		add_shortcode ( "dt_sc_tip_two", array (
				$this,
				"dt_sc_tip_two"
		) );

		add_shortcode ( "dt_sc_tip_three", array (
				$this,
				"dt_sc_tip_three"
		) );

		/* PullQuotes Shortcode */
		add_shortcode ( "dt_sc_pullquote", array (
				$this,
				"dt_sc_pullquote" 
		) );

		/* Portfolio Shortcode */

		add_shortcode( "dt_sc_portfolio_item", array(
			$this,
			"dt_sc_portfolio_item"
		));

		add_shortcode ( "dt_sc_infographic_bar", array (
				$this,
				"dt_sc_infographic_bar" 
		) );

		/* Full width Shortcode*/
		add_shortcode("dt_sc_fullwidth_section", array(
				$this,
				"dt_sc_fullwidth_section"
		) );

		/* Full Width Video Shortcode */
		add_shortcode("dt_sc_fullwidth_video", array(
				$this,
				"dt_sc_fullwidth_video"
		));

		/* Animation */
		add_shortcode("dt_sc_animation", array(
			$this,
			"dt_sc_animation"
		) );

		/* Custom Shortcodes */
		add_shortcode("dt_sc_contact_form", array(
			$this,
			"dt_sc_contact_form"
		) );

		add_shortcode("dt_sc_blog_posts", array(
			$this,
			"dt_sc_blog_posts"
		) );

		add_shortcode("dt_sc_recent_posts", array(
			$this,
			"dt_sc_recent_posts"
		) );

		add_shortcode("dt_sc_workout_items", array(
			$this,
			"dt_sc_workout_items"
		) );

		add_shortcode("dt_sc_workout_plan", array(
			$this,
			"dt_sc_workout_plan"
		) );
		
		add_shortcode("dt_sc_workouts_list", array(
			$this,
			"dt_sc_workouts_list"
		) );

		add_shortcode("dt_sc_subscribe_form", array(
			$this,
			"dt_sc_subscribe_form"
		) );
		
		add_shortcode("dt_sc_working_hours", array(
			$this,
			"dt_sc_working_hours"
		) );

		add_shortcode("dt_sc_work_hour", array(
			$this,
			"dt_sc_work_hour"
		) );

		add_shortcode("dt_sc_running_number", array(
			$this,
			"dt_sc_running_number"
		) );

		add_shortcode("dt_sc_upcoming_events", array(
			$this,
			"dt_sc_upcoming_events"
		) );

		add_shortcode("dt_sc_timetable_events", array(
			$this,
			"dt_sc_timetable_events"
		) );

		add_shortcode("dt_sc_gallery_items", array(
			$this,
			"dt_sc_gallery_items"
		) );

		add_shortcode("dt_sc_gallery_item", array(
			$this,
			"dt_sc_gallery_item"
		) );

		add_shortcode("dt_sc_bmi_calc", array(
			$this,
			"dt_sc_bmi_calc"
		) );
		
		add_shortcode("dt_sc_package_item", array(
			$this,
			"dt_sc_package_item"
		) );
		
		add_shortcode("dt_sc_contact_add1", array(
			$this,
			"dt_sc_contact_add1"
		) );

		add_shortcode("dt_sc_contact_add2", array(
			$this,
			"dt_sc_contact_add2"
		) );

		add_shortcode("dt_sc_contact_add3", array(
			$this,
			"dt_sc_contact_add3"
		) );

		/* Page Builder Utils */
		add_shortcode ( "dt_sc_doshortcode", array (
				$this,
				"dt_sc_doshortcode"
		));

		/* Resizeable Column */
		add_shortcode ( "dt_sc_resizable", array (
				$this,
				"dt_sc_resizable"
		));

		add_shortcode ( "dt_sc_resizable_inner", array (
				$this,
				"dt_sc_resizable"
		));

		add_shortcode ( "dt_sc_widgets", array (
				$this,
				"dt_sc_widgets"
		));
		/* Page Builder Utils */

		add_shortcode( 'dt_social', array (
				$this,
				'dt_social'
		));

		add_shortcode( 'dt_info_title', array (
				$this,
				'dt_info_title'
		));

		add_shortcode( 'dt_service_pack', array (
				$this,
				'dt_service_pack'
		));

		add_shortcode( 'dt_section_title', array (
				$this,
				'dt_section_title'
		));

		add_shortcode( 'dt_section_title2', array (
				$this,
				'dt_section_title2'
		));

		add_shortcode( 'dt_section_title3', array (
				$this,
				'dt_section_title3'
		));

		add_shortcode( 'dt_package_title', array (
				$this,
				'dt_package_title'
		));

		add_shortcode( 'fblike', array (
				$this,
				'fblike'
		));

		add_shortcode( 'googleplusone', array (
				$this,
				'googleplusone'
		));

		add_shortcode( 'twitter', array (
				$this,
				'twitter'
		));

		add_shortcode( 'stumbleupon', array (
				$this,
				'stumbleupon'
		));

		add_shortcode( 'linkedin', array (
				$this,
				'linkedin'
		));

		add_shortcode( 'delicious', array (
				$this,
				'delicious'
		));

		add_shortcode( 'pintrest', array (
				$this,
				'pintrest'
		));

		add_shortcode( 'digg', array (
				$this,
				'digg'
		));

		/* GDPR Privacy Shortcodes */
		add_shortcode("dt_sc_privacy_link", array(
			$this,
			"dt_sc_privacy_policy_link"
		) );

		add_shortcode("dt_sc_privacy_google_tracking", array(
			$this,
			"dt_sc_privacy_disable_google_tracking"
		) );

		add_shortcode("dt_sc_privacy_google_webfonts", array(
			$this,
			"dt_sc_privacy_disable_google_webfonts"
		) );

		add_shortcode("dt_sc_privacy_google_maps", array(
			$this,
			"dt_sc_privacy_disable_google_maps"
		) );

		add_shortcode("dt_sc_privacy_video_embeds", array(
			$this,
			"dt_sc_privacy_disable_video_embeds"
		) );
	}
	
	/**
	 *
	 * @param string $content        	
	 * @return string
	 */
	static function dtShortcodeHelper($content = null) {
		$content = do_shortcode ( shortcode_unautop ( $content ) );
		$content = preg_replace ( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		$content = preg_replace ( '#<br \/>#', '', $content );
		return trim ( $content );
	}
	
	/**
	 *
	 * @param string $dir        	
	 * @return multitype:
	 */
	function dtListImages($dir = null) {
		$images = array ();
		$icon_types = array (
				'jpg',
				'jpeg',
				'gif',
				'png' 
		);
		
		if (is_dir ( $dir )) {
			$handle = opendir ( $dir );
			while ( false !== ($dirname = readdir ( $handle )) ) {
				
				if ($dirname != "." && $dirname != "..") {
					$parts = explode ( '.', $dirname );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					
					if (in_array ( $ext, $icon_types )) {
						$option = $parts [count ( $parts ) - 2];
						$images [$dirname] = str_replace ( ' ', '', $option );
					}
				}
			}
			closedir ( $handle );
		}
		
		return $images;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_accordion_group($attrs, $content = null) {
		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = str_replace ( "<h5 class='dt-sc-toggle", "<h5 class='dt-sc-toggle-accordion ", $out );
		$out = "<div class='dt-sc-toggle-frame-set'>{$out}</div>";
		return $out;
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_button($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'size' => '',
				'link' => '#',
				'type' => '',
				'iconstyle' =>'',
				'icon' => '',
				'htext' => '',
				'target' => '',
				'variation' => '',
				'animation' => '',
				'bgcolor' => '',
				'textcolor' => '',
				'class' =>''
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$htext = !empty( $htext ) ? $htext : $content;		

		if( ($iconstyle !== "no-icon") && !empty($icon)  ){
			$content = "<i class='fa {$icon}'> </i>".$content; 
		}
		
		$size = ($size == 'xlarge') ? ' xlarge' : $size;
		$size = ($size == 'large') ? ' large' : $size;
		$size = ($size == 'medium') ? ' medium' : $size;
		$size = ($size == 'small') ? ' small' : $size;
		
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';';
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		if(preg_match('#^{{#', $link) === 1) {
			$link =  str_replace ( '{{', '[', $link );
			$link =  str_replace ( '}}', '/]', $link );
			$link = do_shortcode($link);
		}else{
			$link = esc_url ( $link );
		}
		
		$type = ( $type === "type2" ) ? "bordered" : "";

		$hover = ( $iconstyle === "with-hover-effect") ? " with-icon " : "";

		$out = "<a href='{$link}' {$target} class='dt-sc-button {$class} {$size} {$variation} {$type} {$hover} {$animation}'><span {$style} data-hover='{$htext}'>{$content}</span></a>";
		return $out;
	}

	function dt_sc_notify_button($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'size' => '',
				'link' => '#',
				'type' => '',
				'iconstyle' =>'',
				'icon' => '',
				'htext' => '',
				'target' => '',
				'variation' => '',
				'class' =>''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$htext = !empty( $htext ) ? $htext : $content;

		if( ($iconstyle !== "no-icon") ) {
			if( !empty($icon) ) {
				$content = "<i class='fa {$icon}'> </i>".$content;
			} else {
				switch($variation):
					case 'info':
						$content = "<i class='fa fa-info-circle'> </i>".$content;
						break;
	
					case 'success':
						$content = "<i class='fa fa-check-circle'> </i>".$content;
						break;
	
					case 'warning':
						$content = "<i class='fa fa-exclamation-circle'> </i>".$content;
						break;
	
					case 'danger':
						$content = "<i class='fa fa-times-circle'> </i>".$content;
						break;
				endswitch;
			}	
		}

		$size = ($size == 'xlarge') ? ' xlarge' : $size;
		$size = ($size == 'large') ? ' large' : $size;
		$size = ($size == 'medium') ? ' medium' : $size;
		$size = ($size == 'small') ? ' small' : $size;
		
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		if(preg_match('#^{{#', $link) === 1) {
			$link =  str_replace ( '{{', '[', $link );
			$link =  str_replace ( '}}', '/]', $link );
			$link = do_shortcode($link);
		}else{
			$link = esc_url ( $link );
		}
		
		$type = ( $type === "type2" ) ? "bordered" : "";

		$out = "<a href='{$link}' {$target} class='dt-sc-button {$class} {$size} {$variation} {$type}'><span data-hover='{$htext}'>{$content}</span></a>";
		return $out;
	}	

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_blockquote($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => "type1",	
				'align' => '',
				'variation' => '',
				'textcolor' => '',
				'cite'=> '',
				'role' =>''		
		), $attrs ) );
		
		$class = array();
		if( preg_match( '/left|right|center/', trim( $align ) ) )
			$class[] = ' align' . $align;
		if( $variation)
			$class[] = ' ' . $variation;		
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = strip_tags($content);
		$content = ! empty ( $content ) ? "<q>{$content}</q>" : "";

		$cite = ! empty ( $cite ) ? '&ndash; ' .$cite : "";
		$role = ! empty ( $role ) ? '<br> <span>' . $role . '</span>' : "";

		$cite = !empty( $cite ) ? "<cite>$cite$role</cite>" : "";

		$style = ( $textcolor ) ? ' style="color:' . $textcolor . ';"' : '';
		$class = join( '', array_unique( $class ) );

		$out = "<blockquote class='{$type} {$class}' {$style}>{$content}{$cite}</blockquote>";
		return $out;
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_callout_box($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => "type1",
				'class' => ''
		), $attrs ) );

		$attribute = " class='intro-text {$type} {$class}' ";

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		return "<div {$attribute}>".$content."</div>";
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_columns($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'id' => '',
				'class' => '',
				'style' => '' ,
				'type' => ''
		), $attrs ) );
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$shortcodename = str_replace ( "-inner", "", $shortcodename );
		
		$id = ($id != '') ? " id = '{$id}'" : '';
		$style = !empty( $style ) ? " style='{$style}' ": "";
		$type = ( trim($type) === 'type2' ) ? "no-space" : "space";
		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<div {$id} class='column {$shortcodename} {$class} {$type} {$first}' {$style} >{$content}</div>";
		return $out;
	}

	/* Contact Information */
	
	/**
	 * Shortcode : Address
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	 function dt_sc_address($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'line1' => '',
				'line2' => '',
				'line3' => '',
				'line4' => '',
				'class' => ''
		), $attrs ) );
		
		
		$out = "<div class='dt-sc-contact-info address {$class}'>";
		$out .= "<p>";
		$out .= "<i class='fa fa-rocket'></i>";
		$out .= ( !empty($line1) ) ? $line1 : "";
		$out .= ( !empty($line2) ) ? "<br>$line2" : "";
		$out .= ( !empty($line3) ) ? "<br>$line3" : "";
		$out .= ( !empty($line4) ) ? "<br>$line4" : "";
		$out .= "</p>";
		$out .= '</div>';
		
		return $out;
	 }

	/**
	 * Shortcode : Timing
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	 function dt_sc_timing($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'line1' => '',
				'line2' => '',
				'line3' => '',
				'line4' => '',
				'class' => ''
		), $attrs ) );

		$out = "<div class='dt-sc-contact-info {$class}'>";
		$out .= "<p>";
		$out .= "<i class='fa fa-clock-o'></i>";
		$out .= ( !empty($line1) ) ? $line1 : "";
		$out .= ( !empty($line2) ) ? "<br>$line2" : "";
		$out .= ( !empty($line3) ) ? "<br>$line3" : "";
		$out .= ( !empty($line4) ) ? "<br>$line4" : "";
		$out .= "</p>";
		$out .= '</div>';

		return $out;
	 }

	/**
	 * Shortcode : Phone
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	 function dt_sc_phone($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'phone' => '',
				'class' => ''
		), $attrs ) );

		$out = "<div class='dt-sc-contact-info {$class}'>";
		$out .= ( !empty($phone) ) ?"<p><i class='fa fa-phone'></i>{$phone}</p>": "";
		$out .= '</div>';
		
		return $out;
	 }
	 
	/**
	 * Shortcode : Mobile
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	 function dt_sc_mobile($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'mobile' => '',
				'class' => ''
		), $attrs ) );
		
		$out = "<div class='dt-sc-contact-info {$class}'>";
		$out .= ( !empty($mobile) ) ?"<p><i class='fa fa-mobile-phone'></i>{$mobile}</p>": "";
		$out .= '</div>';
		
		return $out;
	 }

	/**
	 * Shortcode : Fax
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	 function dt_sc_fax($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'fax' => '',
				'class' => ''
		), $attrs ) );

		$out = "<div class='dt-sc-contact-info {$class}'>";
		$out .= ( !empty($fax) ) ? "<p><i class='fa fa-fax'></i>{$fax}</p>" : "";
		$out .= '</div>';
		
		return $out;
	 }

	/**
	 * Shortcode : Email id
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	 function dt_sc_email($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'emailid' => '',
				'class' => ''
		), $attrs ) );

		$out = "<div class='dt-sc-contact-info {$class}'>";
		$out .= ( !empty($emailid) ) ? "<p><i class='fa fa-envelope'></i><a href='mailto:$emailid'>{$emailid}</a></p>" : "";
		$out .= '</div>';
		return $out;
	 }

	/**
	 * Shortcode : Website Url
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	 function dt_sc_web($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'url' => '',
				'class' => ''
		), $attrs ) );
		
		$out = "<div class='dt-sc-contact-info {$class}'>";

		if( !empty( $url ) ) {
			$out .= "<p><i class='fa fa-globe'></i><a target='_blank' href='{$url}'>";
			$a = preg_replace('#^[^:/.]*[:/]+#i', '',urldecode( $url ));
			$out .=	preg_replace('!\bwww3?\..*?\b!', '', $a);
			$out .= "</a></p>";
		}
		$out .= '</div>';
		
		return $out;
	 }

	 #Titled contact info...
	 function dt_sc_titled_contact($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '',
				'url' => '#',
				'class' => ''
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = strip_tags($content,'<a>');

		$out = "<div class='dt-sc-contact-info {$class}'>";
			$out .= "<h5><a href='{$url}'>{$title}</a></h5>";
			$out .= "<p>{$content}</p>";
		$out .= '</div>';
		
		return $out;
	 }
	/* Contact Information End*/

	/**
	 * Shortcode : Time Data
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	 function dt_sc_ts_time($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'text' => ''
		), $attrs ) );

		$out = "";

		if( !empty( $text ) ) {
			$out = "<li><span class='fa fa-clock-o'></span>{$text}</li>";
		}
		return $out;
	 }

	/**
	 * Shortcode : Work Data
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	 function dt_sc_ts_work($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '',
				'link' => '#',
				'author' => ''
		), $attrs ) );

		$out = "";

		if( !empty( $title ) ) {
			$out .= "<li class='dt-sc-table-cnt timetable-text'> <a href='{$link}'>{$title}<span><i class='fa fa-user'></i>{$author}</span></a></li>";
		} else {
			$out .= "<li>&nbsp;</li>";
		}
		return $out;
	 }

	/**
	 * Shortcode : Group Data
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	 function dt_sc_ts_group($attrs, $content = null) {

		$out = "";

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<ul>".$content."</ul>";
		return $out;
	 }

	/**
	 * Shortcode : Wrapper Data
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	 function dt_sc_ts_wrapper($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => ''
		), $attrs ) );

		$out = "";

		$out .= '<li>'.__('Time', 'dt_themes').'</li>';
		$out .= '<li>'.__('Monday', 'dt_themes').'</li>';
		$out .= '<li>'.__('Tuesday', 'dt_themes').'</li>';
		$out .= '<li>'.__('Wednesday', 'dt_themes').'</li>';
		$out .= '<li>'.__('Thursday', 'dt_themes').'</li>';
		$out .= '<li>'.__('Friday', 'dt_themes').'</li>';
		$out .= '<li>'.__('Saturday', 'dt_themes').'</li>';
		$out .= '<li>'.__('Sunday', 'dt_themes').'</li>';

		$out = "<ul class='timetable-head'>".$out."</ul>";

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= "<div class='timetable-detail'>".$content."</div>";

		$out = '<div class="timetable"><h2 class="border-title aligncenter"> <span>'.$title.'</span></h2>'.$out.'</div>';
		return $out;
	 }

	/* Client Carousel */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_clients_carousel($attrs, $content = null) {

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace( '<ul>', "<ul class='dt-sc-partner-carousel'>", $content );

		$out = '<div class="dt-sc-partner-carousel-wrapper">';
		$out .= $content;
		$out .= '</div>';
		return $out;
	}

	function dt_sc_client_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '',
				'link' => '',
				'image' => 'http://placehold.it/247x67'
		), $attrs ) );

		$out = "";

		$out = "<a title='{$title}' href='{$link}'><img src='{$image}' alt='{$title}' /></a>";
		return $out;
	}

	/* Client Carousel End*/

	/* Dividers */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_clear($attrs, $content = null) {
		return '<div class="dt-sc-clear"></div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_hr_border($attrs, $content = null) {
		return '<div class="dt-sc-hr-border"></div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content
	 * @param string $shortcodename
	 * @return string
	 */
	function dt_sc_donutchart($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'title' => '',
				'bgcolor' => '',
				'fgcolor' => '',
				'percent' =>'30',
				'text' => ''
		), $attrs ) );
		
		$size = "100";
		$size = ( "dt_sc_donutchart_medium" === $shortcodename ) ? "200" : $size;
		$size = ( "dt_sc_donutchart_large" === $shortcodename ) ? "300" : $size;
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$out = "<div class='{$shortcodename}'>";
		$out .= "<div class='dt-sc-donutchart' data-size='{$size}' data-percent='{$percent}' data-bgcolor='{$bgcolor}' data-fgcolor='$fgcolor'></div>";
		if(!empty($title))
			$out .= "<h5 class='dt-sc-donutchart-title'>{$title}</h5>";
		if($text != "")
			$out .= "<p>{$text}</p>";
		$out .= '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_donutmorris($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'color' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$out = '<div class="dt-sc-donutmorris" data-color="'.$color.'">'.$content.'</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs
	 * @param string $content
	 * @param string $shortcodename
	 * @return string
	 */
	function dt_sc_morrislabel($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'label' => __('Some Text', 'dt_themes'),
				'value' => 20
		), $attrs ) );

		$out = '<span data-label="'.$label.'" data-value="'.$value.'"></span>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_piechart($attrs, $content = null, $shortcodename = "") {
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$out = '<div class="dt-sc-fp-holder">'.$content.'</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs
	 * @param string $content
	 * @param string $shortcodename
	 * @return string
	 */
	function dt_sc_dividers($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'class' => '',
				'top' => '' 
		), $attrs ) );
		
		if ("dt_sc_hr" === $shortcodename || "dt_sc_hr_medium" === $shortcodename || "dt_sc_hr_large" === $shortcodename) {
			
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			
			$out = "<div class='{$shortcodename} {$class}'>";
			
			if ((isset ( $attrs [0] ) && trim ( $attrs [0] == 'top' ))) {
				
				$out = "<div class='{$shortcodename} top {$class}'>";
				$out .= "<a href='#top' class='scrollTop'><span class='fa fa-angle-up'></span>" . __ ( "top", 'dt_themes' ) . "</a>";
			}
			
			$out .= "</div>";
		} else {
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			$out = "<div class='{$shortcodename}  {$class}'></div>";
		}
		return $out;
	}
	/* Dividers End*/

	function dt_sc_hr_top($attrs, $content = null, $shortcodename="" ){
		$out = do_shortcode("[dt_sc_hr top]");
		return $out;
	}

	/* Icon Boxes Shortcode */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_icon_box($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'type' => '',
				'fontawesome_icon' => '',
				'custom_img_class' => '',
				'custom_img_hover' => '',
				'title' => '',
				'subtitle' => '',
				'link' => '',
				'target' => '_blank',
				'class' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$out =  "<div class='dt-sc-ico-content {$type} {$class}'>";

		if(trim($type) == 'type6') $out .= "<div class='dt-sc-iconbox'>";

			if( !empty($fontawesome_icon) ){
				$out .= "<div class='icon'> <a href='{$link}' target='{$target}'> <span class='fa fa-{$fontawesome_icon}'> </span> </a> </div>";
			}elseif( !empty($custom_img_class) || !empty($custom_img_hover) ){
				$out .= "<div class='icon'><span class='{$custom_img_class}'></span> <a href='{$link}' target='{$target}'> <img alt='icon' src='{$custom_img_hover}'> </a> </div>";
			}

		if(trim($type) == 'type6') $out .= "</div>";

		if( !empty($link) ) :
			$out .= empty( $title ) ? $out : "<h4><a href='{$link}' target='{$target}'> {$title} </a></h4>";
		else:
			$out .= empty( $title ) ? $out : "<h4>{$title}</h4>";
		endif;

		if(!empty($subtitle) && trim($type) == 'type2')
			$out .= "<i>{$subtitle}</i>";

		if(!empty($content))
			$out .= $content;
		$out .= "</div>";
		return $out;
	}
	/* Icon Boxes Short code End*/
	
	/* Icon Service Shortcode */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_icon_service($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'title' => '',
				'subtitle' => '',
				'image' => 'http://placehold.it/140',
				'button_text' => __('Know More', 'dt_themes'),
				'link' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$out = '<div class="dt-sc-ico-content type8">';
			$out .= '<div class="icon-wrap">';
				$out .= '<div class="icon">';
					$out .= "<img alt='{$title}' src='{$image}'>";
					$out .= '<div class="icon-overlay">';
						$out .= "<a href='{$link}'><span class='fa fa-link'></span></a>";
					$out .= '</div>';
				$out .= '</div>';
			$out .= '</div>';

			$out .= "<h4>{$title}</h4>";

			if(!empty($subtitle))
				$out .= "<span>{$subtitle}</span>";

			if(!empty($content))
				$out .= $content;

			$out .= "<a class='dt-sc-button small' href='{$link}'><span data-hover='{$button_text}'>{$button_text}</span></a>";
		$out .= '</div>';

		return $out;
	}
	/* Icon Boxes Short code End*/

	/* Icon Boxes Colored Short code */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_icon_box_colored($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'type' => '',
				'fontawesome_icon' => '',
				'custom_icon' => '',
				'title' => '',
				'bgcolor' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$bgcolor = empty ( $bgcolor ) ? "" : " style='background:{$bgcolor};' ";

		$type = ( trim($type) === 'type1' ) ? "no-space" : "space";

		$out =  "<div class='dt-sc-colored-box {$type}' {$bgcolor}>";

		$icon = "";
		if( !empty($fontawesome_icon) ){
			$icon = "<span class='fa fa-{$fontawesome_icon}'> </span>";

		}elseif( !empty($custom_icon) ){
			$icon = "";
		}

		$out .= "<h5>{$icon}{$title}</h5>";
		$out .= $content;
		$out .= "</div>";
		return $out;
	}
	/* Icon Boxes Colored Short code End*/


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_dropcap($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'type' => '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$type = str_replace ( " ", "-", $type );
		$type = "dt-sc-dropcap-".strtolower ( $type );
		
		$bgcolor = ( $type == 'dt-sc-dropcap-default') ? "" : $bgcolor;
		$variation = ( ( $variation ) && ( empty( $bgcolor ) ) ) ? ' ' . $variation : '';
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';border-color:' . $textcolor . ';';;
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = "<span class='dt-sc-dropcap $type {$variation}' {$style}>{$content}</span>";
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_code($attrs, $content = null) {
		$array = array (
				'[' => '&#91;',
				']' => '&#93;',
				'/' => '&#47;',
				'<' => '&#60;',
				'>' => '&#62;',
				'<br />' => '&nbsp;' 
		);
		$content = strtr ( $content, $array );
		$out = "<pre>{$content}</pre>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ol($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'style' => '',
				'variation' => '',
				'class' => '' 
		), $attrs ) );
		
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ol>', "<ol class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		$content = str_replace ( '<li>', '<li><span>', $content );
		$content = str_replace ( '</li>', '</span></li>', $content );
		return $content;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ul($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'style' => '',
				'variation' => '',
				'class' => '' 
		), $attrs ) );
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', "<ul class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		return $content;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => 'type1',
				'space' => 'space'
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );		
		return "<div class='dt-sc-pricing-table {$type} {$space}'>" . $content . '</div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'heading' => __ ( "Heading", 'dt_themes' ),
				'per' => 'month',
				'price' => '',
				"button_link" => "#",
				"button_text" => __ ( "Buy Now", 'dt_themes' ),
				"button_size" => "small",
				"target" => "_blank",
				"class" => ""
		), $attrs ) );
		
		$selected = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'selected' )) ? 'selected' : '';

		$button_link= do_shortcode($button_link);
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '<ol>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '</ol>', '</ul>', $content );
		$price = ! empty ( $price ) ? "<div class='dt-sc-price'> $price <span> / $per</span> </div>" : "";
		
		$out = "<div class='dt-sc-pr-tb-col $selected $class'>";
		$out .= '	<div class="dt-sc-tb-header">';
		$out .= '		<div class="dt-sc-tb-title">';
		$out .= "			<h5>$heading</h5>";
		$out .= '		</div>';
		$out .= $price;
		$out .= '	</div>';
		$out .= $content;
		$out .= '<div class="dt-sc-buy-now">';

		if(preg_match('#^{{#', $button_link) === 1) {
			$button_link =  str_replace ( '{{', '[', $button_link );
			$button_link =  str_replace ( '}}', '/]', $button_link );
			$button_link = do_shortcode($button_link);
		}else{
			$button_link = esc_url ( $button_link );
		}

		$out .= do_shortcode ( "[dt_sc_button size='$button_size' link='$button_link' target='$target']" . $button_text . "[/dt_sc_button]" );
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	function dt_sc_pricing_table_item_two($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'heading' => '',
				'subtitle' => '',
				'ribben' => '',
				'price1' => '',
				'text1' => '',
				'price2' => '',
				'text2' => '',
				'price3' => '',
				'text3' => '',
				'color' => '',
				"button_link" => '',
				"button_text" => __('Enroll Now', 'dt_themes'),
				"button_size" => "medium",
				"button_target" => "_blank",
				"class" => ""
		), $attrs ) );

		$selected = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'selected' )) ? 'selected' : '';

		$out = "<div class='dt-sc-pr-tb-col type3 $color $selected $class'>";
			$out .= '<div class="dt-sc-pr-tb-col-wrapper">';
				$out .= '<div class="dt-sc-tb-header">';
					$out .= '<div class="dt-sc-tb-title">';
						if(!empty($heading))
							$out .= "<h3>{$heading}</h3>";
						if(!empty($subtitle))
							$out .= "<span>{$subtitle}</span>";
						if(!empty($ribben))
							$out .= "<p><span>{$ribben}</span></p>";
					$out .= '</div>';
					if(!empty($price1) && !empty($text1)):
						 $out .= '<div class="dt-sc-one-half column no-space">';
							$out .= '<div class="dt-sc-price">';
								$out .= "<span>{$price1}</span><br>{$text1}";
							$out .= '</div>';
						$out .= '</div>';
					endif;
					if(!empty($price2) && !empty($text2)):
						 $out .= '<div class="dt-sc-one-half column no-space">';
							$out .= '<div class="dt-sc-price last">';
								$out .= "<span>{$price2}</span><br>{$text2}";
							$out .= '</div>';
						$out .= '</div>';
					endif;
					$out .= '<div class="dt-sc-price">';
						$out .= "<span>{$price3}</span><br>{$text3}";
					$out .= '</div>';
				$out .= '</div>';
				$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
				$content = str_replace ( '<ul>', '<ul class="dt-sc-tb-content">', $content );
				$content = str_replace ( '<ol>', '<ul class="dt-sc-tb-content">', $content );
				$content = str_replace ( '</ol>', '</ul>', $content );
				$out .= $content;
			$out .= '</div>';
			$out .= '<div class="dt-sc-buy-now">';
				$out .= "<a href='".esc_url($button_link)."' target='".esc_url($button_target)."' class='dt-sc-button $button_size'><span data-hover='$button_text'>$button_text</span></a>";
			$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	function dt_sc_progressbar($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => 'standard',
				'color' => '',
				'value' => '55'
		), $attrs ) );

		if( $type === 'standard' ){
			$type = "dt-sc-standard";
		}elseif( $type === 'progress-striped' ){
			$type = "dt-sc-progress-striped";
		}elseif( $type === 'progress-striped-active' ){
			$type = "dt-sc-progress-striped active";
		}
		$tcolor = $color;
		$color = ! empty ( $color ) ? "style='background-color:$color;'" : "";

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = $content.' <span style="color:'.$tcolor.';">'.$value.'% </span>';
		$value = "data-value='$value'";

		$out = "<div class='dt-sc-progress $type'>";
			$out .= "<div class='dt-sc-bar' $color $value>";
				$out .= "<div class='dt-sc-bar-text'>{$content}</div>";
			$out .= "</div>";
		$out .= '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tab($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '',
				'icon' => ''
		), $attrs ) );
		
		$icontxt = "";
		if($icon != '') $icontxt = '<span class="fa '.$icon.'"> </span>';
		
		$out = '<li class="tab_head"><a href="#">' . $icontxt . $title . '</a></li><div class="tabs_content">' . DTCoreShortcodesDefination::dtShortcodeHelper ( $content ) . '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	function dt_sc_tabs_horizontal($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'class' => '' 
		), $attrs ) );

		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])?(.?)/s", $content, $matches);

		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}

		$out = '<ul class="dt-sc-tabs-frame">';
			for($i = 0; $i < count($matches[0]); $i++) {

				$icontxt = '';
				if(isset($matches[3][$i]['icon']) != '') $icontxt = '&nbsp;<span class="fa fa-'.$matches[3][$i]['icon'].'"> </span>';
				
				$out .= '<li><a href="#">' . $matches[3][$i]['title'] . $icontxt . '</a></li>';
			}
		$out .= '</ul>';

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-frame-content">' . DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]) . '</div>';
		}		
	return "<div class='dt-sc-tabs-container {$class}'>$out</div>";
	}


	/**
	 *
	 * @param array $attrs
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_vertical($attrs, $content = null) {
		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])/", $content, $matches);
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}
		$out = "<ul class='dt-sc-tabs-vertical-frame'>";
		for($i = 0; $i < count($matches[0]); $i++) {
			
			$icontxt = '';
			if(isset($matches[3][$i]['icon']) != '') $icontxt = '<span class="fa fa-'.$matches[3][$i]['icon'].'"> </span>';
				
			$out .= '<li><a href="#">' . $icontxt . $matches[3][$i]['title'] . '</a></li>';
		}
		$out .= "</ul>";

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-vertical-frame-content">' . DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]) . '</div>';
		}		
		return "<div class='dt-sc-tabs-vertical-container'>$out</div>";		
	}

	/**
	 *
	 * @param array $attrs
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_vertical_right($attrs, $content = null) {
		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])?(.?)/s", $content, $matches);
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}
		$out = "<ul class='dt-sc-tabs-vertical-frame'>";
		for($i = 0; $i < count($matches[0]); $i++) {
			
			$icontxt = '';
			if(isset($matches[3][$i]['icon']) != '') $icontxt = '<span class="fa fa-'.$matches[3][$i]['icon'].'"> </span>';
				
			$out .= '<li><a href="#">' . $icontxt . $matches[3][$i]['title'] . '</a></li>';
		}
		$out .= "</ul>";

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-vertical-frame-content">' . DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]) . '</div>';
		}		
		return "<div class='dt-sc-tabs-vertical-container float-right'>$out</div>";		
	}

	/**
	 *
	 * @param unknown $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_team_one($attrs, $content = null) {
		$attributes = array (
				'name' => '',
				'image' => 'http://placehold.it/130',
				'role' => '',
				'button_text' => __('Ask a Question', 'dt_themes'),
				'button_link' => '',
				'phone_no' => ''
		);

		$sociables = array('fa-dribbble' => 'dribble', 'fa-flickr' => 'flickr', 'fa-github' => 'github', 'fa-pinterest' => 'pinterest','fa-twitter' => 'twitter', 'fa-youtube' => 'youtube', 'fa-android' => 'android', 'fa-dropbox' => 'dropbox', 'fa-instagram' => 'instagram', 'fa-windows' => 'windows', 'fa-apple' => 'apple', 'fa-facebook' => 'facebook', 'fa-google-plus' => 'google', 'fa-linkedin' => 'linkedin', 'fa-skype' => 'skype', 'fa-tumblr' => 'tumblr', 'fa-vimeo-square' => 'vimeo');

		foreach ( $sociables as $sociable ) {
			$attributes [$sociable] = '';
		}

		extract ( shortcode_atts ( $attributes, $attrs ) );

		$out = '<div class="dt-sc-team type1">';
			$out .= '<div class="dt-sc-team-thumb">';
				$out .= '<img alt="'.__('Please specify image url.', 'dt_themes').'" title="'.$name.'" src="'.$image.'">';
			$out .= '</div>';
			$out .= "<h4>{$name}</h4>";
			$out .= "<h6>{$role}</h6>";

			$s = "";
			foreach ( $sociables as $key => $value ) {
				if(array_key_exists($value, $attrs))
					$s .= '<li class="'.$value.'"><a class="fa '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
			}
			$s = ! empty ( $s ) ? "<ul class='dt-sc-social-icons'>$s</ul>" : "";
			$out .= $s;

			$out .= '<div class="clear"></div>';

			if($button_link != "") {
				$out .= '<a class="dt-sc-button small" href="'.$button_link.'"><span data-hover="'.$button_text.'">'.$button_text.'</span></a>';
				$out .= '<div class="seperator"><span>'.__('or', 'dt_themes').'</span></div>';
			}
			$out .= '<p><i class="fa fa-phone"></i> '.$phone_no.'</p>';
		$out .= '</div>';
		return $out;
	}

	function dt_sc_team_two($attrs, $content = null) {
		$attributes = array (
				'fname' => '',
				'lname' => '',
				'image' => 'http://placehold.it/270x400',
				'role' => '',
				'awards' => '',
				'author_known' => '',
				'exp' => ''
		);

		$sociables = array('fa-dribbble' => 'dribble', 'fa-flickr' => 'flickr', 'fa-github' => 'github', 'fa-pinterest' => 'pinterest','fa-twitter' => 'twitter', 'fa-youtube' => 'youtube', 'fa-android' => 'android', 'fa-dropbox' => 'dropbox', 'fa-instagram' => 'instagram', 'fa-windows' => 'windows', 'fa-apple' => 'apple', 'fa-facebook' => 'facebook', 'fa-google-plus' => 'google', 'fa-linkedin' => 'linkedin', 'fa-skype' => 'skype', 'fa-tumblr' => 'tumblr', 'fa-vimeo-square' => 'vimeo');

		foreach ( $sociables as $sociable ) {
			$attributes [$sociable] = '';
		}

		extract ( shortcode_atts ( $attributes, $attrs ) );

		$out = '<div class="dt-sc-team type2">';
			$out .= '<div class="team-thumb">';
				$out .= '<img alt="'.__('Please specify image url.', 'dt_themes').'" title="'.$fname.'" src="'.$image.'">';
				$out .= "<h3><span>{$fname}</span> <br><span>{$lname}</span></h3>";
				$out .= '<div class="team-detail">';
					$out .= "<h4>{$role}</h4>";
					$out .= '<ul>';
						if($awards != "")
							$out .= '<li><span class="fa fa-trophy"></span> <b>'.__('Awards', 'dt_themes').':</b> '.$awards.' </li>';
						if($author_known != "")
							$out .= '<li><span class="fa fa-mortar-board"></span> '.$author_known.' </li>';
						if($exp != "")	
							$out .= '<li><span class="fa fa-certificate"></span> <b>'.__('Experience', 'dt_themes').':</b> '.$exp.' </li>';
					$out .= '</ul>';
				$out .= '</div>';
			$out .= '</div>';

			$s = "";
			foreach ( $sociables as $key => $value ) {
				if(array_key_exists($value, $attrs))
					$s .= '<li class="'.$value.'"><a class="fa '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
			}
			$s = ! empty ( $s ) ? "<ul class='dt-sc-social-icons'>$s</ul>" : "";
			$out .= $s;
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	function dt_sc_testimonial($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'name' => '',
				'role' => '',
				'image' => 'http://placehold.it/300',
				'class' => ''
		), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = ! empty ( $content ) ? '<q> "'.$content.'"</q>' : "";
		$name = ! empty ( $name ) ? " {$name} " : "";
		$role = ! empty ( $role ) ? "<span>{$role}</span>" : "";

		$content = (! empty ( $content ) ) ? '<blockquote>'.$content.'</blockquote>' : "";
		$image = "<img src='{$image}' alt='{$name}' title='{$name}' />";
		$image = "<div class='author'>{$image}</div>";
		$cite = "<cite><a href='javascript:void(0)'>$name</a><span>$role</span></cite>";

		return "<div class='dt-sc-testimonial {$class}'>$content$image$cite</div>";
	}

	/**
	 *
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	function dt_sc_testimonial_carousel($attrs, $content = null) {

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace( '<ul>', "<ul class='dt-sc-testimonial-carousel'>", $content );

		$out = '<div class="dt-sc-testimonial-carousel-wrapper">';
		$out .= $content;
		$out .= '<div class="testimonial-pagination"> </div>';
		$out .= '</div>';
		return $out;
	}

	function dt_sc_title( $attrs,$content = null , $shortcodename = "" ){
		extract ( shortcode_atts ( array (
				'class' => ''
		), $attrs ) );

		$shortcodename = str_replace ( "dt_sc_", "", $shortcodename );
		$out = "<{$shortcodename} class='border-title {$class}'><span>";
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = strip_tags($content);		
		$out .= $content;
		$out .= "</span></{$shortcodename}>";
		return $out;
	}

	function dt_sc_title_with_icon( $attrs,$content = null ){
		extract ( shortcode_atts ( array (
				'title' => '',
				'subtitle' => '',
				'icon'=>''
		), $attrs ) );

		$out = '<div class="main-title-wrapper">';
		$out .= "	<span class='main-title-icon fa {$icon}'> </span>";
		$out .= '	<div class="main-title">';
		$out .= 		!empty( $title ) ? "<h2>{$title}</h2>": "";
		$out .= 		!empty( $subtitle ) ? "<h4>{$subtitle}</h4>": "";
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		
		$out = "<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '<div class="block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle_framed($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		
		$out = '<div class="dt-sc-toggle-frame">';
		$out .= "	<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '	<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '		<div class="block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_titled_box($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '',
				'icon' => '',
				'type'	=> '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$type = (empty($type)) ? 'dt-sc-titled-box' :"dt-sc-$type";
		$variation = ( ( $variation ) && ( empty( $bgcolor ) ) ) ? ' ' . $variation : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$content = strip_tags($content);
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';';
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		
		if($type == 'dt-sc-titled-box') :
			$icon = ( empty($icon) ) ? "" : "<span class='fa {$icon} '></span>";
			$title = "<h6 class='{$type}-title' {$style}> {$icon} {$title}</h6>";
			$out = "<div class='{$type} {$variation}'>";
			$out .= $title;
			$out .=	"<div class='{$type}-content'>{$content}</div>";
			$out .= "</div>";
		else :
			$out = "<div class='{$type}'>{$content}</div>";
		endif;
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tooltip($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type'	=> 'default',
				'tooltip' => '',
				'position' => 'top',
				'href' => '',
				'target' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$class  = "class=' ";
		$class .=  ( $type == "boxed" ) ? "dt-sc-boxed-tooltip" : "";
		$class .= " dt-sc-tooltip-{$position}'";
		
		$href = " href='{$href}' ";
		$title = " title = '{$tooltip}' ";
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';';
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		$style = ( $type == "boxed" ) ? $style : "";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$out = "<a {$href} {$title} {$class} {$style} {$target}>{$content}</a>";
		return $out;
	}

	#Css ToolTip One...
	function dt_sc_tip_one($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'link'	=> '#',
				'text' => __('Tooltip', 'dt_themes'),
				'position' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$out = "<a class='dt-sc-tooltip-one {$position}' href='{$link}'>{$text}<span class='tooltip-content'><span class='tooltip-text'><span class='tooltip-inner'>{$content}</span></span></span></a>";
		return $out;
	}

	#Css ToolTip Two...
	function dt_sc_tip_two($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'link'	=> '#',
				'text' => __('Tooltip', 'dt_themes'),
				'position' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$out = "<span class='dt-sc-tooltip-two {$position}'><span class='tooltip-item'>{$text}</span><span class='tooltip-content'><span class='tooltip-text'>{$content}</span></span></span>";
		return $out;
	}

	#Css ToolTip Three...
	function dt_sc_tip_three($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'link'	=> '#',
				'text' => __('Tooltip', 'dt_themes'),
				'position' => '',
				'image' => 'http://placehold.it/188x155'
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$content = strip_tags($content);
		
		$out = "<span class='dt-sc-tooltip-three tooltip-effect-4 {$position}'>";
			$out .= "<span class='tooltip-item'>{$text}</span>";
			$out .= "<span class='tooltip-content'>";
				$out .= "<img src='{$image}' alt='tip-img' />";
				$out .= '<span class="tooltip-text">';
					$out .= $content;
				$out .= '</span>';
			$out .= '</span>';
		$out .= '</span>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pullquote($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type'	=> 'pullquote1',
				'align' => '',
				'icon' => '',
				'textcolor' => '',
				'cite' => ''
		), $attrs ) );
		
		$class = array();
		if( isset($type) )
			$class[] = " dt-sc-{$type}";
			
		if( trim( $icon ) == 'yes' )
			$class[] = ' quotes';

		if( preg_match( '/left|right|center/', trim( $align ) ) )
			$class[] = ' align' . $align;
			
		$cite = ( $cite ) ? ' <cite>&ndash; ' . $cite .'</cite>' : '' ;
		
		$style = ( $textcolor ) ? ' style="color:' . $textcolor . ';"' : '';
		$class = join( '', array_unique( $class ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<span class='{$class}' {$style}> {$content} {$cite}</span>";
		
		return $out;
	}

	/**
	 * [dt_sc_portfolio_item description]
	 * @param  [type] $attrs         [description]
	 * @param  [type] $content       [description]
	 * @param  string $shortcodename [description]
	 * @return [type]                [description]
	 */
	function dt_sc_portfolio_item( $attrs, $content = null, $shortcodename= "" ){
		extract( shortcode_atts( array( 'id' => ''), $attrs ));
		$out = ""; 
		if( !empty( $id ) ){
			$p = get_post( $id );
			if( $p->post_type === "dt_portfolios" ):
				$permalink = get_permalink($id);
				$portfolio_item_meta = get_post_meta($id,'_portfolio_settings',TRUE);
				$portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();

				$out = "<div id='portfolio-{$id}' class='portfolio gallery'>";
				$out .= '<figure>';
							$popup = "http".dt_theme_ssl()."://placehold.it/1060x795&text=Add%20Image%20/%20Video%20%20to%20Portfolio";
							if( array_key_exists('items_name', $portfolio_item_meta) ) {
								$item =  $portfolio_item_meta['items_name'][0];
								$popup = $portfolio_item_meta['items'][0];
								if( "video" === $item ) {
									$items = array_diff( $portfolio_item_meta['items_name'] , array("video") );
									if( !empty($items) ) {
										$out .= "<img src='".$portfolio_item_meta['items'][key($items)]."' width='1060' height='795' alt='' />";
									} else {
										$out .= '<img src="http'.dt_theme_ssl().'://placehold.it/1060x795&text=Add%20Image%20/%20Video%20%20to%20Portfolio" alt="" width="1060" height="795"/>';
									}	
								} else {
									$out .= "<img src='".$portfolio_item_meta['items'][0]."' width='1060' height='795' alt=''/>";
								}	
							} else{
								$out .= "<img src='{$popup}' alt=''/>";
							}
					$out .= '<figcaption>';
					$out .= '	<div class="fig-title">';
					$out .= "		<h5><a href='{$permalink}'>{$p->post_title}</a></h5>";
								if( array_key_exists("sub-title",$portfolio_item_meta) ):
									$out .= "<h6>{$portfolio_item_meta["sub-title"]}</h6>";
								endif;	
					$out .= '	</div>';
					$out .= ' 	<div class="fig-overlay">';
					$out .= "		<a href='{$popup}' data-gal='prettyPhoto[gallery]'' class='zoom'> <span class='fa fa-plus'> </span> </a>";
					$out .= "		<a href='{$permalink}' class='link'> <span class='fa fa-link'> </span> </a>";
					$out .= '	</div>';
					$out .= '</figcaption>';
				$out .= '</figure>';
				$out .= '</div>';
			else:
				$out .="<p>".__("There is no portfolio item with id :","dt_themes").$id."</p>";
			endif;

		} else {

			$out .="<p>".__("Please give portfolio post id","dt_themes")."</p>";
		}
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_infographic_bar($attrs, $content = null, $shortcodename ="") {
		extract ( shortcode_atts ( array (
				'type' => 'standard',
				'icon' =>'',
				'icon_size'=>'150',
				'color' => '',
				'value' => '55'
		), $attrs ) );

		if( $type === 'standard' ){
			$type = "dt-sc-standard";
		}elseif( $type === 'progress-striped' ){
			$type = "dt-sc-progress-striped";
		}elseif( $type === 'progress-striped-active' ){
			$type = "dt-sc-progress-striped active";
		}
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = '<div class="dt-sc-infographic-bar">';
		
		if( !empty($icon) ){
		$out .= "<i class='fa {$icon}' style='font-size:{$icon_size}px; color:{$color};'> </i>";
		}
		$out .= '	<div class="info">';
		
		$out .= "		<div class='dt-sc-progress $type'>";
		$out .= "		 <div data-value={$value} style='background-color:{$color};' class='dt-sc-bar'></div>";
		$out .= '		</div>';
		
		$out .= "		<div class='dt-sc-bar-percentage'> <span> {$value}%  </span> </div>";
		$out .= "		<div class='dt-sc-bar-text'>$content</div>";
		$out .= '	</div>';
		
		$out .= '</div>';
		
		return $out;
	}

	function dt_sc_fullwidth_section($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'backgroundcolor' => '',
			'backgroundimage' => '',
			'backgroundrepeat' => '',
			'backgroundposition' => '',
			'paddingtop' => '',
			'paddingbottom' => '',
			'textcolor' =>'',
			'opacity' => '',
			'class' =>'',
			'parallax' => 'no'
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$styles = array ();
		$styles[] = !empty( $textcolor ) ? "color:{$textcolor};" : "";
		if( !empty( $opacity ) ) {
			$hex = str_replace ( "#", "", $backgroundcolor );
			if (strlen ( $hex ) == 3) :
				$r = hexdec ( substr ( $hex, 0, 1 ) . substr ( $hex, 0, 1 ) );
				$g = hexdec ( substr ( $hex, 1, 1 ) . substr ( $hex, 1, 1 ) );
				$b = hexdec ( substr ( $hex, 2, 1 ) . substr ( $hex, 2, 1 ) );
			else :
				$r = hexdec ( substr ( $hex, 0, 2 ) );
				$g = hexdec ( substr ( $hex, 2, 2 ) );
				$b = hexdec ( substr ( $hex, 4, 2 ) );
			endif;
			$rgb = array ( $r,$g,$b);
			$styles[] = "background-color:rgba($rgb[0],$rgb[1],$rgb[2],$opacity); ";
		} else {
			$styles[] = !empty( $backgroundcolor ) ? "background-color:{$backgroundcolor};" : "";
		}	

		$styles[] = !empty( $backgroundimage ) ? "background-image:url({$backgroundimage});" : "";
		$styles[] = !empty( $backgroundrepeat ) ? "background-repeat:{$backgroundrepeat};" : "";
		$styles[] = !empty( $backgroundposition ) ? "background-position:{$backgroundposition};" : "";
		$styles[] = !empty( $paddingtop ) ? "padding-top:{$paddingtop}px;" : "";
		$styles[] = !empty( $paddingbottom ) ? "padding-bottom:{$paddingbottom}px;" : "";

		$parallaxclass = "";
		if( $parallax === "yes") {
			$styles[] = "background-attachment:fixed; ";
			$parallaxclass = "dt-sc-parallax-section";
		}

		$styles = array_filter( $styles);
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		$out = 	"<div class='fullwidth-section {$class} {$parallaxclass}' {$style}>";
		$out .=	'	<div class="container">';
		$out .= 	$content;
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	function dt_sc_fullwidth_video( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'mp4' => '',
			'webm'=>'',
			'ogv' => '',
			'poster' => '',
			'backgroundimage' => '',
			'paddingtop' => '',
			'paddingbottom' => '',
			'class' =>''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$styles = array ();
		$styles[] = !empty( $paddingtop ) ? "padding-top:{$paddingtop}px;" : "";
		$styles[] = !empty( $paddingbottom ) ? "padding-bottom:{$paddingbottom}px;" : "";
		$styles = array_filter( $styles);
		$style = join ( '', array_unique ( $styles ) );

		$backgroundimage = !empty( $backgroundimage )  ? "$backgroundimage" : "http".dt_theme_ssl()."://placehold.it/1920x400.jpg&text=DesignThemes";
		$style .= " background:url({$backgroundimage}) left top repeat; ";
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';

		$poster = !empty( $poster )  ? " poster='{$poster}' " : "";

		$mp4 = !empty( $mp4 )  ? "<source src='{$mp4}' type='video/mp4'/>" : "";
		$webm = !empty( $webm )  ? "<source src='{$webm}' type='video/webm'/>" : "";
		$ogv = !empty( $ogv )  ? "<source src='{$ogv}' type='video/ogg'/>" : "";
		

		$out  = "<div class='dt-sc-fullwidth-video-section {$class}' {$style}>";
		$out .= '	<div class="dt-sc-video-container">';
		$out .= "	<div class='dt-sc-mobile-image-container' style='display:none;'></div>";
		$out .= "		<video autoplay loop class='dt-sc-video dt-sc-fillWidth' {$poster}>";
		$out .= 		$mp4.$webm.$ogv;
		$out .= '		</video>';
		$out .= '	</div>';
		$out .= '   <div class="dt-sc-video-content-wrapper">';		
		$out .= "		<div class='container'>{$content}</div>";
		$out .= '	</div>';
		$out .= '</div>';

		return $out;
	}

	function dt_sc_animation( $attrs, $content = null ){
		extract ( shortcode_atts ( array ( 'effect' => '','delay'=>''), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		return "<div class='animate' data-animation='{$effect}' data-delay='{$delay}'>{$content}</div>";
	}

	#Custom Shortcodes...
	#Contact Form...
	function dt_sc_contact_form( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'to_email' => get_bloginfo('admin_email'),
			'success_msg' => __('Thanks for Contacting Us, We will call back to you soon.', 'dt_themes'),
			'error_msg' => __('Sorry your message not sent, Try again Later.', 'dt_themes')
		), $atts));

		$out = $privacy = $attrs = '';
		$out .= '<div id="ajax_contact_msg"> </div>';
		$out .= '<form name="frmcontact" class="wpcf7-form contact-frm" method="post" action="'.get_template_directory_uri().'/framework/sendmail.php">';
			$out .= '<div class="dt-sc-one-half column first">';
				$out .= '<input type="text" name="txtname" placeholder="'.__('Enter name', 'dt_themes').'..." required />';
			$out .= '</div>';
			$out .= '<div class="dt-sc-one-half column">';
				$out .= '<input type="email" name="txtemail" placeholder="'.__('Enter email','dt_themes').'..." required />';
			$out .= '</div>';
			$out .= '<div class="clear"></div>';

			#Contact Form Question
			$gmodule = dt_theme_option("general");
			global $dt_allowed_html_tags;

			if(!array_key_exists("disable-cform-question", $gmodule)):
				$out .= '<div class="selection-box">';
					$out .= '<select name="cmbsubject">';
						$qoptions = array_key_exists("options-for-question", $gmodule) ? wp_kses($gmodule["options-for-question"], $dt_allowed_html_tags) : array();
						$qoptions = array_filter($qoptions);
						$qoptions = array_unique($qoptions);
						$out .= "<option value='".__("Support!", "dt_themes")."'>".__("Ask a Question?", "dt_themes")."</option>";
						foreach ( $qoptions as $qoption ) {
							$selected = "";
							$out .= "<option value='{$qoption}' {$selected} >{$qoption}</option>";
						}
					$out .= '</select>';
				$out .= '</div>';
			endif;

			$out .= '<textarea name="txtmessage" placeholder="'.__('Type your queries', 'dt_themes').'..." required></textarea>';

			$temp = $ctemp = rand(999, 9999);
			$temp = str_split($temp, 1);

			$out .= '<div class="dt-sc-one-half column first">';
				$out .= '<input type="text" name="txtcap" placeholder="'.__('Enter captcha', 'dt_themes').'..." required /><input type="hidden" id="txthidcap" value="'.$ctemp.'" readonly>';
			$out .= '</div>';
			$out .= '<div class="dt-sc-one-half column">';
				$out .= '<span class="dt-sc-captcha">'.$temp[0].'<sup>'.$temp[1].'</sup>'.$temp[2].'<sub>'.$temp[3].'</sub></span>';
			$out .= '</div>';

			$check = apply_filters('dt_sc_contact_form_elements', $privacy, $attrs ); 
		        
		    $out .= '<p>'. $check .'</p>';

			$out .= '<input type="submit" name="submit" value="'.__('Submit Query', 'dt_themes').'" />';
			$out .= '</div>';
			$out .= '<input type="hidden" name="hidadminemail" value="'.$to_email.'" />';
			$out .= '<input type="hidden" name="hidsuccess" value="'.$success_msg.'" />';
			$out .= '<input type="hidden" name="hiderror" value="'.$error_msg.'" />';
		$out .= '</form>';

		return $out;
	}

	#BLOG LIST...
	function dt_sc_blog_posts( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'excerpt_length' => 25,
			'show_meta' => 'true',
			'limit' => -1,
			'categories' => '',
			'posts_column' => 'one-third-column',		// one-column, one-half-column, one-third-column
		), $atts));

		global $post;

		$meta_set = get_post_meta(get_queried_object_id(), '_tpl_default_settings', true);
		$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : 'content-full-width';
		$post_layout = $posts_column;

		$article_class = "";
		$feature_image = "blog-onecol";
		$column = ""; $out = "";

		#Post layout check...
		switch($post_layout) {
			case "one-column":
				$article_class = "column dt-sc-one-column"; $feature_image = "blog-onecol"; break;

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

		//POST VALUES....
		if($categories == "") $categories = 0;
	
		$args = array('post_type' => 'post', 'posts_per_page' => $limit, 'cat' => $categories, 'ignore_sticky_posts' => 1);
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()): $i = 1;
		 $out .= '<div class="blog-entry-posts">';
		 while($the_query->have_posts()): $the_query->the_post();

			$temp_class = "";

			if($i == 1) $temp_class = $article_class." first"; else $temp_class = $article_class;
			if($i == $column) $i = 1; else $i = $i + 1;

			$out .= '<div class="'.$temp_class.'">';
				$out .= '<article id="post-'.get_the_ID().'" class="'.implode(" ", get_post_class("blog-entry", $post->ID)).'">';
					$out .= '<div class="blog-entry-inner">';

						$out .= '<div class="entry-title">';
							$out .= '<h4><a href="'.get_permalink().'">'.get_the_title().'</a></h4>';
							if($show_meta != "false"):
								$out .= '<div class="entry-metadata">';
									$out .= '<p class="tags">';
										$categories = get_the_category();
										$thiscats = "";
										if($categories) {
										foreach($categories as $category) {
											$thiscats .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s",'dt_themes' ), $category->name ) ) . '">'.$category->cat_name.'</a> / '; }
											$thiscats = substr($thiscats,0, (strlen($thiscats)-2));
											$out .= $thiscats;
										}
									$out .= '</p>';
								$out .= '</div>';
							endif;
						$out .= '</div>';

						$out .= '<div class="entry-thumb">';
							$format = get_post_format();
							$pholder = dt_theme_option('general', 'enable-placeholder-images');

							#Switching the format...
							switch($format):
								case "image":
								  if( has_post_thumbnail() ):
									  $out .= '<a href="'.get_permalink().'" title="'.get_the_title().'">';
										  $attr = array('title' => get_the_title()); $out .= get_the_post_thumbnail(get_the_ID(), $feature_image, $attr);
										  $out .= '<div class="blog-overlay"><span class="image-overlay-inside"></span></div>';
									  $out .= '</a>';
								  elseif($pholder == "true"):
									  $out .= '<a href="'.get_permalink().'" title="'.get_the_title().'">';
										  $out .= '<img src="http'.dt_theme_ssl().'://placehold.it/1168x600&text='.get_the_title().'" width="1168" height="600" alt="'.get_the_title().'" />';
										  $out .= '<div class="blog-overlay"><span class="image-overlay-inside"></span></div>';
									  $out .= '</a>';
								  endif;
								break;

								case "gallery":
								  $post_meta = get_post_meta(get_the_id() ,'_dt_post_settings', true);
								  $post_meta = is_array($post_meta) ? $post_meta : array();
								  if( array_key_exists("items", $post_meta) ):
									  $out .= "<ul class='entry-gallery-post-slider'>";
									  foreach ( $post_meta['items'] as $item ) { $out .= "<li><img src='{$item}' alt='gal-img' /></li>";	}
									  $out .= "</ul>";
									  $out .= '<div class="blog-overlay"><span class="image-overlay-inside"></span></div>';
								  endif;
								break;
  
								case "video":
								  $post_meta =  get_post_meta(get_the_id() ,'_dt_post_settings', true);
								  $post_meta = is_array($post_meta) ? $post_meta : array();
								  if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ):
									  if( array_key_exists('oembed-url', $post_meta) ):
										  $out .= "<div class='dt-video-wrap'>".wp_oembed_get($post_meta['oembed-url']).'</div>';
									  elseif( array_key_exists('self-hosted-url', $post_meta) ):
										  $out .= "<div class='dt-video-wrap'>".wp_video_shortcode( array('src' => $post_meta['self-hosted-url']) ).'</div>';
									  endif;
								  endif;
								break;
  
								case "audio":
								  $post_meta =  get_post_meta(get_the_id() ,'_dt_post_settings', true);
								  $post_meta = is_array($post_meta) ? $post_meta : array();
								  if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ):
									  if( array_key_exists('oembed-url', $post_meta) ):
										  $out .= wp_oembed_get($post_meta['oembed-url']);
									  elseif( array_key_exists('self-hosted-url', $post_meta) ):
										  $out .= wp_audio_shortcode( array('src' => $post_meta['self-hosted-url']) );
									  endif;
								  endif;
								break;

								default:
								  if( has_post_thumbnail() ):
									  $out .= '<a href="'.get_permalink().'" title="'.get_the_title().'">';
										  $attr = array('title' => get_the_title()); $out .= get_the_post_thumbnail(get_the_ID(), $feature_image, $attr);
										  $out .= '<div class="blog-overlay"><span class="image-overlay-inside"></span></div>';
									  $out .= '</a>';
								  elseif($pholder == "true"):
									  $out .= '<a href="'.get_permalink().'" title="'.get_the_title().'">';
										  $out .= '<img src="http'.dt_theme_ssl().'://placehold.it/1168x600&text='.get_the_title().'" width="1168" height="600" alt="'.get_the_title().'" />';
										  $out .= '<div class="blog-overlay"><span class="image-overlay-inside"></span></div>';
									  $out .= '</a>';
								  endif;
								break;
							endswitch;

							if($show_meta != "false"):
								$out .= '<div class="entry-meta">';
									$out .= '<div class="date">';
										$out .= '<span>'.get_the_date('d').'</span> ';
										$out .= get_the_date('M').' <br />'.get_the_date('Y');
									$out .= '</div>';
								$out .= '</div>';
							endif;

						$out .= '</div>';

						$out .= '<div class="entry-body">';
							#Sticky...
							if(is_sticky()):
                              $out .= '<div class="featured-post"><span>'.__('Featured','dt_themes').'</span></div>';
							  $out .= '<div class="dt-sc-clear"></div>';
                          	endif;

							if($excerpt_length != "" || $excerpt_length != 0) $out .= dt_theme_excerpt($excerpt_length);
							$out .= '<a href="'.get_permalink().'">'.__('Read More', 'dt_themes').' <i class="fa fa-angle-double-right"></i></a>';
						$out .= '</div>';

					$out .= '</div>';
				$out .= '</article>';
			$out .= '</div>';

		 endwhile;
		$out .= '</div>';
		else:
			$out .= '<h2>'.__('Nothing Found.', 'dt_themes').'</h2>';
			$out .= '<p>'.__('Apologies, but no results were found for the requested archive.', 'dt_themes').'</p>';
		endif;
		
		wp_reset_postdata();
		
		return $out;
	}

	#WORKOUT ITEMS...
	function dt_sc_workout_items( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'excerpt_length' => '',
			'show_meta' => '',
			'limit' => -1,
			'categories' => '',
			'posts_column' => 'one-third-column',		// one-half-column, one-third-column
		), $atts));

		global $post;

		$meta_set = get_post_meta(get_queried_object_id(), '_tpl_default_settings', true);
		$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : 'content-full-width';
		$post_layout = $posts_column;

		$article_class = "";
		$feature_image = "blog-twocol";
		$column = ""; $out = "";

		#Post layout check...
		switch($post_layout) {
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

		#Selected categories...
		if(empty($categories)) {
			$cats = get_categories('taxonomy=workout_entries&hide_empty=1');
			$cats = get_terms( array('workout_entries'), array('fields' => 'ids'));
		} else {
			$cats = explode(',', $categories);
		}

		if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
		elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
		else { $paged = 1; }

		$args = array('post_type' => 'dt_workouts', 'paged' => $paged , 'posts_per_page' => $limit,
																					   'tax_query' => array( 
																							array( 
																									'taxonomy' => 'workout_entries', 
																									'field' => 'id', 
																									'terms' => $cats
																							)));
		$the_query = new WP_Query($args);

		if($the_query->have_posts()): $i = 1;
		 $out .= '<div class="tpl-blog-holder apply-isotope">';
		 while($the_query->have_posts()): $the_query->the_post();

			$temp_class = "";

			if($i == 1) $temp_class = $article_class." first"; else $temp_class = $article_class;
			if($i == $column) $i = 1; else $i = $i + 1;

			$wmeta = get_post_meta(get_the_ID(), '_workout_settings', true);
			$out .= '<div class="'.$temp_class.'">';
				$out .= '<article id="post-'.get_the_ID().'" class="'.implode(" ", get_post_class("workout-entry", $post->ID)).'">';
				
					$out .= '<div class="dt-excersises type2">';
						$out .= '<div class="dt-excersise-thumb">';
							$item = isset( $wmeta['feature_video'] ) ? $wmeta['feature_video'] : '';
							if(!empty($item)):
								#For vimeo...
								if (strpos($item, "vimeo")) :
									$url = substr( strrchr($item, "/"),1);
									$out .= "<iframe src='https://player.vimeo.com/video/{$url}' width='100%' height='250' frameborder='0'></iframe>";
	
								#For youtube...
								elseif(strpos($item, "?v=")):
									$url = substr( strrchr($item, "="),1);
									$out .= "<iframe src='https://www.youtube.com/embed/{$url}?wmode=opaque' width='100%' height='250' frameborder='0'></iframe>";
								endif;
							else:
								if(has_post_thumbnail()):
									$attr = array('title' => get_the_title(), 'alt' => get_the_title());
									$out .= get_the_post_thumbnail($post->ID, $feature_image, $attr);
								else:
									$out .= '<img src="http'.dt_theme_ssl().'://placehold.it/1170X800.jpg&text='.get_the_title().'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
								endif;
							endif;
						$out .= '</div>';
						$out .= '<div class="dt-excersise-detail">';
							$out .= '<div class="dt-excersise-title">';
								if(!empty($wmeta['nosteps'])):
									$out .= '<p class="count">';
										$out .= '<a href="javascript:void(0)">'.$wmeta['nosteps'].' <br><span>'.__('Steps', 'dt_themes').'</span></a>';
									$out .= '</p>';
								endif;	
								$out .= '<h5><a href="'.get_permalink().'">'.get_the_title().'</a></h5>';
							$out .= '</div>';
							$out .= '<div class="dt-excersise-content">';
								if($excerpt_length != "" || $excerpt_length != 0) $out .= dt_theme_excerpt($excerpt_length);
								if($show_meta != 'false'):
									if(!empty($wmeta['muscle_group']))
										$out .= '<h6>'.__('Muscle Group:', 'dt_themes').'</h6><p class="dt-excersise-meta">'.$wmeta['muscle_group'].'</p>';

									$out .= '<h6>'.__('Categories:', 'dt_themes').'</h6>';
									$out .= '<p class="dt-excersise-meta">'.get_the_term_list(get_the_ID(), 'workout_entries', ' ', ', ', ' ').'</p>';

									if(!empty($wmeta['equipment']))
										$out .= '<h6>'.__('Equipment:', 'dt_themes').'</h6><p class="dt-excersise-meta">'.$wmeta['equipment'].'</p>';
								endif;
								$out .= '<a href="'.get_permalink().'" class="dt-sc-button small"><span data-hover="'.__('View Exercise', 'dt_themes').'">'.__('View Exercise', 'dt_themes').'</span></a>';
							$out .= '</div>';
						$out .= '</div>';
					$out .= '</div>';
				$out .= '</article>';
			$out .= '</div>';

		 endwhile;
		$out .= '</div>';
		if($the_query->max_num_pages > 1):
		  $out .= '<div class="pagination">';
			  if(function_exists("dt_theme_pagination")) $out .= dt_theme_pagination("", $the_query->max_num_pages, $the_query);
		  $out .= '</div>';
		endif;
		wp_reset_postdata();
		else:
			$out .= '<h2>'.__('Nothing Found.', 'dt_themes').'</h2>';
			$out .= '<p>'.__('Apologies, but no results were found for the requested archive.', 'dt_themes').'</p>';
		endif;
		
		return $out;
	}

	#WORKOUTS LIST...
	function dt_sc_workouts_list( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'excerpt_length' => 25,
			'limit' => -1,
			'categories' => '',
			'posts_column' => 'one-third-column',		// one-half-column, one-third-column, one-fourth-column
		), $atts));

		global $post;

		$meta_set = get_post_meta(get_queried_object_id(), '_tpl_default_settings', true);
		$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : 'content-full-width';
		$post_layout = $posts_column;

		$article_class = "";
		$feature_image = "blog-threecol";
		$column = ""; $out = "";

		#Post layout check...
		switch($post_layout) {
			case "one-half-column":
				$article_class = "column dt-sc-one-half"; $feature_image = "blog-twocol"; $column = 2; break;

			case "one-third-column":
				$article_class = "column dt-sc-one-third"; $feature_image = "blog-threecol"; $column = 3; break;

			case "one-fourth-column":
				$article_class = "column dt-sc-one-fourth"; $feature_image = "gallery-fourcol"; $column = 4; break;
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

		#Selected categories...
		if(empty($categories)) {
			$cats = get_categories('taxonomy=workout_entries&hide_empty=1');
			$cats = get_terms( array('workout_entries'), array('fields' => 'ids'));
		} else {
			$cats = explode(',', $categories);
		}

		if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
		elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
		else { $paged = 1; }

		$args = array('post_type' => 'dt_workouts', 'paged' => $paged , 'posts_per_page' => $limit,
																					   'tax_query' => array( 
																							array( 
																									'taxonomy' => 'workout_entries', 
																									'field' => 'id', 
																									'terms' => $cats
																							)));
		$the_query = new WP_Query($args);

		if($the_query->have_posts()): $i = 1;
		 while($the_query->have_posts()): $the_query->the_post();

			$temp_class = "";

			if($i == 1) $temp_class = $article_class." first"; else $temp_class = $article_class;
			if($i == $column) $i = 1; else $i = $i + 1;

			$wmeta = get_post_meta(get_the_ID(), '_workout_settings', true);
			$out .= '<div class="'.$temp_class.'">';
				$out .= '<article id="post-'.get_the_ID().'" class="'.implode(" ", get_post_class("workout-entry", $post->ID)).'">';
				
					$out .= '<div class="dt-excersises type1">';
						$out .= '<div class="dt-excersise-thumb">';
							$out .= '<a href="'.get_permalink().'" title="'.get_the_title().'">';
								if(has_post_thumbnail()):
									$attr = array('title' => get_the_title(), 'alt' => get_the_title());
									$out .= get_the_post_thumbnail($post->ID, $feature_image, $attr);
								else:
									$out .= '<img src="http'.dt_theme_ssl().'://placehold.it/1170X800.jpg&text='.get_the_title().'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
								endif;
							$out .= '</a>';
						$out .= '</div>';
						$out .= '<div class="dt-excersise-detail">';
							$out .= '<div class="dt-excersise-detail-title">';
								$out .= '<h5><a href="'.get_permalink().'">'.get_the_title().'</a></h5>';
								$out .= '<div class="dt-excersise-meta">';
									if(!empty($wmeta['nosteps'])):
										$out .= '<p class="count">';
											$out .= '<a href="javascript:void(0)">'.$wmeta['nosteps'].' <br><span>'.__('Steps', 'dt_themes').'</span></a>';
										$out .= '</p>';
									endif;
									if(!empty($wmeta['muscle_group']))
										$out .= '<h6>'.__('Muscle Group:', 'dt_themes').'</h6><p>'.$wmeta['muscle_group'].'</p>';
								$out .= '</div>';
							$out .= '</div>';

							$out .= '<div class="dt-excersise-detail-cnt">';
								$excerpt_length = !empty($excerpt_length) ? $excerpt_length : 25;
								$out .= dt_theme_excerpt($excerpt_length);
							$out .= '</div>';
						$out .= '</div>';
					$out .= '</div>';
				$out .= '</article>';
			$out .= '</div>';

		 endwhile;
		wp_reset_postdata();
		else:
			$out .= '<h2>'.__('Nothing Found.', 'dt_themes').'</h2>';
			$out .= '<p>'.__('Apologies, but no results were found for the requested archive.', 'dt_themes').'</p>';
		endif;
		
		return $out;
	}

	#WORKOUT PLAN...
	function dt_sc_workout_plan( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'step_no' => 1,
			'step_sup' => 'st',
			'step_name' => __('Step', 'dt_themes'),
			'title' => '',
			'link' => 'javascript:void(0)'
		), $atts));

		$out = "";

		$out .= '<div class="dt-excersise-title title">';
			$out .= '<p class="count">';
				$out .= "<a href='{$link}'>{$step_no}<sup>{$step_sup}</sup> <br><span>{$step_name}</span></a>";
			$out .= '</p>';
			$out .= "<h5><a href='{$link}'>{$title}</a></h5>";
		$out .= '</div>';

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= $content;
		$out .= '<div class="dt-sc-hr-invisible-small"></div>';

		return $out;
	}

	#RECENT POST...
	function dt_sc_recent_posts( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'excerpt_length' => 25,
			'limit' => -1
		), $atts));

		global $post;
		$out = "";

		$args = array('post_type' => 'post', 'posts_per_page' => $limit, 'ignore_sticky_posts' => 1);
		$the_query = new WP_Query($args);

		if($the_query->have_posts()):
		 while($the_query->have_posts()): $the_query->the_post();

		  $out .= '<div class="blog-post">';
			  $out .= '<div class="blog-post-inner">';
				  $out .= '<div class="blog-thumb">';
					  $out .= '<a href="'.get_permalink().'" title="'.get_the_title().'">';
						$attr = array('title' => get_the_title()); $out .= get_the_post_thumbnail(get_the_ID(), array(80, 80), $attr);
					  $out .= '</a>';
				  $out .= '</div>';
				  $out .= '<div class="blog-detail">';
					  $out .= '<h2><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h2>';
					  $out .= dt_theme_excerpt($excerpt_length);
				  $out .= '</div>';
			  $out .= '</div>';
			  $out .= '<ul class="blog-post-meta">';
				  $commtext = "";
				  if((wp_count_comments($post->ID)->approved) == 0)	$commtext = '0';
				  else $commtext = wp_count_comments($post->ID)->approved;
				  $out .= '<li class="comments"><a href="'.get_permalink().'/#comments"><span class="fa fa-comment"></span>'.$commtext.'</a></li>';
				  $out .= '<li><span class="fa fa-calendar"></span>'.get_the_date('d').'&nbsp;'.get_the_date('M').'&nbsp;'.get_the_date('Y').'</li>';

				  $categories = get_the_category();
				  $separator = ' ';
				  $output = '';
				  if($categories){
					foreach($categories as $category) {
					  $output .= '<a href="'.get_category_link( $category->term_id ).'" title="'.esc_attr( sprintf( __( "View all posts in %s", 'dt_themes' ), $category->name)).'">'.$category->cat_name.'</a>'.$separator;
				    }
					$out .= '<li class="categories">'.trim($output, $separator).'</li>';
				  }
			  $out .= '</ul>';
		  $out .= '</div>';

		 endwhile;
		else:
			$out .= '<h2>'.__('Nothing Found.', 'dt_themes').'</h2>';
			$out .= '<p>'.__('Apologies, but no results were found for the requested archive.', 'dt_themes').'</p>';
		endif;
		
		wp_reset_postdata();

		return $out;
	}

	#SUBSCRIPTION SHORTCODE...
	function dt_sc_subscribe_form( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title' => '',
			'notify' => '',
			'list_id' => ''
		), $atts));

		$out = $privacy = $attrs = '';

		$out .= '<div class="dt-sc-subscribe-wrapper">';
			$out .= '<div class="dt-sc-subscribe-container">';
			if($title != "")
				$out .= '<h2>'.$title.'</h2>';

			$mcapi = dt_theme_option('general','mailchimp-key');

			$out .= '<form class="dt-sc-subscribe-frm" name="frmsubscribe" method="post">';
				$out .= '<input type="text" placeholder="'.__('Enter Name', 'dt_themes').'" name="dt_mc_fname" id="dt_mc_fname">';
				$out .= '<input type="email" placeholder="'.__('Enter Email', 'dt_themes').'" name="dt_mc_emailid" id="dt_mc_emailid" required>';
				$out .= "<input type='hidden' name='dt_mc_apikey' id='dt_mc_apikey' value='$mcapi' />";
				$out .= "<input type='hidden' name='dt_mc_listid' id='dt_mc_listid' value='$list_id' />";
				$out .= '<input type="submit" name="submit" class="dt-sc-button small" value="'.__('Subscribe', 'dt_themes').'" />';
				$check = apply_filters('dt_sc_mailchimp_form_elements', $privacy, $attrs ); 
		        
		        $out .= '<p>'. $check .'</p>';
			$out .= '</form>';

			$out .= '<div id="ajax_newsletter_msg"></div>';

			$out .= '<div class="dt-sc-clear"></div>';

			if($notify != "")
				$out .= '<a href="javascript:void(0)"><i class="fa fa-arrow-circle-o-right"> '.$notify.'</i></a>';

			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}

	#WORKING HOURS...
	function dt_sc_working_hours( $attrs, $content = null ){
		extract ( shortcode_atts ( array ( 'text' => ''), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$text = !empty( $text ) ? "<p>{$text}</p>" : "";
		return "<div class='working-hours'><ul>{$content}</ul>{$text}</div>";
	}

	function dt_sc_work_hour( $attrs, $content = null ){
		extract ( shortcode_atts ( array ( 'day' => '','time'=>''), $attrs ) );
		return "<li>{$day}<span>{$time}</span></li>";
	}

	function dt_sc_running_number( $attrs, $content = null ){
		extract(shortcode_atts(array(
			'value' => '3400',
			'title' => ''
		), $attrs));
		
		$out = "";
		
		$out .= '<div class="dt-sc-animate-num">';
			$out .= '<div class="dt-sc-num-count">';
				$out .= "<p data-value='{$value}'>{$value}</p>";
			$out .= '</div>';
			$out .= "<h4>{$title}</h4>";
		$out .= '</div>';
		
		return $out;
	}

	#UPCOMING EVENTS...
	function dt_sc_upcoming_events( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'excerpt_length' => '',
			'limit' => -1
		), $atts));

		global $post; $out = "";

		if(dt_theme_is_plugin_active('the-events-calendar/the-events-calendar.php')):
			$events = tribe_get_events( array( 'eventDisplay' => 'list', 'posts_per_page' => $limit ));
			foreach($events as $post):
				setup_postdata($post);
	
				$out .= '<div class="dt-sc-event-new">';
					$out .= '<div class="dt-sc-event-thumb">';
						$attr = array('title' => $post->post_title); $out .= get_the_post_thumbnail($post->ID, 'blog-threecol', $attr);
						$cost = get_post_meta($post->ID, '_EventCost', true);
						if(!empty($cost)) {
							$sym = get_post_meta($post->ID, '_EventCurrencySymbol', true);
							$out .= '<span class="dt-sc-event-price"> '.$sym.$cost.' </span>';
						}
					$out .= '</div>';
					$out .= '<div class="dt-sc-event-detail">';
						$out .= '<div class="dt-sc-event-title">';
							$out .= '<p class="count">';
								$out .= '<a href="'.get_permalink($post->ID).'">'.tribe_get_start_date($post->ID, false, 'd').'<br><span>'.tribe_get_start_date($post->ID, false, 'M').'</span></a>';
							$out .= '</p>';
							$out .= '<h4><a href="'.get_permalink($post->ID).'">'.get_the_title().'</a></h4>';
						$out .= '</div>';
	  
						if($excerpt_length != ''):
							$out .= dt_theme_excerpt($excerpt_length);
						endif;
	
						$out .= dt_theme_event_venue_details($post->ID);
					$out .= '</div>';
				$out .= '</div>';
			endforeach;
		endif;
		wp_reset_query();

		return $out;
	}

	#TIME TABLE EVENTS...
	function dt_sc_timetable_events( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'type' => '',
			'excerpt_length' => '22',
			'limit' => -1,
			'categories' => '',
			'posts_column' => 'one-third-column'		// one-half-column, one-third-column, one-fourth-column
		), $atts));

		global $post;

		$meta_set = get_post_meta(get_queried_object_id(), '_tpl_default_settings', true);
		$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : 'content-full-width';
		$post_layout = $posts_column;

		$feature_image = "blog-threecol";
		$column = ""; $out = "";

		#Post layout check...
		switch($post_layout) {
			case "one-half-column":
				$article_class = "column dt-sc-one-half"; $feature_image = "blog-twocol"; $column = 2; break;

			case "one-third-column":
				$article_class = "column dt-sc-one-third"; $feature_image = "blog-threecol"; $column = 3; break;

			case "one-fourth-column":
				$article_class = "column dt-sc-one-fourth"; $feature_image = "gallery-fourcol"; $column = 4; break;
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

		#Selected categories...
		if(empty($categories)) {
			$cats = get_categories('taxonomy=events_category&hide_empty=1');
			$cats = get_terms( array('events_category'), array('fields' => 'ids'));
		} else {
			$cats = explode(',', $categories);
		}

		$args = array('post_type' => 'events', 'posts_per_page' => $limit,
												   'tax_query' => array(
														array(
																'taxonomy' => 'events_category',
																'field' => 'id',
																'terms' => $cats
														)));
		$the_query = new WP_Query($args);
		if($the_query->have_posts()): $i = 1;
		 while($the_query->have_posts()): $the_query->the_post();

			$temp_class = "";

			if($i == 1) $temp_class = $article_class." first"; else $temp_class = $article_class;
			if($i == $column) $i = 1; else $i = $i + 1;

			$out .= '<div class="'.$temp_class.'">';
				$out .= '<div class="dt-sc-event '.$type.'">';

					$out .= '<div class="event-thumb">';
						if( has_post_thumbnail() ):
							$out .= '<a href="'.get_permalink().'" title="'.get_the_title().'">';
								$attr = array('title' => get_the_title()); $out .= get_the_post_thumbnail(get_the_ID(), $feature_image, $attr);
							$out .= '</a>';
						endif;
					$out .= '</div>';
					$out .= '<div class="event-detail">';
						$out .= '<h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
						if($excerpt_length != "" || $excerpt_length != 0) $out .= dt_theme_excerpt($excerpt_length);
						$out .= '<a class="dt-sc-button small" href="'.get_permalink().'"><span data-hover="'.__('Know More', 'dt_themes').'">'.__('Know More', 'dt_themes').'</span></a>';
					$out .= '</div>';

				$out .= '</div>';
			$out .= '</div>';

		 endwhile;
		 wp_reset_postdata();
		endif;

		return $out;
	}

	#GALLERY ITEMS...
	function dt_sc_gallery_items( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'limit' => -1,
			'categories' => '',
			'posts_column' => 'one-half-column', // one-third-column, one-fourth-column
			'filter' => '',
			'fullwidth' => ''
		), $atts));

		global $post;
		$meta_set = get_post_meta(get_queried_object_id(), '_tpl_default_settings', true);
		$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : 'content-full-width';
		$post_layout = $posts_column;

		$li_class = ""; $feature_image = "";
		$nospace = ""; $out = "";

		#Post layout check...
		switch($post_layout) {
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

		if($fullwidth == "true" || basename(get_page_template()) == 'tpl-fullwidth.php') { $feature_image = "full"; $nospace = "no-space"; }

		if(empty($categories)) {
			$cats = get_categories('taxonomy=gallery_entries&hide_empty=1');
			$cats = get_terms( array('gallery_entries'), array('fields' => 'ids'));		
		} else {
			$cats = explode(',', $categories);
		}

		if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
		elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
		else { $paged = 1; }

		#Performing query...
		$args = array('post_type' => 'dt_galleries', 'paged' => $paged , 'posts_per_page' => $limit,
																					   'tax_query' => array( 
																							array( 
																									'taxonomy' => 'gallery_entries', 
																									'field' => 'id', 
																									'terms' => $cats
																							)));
		$the_query = new WP_Query($args);
		if($the_query->have_posts()): 

		 if($filter != "false"):
			 $out .= '<div class="dt-sc-sorting-container">';
				$out .= '<a data-filter="*" href="#" class="first active-sort">'.__("All", "dt_themes").'</a>';
					foreach($cats as $term) {
						$myterm = get_term_by('id', $term, 'gallery_entries');
						$out .= '<a href="#" data-filter=".'.strtolower($myterm->slug).'">'.$myterm->name.'</a>';
					}
			 $out .= '</div>';
		 endif;

		 $out .= '<div class="dt-sc-portfolio-container">';
			while($the_query->have_posts()): $the_query->the_post(); 
				$terms = wp_get_post_terms(get_the_ID(), 'gallery_entries', array("fields" => "slugs")); array_walk($terms, "arr_strfun");

				$out .= '<div class="'.$li_class." ".strtolower(implode(" ", $terms))." ".$nospace.'">';
				  $out .= '<div class="portfolio-thumb">';
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
						$out .= get_the_post_thumbnail($post->ID, $feature_image, $attr);
					else:
						$out .= '<img src="http'.dt_theme_ssl().'://placehold.it/1170X800.jpg&text='.get_the_title().'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
					endif;

					$out .= '<div class="image-overlay">';
					  $out .= '<div class="fig-content-wrapper">';
						$out .= '<div class="fig-overlay">';
							$out .= '<p>';
								$out .= '<a class="zoom" title="'.get_the_title().'" data-gal="prettyPhoto[gallery]" href="'.$currenturl.'"><span class="fa '.$currenticon.'"> </span></a>';
								$out .= '<a class="link" href="'.get_permalink().'"> <span class="fa fa-link"> </span> </a>';
							$out .= '</p>';
						$out .= '</div>';
					  $out .= '</div>';
					$out .= '</div>';
				  $out .= '</div>';

				  $out .= '<div class="portfolio-detail">';
					  $out .= '<div class="portfolio-title">';
						  $out .= '<h4><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h4>';
						  $out .= '<p>'.get_the_term_list($post->ID, 'gallery_entries', ' ', ', ', ' ').'</p>';
					  $out .= '</div>';
					  if(dt_theme_is_plugin_active('roses-like-this/likethis.php')):
						  $out .= '<div class="views">';
							  $out .= '<span><i class="fa fa-heart-o"></i><br>';
							  	$out .= generateLikeString($post->ID, '');
							  $out .= '</span>';
						  $out .= '</div>';
					  endif;
				  $out .= '</div>';
				$out .= '</div>';
			endwhile;
		 $out .= '</div>';

		 else:
			$out .= '<h2>'.__("Nothing Found.", "dt_themes").'</h2>';
			$out .= '<p>'.__("Apologies, but no results were found for the requested archive.", "dt_themes").'</p>';
		endif;

		wp_reset_postdata($the_query);

		return $out;
	}
	
	#GALLERY ITEM...
	function dt_sc_gallery_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'id' => ''
		), $atts));

		$out = "";
		if(!empty($id)):
			$meta_set = get_post_meta($id, '_gallery_settings', true);

			$out .= '<div class="portfolio-single-slider-wrapper">';
				#Gallery slider...
				if(isset($meta_set['items']) != ""):
					$out .= "<ul class='portfolio-single-slider'>";
						foreach ( $meta_set['items'] as $key => $item ):
							$out .= "<li>";
								if($meta_set['items_name'][$key] != 'video'):
									$out .= "<img src='".$item."' alt='".$meta_set['items_name'][$key]."'>";
								else:
									#For vimeo...
									if (strpos($item, "vimeo")) :
										$url = substr( strrchr($item, "/"),1);
										$out .= "<iframe src='https://player.vimeo.com/video/{$url}' width='1170' height='700' frameborder='0'></iframe>";

									#For youtube...
									elseif(strpos($item, "?v=")):
										$url = substr( strrchr($item, "="),1);
										$out .= "<iframe src='https://www.youtube.com/embed/{$url}?wmode=opaque' width='1170' height='700' frameborder='0'></iframe>";
									endif;
								endif;
							$out .= "</li>";
						endforeach;
					$out .= "</ul>";

					$out .= "<div id='bx-pager'>"; $i = 0;

						foreach ( $meta_set['items'] as $key => $item ):
								if($meta_set['items_name'][$key] != 'video'):
									$out .= "<a data-slide-index='".$i."' href=''><img src='{$item}' alt='".$meta_set['items_name'][$key]."' /></a>";
								else:
									#For vimeo...
									if (strpos($item, "vimeo")) :
										$url = substr( strrchr($item, "/"),1);
										$url = apply_filters('dt_get_vimeo_thumb', $url);
										$out .= "<a data-slide-index='".$i."' href=''><img src='".$url."' alt='".$meta_set['items_name'][$key]."' /></a>";													
									#For youtube...
									elseif(strpos($item, "?v=")):
										$url = substr( strrchr($item, "="),1);
										$out .= "<a data-slide-index='".$i."' href=''><img src='https://img.youtube.com/vi/{$url}/0.jpg' alt='".$meta_set['items_name'][$key]."' /></a>";
									endif;
								endif;
								$i += 1;
						endforeach;

					$out .= "</div>";
				else:
					$out .= '<p>'.__('There is no gallery images found.', 'dt_themes').'</p>';
				endif;
			$out .= '</div>';
		else:
			$out .= '<p>'.__('Please enter a valid gallery item ID.', 'dt_themes').'</p>';	
		endif;
		return $out;
	}

	#BMI CALC...
	function dt_sc_bmi_calc( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'view_link' => ''
		), $atts));

		$view_link = !empty($view_link) ? $view_link : '#tblbmicontent';
		$out = "";

		$out .= '<form name="frmbmi" action="#" class="dt-sc-bmi-frm">';
			$out .= '<div class="dt-sc-bmi-frm-detail">';
				$out .= '<div class="dt-sc-two-third column first">';
					$out .= '<label>'.__('Height in Ft / in', 'dt_themes').'</label>';
					$out .= '<div class="dt-sc-clear"></div>';
					$out .= '<input type="text" name="txtfeet" placeholder="'.__('FT', 'dt_themes').'">';
					$out .= '<input type="text" name="txtinches" placeholder="'.__('IN', 'dt_themes').'">';
					$out .= '<div class="dt-sc-clear"></div>';
					$out .= '<input type="submit" name="subbmi" value="'.__('Calculate Bmi', 'dt_themes').'">';
				$out .= '</div>';
				$out .= '<div class="dt-sc-one-third column">';
					$out .= '<label>'.__('Weight in lbs', 'dt_themes').'</label>';
					$out .= '<input type="text" name="txtlbs" placeholder="'.__('LBS', 'dt_themes').'">';
					$out .= '<div class="dt-sc-clear"></div>';
					$out .= '<input type="reset" value="'.__('Reset', 'dt_themes').'">';
				$out .= '</div>';
            $out .= '</div>';
			$out .= '<div class="bmi-result">';
				$out .= '<div class="dt-sc-hr-invisible"></div>';
				$out .= '<label>'.__('Your BMI is', 'dt_themes').'</label>';
                $out .= '<div class="dt-sc-clear"></div>';
				$out .= '<input type="text" readonly name="txtbmi" placeholder="0.0">';
				$out .= '<div class="dt-sc-clear"></div>';
				$out .= '<div class="dt-sc-hr-invisible-small"></div>';
				$out .= '<a href="'.$view_link.'" class="fancyInline">'.__('View BMI Class', 'dt_themes').' <i class="fa fa-arrow-circle-right"></i></a>';
				$out .= '<div class="dt-sc-hr-invisible"></div>';
			$out .= '</div>';
		$out .= '</form>';
		
		$out .= '<div id="tblbmicontent" class="tblbmi">
			<div class="dt-inner-content">
				<table>
				  <tbody>
					<tr>
					  <th>'.__('BMI', 'dt_themes').'</th><th>'.__('Classification', 'dt_themes').'</th>
					</tr>
					<tr>
					  <td>&lt; 18.5</td><td>'.__('Underweight', 'dt_themes').'</td>
					</tr>
					<tr>
					  <td>18.5 &ndash; 24.9</td><td>'.__('Normal Weight', 'dt_themes').'</td>
					</tr>
					<tr>
					  <td>25.0 &ndash; 29.9</td><td>'.__('Overweight', 'dt_themes').'</td>
					</tr>
					<tr>
					  <td>30.0 &ndash; 34.9</td><td>'.__('Class I Obesity', 'dt_themes').'</td>
					</tr>
					<tr>
					  <td>35.0 &ndash; 39.9</td><td>'.__('Class II Obesity', 'dt_themes').'</td>
					</tr>
					<tr>
					  <td>&#x2265; 40.0</td><td>&nbsp;&nbsp;'.__('Class III Obesity', 'dt_themes').'&nbsp;&nbsp;</td>
					</tr>
				  </tbody>
				</table>
			</div>
		</div>';
		return $out;
	}

	#MEMBER PACKAGE ITEM...
	function dt_sc_package_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'type' => '',
			'title' => '',
			'subtitle' => '',
			'image' => 'http://placehold.it/370x220',
			'button_text' => __('Enroll Now', 'dt_themes'),
			'button_link' => '#',
			'button_image' => 'http://placehold.it/160x30/869f07/ffffff/&text=Entroll Now',
			'start_price' => '10',
			'start_duration' => 1,
			'start_dwmy' => '',
			'recurring_price' => '',
			'recurring_duration' => '',
			'recurring_dwmy' => ''
		), $atts));

		$out = $tag = $recurring = "";
		global $dt_allowed_html_tags;

		$out .= '<div class="dt-sc-programs">';
			$out .= '<div class="dt-sc-pro-thumb">';
				$out .= "<img src='{$image}' alt='$title' />";
			$out .= '</div>';
			$out .= '<div class="dt-sc-pro-detail">';
				$out .= '<div class="dt-sc-pro-content">';
					$out .= '<div class="dt-sc-pro-title">';
					if($title != "")
						$out .= "<h3>{$title}</h3>";
					if($subtitle != "")	
						$out .= "<span>{$subtitle}</span>";
					$out .= '</div>';

					$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
					$out .= $content;
					
				$out .= '</div>';
				$out .= '<div class="dt-sc-pro-price">';
					$out .= '<p class="pro-price-content">';
						$cs = wp_kses(dt_theme_option('general','currency-symbol'), $dt_allowed_html_tags); 	$cm = dt_theme_option('general','currency-membership');
						$csymbol = !empty($cs) ? $cs : '$';						$currency = !empty($cm) ? $cm : 'USD';
						#For Tags...
						switch($start_dwmy) {
							case 'D':
								$tag = __('Days', 'dt_themes');
								break;
							case 'W':
								$tag = __('Weeks', 'dt_themes');
								break;
							case 'M':
								$tag = __('Months', 'dt_themes');
								break;
							default:
								$tag = __('Years', 'dt_themes');
								break;
						}
						$out .= "<sup>{$csymbol}</sup> {$start_price}/<span>{$start_duration} {$tag}</span>";
					$out .= '</p>';
					#Normal Button...
					if($type != 's2member'):
						$out .= "<a class='dt-sc-button small' href='{$button_link}'><span data-hover='{$button_text}'>{$button_text}</span></a>";
					#S2Member Button...
					else:
						$paypal_des = __('You are about to purchase the Package :', 'dt_themes').$title;
						#Check recurring...
						if(!empty($recurring_price) && !empty($recurring_duration))
							$recurring = "ra='{$recurring_price}' rp='{$recurring_duration}' rt='{$recurring_dwmy}'";
						
						$s2member_button = do_shortcode("[s2Member-PayPal-Button level='1' ccaps='' desc='{$paypal_des}' ps='paypal' lc='' cc='{$currency}' dg='0' ns='1' custom='".$_SERVER["HTTP_HOST"]."' ta='{$start_price}' tp='{$start_duration}' tt='{$start_dwmy}' {$recurring} rr='1' rrt='' rra='1' image='{$button_image}' output='button' /]");
						
						$out .= $s2member_button;
					endif;
				$out .= '</div>';
			$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	function dt_sc_contact_add1( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'link' => '#',
			'title' => '',
			'mid_text' => '',
			'offer_text' => ''			
		), $atts));

		$out = "";
		
		$out .= "<a href='{$link}'>";
			$out .= "<div class='dt-sc-add1'>";
				$out .= "<div class='add-offer'>";
					$out .= "<div class='offer-title'>";
						$out .= "<h3>{$title} <br> {$mid_text} <span>{$offer_text}</span></h3><span>&amp;</span>";
					$out .= "</div>";
					$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
					$content = strip_tags($content);
					$out .= '<p>'.$content.'</p>';
				$out .= "</div>";
				$out .= "<img src='".get_template_directory_uri()."/images/add1.png' alt='add1'/>";
			$out .= "</div>";
		$out .= "</a>";

		return $out;
	}

	function dt_sc_contact_add2( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'image' => 'http://placehold.it/391x220',
			'link' => '#',
			'button_text' => __('Subscribe Now', 'dt_themes')
		), $atts));

		$out = "";
		
		$out .= '<div class="dt-sc-add2">';
			$out .= "<img src='{$image}' alt='add2' />";
			$out .= "<a href='{$link}'><h3><span data-hover='{$button_text}'>{$button_text}</span></h3></a>";
		$out .= '</div>';

		return $out;
	}

	function dt_sc_contact_add3( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'image' => 'http://placehold.it/391x220',
			'link' => '#',
			'button_text' => __('Get Consultation', 'dt_themes')
		), $atts));

		$out = "";
		
		$out .= '<div class="dt-sc-add3">';
			$out .= "<img src='{$image}' alt='add3' />";
			$out .= "<a class='medium dt-sc-button' href='{$link}'><span data-hover='{$button_text}'>{$button_text}</span></a>";
		$out .= '</div>';

		return $out;
	}

	#Page Builder Shortcodes...
	function dt_sc_doshortcode($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'width' => '100',
				'animation' => '',
				'animation_delay' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$danimation = !empty( $animation ) ? " data-animation='{$animation}' ": "";
		$ddelay = ( !empty( $animation ) && !empty( $animation_delay )) ? " data-delay='{$animation_delay}' " : "";
		$danimate = !empty( $animation ) ? "animate": "";

		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';

		$out = '<div class="column '.$danimate.' '.$first.'" style="width:'.$width.'%;" '.$danimation.' '.$ddelay.'>';
		$cont = do_shortcode($content);
		if(isset($cont))
			$out .= $cont;
		else
			$out .= $content;
		$out .= '</div>';
		return $out;
	}

	function dt_sc_resizable($attrs, $content = null) {		
		extract ( shortcode_atts ( array (
				'width' => '',
				'class' => '',
				'animation' => '',
				'animation_delay' => ''
		), $attrs ) );

		$danimation = !empty( $animation ) ? " data-animation='{$animation}' ": "";
		$ddelay = (!empty( $animation ) && !empty( $animation_delay )) ? " data-delay='{$animation_delay}' " : "";
		$danimate = !empty( $animation ) ? "animate": "";

		$style = (!empty( $width ) ) ? ' style="width:'.$width.'%;" ' : "";
	
		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = do_shortcode(DTCoreShortcodesDefination::dtShortcodeHelper ( $content ));
		$out = "<div class='column {$class} {$danimate} {$first}' {$danimation} {$ddelay} {$style}>{$content}</div>";
		return $out;
	}

	function dt_sc_widgets($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'widget_name' => '',
				'widget_wpname' => '',
				'widget_wpid' => ''
		), $attrs ) );
		
		if($widget_name != ''):	
			
			$widget_id = explode('-', $widget_wpid);
			$widget_id = $widget_id[0];
			
			foreach($attrs as $key=>$value):
				$instance[$key] = $value;
			endforeach;
			
			$instance = array_filter($instance);
			
			if(($widget_name == 'TribeEventsAdvancedListWidget' || $widget_name == 'TribeEventsMiniCalendarWidget') && isset($instance['selector'])) {
				$instance['filters'] = '{"tribe_events_cat":["'.$instance['selector'].'"]}';
			}
			
			if($widget_name == 'TribeEventsAdvancedListWidget' && !wp_script_is( 'widget-calendar-pro-style', 'queue' ) && class_exists('TribeEventsPro')) {
				wp_enqueue_style( 'widget-calendar-pro-style', TribeEventsPro::instance()->pluginUrl . 'resources/widget-calendar-full.css', array(), apply_filters( 'tribe_events_pro_css_version', TribeEventsPro::VERSION ) );
			}
			
			if($widget_name == 'upcoming_events_widget' && isset($instance['categories'])) {
				$new_categories = explode(',', $instance['categories']);
				$instance['categories'] = $new_categories;
			}
			
			if(substr($widget_name, 0, 2) == 'WC') $add_cls = 'woocommerce';
			else $add_cls = '';
			
			ob_start();
			the_widget($widget_name, $instance, 'before_widget=<aside id="'.$widget_wpid.'" class="widget '.$add_cls.' '.$widget_wpname.'">&after_widget=</aside>&before_title=<div class="widgettitle"><h3>&after_title=</h3></div>&widget_id='.$instance['widget_wpid']);
			$output = ob_get_contents();
			wp_cache_delete( $widget_id , 'widget' );
			ob_end_clean();

			return $output;
		endif;
	}
	
	function dt_social($attrs, $content=null,$shortcodename="") {
		extract(shortcode_atts(array(
			'target' => '_blank'
		), $attrs));

		$dt_theme_options = get_option(FITNESSZONE_THEME_SETTINGS);
		$out = "";

		if(is_array($dt_theme_options['social'])):
			$out .= "<ul class='dt-sc-social-icons'>";
			foreach($dt_theme_options['social'] as $social):
				$link = $social['link'];
				$icon = $social['icon'];
				$out .= "<li class='".substr($icon, 3)."'>";
				$out .= "<a class='fa {$icon}' href='{$link}' target='{$target}'></a>";
				$out .= "</li>";
			endforeach;
			$out .= "</ul>";
		endif;			

		return $out;
	}

	function dt_info_title($attrs, $content=null,$shortcodename="") {
		extract(shortcode_atts(array('tag'=> 'h2','number'=> '1', 'text'=> ''), $attrs));

		$out = "";

		$out .= "<{$tag} class='info-title'><span>{$number}</span>{$text}</{$tag}>";

		return $out;
	}

	function dt_service_pack($attrs, $content=null,$shortcodename="") {
		extract(shortcode_atts(array('title1'=> '','title2'=> ''), $attrs));

		$out = "";
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$out .= '<div class="dt-sc-service-pack">';
			$out .= "<h3 class='section-title3'>{$title1}<br><span>{$title2}</span></h3>";
			$out .= $content;
		$out .= '</div>';

		return $out;
	}

	function dt_section_title($attrs, $content=null,$shortcodename="") {
		extract(shortcode_atts(array('tag'=> 'h2', 'text'=> '', 'class'=> ''), $attrs));

		$out = "";

		$out .= "<{$tag} class='section-title {$class}'>{$text}</{$tag}>";

		return $out;
	}
	
	function dt_section_title2($attrs, $content=null,$shortcodename="") {
		extract(shortcode_atts(array('tag'=> 'h2', 'text1'=> '', 'text2'=> '', 'class'=> ''), $attrs));

		$out = "";

		$out .= "<{$tag} class='section-title2 {$class}'>{$text1} <span>{$text2}</span></{$tag}>";

		return $out;
	}
	
	function dt_section_title3($attrs, $content=null,$shortcodename="") {
		extract(shortcode_atts(array('tag'=> 'h2', 'text1'=> '', 'text2'=> '', 'class'=> ''), $attrs));

		$out = "";

		$out .= "<{$tag} class='section-title3 {$class}'>{$text1} <br><span>{$text2}</span></{$tag}>";

		return $out;
	}
	
	function dt_package_title($attrs, $content=null,$shortcodename="") {
		extract(shortcode_atts(array('tag'=> 'h3', 'title'=> '', 'subtitle'=> '', 'class'=> ''), $attrs));

		$out = "";

		$out .= "<div class='dt-sc-pro-title {$class}'>";
			$out .= "<{$tag}>{$title}</{$tag}>";
			$out .= "<span>{$subtitle}</span>";
		$out .= "</div>";

		return $out;
	}

	function fblike( $attrs = null, $content = null,$shortcodename ="" ){
		extract(shortcode_atts(array('layout'=>'box_count','width'=>'','height'=>'','send'=>false,'show_faces'=>false,'action'=>'like','font'=> 'lucida+grande'
					,'colorscheme'=>'light'), $attrs));

		if ($layout == 'standard') { $width = '450'; $height = '35';  if ($show_faces == 'true') { $height = '80'; } }
		if ($layout == 'box_count') { $width = '55'; $height = '65'; }
		if ($layout == 'button_count') { $width = '90'; $height = '20'; }
		$layout = 'data-layout = "'.$layout.'" ';
		$width = 'data-width = "'.$width.'" ';
		$font = 'data-font = "'.str_replace("+", " ", $font).'" ';
		$colorscheme = 'data-colorscheme = "'.$colorscheme.'" ';
		$action = 'data-action = "'.$action.'" ';
		if ( $show_faces ) { $show_faces = 'data-show-faces = "true" '; } else { $show_faces = ''; }
		if ( $send ) { $send = 'data-send = "true" '; } else { $send = ''; }
		
		$out = '<div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script>';
		$out .= '<div class = "fb-like" data-href = "'.get_permalink().'" '.$layout.$width.$font.$colorscheme.$action.$show_faces.$send.'></div>';

		return $out;
	}

	function googleplusone( $attrs = null, $content = null,$shortcodename ="" ){
		extract(shortcode_atts(array('size'=> '','lang'=> ''), $attrs));

		$size = empty($size) ? "size='small'" : "size='{$size}'";
		$lang = empty($lang) ? "{lang:en_GB}" : "{lang:'{$lang}'}";
		
		$out = '<script type="text/javascript" src="https://apis.google.com/js/plusone.js">'.$lang.'</script>';
		$out .= '<g:plusone '.$size.'></g:plusone>';

		return $out;
	}

	function twitter( $attrs = null, $content = null,$shortcodename ="" ){
		extract(shortcode_atts(array('layout'=>'vertical','username'=>'','text'=>'','url'=>'','related'=> '','lang'=> ''), $attrs));

		$p_url= get_permalink();
		$p_title = get_the_title();

		$text = !empty($text) ? "data-text='{$text}'" :"data-text='{$p_title}'";
		$url = !empty($url) ? "data-url='{$url}'" :"data-url='{$p_url}'";
		$related = !empty($related) ? "data-related='{$related}'" :'';
		$lang = !empty($lang) ? "data-lang='{$lang}'" :'';
		$twitter_url = "http".dt_theme_ssl()."://twitter.com/share";
			$out = '<a href="{$twitter_url}" class="twitter-share-button" '.$url.' '.$lang.' '.$text.' '.$related.' data-count="'.$layout.'" data-via="'.$username.'">'.
		__('Tweet','dt_themes').'</a>';
			$out .= '<script type="text/javascript" src="http'.dt_theme_ssl().'://platform.twitter.com/widgets.js"></script>';

		return $out;	
	}

	function stumbleupon( $attrs = null, $content = null,$shortcodename ="" ){
		extract(shortcode_atts(array('layout'=>'5','url'=>get_permalink()),$attrs));

		$url = "&r='{$url}'";
		$out = '<script src="http'.dt_theme_ssl().'://www.stumbleupon.com/hostedbadge.php?s='.$layout.$url.'"></script>';

		return $out;
	}

	function linkedin( $attrs = null, $content = null,$shortcodename ="" ){
		extract(shortcode_atts(array('layout'=>'2','url'=>get_permalink()),$attrs));

		if ($url != '') { $url = "data-url='".$url."'"; }
		if ($layout == '2') { $layout = 'right'; }
		if ($layout == '3') { $layout = 'top'; }
		$out = '<script type="text/javascript" src="//platform.linkedin.com/in.js"> lang: en_US</script><script type="IN/Share" data-counter = "'.$layout.'" '.$url.'></script>';

		return $out;
	}

	function delicious( $attrs = null, $content = null,$shortcodename ="" ){
		extract(shortcode_atts(array('text'=>__("Delicious",'dt_themes')),$attrs));

		$delicious_url = "http".dt_theme_ssl()."://www.delicious.com/save";

		$out = '<img src="http'.dt_theme_ssl().'://www.delicious.com/static/img/delicious.small.gif" height="10" width="10" alt="Delicious" />&nbsp;<a href="{$delicious_url}" onclick="window.open(&#39;http'.dt_theme_ssl().'://www.delicious.com/save?v=5&noui&jump=close&url=&#39;+encodeURIComponent(location.href)+&#39;&title=&#39;+encodeURIComponent(document.title), &#39;delicious&#39;,&#39;toolbar=no,width=550,height=550&#39;); return false;">'.$text.'</a>';

		return $out;	
	}

	function pintrest( $attrs = null, $content = null,$shortcodename ="" ){
		extract(shortcode_atts(array('text'=>get_the_excerpt(),'layout'=>'horizontal','image'=>'','url'=>get_permalink(),'prompt'=>false),$attrs));
		$out = '<div class = "mysite_sociable"><a href="http'.dt_theme_ssl().'://pinterest.com/pin/create/button/?url='.$url.'&media='.$image.'&description='.$text.'" class="pin-it-button" count-layout="'.$layout.'">'.__("Pin It",'dt_themes').'</a>';
		$out .= '<script type="text/javascript" src="http'.dt_theme_ssl().'://assets.pinterest.com/js/pinit.js"></script>';

		if($prompt):
			$out = '<a title="'.__('Pin It on Pinterest','dt_themes').'" class="pin-it-button" href="javascript:void(0)">'.__("Pin It",'dt_themes').'</a>';
			$out .= '<script type = "text/javascript">';
			$out .= 'jQuery(document).ready(function(){';
				$out .= 'jQuery(".pin-it-button").click(function(event) {';
				$out .= 'event.preventDefault();';
				$out .= 'jQuery.getScript("http'.dt_theme_ssl().'://assets.pinterest.com/js/pinmarklet.js?r=" + Math.random()*99999999);';
				$out .= '});';
			$out .= '});';
			$out .= '</script>';
			$out .= '<style type = "text/css">a.pin-it-button {position: absolute;background: url(http'.dt_theme_ssl().'://assets.pinterest.com/images/pinit6.png);font: 11px Arial, sans-serif;text-indent: -9999em;font-size: .01em;color: #CD1F1F;height: 20px;width: 43px;background-position: 0 -7px;}a.pin-it-button:hover {background-position: 0 -28px;}a.pin-it-button:active {background-position: 0 -49px;}</style>';

		endif;

		return $out;
	}

	function digg( $attrs = null, $content = null,$shortcodename ="" ){
		extract(shortcode_atts(array('layout'=>'DiggMedium','url'=>get_permalink(),'title'=>get_the_title(),'type'=>'','description'=>get_the_content(),'related'=>''),$attrs));

		if ($title != '') { $title = "&title='".$title."'"; }
		if ($type != '') { $type = "rev='".$type."'"; }
		if ($description != '') { $description = "<span style = 'display: none;'>".$description."</span>"; }
		if ($related != '') { $related = "&related=no"; }

		$out = '<a class="DiggThisButton '.$layout.'" href="http'.dt_theme_ssl().'://digg.com/submit?url='.$url.$title.$related.'"'.$type.'>'.$description.'</a>';
		$out .= '<script type = "text/javascript" src = "http'.dt_theme_ssl().'://widgets.digg.com/buttons.js"></script>';

		return $out;
	}

	/**
	 * privacy policy link
	 * @return link
	 */
	function dt_sc_privacy_policy_link( $attrs = array() , $content = "") {	

		$page_id = get_option('wp_page_for_privacy_policy');
		$url	 = get_permalink($page_id);
		$content = !empty($content) ?  $content : get_the_title($page_id);
		$link	 = "<a href='{$url}'>{$content}</a>";

		return $link;
	}

	function dt_sc_privacy_disable_google_tracking( $attrs = array() , $content = "") {	
		$content = !empty($content) ?  $content : __('Click to enable/disable google analytics tracking.', 'dt_themes');
		$cookie  = "dtPrivacyGoogleTrackingDisabled";
		
		$checked = ' checked="checked"';
		if( isset( $_COOKIE[$cookie] ) )
			$checked = '';

		$out = '<div class="dt-toggle-switch">';
			$out .= '<label>';
				$out .= '<input type="checkbox" '.$checked.' id="'.$cookie.'" name="'.$cookie.'" class="'.$cookie.'">';
				$out .= '<span>'.$content.'</span>';
			$out .= '</label>';
		$out .= '</div>';

		return $out;
	}

	function dt_sc_privacy_disable_google_webfonts( $attrs = array() , $content = "") {
		$content = !empty($content) ?  $content : __('Click to enable/disable google webfonts.', 'dt_themes');
		$cookie  = "dtPrivacyGoogleWebfontsDisabled";

		$checked = ' checked="checked"';
		if( isset( $_COOKIE[$cookie] ) )
			$checked = '';

		$out = '<div class="dt-toggle-switch">';
			$out .= '<label>';
				$out .= '<input type="checkbox" '.$checked.' id="'.$cookie.'" name="'.$cookie.'" class="'.$cookie.'">';
				$out .= '<span>'.$content.'</span>';
			$out .= '</label>';
		$out .= '</div>';

		return $out;
	}

	function dt_sc_privacy_disable_google_maps( $attrs = array() , $content = "") {	
		$content = !empty($content) ?  $content : __('Click to enable/disable google maps.', 'dt_themes');
		$cookie  = "dtPrivacyGoogleMapsDisabled";

		$checked = ' checked="checked"';
		if( isset( $_COOKIE[$cookie] ) )
			$checked = '';

		$out = '<div class="dt-toggle-switch">';
			$out .= '<label>';
				$out .= '<input type="checkbox" '.$checked.' id="'.$cookie.'" name="'.$cookie.'" class="'.$cookie.'">';
				$out .= '<span>'.$content.'</span>';
			$out .= '</label>';
		$out .= '</div>';

		return $out;
	}

	function dt_sc_privacy_disable_video_embeds( $attrs = array() , $content = "") {	
		$content = !empty($content) ?  $content : __('Click to enable/disable video embeds.', 'dt_themes');
		$cookie  = "dtPrivacyVideoEmbedsDisabled";

		$checked = ' checked="checked"';
		if( isset( $_COOKIE[$cookie] ) )
			$checked = '';

		$out = '<div class="dt-toggle-switch">';
			$out .= '<label>';
				$out .= '<input type="checkbox" '.$checked.' id="'.$cookie.'" name="'.$cookie.'" class="'.$cookie.'">';
				$out .= '<span>'.$content.'</span>';
			$out .= '</label>';
		$out .= '</div>';

		return $out;
	}
}

new DTCoreShortcodesDefination();?>