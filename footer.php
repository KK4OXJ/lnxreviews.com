<footer>
    <nav>
        <a href="/about" class="footer-link about">About</a>
        <?php
            if (is_user_logged_in() && is_user_admin()):
        ?>
        <a href="/wp-admin">Admin</a>
        <?php
            else if (is_user_logged_in()):
        ?>
        <a href="/wp-admin/post-new.php" class="footer-link admin">Write a review</a>
        <?php
            else:
        ?>
        <a href="/wp-login.php" class="footer-link admin">Login</a>
        <?php endif; ?>
        <a href="/contact" class="footer-link contact">Contact</a>
    </nav>

    <p class="copyright">&copy; Copyrighted and designed by Zeke Y 2014</p>
    
    <?php wp_footer() ?>
</footer>