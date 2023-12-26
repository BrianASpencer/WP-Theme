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

function is_custom_login_page() {
    return strpos($_SERVER['REQUEST_URI'], '/sign-in') !== false;
}

// Enqueue styles
// All the styling for custom elements (in shortcodes most of the time)
// are loaded here. The page must have wp_head() to load these, though
function enqueue_custom_styles() {
    wp_enqueue_style('info-card-styles', get_template_directory_uri() . '/custom/styling/info-card.css');
    wp_enqueue_style('login-styles', get_template_directory_uri() . '/custom/styling/login.css');
    wp_enqueue_style('contact-us-styles', get_template_directory_uri() . '/custom/styling/contact-us.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

add_action('after_setup_theme', 'setup');


/* Shortcodes */

/*
function wpforo_page_show_courses( $template ){
   if( $template == 'contact-us' ){
        include_once get_template_directory() . '/custom/contact-us.php';
   }
}
add_action( 'wpforo_page', 'wpforo_page_show_courses', 10 );
*/

// Info Card shortcode
function info_card_shortcode($atts) {
    include 'custom/card.php';
    // Parse shortcode attributes
    $atts = shortcode_atts(
        array(
            'title' => '',
            'left_content' => '',
            'right_content' => '',
        ),
        $atts,
        'info_card'
    );

    // Start output buffering
    ob_start();

    // Calling info card function
    info_card($atts['title'], $atts['left_content'], $atts['right_content']);

    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('info_card', 'info_card_shortcode');

// Info Card 75/25 shortcode
function info_card_75_25_shortcode($atts) {
    include 'custom/card.php';
    // Parse shortcode attributes
    $atts = shortcode_atts(
        array(
            'title' => '',
            'left_content' => '',
            'right_content' => '',
        ),
        $atts,
        'info_card'
    );

    // Start output buffering
    ob_start();

    // Calling info card function
    info_card_75_25($atts['title'], $atts['left_content'], $atts['right_content']);

    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('info_card_75_25', 'info_card_75_25_shortcode');

// Login shortcode
function login_shortcode() {
    include 'custom/shortcode/login.php';
    
    // Start output buffering
    ob_start();

    // Calling info card function
    login();

    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('login', 'login_shortcode');

// Contact Us shortcode
function contact_us_shortcode() {
    include 'custom/shortcode/contact-us.php';
    
    // Start output buffering
    ob_start();

    // Calling info card function
    contact_us();

    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('contact_us', 'contact_us_shortcode');

?>