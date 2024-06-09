<?php

declare(strict_types=1);

namespace TRAINEE_ONE;

class Assets_Register
{
    use Singleton;

    protected function __construct() {
        // Add hooks
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles() {
        wp_register_style(
            'fontawesome-style',
            TEMPLATE_DIRECTORY_URI . 'assets/build/libraries/fontawesome/all.min.css',
            [],
            false,
            'all'
        );

        wp_register_style(
            'theme-style', 
            TEMPLATE_DIRECTORY_URI . 'assets/build/css/main.css',
            ['fontawesome-style'],
            false,
            'all'
        );

        wp_enqueue_style('fontawesome-style');
        wp_enqueue_style('theme-style');
    }

    public function register_scripts() {
        wp_register_script(
            'bootstrap-script',
            TEMPLATE_DIRECTORY_URI . 'assets/build/libraries/bootstrap/bootstrap.min.js',
            [],
            false,
            true
        );

        wp_register_script(
            'fontawesome-script',
            TEMPLATE_DIRECTORY_URI . 'assets/build/libraries/fontawesome/all.min.js',
            [],
            false,
            true
        );

        wp_register_script(
            'theme-script',
            TEMPLATE_DIRECTORY_URI . 'assets/build/js/main.js',
            ['bootstrap-script', 'fontawesome-script'],
            false,
            true
        );

        wp_enqueue_script('bootstrap-script');
        wp_enqueue_script('fontawesome-script');
        wp_enqueue_script('theme-script');
    }
}