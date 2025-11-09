<?php

// Enqueue CSS files
function portfoliotheme_enqueue_styles() {
    // 1. Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

    // 2. Theme stylesheet
    wp_enqueue_style('portfolio-theme', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'portfoliotheme_enqueue_styles');

