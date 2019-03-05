<?php
/*
 * Used to load the style.css in page.
 */
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_script('script', get_template_directory_uri() . '/custom.js', array('jquery'), 1.0,true);
/*
 * Function created for custom menus.
 */
function wpb_custom_menu() {
    register_nav_menus (
        array (
        'header-menu' => ('Header menu'),
        'footer-menu' => ('Footer menu')
        )
    );
}

/*
 * Loads the settings at the activation of the theme.
 */
add_action('init', 'wpb_custom_menu');
