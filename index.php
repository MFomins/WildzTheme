<?php
/**
 * The site's entry point.
 *
 * @package Casinon
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

if (is_singular('page')) {
    //If is page load page template
    get_template_part('template/page');

} elseif (is_singular('post')) {
    //If is post load post template
    get_template_part('template/post');
    
} elseif (is_archive()) {
    //If is archive load archive template
    get_template_part('template/archive');

} else {
    get_template_part('template/404');
}



get_footer();