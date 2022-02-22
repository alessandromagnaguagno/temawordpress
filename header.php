<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> 
        <?php 
            wp_title( '|', true, 'right' ); 
            bloginfo('name');     
            if ( is_home() || is_front_page() ) echo ' | ' . get_bloginfo( 'description' );
        ?> 
    </title>
    <?php wp_head(); ?>
</head>
<body>

<?php 
        wp_nav_menu(array(
            'fallback_cb' => '', 
            'menu' => 'menu-principale', 
            'container' => 'nav', 
            'container_class' => 'menu-principale-container'
        ));
        ?>

