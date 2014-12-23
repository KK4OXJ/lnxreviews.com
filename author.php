<?php get_header() ?>
<h1 class="page-header"><?php wp_title('') ?></h1>

<div class="post">
  <div class="universal-div">
    <?php
      the_author_meta('description');
    ?>
  </div>
</div>

<?php get_footer() ?>
</body>
</html>