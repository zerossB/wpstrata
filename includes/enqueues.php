<?php

//Include the enqueue header CSS
function wp_developer_theme_styles()
{
    wp_enqueue_style('styles-reset', get_template_directory_uri() . '/assets/css/main.css', '', '1.0');
    wp_enqueue_style('styles-theme', get_template_directory_uri() . '/style.css', '', '1.0');
    //conditional styles
    if (is_page() || is_404() || is_search()) {
    }
    if (is_front_page()) {
    }
    if (is_single()) {
    }
}
add_action('wp_enqueue_scripts', 'wp_developer_theme_styles');
//Include the enqueue footer SCRIPTS
function wp_developer_theme_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('poptrox', get_template_directory_uri() . '/assets/js/jquery.poptrox.min.js', '', '1.0', true);
    wp_enqueue_script('breakpoint', get_template_directory_uri() . '/assets/js/breakpoints.min.js', '', '1.0', true);
    wp_enqueue_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js', '', '1.0', true);
    wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', '', '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', '1.0', true);
}
add_action('wp_enqueue_scripts', 'wp_developer_theme_scripts');
