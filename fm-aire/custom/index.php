<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Template Name:  Forum Index ( Forums List )
*/
get_header();

if ( is_front_page() ) {
    include_once get_template_directory() . '/custom/landing-page.php';
    get_footer();
    exit();
}

do_action( 'wpforo_content_start' );

if ( ! in_array( WPF()->current_user_status, [ 'banned', 'trashed' ] ) ) {
    if ( ! WPF()->current_object['is_404'] ) {
        if ( WPF()->current_object['template'] === 'page' ) {
            wpforo_page();
        } elseif ( wpforo_is_member_template() ) {
            wpforo_template( 'member' );
        } elseif ( in_array( WPF()->current_object['template'], [ 'forum', 'topic' ] ) ) {
            wpforo_template( 'forum' );
            if ( WPF()->current_object['template'] === 'topic' ) {
                wpforo_template( 'topic' );
            } else {
                wpforo_admin_cpanel();
            }
        } else {
            wpforo_template();
        }
    } else {
        wpforo_template( '404' );
    }
}

do_action( 'wpforo_bottom_hook' );
get_footer();
?>
