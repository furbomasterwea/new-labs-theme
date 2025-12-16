<?php
/**
 * Aviada Labs Theme functions
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Cargar estilos del tema
 */
function aviada_labs_enqueue_styles() {

    // Tailwind CSS (local)
    wp_enqueue_style(
        'aviada-labs-tailwind',
        get_stylesheet_directory_uri() . '/dist/tailwind.css',
        array(),
        filemtime(get_stylesheet_directory() . '/dist/tailwind.css')
    );

    // Estilos del tema
    wp_enqueue_style(
        'aviada-labs-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'aviada_labs_enqueue_styles', 20);

/**
 * Configuración básica del tema
 */
function aviada_labs_setup() {

    // Traducciones
    load_theme_textdomain(
        'aviada-labs',
        get_stylesheet_directory() . '/languages'
    );

    // Soporte de WordPress
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'aviada_labs_setup');
