<?php
    /**
    * Header template for the theme
    *
    * @package LnxReviews
    * @subpackage LnxReviews
    * @since LnxReviews 1.0
    */
?>

<!DOCTYPE html>
<html>
<head>
    <?php wp_head() ?>
   
    <meta name="robots" content="index, follow, archive, cache, imageindex">
    <meta name="Keywords" content="Linux, Linux reviews, LnxReviews, Reviews, Zeke Y">
    <meta name="author" content="Zeke Y">
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="public">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico">
    
	<title><?php wp_title('|', true, 'right') ?></title>
	
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="script.js"></script>
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
		<a href="<?php bloginfo('url') ?>" class="home-link">
            <img src="tux.png" alt="Tux, the Linux penguin." class="logo">
            
            <h1 class="site-title"><?php bloginfo('name') ?><span class="header-small">.com</span></h1>
			</a>
    </header>
        
        <nav class="navbar">
            <?php $latest_post_title = get_posts('numberposts = 4') ?>
            <?php foreach ($latest_post_title as $post) : setup_postdata($post); ?>
                <a href="<?php the_permalink() ?>" class="os-link"><?php the_title() ?></a>
            <?php endforeach; ?>
               
            <a href="all-versions" class="os-link">View all</a>
        </nav>