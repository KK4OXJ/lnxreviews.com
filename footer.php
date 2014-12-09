        <footer>
            <div class="footer-nav">
			    <a href="/about" class="footer-link" id="about">About</a>
                <?php
                    if (is_user_logged_in()):
                ?>
                <a href="/wp-admin/edit.php" class="footer-link" class="admin">Write a review</a>
                <?php
                    else:
                ?>
                <a href="/wp-login.php" class="footer-link" class="admin">Login</a>
                <?php endif; ?>
			    <a href="/contact" class="footer-link" class="contact">Contact</a>
            </div>
		
		    <p class="copyright">&copy; Copyrighted and designed by Zeke Y 2014</p>
        </footer>
    </body>
</html>