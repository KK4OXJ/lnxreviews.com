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
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="robots" content="index, follow, archive, cache, imageindex">
    <meta name="Keywords" content="Linux, Linux reviews, LnxReviews, Reviews, Zeke Y">
    <meta name="author" content="Zeke Y">
    <meta http-equiv="cache-control" content="public">
   
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory') ?>/favicon.ico">
    <link rel="icon" href="<?php bloginfo('stylesheet_directory') ?>/favicon.ico">
	
	<title><?php wp_title('') ?> | <?php bloginfo('name') ?></title>
	
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-57130697-1', 'auto');
        ga('send', 'pageview');
    </script>
    
    <?php wp_head() ?>
</head>
<body>
    <a href="<?php bloginfo('url') ?>" class="home-link">
		<header>
            <img src="<?php header_image() ?>" alt="Logo" class="logo">
            
            <h1 class="site-title"><?php bloginfo('name') ?><span class="header-small">.com</span></h1>
        </header>
        
        <nav class="navbar">
            <?php $latest_post_title = get_posts('numberposts = 4') ?>
            <?php foreach ($latest_post_title as $post) : setup_postdata($post); ?>
                <a href="<?php the_permalink() ?>" class="os-link"><?php the_title() ?></a>
            <?php endforeach; ?>

            <a href="all-versions" class="os-link">View all</a>
        </nav>
    </a>