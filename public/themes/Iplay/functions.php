<?php

declare(strict_types=1);

require template_path('includes/plugins/plate.php');
require_once template_path('custom_fields/home.php');

// Adding edit meny option
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');

    show_admin_bar(false);

    register_nav_menu('primary-menu', __('Primary Menu', 'iplay'));

});


// Enqueue styles and scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');

    wp_enqueue_style('wordplate', mix('styles/app.css'));

    wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('wordplate');
});


/**
* Adds custom user role and privileges
*
* @return void
*/
add_role(
    'master',
    __('Master'),
array(
  'read' => true, // true allows this capability
  'edit_posts' => true, // Allows user to edit their own posts
  'edit_pages' => true, // Allows user to edit pages
  'edit_others_posts' => true, // Allows user to edit others posts not just their own
  'create_posts' => false, // Allows user to create new posts
  'manage_categories' => false, // Allows user to manage post categories
  'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
  'edit_themes' => false, // false denies this capability. User can’t edit your theme
  'install_plugins' => false, // User cant add new plugins
  'update_plugin' => false, // User can’t update any plugins
  'update_core' => false // user cant perform core updates
));
function add_description_to_menu($item_output, $item, $depth, $args) {
    if (strlen($item->description) > 0 ) {
        // append description after link

        $item_output .= sprintf("<span class=description-$item->title>%s</span><span class=goto-$item->title>Go to $item->title ></span>", esc_html($item->description));

        // insert description as last item *in* link ($input_output ends with "</a>{$args->after}")
        //$item_output = substr($item_output, 0, -strlen("</a>{$args->after}")) . sprintf('<span class="description">%s</span >', esc_html($item->description)) . "</a>{$args->after}";
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'add_description_to_menu', 10, 4);
