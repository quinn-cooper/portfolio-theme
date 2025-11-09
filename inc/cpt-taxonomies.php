<?php

// Change "Posts" to "Projects"
function change_post_menu_label() {
    global $menu, $submenu;

    // Main admin menu
    $menu[5][0] = 'Projects';

    // Submenu items
    $submenu['edit.php'][5][0]  = 'All Projects';
    $submenu['edit.php'][10][0] = 'Add New Project';
    $submenu['edit.php'][16][0] = 'Project Tags';
    echo '';
}
add_action('admin_menu', 'change_post_menu_label');

// Change post object labels to "projects"
function change_post_object_label(){
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name                       = 'Projects';
    $labels->singular_name              = 'Project';
    $labels->add_new                    = 'Add New Project';
    $labels->add_new_item               = 'Add New Project';
    $labels->edit_item                  = 'Edit Project';
    $labels->new_item                   = 'Project';
    $labels->view_item                  = 'View Project';
    $labels->view_items                 = 'View Projects';
    $labels->search_items               = 'Search Projects';
    $labels->not_found                  = 'No project found';
    $labels->not_found_in_trash         = 'No project in trash';
    $labels->parent_item_colon          = 'Parent Project:';
    $labels->all_items                  = 'All Projects';
    $labels->archives                   = 'Project Archives';
    $labels->attributes                 = 'Project Attributes';
    $labels->insert_into_item           = 'Insert into project';
    $labels->uploaded_to_this_item      = 'Upload to this project';
    $labels->featured_image             = 'Project featured image';
    $labels->set_featured_image         = 'Set project featured image';
    $labels->remove_featured_image      = 'Remove project featured image';
    $labels->use_featured_image         = 'Use as featured image';
    $labels->menu_name                  = 'Projects';
    $labels->filter_items_list          = 'Filter projects list';
    $labels->items_list_navigation      = 'Projects list navigation';
    $labels->items_list                 = 'Projects list';
    $labels->item_published             = 'Project published';
    $labels->item_published_privately   = 'Project published privately.';
    $labels->item_revereted_to_draft    = 'Project reverted to draft.';
    $labels->item_trashed               = 'Project trashed';
    $labels->item_scheduled             = 'Project scheduled';
    $labels->item_updated               = 'Project updated';
    $labels->item_link                  = 'Project link';
    $labels->item_link_description      = 'A link to a project.';

}
add_action('init', 'change_post_object_label');
