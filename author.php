<?php get_header() ?>

<h1 class="page-header"><?php the_author() ?></h1>

<div class="post">
 	<div class="universal-div">
 		<?php
            the_author_meta('description');
        ?>
 	</div>

 	</div>
</div>

<?php get_footer() ?>