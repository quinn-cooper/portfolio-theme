<?php

function portfolio_register_custom_post_types() {
    // Project CPT
    $labels = array(
        'name'                     => _x( 'Projects', 'post type general name', 'portfolio-theme' ),
        'singular_name'            => _x( 'Project', 'post type singular name', 'portfolio-theme' ),
        'add_new'                  => _x( 'Add New', 'portfolio', 'portfolio-theme' ),
        'add_new_item'             => __( 'Add New Project', 'portfolio-theme' ),
        'edit_item'                => __( 'Edit Project', 'portfolio-theme' ),
        'new_item'                 => __( 'New Project', 'portfolio-theme' ),
        'view_item'                => __( 'View Project', 'portfolio-theme' ),
        'view_items'               => __( 'View Projects', 'portfolio-theme' ),
        'search_items'             => __( 'Search Projects', 'portfolio-theme' ),
        'not_found'                => __( 'No projects found.', 'portfolio-theme' ),
        'not_found_in_trash'       => __( 'No projects found in Trash.', 'portfolio-theme' ),
        'parent_item_colon'        => __( 'Parent Projects:', 'portfolio-theme' ),
        'all_items'                => __( 'All Projects', 'portfolio-theme' ),
        'archives'                 => __( 'Project Archives', 'portfolio-theme' ),
        'attributes'               => __( 'Project Attributes', 'portfolio-theme' ),
        'insert_into_item'         => __( 'Insert into project', 'portfolio-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this project', 'portfolio-theme' ),
        'featured_image'           => __( 'Project featured image', 'portfolio-theme' ),
        'set_featured_image'       => __( 'Set project featured image', 'portfolio-theme' ),
        'remove_featured_image'    => __( 'Remove project featured image', 'portfolio-theme' ),
        'use_featured_image'       => __( 'Use as featured image', 'portfolio-theme' ),
        'menu_name'                => _x( 'Projects', 'admin menu', 'portfolio-theme' ),
        'filter_items_list'        => __( 'Filter projects list', 'portfolio-theme' ),
        'items_list_navigation'    => __( 'Projects list navigation', 'portfolio-theme' ),
        'items_list'               => __( 'Projects list', 'portfolio-theme' ),
        'item_published'           => __( 'Project published', 'portfolio-theme' ),
        'item_published_privately' => __( 'Project published privately', 'portfolio-theme' ),
        'item_revereted_to_draft'  => __( 'Project reverted to draft', 'portfolio-theme' ),
        'item_trashed'             => __( 'Project trashed', 'portfolio-theme' ),
        'item_scheduled'           => __( 'Project scheduled', 'portfolio-theme' ),
        'item_updated'             => __( 'Project updated', 'portfolio-theme' ),
        'item_link'                => __( 'Project link', 'portfolio-theme' ),
        'item_link_description'    => __( 'A link to a project', 'portfolio-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true, 

        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true, // enables use of WP_Query
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor' ),
        'template'           => array(
            array('core/image'),
            array('core/heading', array( 
                'level' => 3, 
                'content' => 'Overview')),
            array('core/paragraph', array( 
                'placeholder' => 'Describe the project/give a summary...' ) ),
            array('core/heading', array( 
                'level' => 3, 
                'content' => 'Features')),
            array('core/list'),
        )
    );
    register_post_type( 'portfolio-project', $args );
}
add_action( 'init', 'portfolio_register_custom_post_types' );