<?php
    function add_title_tag() {
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'add_title_tag' );

    function add_menus() {
        $menuLocations = array(
            'primary_menu' => "Primay menu",
            'footer_menu' => "Footer items",
        );

        register_nav_menus( $menuLocations );
    }

    add_action( 'init', 'add_menus' );

    function theme_register_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style( 'global-style', get_template_directory_uri()."/style.css", array('bootstrap'), $version, 'all' );
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), '4.6.0', 'all' );
    }

    add_action( 'wp_enqueue_scripts', 'theme_register_styles');

    function theme_register_scripts() {
        wp_enqueue_script( 'jquery-cdnjs', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
        wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array(), '4.6.0', true);
        wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array(), '1', true);
    }

    add_action( 'wp_enqueue_scripts', 'theme_register_scripts');
?>