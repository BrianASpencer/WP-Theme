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

function enqueue_wpforo_styles() {
    //$wpforo_styles_url = plugins_url('/themes/2022/style.css', __FILE__);
    //wp_enqueue_style('wpforo-styles', $wpforo_styles_url, array(), '2.3.0');
    wp_deregister_style('wpforo-style');
    $wpforo_styles_url = plugins_url('/themes/2022/style.css');
    wp_enqueue_style('wpforo-style', $wpforo_styles_url);
}

//add_action('wp_enqueue_scripts', 'enqueue_wpforo_styles');


/* Shortcodes */

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
	
	$info_card_1_title = 'What is FM-AIRE?';
	$info_card_2_title = 'Who is eligible to submit proposals?';
	
	$info_card_1_left = "<span>FM-AIRE is a GME Innovation pilot sponsored by the ACGME and ABFM, exploring outcomes of 4-year family medicine residency training and time variable training beyond 36 months.</span><br><br><span>This initiative is designed to solicit and explore GME innovations from family medicine residencies that want to expan the length of training to:</span><ol><li>develop advanced expertise and clinical mastery in family medicine that prepare graduates for contemporary and innovative practice</li><br><li>incorporate and expand principles of competency-based medical education</li><br><li>enhance the social responsiveness and community engagement of family medicine residency programs</li></ol>";
	
	$info_card_2_left = '<span>Family medicine residency programs and their sponsoring institutions with promising educational and clinical designs that want to:</span><br><br><ul class="blue-square-bullets"><li>test extending family medicine residency training time beyond 36 months</li><li>share what is learned with the family medicine community</li><li>advance the newly revised specialty program requirements</li></ul>';
	
	$info_card_1_right = '<h3 class="info-card-subheader top">Possible Innovations</h3><br><span>We\'re looking for programs interested in extending pathways beyond 36 months.</span><br><span>That can mean:</span><ul class="blue-square-bullets"><li>Integrated, longitudinal fellowships that allow residents to expand the scope of practice over the length of their residency, (not only after the third year), adding qualifications that expand comprehensiveness of care</li><li>Fully-integrated four year residency focused on holistic professional development geared toward mastery</li><li>Comprehensive Family Medicine training with concetrations in specific areas of expertise, that move graduates further towards mastery in some particular domain of family medicine care, or leadership</li></ul>';
	
	$info_card_2_right = '<h3 class="info-card-subheader top">Questions?</h3><br><a href="https://test.fmaire.org/contact-us/">Contact us</a><br><br><br><h3 class="info-card-subheader top">Ready to Get Started?</h3><br><span>Start an application join the AIRE community by selecting the button below.</span><br><br><div style="text-align: center"><button type="button" class="start-application-button">Start an Application</button></div>';

    
    info_card($info_card_1_title, $info_card_1_left, $info_card_1_right);
	info_card($info_card_2_title, $info_card_2_left, $info_card_2_right);

    // Get the buffered content
    $output = ob_get_clean();

    return $output;
}
add_shortcode('landing_info_cards', 'landing_info_cards_shortcode');


?>
