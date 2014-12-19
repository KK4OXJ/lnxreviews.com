<?php 
/*
Template Name: Contact
*/
get_header() ?>

<h1 class="page-header"><?php wp_title('') ?></h1>

<div class="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 	<div class="universal-div">
 		<?php the_content(); ?>
 	</div>

    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer() ?>
</body>
</html>