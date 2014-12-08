<?php 
/*
Template Name: Archives
*/
get_header() ?>

<div class="container">
    <div id="content" role="main">
        <?php the_post() ?>
        <h1 class="entry-title"><?php the_title() ?></h1>
    </div>
</div>

<?php get_footer() ?>