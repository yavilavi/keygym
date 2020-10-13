<?php $status = dt_theme_is_plugin_active('all-in-one-seo-pack/all_in_one_seo_pack.php') || dt_theme_is_plugin_active('wordpress-seo/wp-seo.php');
if(!$status):	add_action("admin_init", "seo_metabox");	endif;
	if( !function_exists('seo_metabox') ) {
		function seo_metabox(){
			add_meta_box("seo-meta-container", __('SEO Options','fitnesszone'), "seo_settings", array( "post", "page" ), "normal", "default");
			add_action('save_post','seo_meta_save');
		}
	}

	if( !function_exists('seo_settings') ) {
		function seo_settings($args){
			global $post;?>
			<div class="custom-box">
				<div class="column one-sixth">
					<label><?php _e('Title','fitnesszone');?> </label>
				</div>
				<div class="column five-sixth last">      
					<input name="_seo_title" type="text" class="large"  value="<?php echo get_post_meta( $post->ID, '_seo_title', true );?>" />
					<p class="three-fourth note"> <?php _e('The title display in search engines is limited to 70 chars. If the SEO title is empty the title will be generated based on your title template in your SEO settings.','fitnesszone');?> </p>
				 </div>
			</div>
			<div class="custom-box">
				<div class="column one-sixth">
				<label><?php _e('Description','fitnesszone');?> </label>
				</div>
				<div class="column five-sixth last">      
					<textarea class="large" id="" name="_seo_description" cols="8" rows="8"><?php echo stripslashes(get_post_meta($post->ID,'_seo_description',true));?></textarea>
					<p class="three-fourth note"> <?php _e('The meta description will be limited to 140 chars. If the meta description is empty the description <br> will be generated based on your meta description options in your SEO settings.','fitnesszone');?> </p>
				 </div>
			</div>
			<div class="custom-box">
				<div class="column one-sixth">
				<label><?php _e('Keywords','fitnesszone');?> </label>
				</div>
				<div class="column five-sixth last">      
					<input name="_seo_keywords" type="text" class="large" value="<?php echo get_post_meta( $post->ID, '_seo_keywords', true );?>"/>
					<p class="note"> <?php _e('Add any additional comma separated keywords here.','fitnesszone');?> </p>
				</div>
			</div>
	<?php
			wp_reset_postdata();
		}
	}

	if( !function_exists('seo_meta_save') ) {
		function seo_meta_save($post_id){
	
			if( key_exists ( '_inline_edit',$_POST )) :
				if ( wp_verify_nonce($_POST['_inline_edit'], 'inlineeditnonce')) return;
			endif;
	
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
	
			if (!current_user_can('edit_post', $post_id)) :
				return;
			endif;
	
			if ( (key_exists('post_type', $_POST)) && ('post' == $_POST['post_type'] || 'page' == $_POST['post_type']) ) :
	
				$title = !empty($_POST['_seo_title']) ? $_POST['_seo_title'] : NULL;
				$desc =  !empty($_POST['_seo_description']) ? $_POST['_seo_description'] : NULL;
				$keywords = !empty($_POST['_seo_keywords']) ? $_POST['_seo_keywords'] : NULL;
	
				update_post_meta($post_id, '_seo_title',$title);
				update_post_meta($post_id, '_seo_description',$desc);
				update_post_meta($post_id, '_seo_keywords',$keywords);
			endif;
		}
	}?>