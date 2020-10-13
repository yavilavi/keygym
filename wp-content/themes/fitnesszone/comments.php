<?php
#Do not delete these lines...
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'fitnesszone'); ?></p>
<?php
	return;
}
?>
<!-- Start editing here -->

<?php if(have_comments()): ?>

	<?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
    	<div class="pagination">
            <ul class="commentNav">
                <li><?php previous_comments_link(); ?></li>
                <li><?php next_comments_link(); ?></li>
            </ul>
		</div>
	<?php endif; ?>

    <div id="comments" class="commententries">
		<h3><?php comments_number(__('No Comments', 'fitnesszone'), __('Comment (1)', 'fitnesszone'), __('Comments (%)', 'fitnesszone')); ?></h3>
        <ul class="commentlist">
            <?php wp_list_comments('avatar_size=85&type=comment&callback=dt_theme_custom_comments&style=ul'); ?>
        </ul>
	</div><?php
	else:
		if('open' == $post->comment_status): ?>
            <div id="comments" class="commententries">
                <h3><?php _e('No Comments', 'fitnesszone'); ?></h3>
            </div><?php
		endif;
	endif;

	#Performing comment form...
	if('open' == $post->comment_status):
		
		comment_form();
	endif; ?>