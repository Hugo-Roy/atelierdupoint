<?php

function oprofileThemeSupports() {
    add_theme_support('post-thumbnails');
}

add_action('init', 'oprofileThemeSupports');