<?php

// register our header navigation menu in
// the header, footer, and 404 pages
function register_nav() {
    register_nav_menus (
        array(
            'header' => 'Header'
        )
    );
    register_nav_menus (
        array(
            'footer' => 'Footer'
        )
    );
    register_nav_menus (
        array(
            '404' => '404'
        )
    );
}

if (!function_exists('setup')):
    function setup() {
        register_nav();
    }
endif;

// enqueue the stylesheet
function scripts_header(){
    wp_enqueue_style('init', get_stylesheet_uri());
}

// load the scripts for the footer
function scripts_footer(){
    //wp_enqueue_script('init', get_template_directory_uri().'/js/init.js', array('jquery'));
}

add_action('after_setup_theme', 'setup');
add_action('wp_enqueue_scripts', 'scripts_header');
//add_action('wp_footer', 'scripts_footer');


/* Shortcodes */

/*
function wpforo_page_show_courses( $template ){
   if( $template == 'contact-us' ){
        include_once get_template_directory() . '/custom/contact-us.php';
   }
}
add_action( 'wpforo_page', 'wpforo_page_show_courses', 10 );
*/

function set_contact_us_template($template) {
    if (is_page('contact-us')) {
        $new_template = locate_template(array('contact-us-template.php'));
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'set_contact_us_template');



?>