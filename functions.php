<?php
// Define path
define('WILDZ_TEMPLATE_DIR', get_template_directory());
define('WILDZ_DIR_URI', get_template_directory_uri());




function wildz_styles(){
//  Stylesheet
    wp_register_style('style', get_template_directory_uri() . '/style.css', array() ,'1.0');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_register_script('app', get_template_directory_uri() . '/dist/app.js' , ['jquery'], 1, true );
    


// Enqueue
wp_enqueue_style('style');
wp_enqueue_style('bootstrap');
wp_enqueue_script('app');

}
add_action('wp_enqueue_scripts','wildz_styles');

function wildz_scripts(){
//  Javascript
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js','jquery', false, true);

//  Enqueue
wp_enqueue_script('bootstrap');
wp_enqueue_script('jquery');
wp_enqueue_script('script');


}
add_action('wp_enqueue_scripts','wildz_scripts');

//  Menu
function wildz_menus(){
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
    ));
}
add_action('init','wildz_menus');



// Image sizes

/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'small-img', 150, 150, true ); //(cropped)
	add_image_size( 'medium-img', 300, 300, false ); //(scaled)
	add_image_size( 'big-img', 500, 500, true ); //(cropped)
	add_image_size( 'verbig-img', 720, 720, true ); //(cropped)
}

//  Custom Post Type

function games()
{

    $args = array (
        'labels' => array(
                'name' => 'Games',
                'singular_name' => 'Game'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-money-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'editor'),
        'rewrite' => array('slug' => 'Games'),
    );

    register_post_type( 'games', $args);

}
add_action('init','games');

// Taxonomy (tags)
if ( ! function_exists( 'games_tags' ) ) {
    function games_tags() {
    
       $labels = array(
        'name' => __( 'Tags', 'ns' ),
        'singular_name' => __( 'Tag', 'ns' ),
        'search_items' =>  __( 'Search Tags' ),
        'popular_items' => __( 'Popular Tags' ),
        'all_items' => __( 'All Tags' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Tag' ),
        'update_item' => __( 'Update Tag' ),
        'add_new_item' => __( 'Add New Tag' ),
        'new_item_name' => __( 'New Tag Name' ),
        'separate_items_with_commas' => __( 'Separate tags with commas' ),
        'add_or_remove_items' => __( 'Add or remove tags' ),
        'choose_from_most_used' => __( 'Choose from the most used tags' ),
        'menu_name' => __( 'Tags' ),
       );

       $args = array(
        'label' => __( 'Tag', 'ns' ),
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tag', 'with_front' => false, ),
        'show_admin_column' => false,
        'show_in_rest' => true,
        'rest_base' => 'tag',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'show_in_quick_edit' => true,
        'update_count_callback' => '_update_post_term_count',
    );
    register_taxonomy( 'category', array( 'games' ), $args );
    }
    add_action( 'init', 'games_tags', 0 );
    }


//Shortcodes

function games_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'category' => '',
        ),
        $atts,
        'all_games'
    );

    $args = array(
        'post_type' => 'games',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $atts['category'],
                'cat' => $category->term_id,
                'category_name' => $category,

            )
        ),
    );

    ob_start();

    $loop = new WP_Query($args);

    if($loop->have_posts()) {    

        while($loop->have_posts()) : $loop->the_post();

        get_template_part('template-parts/posts-shortcode');


        endwhile;
    }

    return ob_get_clean();
}
add_shortcode( 'all_games','games_shortcode' );



// test shortcodes



?>