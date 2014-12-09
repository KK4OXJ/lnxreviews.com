<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Reviews of Linux versions">
    <meta name="robots" content="index, follow, archive, cache, imageindex">
    <meta name="Keywords" content="Linux, Linux reviews, LnxReviews, Reviews, Zeke Y">
    <meta name="author" content="Zeke Y">
    <meta lang="en_US">
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="public">
    <meta name="copyright" content="&copy; 2014 LnxReviews">

	<link rel="stylesheet" href="/new-style.css">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.ico">
    
	<title>Linux Reviews</title>
	
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="/script.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-57130697-1', 'auto');
        ga('send', 'pageview');
</script>
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