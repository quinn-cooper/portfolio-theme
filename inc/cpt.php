<?php

// Custom Post Types
function portfolio_register_custom_post_types() {

    // CPT - Projects
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
        'archives'                 => __( 'Projects Archives', 'portfolio-theme' ),
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
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'template'           => array(
            array('core/post-featured-image'),
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

    // CPT - Skills
    $labels = array(
        'name'                     => _x( 'Skills', 'post type general name', 'portfolio-theme' ),
        'singular_name'            => _x( 'Skill', 'post type singular name', 'portfolio-theme' ),
        'add_new'                  => _x( 'Add New', 'portfolio', 'portfolio-theme' ),
        'add_new_item'             => __( 'Add New Skill', 'portfolio-theme' ),
        'edit_item'                => __( 'Edit Skill', 'portfolio-theme' ),
        'new_item'                 => __( 'New Skill', 'portfolio-theme' ),
        'view_item'                => __( 'View Skill', 'portfolio-theme' ),
        'view_items'               => __( 'View Skills', 'portfolio-theme' ),
        'search_items'             => __( 'Search Skills', 'portfolio-theme' ),
        'not_found'                => __( 'No skills found.', 'portfolio-theme' ),
        'not_found_in_trash'       => __( 'No skills found in Trash.', 'portfolio-theme' ),
        'parent_item_colon'        => __( 'Parent Skills:', 'portfolio-theme' ),
        'all_items'                => __( 'All Skills', 'portfolio-theme' ),
        'archives'                 => __( 'Skills Archives', 'portfolio-theme' ),
        'attributes'               => __( 'Skill Attributes', 'portfolio-theme' ),
        'insert_into_item'         => __( 'Insert into skill', 'portfolio-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this skill', 'portfolio-theme' ),
        'menu_name'                => _x( 'Skills', 'admin menu', 'portfolio-theme' ),
        'filter_items_list'        => __( 'Filter skills list', 'portfolio-theme' ),
        'items_list_navigation'    => __( 'Skills list navigation', 'portfolio-theme' ),
        'items_list'               => __( 'Skills list', 'portfolio-theme' ),
        'item_published'           => __( 'Skill published', 'portfolio-theme' ),
        'item_published_privately' => __( 'Skill published privately', 'portfolio-theme' ),
        'item_revereted_to_draft'  => __( 'Skill reverted to draft', 'portfolio-theme' ),
        'item_trashed'             => __( 'Skill trashed', 'portfolio-theme' ),
        'item_scheduled'           => __( 'Skill scheduled', 'portfolio-theme' ),
        'item_updated'             => __( 'Skill updated', 'portfolio-theme' ),
        'item_link'                => __( 'Skill link', 'portfolio-theme' ),
        'item_link_description'    => __( 'A link to a skill', 'portfolio-theme' ),
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
        'rewrite'            => array( 'slug' => 'skills' ),
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-edit',
        'supports'           => array( 'title', 'editor')
    );

    register_post_type( 'portfolio-skill', $args );
}
add_action( 'init', 'portfolio_register_custom_post_types' );

// Featured taxonomy for Projects
function portfolio_register_taxonomies() {
    $labels = array(
        'name'                  => _x( 'Features', 'taxonomy general name', 'portfolio-theme' ),
        'singular_name'         => _x( 'Featured', 'taxonomy singular name', 'portfolio-theme' ),
        'search_items'          => __( 'Search Featured', 'portfolio-theme' ),
        'all_items'             => __( 'All Featured', 'portfolio-theme' ),
        'parent_item'           => __( 'Parent Featured', 'portfolio-theme' ),
        'parent_item_colon'     => __( 'Parent Featured:', 'portfolio-theme' ),
        'edit_item'             => __( 'Edit Featured', 'portfolio-theme' ),
        'view_item'             => __( 'View Featured', 'portfolio-theme' ),
        'update_item'           => __( 'Update Featured', 'portfolio-theme' ),
        'add_new_item'          => __( 'Add New Featured', 'portfolio-theme' ),
        'new_item_name'         => __( 'New Featured Name', 'portfolio-theme' ),
        'template_name'         => __( 'Featured Archives', 'portfolio-theme' ),
        'menu_name'             => __( 'Featured', 'portfolio-theme' ),
        'not_found'             => __( 'No featured found.', 'portfolio-theme' ),
        'no_terms'              => __( 'No featured', 'portfolio-theme' ),
        'items_list_navigation' => __( 'Featured list navigation', 'portfolio-theme' ),
        'items_list'            => __( 'Featured list', 'portfolio-theme' ),
        'item_link'             => __( 'Featured Link', 'portfolio-theme' ),
        'item_link_description' => __( 'A link to a featured.', 'portfolio-theme' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'featured' ),
    );

    register_taxonomy( 'featured', array( 'portfolio-project' ), $args );
}
add_action( 'init', 'portfolio_register_taxonomies' );