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

add_action('init', 'register_menus');
