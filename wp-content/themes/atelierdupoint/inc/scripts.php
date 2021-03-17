<?php

function atelierEnqueueStyles(){
    wp_enqueue_style('main', ATELIER_ASSETS_DIST_URI . '/main.css');
    wp_enqueue_style('semantic', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css');
}

function atelierEnqueueScripts(){
    wp_enqueue_script('main', ATELIER_ASSETS_DIST_URI . '/main.js');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=');
    wp_enqueue_script('semantic', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js', ['jquery']);
}

add_action('wp_enqueue_scripts', 'atelierEnqueueStyles');
add_action('wp_enqueue_scripts', 'atelierEnqueueScripts');