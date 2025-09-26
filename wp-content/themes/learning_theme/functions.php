<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue theme styles and scripts
function learning_theme_enqueue_assets() {
    // Enqueue the main stylesheet
    wp_enqueue_style('learning-theme-style', get_stylesheet_uri());

    // Optional: Enqueue Bootstrap CSS (from CDN)
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');

    //Optional: Custom stylesheet
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.min.css');

    // Optional: Enqueue Bootstrap JS (from CDN)
    wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Optional: Custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'learning_theme_enqueue_assets');
