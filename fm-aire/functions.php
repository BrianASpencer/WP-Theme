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
    wp_enqueue_style('landing-styles', get_template_directory_uri() . '/custom/styling/landing.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

add_action('after_setup_theme', 'setup');

// SPECIAL WPFORO Style loading:
/*
function enqueue_wpforo_styles() {
    wp_enqueue_style('wpforo-matrix', get_template_directory_uri() . '/wpForo/styles/matrix.css');
    wp_enqueue_style('wpforo-styles', get_template_directory_uri() . '/wpForo/style.css');
    wp_enqueue_style('wpforo-styles-rtl', get_template_directory_uri() . '/wpForo/style-rtl.css');
    wp_enqueue_style('wpforo-widgets', get_template_directory_uri() . '/wpForo/widgets.css');
    wp_enqueue_style('wpforo-widgets-rtl', get_template_directory_uri() . '/wpForo/widgets-rtl.css');
}
add_action('wp_enqueue_scripts', 'enqueue_wpforo_styles', 10);
*/

function enqueue_wpforo_styles() {
    //$wpforo_styles_url = plugins_url('/themes/2022/style.css', __FILE__);
    //wp_enqueue_style('wpforo-styles', $wpforo_styles_url, array(), '2.3.0');
    wp_deregister_style('wpforo-style');
    $wpforo_styles_url = plugins_url('/themes/2022/style.css');
    wp_enqueue_style('wpforo-style', $wpforo_styles_url);
}

//add_action('wp_enqueue_scripts', 'enqueue_wpforo_styles');




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
    
    // Attempt to include the file with error handling
    try {
        include get_template_directory() . '/custom/shortcode/card.php';
    } catch (Exception $e) {
        // Log or display the error message
        error_log('Error including card.php in info_card_shortcode: ' . $e->getMessage());
    }

    // Calling info card function
    info_card($atts['title'], $atts['left_content'], $atts['right_content']);

    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('info_card', 'info_card_shortcode');

// Info Card 75/25 shortcode
function info_card_75_25_shortcode($atts) {
    include 'custom/shortcode/card.php';
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

    // Calling contact us function
    contact_us();

    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('contact_us', 'contact_us_shortcode');

// Landing Placard shortcode
function landing_placard_shortcode() {
    include 'custom/shortcode/landing-placard.php';
    
    // Start output buffering
    ob_start();

    // Calling contact us function
    landing_placard();

    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('landing_placard', 'landing_placard_shortcode');

// Landing Info Cards shortcode
function landing_info_cards_shortcode() {
    $left_content = '<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>';

    $right_content = $left_content;

    $left_content_bottom_long = '<span>Nec ullamcorper sit amet risus. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Laoreet suspendisse interimconsectetur libero id faucibus nisl. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque. Aliquam vestibulum morbi blandit cursus risus at. Viverra ipsum nunc aliquet bibendum enim. Aliquam etiam erat velit scelerisque in dictum non consectuetur a. A iaculis at erat pellentesque adipiscing. Velit sed ullamcorper morbi tincidunt.</span>';

    $left_content_bottom_short = '<span>Nec ullamcorper sit amet risus. Hac Hibitasse platea dictumst vestibulum rhoncus est pellentesque. Laoreet supsendisse interim.</span>';

    $sub_header = '<h3 class="info-card-subheader">Smaller subhead here</h3>';

    $sub_header_top = '<h3 class="info-card-subheader top">Smaller subhead here</h3>';

    $find_out_button = '<button type="button" class="find-out-button">FIND OUT MORE</button>';
    
    // Attempt to include the file with error handling
    try {
        include get_template_directory() . '/custom/shortcode/card.php';
    } catch (Exception $e) {
        // Log or display the error message
        error_log('Error including card.php in landing_info_cards_shortcode: ' . $e->getMessage());
    }

    // Output HTML for the landing info cards
    ob_start();

    
    info_card('What is FM-AIREE?', '<strong>'.$left_content.$sub_header.$left_content_bottom_short.'</strong>', $sub_header_top.'<strong>'.$right_content.'</strong><br><br>'.$find_out_button);
    info_card('Who is eligible to apply', $left_content.$sub_header.$left_content_bottom_short, $sub_header_top.$right_content.'<br><br>'.$find_out_button);
    info_card('What are the priorities for Innovation?', $left_content.$sub_header.$left_content_bottom_short, $sub_header_top.$right_content.'<br><br>'.$find_out_button);
    
    
    $list_subheader_doc = '<h3 class="info-card-subheader top">Document Link list</h3>';
    $list_subheader_res = '<h3 class="info-card-subheader">Resources</h3>';
    $list = '
    <ul>
        <li>Nec ullamcorper sit amet</li>
        <li>platea dictumst vestibulum</li>
        <li>pellentesque. Laoreet</li>
        <li>Consectetur libero id</li>
    </ul>';
    info_card_75_25('How do we apply?', $left_content.$sub_header.$left_content_bottom_long.'<br><br>'.$find_out_button, $list_subheader_doc.$list.$list_subheader_res.$list);

    // Get the buffered content
    $output = ob_get_clean();

    return $output;
}
add_shortcode('landing_info_cards', 'landing_info_cards_shortcode');


?>