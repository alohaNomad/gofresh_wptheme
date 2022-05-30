<?php 
 /** Comment */
function Lade_zeug() 
{
    /* CSS */
    wp_register_style(
        'style', 
        get_template_directory_uri() . '/assets/css/style.css', 
        array(), false, 
        'all'
    );
    wp_register_style('theme', get_template_directory_uri() . '/assets/css/theme.css', array(), false, 'all');
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), false, 'all');
    
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('style');
    wp_enqueue_style('theme');

    /* Javascript */
    wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', '', 1, true);

    wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'lade_zeug');

add_theme_support('custom-logo');

/* function custom_nav(){
    register_nav_menu(array(
        'top-nav' => __('top nav', 'theme'),
        'footer-nav' => __('footer nav', 'theme') )
    );
} */
?>