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
        
            <div class="site-logo">
            <a href = "<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo get_template_directory_uri() ?> /img/wildz_net.png" class="logoimage">
            </a>
                <p class="desc">Free games</p>
            </div>
            <div class="site-ilustration">
            <img src="<?php echo get_template_directory_uri() ?> /img/ilustration.png" class="logoimage">
            </div>
                <nav class="site-navigation">
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
    
