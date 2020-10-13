<?php
/** My Twitter Widget
  * Objective:
  *		1.To list out the latest tweets
**/
class MY_Mailchimp extends WP_Widget {
	
	#1.constructor
	function __construct() {
		$widget_options = array("classname"=>'mailchimp', 'description'=>__('Use this widget to add a mailchimp newsletter to your site.', 'fitnesszone'));
		parent::__construct(false,FITNESSZONE_THEME_NAME.__(' Mailchimp Newsletter Widget','fitnesszone'),$widget_options);
	}
	
	#2.widget input form in back-end
	function form($instance) {
		$instance = wp_parse_args( (array) $instance,array( 'title' => "", "list_id" => "") );
		
		$title 		= 	empty($instance['title']) ?	'' : strip_tags($instance['title']);
		$list_id 	=	empty($instance['list_id']) ? '' : strip_tags($instance['list_id']);
		
		if( dt_theme_option('general','mailchimp-key') ):

			$apiKey = dt_theme_option('general','mailchimp-key');
			$lists = dt_theme_mailchimp_list_ids($apiKey); ?>

            <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','fitnesszone');?> 
               <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>"  
                      type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
                      
            <p><label for="<?php echo $this->get_field_id('list_id'); ?>"><?php _e('Select List:','fitnesszone'); ?></label>
               <select id="<?php echo $this->get_field_id('list_id'); ?>" name="<?php echo $this->get_field_name('list_id'); ?>">
               <?php foreach ($lists as $key => $value):
			   			$id = $value['id'];
						$name = $value['name'];
						$selected = ( $list_id == $id ) ? ' selected="selected" ' : '';
						echo "<option $selected value='$id'>$name</option>";
					 endforeach;?></select></p>
                      
<?php   else:
			echo "<p>".__("Paste your mailchimp api key in BPanel at General Settings tab",'fitnesszone')."</p>";
		endif;
	}
	
	#3.processes & saves the mailchimp widget option
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['list_id'] = strip_tags($new_instance['list_id']);
		return $instance;
	}
	
	#4.output in front-end
	function widget($args, $instance) {
		extract($args);
		echo $before_widget;
		$title = empty($instance['title']) ? '' : strip_tags($instance['title']);
		$title = apply_filters( 'widget_title', $title );
		$list_id = $instance['list_id'];
		
		if ( !empty( $title ) ) echo $before_title.$title.$after_title;

		$mcapi = dt_theme_option('general','mailchimp-key');

		echo '<p>'.__('Subscribe to your newsletter for latest offers and discounts. We will not spam you.', 'fitnesszone').'</p>';

		echo '<form name="frmsubscribe" method="post" class="subscribe-frm">';
		echo '<input type="email" required name="dt_mc_emailid" id="dt_mc_emailid" placeholder="'.__('Enter Email', 'fitnesszone').'" />';
		echo "	<input type='hidden' name='dt_mc_apikey' id='dt_mc_apikey' value='$mcapi' />";
		echo "	<input type='hidden' name='dt_mc_listid' id='dt_mc_listid' value='$list_id' />";
		echo '<input type="submit" name="submit" class="dt-sc-button small" value="'.__('Subscribe', 'fitnesszone').'" />';
		echo '<p>'.apply_filters('dt_sc_mailchimp_form_elements', $privacy, $attrs ).'</p>';
		echo '</form>';

		echo '<div id="ajax_newsletter_msg"></div>';
		
		echo $after_widget;		

	}
}?>