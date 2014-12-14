<?php get_header('home'); ?>

    <?php/* if (have_posts()):
        while (have_posts()) : the_post(); ?>
    <?php endwhile; ?>
    <?php endif; */?>
    <?php wp_reset_query(); ?>

    <?php $latest_post = get_posts('numberposts = 4') ?>
    <?php foreach ($latest_post as $post) : setup_postdata($post); ?>

    <a href="<?php the_permalink() ?>" class="white">
        <h3 class="post-title"><?php the_title() ?></h3>
    </a>
    <div class="universal-div"><?php the_excerpt() ?></div>
    <a href="#top" class="up">Back to top</a>
    <?php endforeach; ?>
    <?php wp_reset_query(); ?>

    <?php get_footer() ?>
</body>
</html>