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
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    // Optional: Enqueue Bootstrap JS (from CDN)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'learning_theme_enqueue_assets');
