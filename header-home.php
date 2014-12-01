<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico">
    
	<title>Linux Reviews</title>
	
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script>
        $(document).ready(function() {
  			$('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
      		        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 250);
                        return false;
                    };
                };
            });
        });
    </script>
</head>
<body>
	<span id="top"></span>
    
	<header id="header">
		<a href="index.php" id="home_link">
            <img src="tux.png" alt="Tux, the Linux penguin." id="logo">
            <h1 id="sitetitle">LnxReviews<span id="header_small">.com</span></h1>
			</a>
    </header>
				
	<div class="navbar">
		<div class="os_review_links">
            <?php $latest_post_title = get_posts('numberposts = 4') ?>
            <?php foreach ($latest_post_title as $post) : setup_postdata($post); ?>
            <div class="os-link-div">
                <a href="<?php the_permalink() ?>" class="os-link"><?php the_title() ?></a>
            </div>
            <?php endforeach; ?>
                                        
            <div class="os-link-div">
                <a href="archive.php" class="os-link">View all</a>
            </div>
		</div>
	</div>