        <footer>
            <div class="footer-nav">
			    <a href="/about" class="footer-link" id="donate">About</a>
                <?php
                    if (is_user_logged_in()):
                ?>
                <a href="/wp-admin" class="footer-link" id="admin">Admin</a>
                <?php
                    else:
                ?>
                <a href="/wp-login.php?action=register" class="footer-link" id="admin">Register</a>
                <?php endif; ?>
			    <a href="/contact" class="footer-link" id="contact">Contact</a>
            </div>
		
		    <p class="copyright-notice">&copy; Copyrighted and designed by Zeke Y 2014 | <a href="/wp-admin">Admin</a></p>
        </footer>
    </body>
</html>