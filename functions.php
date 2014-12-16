<?php
    $custom_header_defaults = array(
	   'width' => 100,
	   'default-image' => get_template_directory_uri() . '/tux.png',
	   'uploads' => true,
    );
    add_theme_support('custom-header', $custom_header_defaults);
    
    $custom_background_defaults = array(
        'default-color' => '888888'
    );
    add_theme_support('custom-background', $custom_background_defaults);
?>