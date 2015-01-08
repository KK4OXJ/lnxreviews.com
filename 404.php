<?php get_header('404') ?>

<h1 class="page-header">404</h1>
<h2 class="small-header">Sorry, we couldn't find that page</h2>

<?php
  if (is_404()) {
    _gaq.push(['_trackEvent', '404', document.location.pathname + document.location.search, document.referrer, 0, true]);
  }
?>

<?php get_footer() ?>
</body>
</html>