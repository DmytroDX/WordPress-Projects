<?php

declare(strict_types=1);

namespace TRAINEE_ONE;

class Dynamic_Navigation_Menu 
{
    use Singleton;

    protected function __construct()
    {
        // Add actions
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus() {
        register_nav_menus([
            'header-menu' => esc_html__('Header Menu', 'trainee-one'),
        ]);
    }

    public function get_nav_menu_id(string $nav_location) : int {
        return get_nav_menu_locations()[$nav_location];
    }
}