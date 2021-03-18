<?php

function register_menus()
{
    register_nav_menus(
        [
            'header-menu' => __('Header Menu'),
            'social-menu' => __('Social Menu')
        ]
    );
}

function getMenuItems()
{
    $menuLocations = get_nav_menu_locations();
    $headerMenuId = $menuLocations['header-menu'];

    return wp_get_nav_menu_items($headerMenuId);
}

add_action('init', 'register_menus');
