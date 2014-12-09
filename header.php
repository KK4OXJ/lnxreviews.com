<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/new-style.css">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.ico">
	
	<title><?php wp_title('') ?> | Linux Reviews</title>
</head>
<body>
    <a href="/index.php">
		<header>
            <img src="/tux.png" alt="Tux, the Linux penguin" class="logo">
            <h1 class="site-title">LnxReviews<span class="header-small">.com</span></h1>
        </header>			
        
        <nav class="navbar">
            <?php $latest_post_title = get_posts('numberposts = 4') ?>
            <?php foreach ($latest_post_title as $post) : setup_postdata($post); ?>
            <!--<div class="os-link-div">-->
                <a href="<?php the_permalink() ?>" class="os-link"><?php the_title() ?></a>
            <!--</div>-->
            <?php endforeach; ?>

            <div class="os-link-div">
                <a href="/all-versions" class="os-link">View all</a>
            </div>
        </nav>
    </a>