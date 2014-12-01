<?php get_header() ?>

<h1 class="page-header"><?php wp_title('') ?></h1>

<h2 class="small-header">
    <?php
        $review_title = get_post_custom_values("review_title");
        foreach ($review_title as $key => $value) {
            echo $value;
        }
    ?>
</h2>

<div class="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 	<div class="universal-div">
 		<?php the_content(); ?>
 		
 		<small class="small-review">
            Reviewed by 
            <?php the_author_posts_link() ?>. Rating: 
            <?php
                $rating = get_post_custom_values("rating");
                foreach ($rating as $key => $value) {
                    echo $value;
                }
            ?>
        </small>
 	</div>

 	</div>

    <?php endwhile; else : ?>

 	<p><?php _e("Sorry, we couldn't find any posts for you :(") ?></p>

    <?php endif; ?>
</div>

<?php
/*    if (comments_open() || get_comments_number()) {
	   comments_template();
    }*/
?>

<?php get_footer() ?>