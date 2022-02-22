<?php

add_theme_support('menus');

add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'sostrento_styles' ) ) :

    function sostrento_styles() {

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

        // enqueue theme stylesheet.
        wp_enqueue_style( 'sostrento-style' );

        // enqueue theme script.
        wp_enqueue_script( 'sostrento-main-script' );

    }

endif;

add_action( 'wp_enqueue_scripts', 'sostrento_styles' );