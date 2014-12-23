<?php get_header() ?>

<h1 class="page-header"><?php wp_title('') ?></h1>

<div class="post">
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="universal-div">
      <?php the_content(); ?>
 		
      <small class="small-review">
        Rating: 
        <?php
          $rating = get_post_custom_values('rating');
          foreach ($rating as $key => $value) {
            echo $value;
          }
        ?>
      </small>
 	</div>
</div>

<?php endwhile; else: ?>

<p><?php _e("Sorry, we couldn't find any reviews for you") ?></p>

<?php endif; ?>

<?php get_footer() ?>
</body>
</html>