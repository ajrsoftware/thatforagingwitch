<?php

function tfw_dequeue()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'tfw_dequeue', 100);

function tfw_admin_enqueue()
{

}

add_action('admin_enqueue_scripts', 'tfw_admin_enqueue');

function tfw_enqueue()
{
    wp_register_style(THEME_NAME, get_stylesheet_directory_uri() . '/dist/output.css', [], THEME_VERSION, 'all');
    wp_enqueue_style(THEME_NAME);
}

add_action('wp_enqueue_scripts', 'tfw_enqueue');

// Woocommerce
add_filter('woocommerce_enqueue_styles', 'tfw_woo_dequeue_styles');
function tfw_woo_dequeue_styles($enqueue_styles)
{
    // unset($enqueue_styles['woocommerce-general']); // Remove the gloss
    // unset($enqueue_styles['woocommerce-layout']); // Remove the layout
    // unset($enqueue_styles['woocommerce-smallscreen']); // Remove the smallscreen optimisation
    return $enqueue_styles;
}
