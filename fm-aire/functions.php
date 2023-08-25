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
//require_once('shortcodes/practice-areas.php');
//require_once('shortcodes/team.php');

//31:40 seems very important to do.

?>