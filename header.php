<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.ico">
	
	<title><?php the_title() ?> | Linux Reviews</title>
</head>
<body>
    <a href="/index.php">
		<header>
            <img src="/tux.png" alt="Tux, the Linux penguin." id="logo">
            <h1 id="sitetitle">LnxReviews<span id="header_small">.com</span></h1>			
			
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
        </header>
    </a>