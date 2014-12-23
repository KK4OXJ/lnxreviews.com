<footer>
  <nav>
    <a href="/about" class="footer-link about">About</a>
      <?php if (current_user_can('edit_posts')): ?>
        <a href="/wp-admin" class="footer-link admin">Admin</a>
      
      <?php elseif (current_user_can('edit_posts')): ?>
        <a href="/wp-admin/post-new.php" class="footer-link admin">Write a review</a>
        
      <?php
        global $current_user; 
        get_currentuserinfo(); 
        elseif (user_can($current_user, 'subscriber')):
      ?>
        <p>Thanks for subscribing!</p>
      
      <?php
        else:
      ?>
        <a href="/wp-login.php" class="footer-link admin">Login</a>
      <?php endif; ?>
      <a href="/contact" class="footer-link contact">Contact</a>
    </nav>

    <p class="copyright">&copy; Copyrighted 2014 LnxReviews. Designed by Zeke Y</p>
    
    <?php wp_footer() ?>
</footer>

<script src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/jquery.min.js"></script>

<?php
	if (is_home()):	
?>
<script src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/script.js"></script>
<?php endif; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57130697-1', 'auto');
  ga('send', 'pageview');
</script>