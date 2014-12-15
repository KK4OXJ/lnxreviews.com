<?php
    $args = array(
	   'width' => 100,
	   'default-image' => get_template_directory_uri() . '/tux.png',
	   'uploads' => true,
    );
    add_theme_support('custom-header', $args);
?>