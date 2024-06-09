<?php

declare(strict_types=1);

namespace TRAINEE_ONE;

class Theme_Setup
{
    use Singleton;

    protected function __construct() {
        // Add other classes
        Assets_Register::get_instance();
        Dynamic_Navigation_Menu::get_instance();

        // Hooks
        add_action('after_setup_theme', [$this, 'theme_setups']);
    }

    public function theme_setups() {
        // title tag
        add_theme_support('title-tag');

        // HTML5 supports
        add_theme_support('html5', [
            'comment-list', 
            'comment-form', 
            'search-form', 
            'gallery', 
            'caption'
        ]);

        // refresh widgest
        add_theme_support('customize-selective-refresh-widgets');
    }
}