<?php

function trainee_register_styles() {
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        [],
        '5.0.2',
        'all'
    );

    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        [],
        '6.5.1',
        'all'
    );

    // wp_enqueue_style(
    //     'fancybox',
    //     get_template_directory_uri() . '/assets/css/fancybox.css',
    //     [],
    //     '5.0.33',
    //     'all'
    // );

    wp_enqueue_style(
        'fancybox',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css',
        [],
        '5.0.33',
        'all'
    );

    wp_enqueue_style(
        'main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['bootstrap'],
        false,
        'all'
    );
}
add_action('wp_enqueue_scripts', 'trainee_register_styles');

function trainee_register_scripts() {
    wp_enqueue_script(
        'jquery',
    );

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        [],
        '5.0.2',
        true
    );

    // wp_enqueue_script(
    //     'fancybox',
    //     get_template_directory_uri() . '/assets/js/fancybox.esm.js',
    //     ['jquery'],
    //     '5.0.33',
    //     true
    // );

    wp_enqueue_script(
        'fancybox',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js',
        ['jquery'],
        '5.0.33',
        true
    );

    wp_enqueue_script(
        'slick',
        get_template_directory_uri() . '/assets/js/slick.min.js',
        ['jquery'],
        '1.8.1',
        true
    );

    wp_enqueue_script(
        'main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['bootstrap', 'fancybox'],
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'trainee_register_scripts');

function trainee_register_post_type_slides () {
    register_post_type(
        'slides',
        [
            'labels' => [
                'name' => 'Slides',
                'singular_name' => 'Slide',
                'add_new' => 'Add New Slide',
                'edit_item' => 'Edit Slide',
                'new_item' => 'New Slide',
                'view_item' => 'View Slide',
                'not_found' => 'No slides found',
            ],
            'description' => 'Slides for the top slider',
            'public' => true,
            'menu_icon' => 'dashicons-slides',
            'supports' => [
                'title', 'custom-fields'
            ],
            'has_archive' => false,
            'publicly_queryable' => false
        ],
    );

    register_post_type(
        'content',
        [
            'labels' => [
                'name' => 'Content',
                'singular_name' => 'Content',
                'add_new' => 'Add New Content',
                'edit_item' => 'Edit Content',
                'new_item' => 'New Content',
                'view_item' => 'View Content',
                'not_found' => 'No Content found',
            ],
            'description' => 'Main content for the site',
            'public' => true,
            'menu_icon' => 'dashicons-welcome-view-site',
            'supports' => [
                'title', 'custom-fields'
            ],
            'has_archive' => false,
            'publicly_queryable' => false
        ],
    );
}
add_action('init', 'trainee_register_post_type_slides');

function trainee_add_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
}
add_action('after_setup_theme', 'trainee_add_theme_support');

function trainee_register_nav_menu() {
    register_nav_menus([
        'primary' => 'Top navigation menu'
    ]);
}
add_action('init', 'trainee_register_nav_menu');

if (!function_exists('trainee_include_files')) {
    function trainee_include_files() {
        require_once('classes/CustomNavWalker.php');
    }
}
add_action('after_setup_theme', 'trainee_include_files');

?>