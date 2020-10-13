<?php
global $post;
$workout_settings = get_post_meta ( $post->ID, '_workout_settings', TRUE );
$workout_settings = is_array ( $workout_settings ) ? $workout_settings : array (); ?>

<!-- Additional Fields -->
<div class="custom-box meta-fields">
    <div class="column one-seventh">  
        <label><?php _e('Sub Title','dt_themes');?></label>
    </div>
    <div class="column one-third">  
        <?php $v = array_key_exists("subtitle",$workout_settings) ?  $workout_settings['subtitle'] : '';?>
        <input id="subtitle" name="_subtitle" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given workout subtitle",'dt_themes');?> </p>
    </div>

    <div class="column one-seventh">  
        <label><?php _e('Featured Video','dt_themes');?></label>
    </div>
    <div class="column one-third">  
        <?php $v = array_key_exists("feature_video",$workout_settings) ?  $workout_settings['feature_video'] : '';?>
        <input id="feature_video" name="_feature_video" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given feature video (eg: https://vimeo.com/46926279)",'dt_themes');?> </p>
    </div>
	<div class="hr_invisible_large"></div>
	
    <div class="column one-seventh">
        <label><?php _e('Muscle Group','dt_themes');?></label>
    </div>
    <div class="column one-third">  
        <?php $v = array_key_exists("muscle_group",$workout_settings) ?  $workout_settings['muscle_group'] : '';?>
        <input id="muscle_group" name="_muscle_group" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given workout muscle group. Seperate by comma (,)",'dt_themes');?> </p>
    </div>

    <div class="column one-seventh">  
        <label><?php _e('Equipment','dt_themes');?></label>
    </div>
    <div class="column one-third">  
        <?php $v = array_key_exists("equipment",$workout_settings) ?  $workout_settings['equipment'] : '';?>
        <input id="equipment" name="_equipment" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given workout equipment. Seperate by comma (,)",'dt_themes');?> </p>
    </div>
	<div class="hr_invisible_large"></div>
    
    <div class="column one-seventh">
        <label><?php _e('No.of Steps','dt_themes');?></label>
    </div>
    <div class="column one-seventh">  
        <?php $v = array_key_exists("nosteps",$workout_settings) ?  $workout_settings['nosteps'] : '';?>
        <input id="nosteps" name="_nosteps" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given no.of workout steps",'dt_themes');?> </p>
    </div>
</div>
<!-- Additional Fields End -->

<!-- Layout -->
<div id="page-layout" class="custom-box">
    <div class="column one-sixth"><label><?php _e('Layout','dt_themes');?> </label></div>
    <div class="column five-sixth last">
        <ul class="bpanel-layout-set"><?php 
            $homepage_layout = array(
                'content-full-width'=>'without-sidebar',
                'with-left-sidebar'=>'left-sidebar',
                'with-right-sidebar'=>'right-sidebar');

                $v =  array_key_exists("layout",$workout_settings) ?  $workout_settings['layout'] : 'content-full-width';

            foreach($homepage_layout as $key => $value):
                $class = ($key == $v) ? " class='selected' " : "";
                echo "<li><a href='#' rel='{$key}' {$class}><img src='" . plugin_dir_url ( __FILE__ )."images/columns/{$value}.png' /></a></li>";
            endforeach;?></ul>

        <input id="mytheme-page-layout" name="layout" type="hidden"  value="<?php echo $v;?>"/>
        <p class="note"> <?php _e("You can choose between a left, right or no sidebar layout.",'dt_themes');?> </p>
    </div>
</div>
<!-- Layout End-->

<?php 
$sb_layout = array_key_exists("layout",$workout_settings) ? $workout_settings['layout'] : 'content-full-width';
$sidebar_both = $sidebar_left = $sidebar_right = '';
if($sb_layout == 'content-full-width') {
	$sidebar_both = 'style="display:none;"';
}elseif($sb_layout == 'with-left-sidebar') {
	$sidebar_right = 'style="display:none;"';
}elseif($sb_layout == 'with-right-sidebar') {
	$sidebar_left = 'style="display:none;"';
}
?>
<div id="widget-area-options" <?php echo $sidebar_both;?>>
	<div id="left-sidebar-container" class="page-left-sidebar" <?php echo $sidebar_left; ?>>
		<!-- 2. Every Where Sidebar Left Start -->
		<div id="page-commom-sidebar" class="sidebar-section custom-box">
			<div class="column one-sixth"><label><?php _e('Disable Standard Left Sidebar','dt_themes');?></label></div>
			<div class="column five-sixth last"><?php 
				$switchclass = array_key_exists("disable-everywhere-sidebar-left",$workout_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
				$checked = array_key_exists("disable-everywhere-sidebar-left",$workout_settings) ? ' checked="checked"' : '';?>
				
				<div data-for="mytheme-disable-everywhere-sidebar-left" class="checkbox-switch <?php echo $switchclass;?>"></div>
				<input id="mytheme-disable-everywhere-sidebar-left" class="hidden" type="checkbox" name="disable-everywhere-sidebar-left" value="true"  <?php echo $checked;?>/>
				<p class="note"> <?php _e('Yes! to hide "Standard Left Sidebar" on this page.','dt_themes');?> </p>
			 </div>
		</div><!-- Every Where Sidebar Left End-->

		<!-- 3. Choose Widget Areas Start -->
		<div id="page-sidebars" class="sidebar-section custom-box page-widgetareas">
			<div class="column one-sixth"><label><?php _e('Choose Widget Area - Left Sidebar','dt_themes');?></label></div>
			<div class="column five-sixth last"><?php
				if( array_key_exists('widget-area-left', $workout_settings)):
					$widgetareas =  array_unique($workout_settings["widget-area-left"]);
					$widgetareas = array_filter($widgetareas);
					foreach( $widgetareas as $widgetarea ){
						echo '<div class="multidropdown">';
						echo dt_theme_custom_widgetarea_list("widgetareas-left",$widgetarea,"multidropdown","left-sidebar");
						echo '</div>';
					}
					echo '<div class="multidropdown">';
						echo dt_theme_custom_widgetarea_list("widgetareas-left","","multidropdown","left-sidebar");
					echo '</div>';                                
				else:
					echo '<div class="multidropdown">';
					   echo dt_theme_custom_widgetarea_list("widgetareas-left","","multidropdown","left-sidebar");
					echo '</div>';                                
				endif;?>
			</div>
		</div><!-- Choose Widget Areas End -->
	</div>
	<div id="right-sidebar-container" class="page-right-sidebar" <?php echo $sidebar_right; ?>>
		<!-- 3. Every Where Sidebar Right Start -->
		<div id="page-commom-sidebar" class="sidebar-section custom-box page-right-sidebar">
			<div class="column one-sixth"><label><?php _e('Disable Standard Right Sidebar','dt_themes');?></label></div>
			<div class="column five-sixth last"><?php 
				$switchclass = array_key_exists("disable-everywhere-sidebar-right",$workout_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
				$checked = array_key_exists("disable-everywhere-sidebar-right",$workout_settings) ? ' checked="checked"' : '';?>
				
				<div data-for="mytheme-disable-everywhere-sidebar-right" class="checkbox-switch <?php echo $switchclass;?>"></div>
				<input id="mytheme-disable-everywhere-sidebar-right" class="hidden" type="checkbox" name="disable-everywhere-sidebar-right" value="true"  <?php echo $checked;?>/>
				<p class="note"> <?php _e('Yes! to hide "Standard Right Sidebar" on this page.','dt_themes');?> </p>
			 </div>
		</div><!-- Every Where Sidebar Right End-->
		
		<!-- 3. Choose Widget Areas Start -->
		<div id="page-sidebars" class="sidebar-section custom-box page-widgetareas">
			<div class="column one-sixth"><label><?php _e('Choose Widget Area - Right Sidebar','dt_themes');?></label></div>
			<div class="column five-sixth last"><?php
				if( array_key_exists('widget-area-right', $workout_settings)):
					$widgetareas =  array_unique($workout_settings["widget-area-right"]);
					$widgetareas = array_filter($widgetareas);
					foreach( $widgetareas as $widgetarea ){
						echo '<div class="multidropdown">';
						echo dt_theme_custom_widgetarea_list("widgetareas-right",$widgetarea,"multidropdown","right-sidebar");
						echo '</div>';
					}
					echo '<div class="multidropdown">';
						echo dt_theme_custom_widgetarea_list("widgetareas-right","","multidropdown","right-sidebar");
					echo '</div>';                                
				else:
					echo '<div class="multidropdown">';
					   echo dt_theme_custom_widgetarea_list("widgetareas-right","","multidropdown","right-sidebar");
					echo '</div>';                                
				endif;?>
			</div>
		</div><!-- Choose Widget Areas End -->
	</div>
</div>

<!-- Allow Comments -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Allow Comments','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	$switchclass = array_key_exists ( "comment", $workout_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "comment", $workout_settings ) ? ' checked="checked"' : '';
	
	?><div data-for="mytheme-workout-comment"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>

		<input id="mytheme-workout-comment" class="hidden" type="checkbox"
			name="mytheme-workout-comment" value="true" <?php echo $checked;?> />

		<p class="note"> <?php _e('YES! to allow comments on this page.','dt_themes');?> </p>
	</div>
</div>
<!-- Allow Comments End -->

<!-- Medias -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Images','dt_themes');?> </label>
	</div>
	<div class="column five-sixth last">
		<div class="dt-media-btns-container">
			<a href="#" class="dt-open-media button button-primary"><?php _e( 'Click Here to Add Images', 'dt_themes' );?> </a>
			<a href="#" class="dt-add-video button button-primary"><?php _e( 'Click Here to Add Video', 'dt_themes' );?> </a>
		</div>
		<div class="clear"></div>

		<div class="dt-media-container">
			<ul class="dt-items-holder"><?php
			if (array_key_exists ( "items", $workout_settings )) {
				foreach ( $workout_settings ["items_thumbnail"] as $key => $thumbnail ) {
					$item = $workout_settings ['items'] [$key];
					$out = "";
					$name = "";
					$foramts = array (
							'jpg',
							'jpeg',
							'gif',
							'png' 
					);
					$parts = explode ( '.', $item );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					if (in_array ( $ext, $foramts )) {
						$name = $workout_settings ['items_name'] [$key];
						$out .= "<li>";
						$out .= "<img src='{$thumbnail}' alt='' />";
						$out .= "<span class='dt-image-name'>{$name}</span>";
						$out .= "<input type='hidden' name='items[]' value='{$item}' />";
					} else {
						$name = "video";
						$out .= "<li>";
						$out .= "<span class='dt-video'></span>";
						$out .= "<input type='text' name='items[]' value='{$item}' />";
					}
					
					$out .= "<input class='dt-image-name' type='hidden' name='items_name[]' value='{$name}' />";
					$out .= "<input type='hidden' name='items_thumbnail[]' value='{$thumbnail}' />";
					$out .= "<span class='my_delete'></span>";
					$out .= "</li>";
					echo $out;
				}
			}
			?></ul>
		</div>
	</div>
</div>
<!-- Medias End -->