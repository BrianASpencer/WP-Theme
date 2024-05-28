<?php
// Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

get_header();
wp_head();


if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
endif;

get_footer();
wp_footer();
?>
