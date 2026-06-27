<?php
/**
 * Theme functions for Mebel Mira.
 *
 * @package MebelMira
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function mebelmira_setup() {
    load_theme_textdomain( 'mebelmira', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo' );

    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'mebelmira' ),
        )
    );
}
add_action( 'after_setup_theme', 'mebelmira_setup' );

function mebelmira_enqueue_assets() {
    wp_enqueue_style( 'mebelmira-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_style( 'mebelmira-main', get_template_directory_uri() . '/assets/css/main.css', array( 'mebelmira-style' ), '1.0' );
    wp_enqueue_script( 'mebelmira-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mebelmira_enqueue_assets' );
