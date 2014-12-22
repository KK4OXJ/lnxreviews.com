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
    <meta name="Keywords" content="linux operating systems, linux distro, linux distribution, linux reviews linux, reviews, linux os, os">
    <meta name="author" content="Zeke Y">
    <meta http-equiv="cache-control" content="public" max-age="604800">
    <meta name=viewport content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/crusoe-text.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/favicon.ico">
    <link rel="icon" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/favicon.ico">
	
	<title><?php wp_title('') ?> | <?php bloginfo('name') ?></title>
    
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <a href="<?php echo esc_url(home_url()) ?>" class="home-link">
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