<?php
function loadThemeResources()
{
    wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');
    wp_enqueue_style('lightbox-css', get_template_directory_uri() . '/lightbox/css/lightbox.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());


    wp_enqueue_script('jq', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/slick/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/lightbox/js/lightbox.min.js', array(), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'loadThemeResources');


register_nav_menus(array(
    'header-nav' => __('Primary Menu'),
    'secondary-nav' => __('Secondary Menu'),
    'footer-nav' => __('Footer Menu'),

));


add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme Options',
        'menu_title'	=> 'Theme Options',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
};


add_filter('excerpt_length', function () {
    return 20;
});

add_filter('excerpt_more', function () {
    return '..';
});
