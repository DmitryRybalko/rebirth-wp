<?php 
add_action( 'wp_enqueue_scripts', 'site_scripts' );
function site_scripts() {
    wp_enqueue_style( 'font-Montserrat', "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" );
	wp_enqueue_style( 'style', get_template_directory_uri() . "/assets/style/style.css" );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '0.0.1', true );
}

add_theme_support("post-thumbnails");
add_theme_support("title-tag");
add_theme_support("custom-logo");

?>