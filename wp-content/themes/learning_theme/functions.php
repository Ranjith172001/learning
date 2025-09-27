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
// The proper way to enqueue GSAP script in WordPress

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . 'js/app.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );