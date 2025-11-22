<?php

// Enqueue CSS files
function portfoliotheme_enqueue_styles() {
    
    // 1. Theme stylesheet
    wp_enqueue_style( 
		'portfolio-style',
        // get_stylesheet_uri is shortcut, as wp knows where to find it
		get_stylesheet_uri(), 
		array(),
        // Some people may use date (09-01-25) or the version number; here I am telling wp to get version number of theme and output it here
		wp_get_theme()->get( 'Version' ),
		'all'
	);

    // 2. Normalize CSS
    wp_enqueue_style(
        'normalize',
        get_theme_file_uri('assets/css/normalize.css'),
        array(),
        '12.1.1'
    );
}
add_action('wp_enqueue_scripts', 'portfoliotheme_enqueue_styles');

// Register CPT
require get_theme_file_path() . '/inc/cpt.php';


// Require portfolio-blocks
require get_theme_file_path() . '/portfolio-blocks/portfolio-blocks.php';
