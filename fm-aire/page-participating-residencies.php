<?php
// Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

wp_head();

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
endif;

get_footer();
?>
