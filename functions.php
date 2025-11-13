<?php
// Charger les styles et scripts
function BioPanier_enqueue_scripts() {
    //support woocommerce
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    // Style de base
    wp_enqueue_style('BioPanier-base', get_template_directory_uri() . '/assets/css/style.css');
    
    // Style spécifique à la page d'accueil
    if (is_front_page() || is_home()) {
        wp_enqueue_style('BioPanier-index', get_template_directory_uri() . '/assets/css/style-complete_index.css');
    } elseif (is_page('About')) {
        
        wp_enqueue_style('BioPanier-about', get_template_directory_uri() . '/assets/css/style-complete_about.css');
    } 
    
    // Scripts JavaScript
    wp_enqueue_script('BioPanier-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'BioPanier_enqueue_scripts');  // CORRIGÉ ICI

// Support des fonctionnalités WordPress
function BioPanier_setup() {
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'BioPanier'),
    ));
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'BioPanier_setup');

function remove_woocommerce_default_behavior(){
    remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
}
add_filter('woocommerce_enqueue_styles', '__return_empty_array');
?>