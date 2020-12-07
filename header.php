<?php

/**
 * Header Template
 * 
 * @package Casinon
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildz</title>
   <?php wp_head();?>
</head>
<body>

<header id="header" class="site-header">

    <div class="site-header-inner">
            <div class ="site-header-top">
            <div class="site-logo">
         <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );
         ?>
            <img class="logoimage" src="<?php echo $image[0]; ?>" alt="">
                <p class="desc">Free games</p>
            </div>
            <div class="site-ilustration">
            <img src="<?php echo get_template_directory_uri() ?> /img/ilustration.png" class="logoimage">
            </div>
</div>
                <nav class="site-navigation">
                <div class="mobile-menu">
                        <a href="#" class="mobile">&#9776;</a>
                    </div>
                <?php
                        $args = array(
                            'theme_location' => 'main-menu',
                            'container'      => 'nav',
                            'container_class'=> 'site-nav'
                        );
                    
                        wp_nav_menu($args);
                        ?>

                </nav>


    </div>
</header>
    
