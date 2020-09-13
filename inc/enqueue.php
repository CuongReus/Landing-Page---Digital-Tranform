<?php 
if(!function_exists('ls_theme_load_css')) {
    function ls_theme_load_css()
    {
        wp_register_style('front-style', get_template_directory_uri() . '/style.css', array(), rand(111, 9999), 'all');
        wp_enqueue_style('front-style');
    }
    add_action('wp_enqueue_scripts', 'ls_theme_load_css');
}
if(!function_exists('ls_theme_load_js')) {
    function ls_theme_load_js()
    {
        wp_register_script('collapse-js', get_template_directory_uri() . '/js/collapse.js', array(), rand(111, 9999), true);
        if (is_page(array('chuyen-doi-so'))) {
            wp_enqueue_script('collapse-js');
        }
        wp_register_script('validate-js', get_template_directory_uri() . '/js/validate.js', array(), rand(111, 9999), true);
        if (is_page(array('chuyen-doi-so'))) {
            wp_enqueue_script('validate-js');
        }
    }
    add_action('wp_enqueue_scripts', 'ls_theme_load_js');
}
?>