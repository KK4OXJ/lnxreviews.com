<?php
/**
 * @package LnxReviews
 * @subpackage LnxReviews
 * @since LnxReviews 1.0
 */

/*if (post_password_required()) { 
    return;
}*/
?>

<div id="comments" class="comments-area">
	<?php if (have_comments()) : ?>
	<h2 class="small-header"></h2>
	
	<small>Reviewed by: <a href="<?php comment_author_link() ?>"><?php comment_author() ?></a></small>
    <div class="universal-div">
            <?php
            /*    wp_list_comments(array(
                    'style' => 'div',
                    'avatar_size' => 0
                ));*/
    
                get_comments()
           ?>
    </div>
	
	<?php endif; ?>

    <?php
        /*$my_post = array(
            'post_title'    => 'My post',
            'post_content'  => 'This is my post.',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_category' => array(8, 39)
        );
        
        wp_insert_post($my_post);*/

        comment_form()
    ?>
</div>