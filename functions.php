<?php

add_theme_support('menus');

add_theme_support('post-thumbnails');

if (!function_exists('sostrento_styles')) :

    function sostrento_styles()
    {

        wp_register_style(
            'sostrento-style',
            get_template_directory_uri() . '/style.css',
        );

        wp_register_script(
            'sostrento-main-script',
            get_template_directory_uri() . '/scripts/main.js',
            [],
            false,
            true
        );

        // add bootstrap css and js
        wp_register_style(
            'bootstrap-cdn-css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',
            [],
            '5.1.3',
        );

        wp_register_script(
            'bootstrap-cdn-js',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
            [],
            '5.1.3',
            true
        );

        // enqueue theme stylesheet.
        wp_enqueue_style('bootstrap-cdn-css');
        wp_enqueue_style('sostrento-style');

        // enqueue theme script.
        wp_enqueue_script('bootstrap-cdn-js');
        wp_enqueue_script('sostrento-main-script');

    }

endif;

add_action('wp_enqueue_scripts', 'sostrento_styles');

function custom_new_menu()
{

    register_nav_menus([
        'menu-principale ' => 'Manu principale',

    ]);

}

add_action('init', 'custom_new_menu');



