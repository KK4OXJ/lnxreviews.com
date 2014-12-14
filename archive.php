<?php 
/*
Template Name: Archives
*/
get_header() ?>

    <div class="container">
        <?php the_post() ?>
        <h1 class="entry-title page-header"><?php the_title() ?></h1>
        <ul class="all-list">
            <?php
                wp_get_archives(array(
                    'type' => 'alpha',
                    'format' => 'html',
                    'order' => 'ASC'
                ));
            ?>
        </ul>
    </div>

    <?php get_footer() ?>
</body>
</html>