<?php

// Enqueue CSS files
function portfoliotheme_enqueue_styles() {
    
    // 1. Theme stylesheet
    wp_enqueue_style( 
		'portfolio-style',
        // get_stylesheet_uri is shortcut, as wp knows where to find it
		get_stylesheet_uri(), 
		array(),
		// wp_get_theme()->get( 'Version' ),
        time(), //  for cache busting during development
		'all'
	);

    // 2. Normalize CSS
    wp_enqueue_style(
        'normalize',
        get_theme_file_uri('assets/css/normalize.css'),
        array(),
        '12.1.1'
    );

    // 3. AOS CSS
    wp_enqueue_style('aos-css', 
        'https://unpkg.com/aos@2.3.1/dist/aos.css', 
        array(), //  dependencies
        '2.3.4', //  version
    );
}
add_action('wp_enqueue_scripts', 'portfoliotheme_enqueue_styles');

// Enqueue JS files
function portfoliotheme_enqueue_scripts() {
    // 1. AOS JS
    wp_enqueue_script('aos-js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        array(), //  dependencies
        '2.3.1', //  version
        true //  load in footer
    );

    // Initialize AOS
    // Only set to false while testing; change to true once it's working
    wp_add_inline_script('aos-js', 
        'AOS.init({
            duration: 800,
            once: false,
            offset: 100
        });'  
    );
}
add_action('wp_enqueue_scripts', 'portfoliotheme_enqueue_scripts');

// Register CPT
require get_theme_file_path() . '/inc/cpt.php';

// Require portfolio-blocks
require get_theme_file_path() . '/portfolio-blocks/portfolio-blocks.php';

// New image sizes
function portfoliotheme_setup() {
    // Load style.css on the backend
	add_editor_style( get_stylesheet_uri() );

    // Thumbnail or small preview
    add_image_size( 'preview-thumbnail', 300, 200, true );

    // Medium preview
    add_image_size( 'preview-medium', 400, 250, true );

    // Featured medium
    add_image_size( 'featured-medium', 600, 400, true );

    // Medium-large
    add_image_size( 'medium-large', 800, 500, true );

    // Banner
    add_image_size( 'banner', 800, 400, true );

    // Hero 
    add_image_size( 'banner', 1000, 800, true );
}
add_action( 'after_setup_theme', 'portfoliotheme_setup' );

// Make custom sizes selectable from WordPress admin
function portfoliotheme_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'preview-thumbnail' => __( 'Preview thumbnail (300x200)', 'portfolio-theme' ),
		'preview-medium' => __( 'Preview medium (400x250)', 'portfolio-theme' ),
        'featured-medium' => __( 'Featured medium (600x400)', 'portfolio-theme' ),
        'medium-large' => __( 'Medium large (800x500)', 'portfolio-theme' ),
        'banner' => __( 'Banner (800x400)', 'portfolio-theme' ),
        'hero' => __( 'Hero (1000x800)', 'portfolio-theme' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'portfoliotheme_add_custom_image_sizes' );
