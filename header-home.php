<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/new-style.css">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.ico">
    
	<title>Linux Reviews</title>
	
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<span id="top"></span>
    
	<header>
		<a href="/index.php" class="home-link">
            <img src="/tux.png" alt="Tux, the Linux penguin." class="logo">
            <h1 class="site-title">LnxReviews<span class="header-small">.com</span></h1>
			</a>
    </header>
        
        <nav class="navbar">
            <?php $latest_post_title = get_posts('numberposts = 4') ?>
            <?php foreach ($latest_post_title as $post) : setup_postdata($post); ?>
                <a href="<?php the_permalink() ?>" class="os-link"><?php the_title() ?></a>
            <?php endforeach; ?>

            <div class="os-link-div">
                <a href="/all-versions" class="os-link">View all</a>
            </div>
        </nav>