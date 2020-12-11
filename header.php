<?php

/**
 * Header Template
 * 
 * @package wILDZ
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
                <img class="sitelogo" src="<?php echo $image[0]; ?>" alt="">
                    <p class="desc">Free games</p>
                </div>
              
        
    </div>
                <div class="site-navigation">

                        <button class="nav-toggle">
                            <span class="bar-top"></span>
                            <span class="bar-mid"></span>
                            <span class="bar-bot"></span>
                        </button>
                                
                

                        <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );
                        ?>  
                        <img class="mobile-sitelogo" src="<?php echo $image[0]; ?>" alt="">
                        <div class ="mobile-menuheader">
                        <?php
                        $args = array(
                            'theme_location' => 'main-menu',
                            'container'      => 'nav',
                            'container_class'=> 'site-nav'
                        );
                    
                        wp_nav_menu($args);
                        ?>
                        </div>
                 
                    </div>
                    <div class="mobile-menu">
                     <?php
                        $args = array(
                            'theme_location' => 'mobile-menu',
                            'container'      => 'nav',
                            'container_class'=> 'mobile-nav'
                        );
                    
                        wp_nav_menu($args);
                        ?>
                  
                </div>
            

    </div>
</header>
    
