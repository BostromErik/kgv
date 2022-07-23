<?php

function kgv_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'kgv_custom_logo_setup');


function scripts()
{
    wp_register_style('style', get_template_directory_uri(). '/dist/css/app.css', 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri().'/dist/js/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');

function kgv_add_menu(){
    register_nav_menus(
        array(
            'main_menu' => 'Huvudmeny'
        )
    );
}
add_action('init', 'kgv_add_menu');
