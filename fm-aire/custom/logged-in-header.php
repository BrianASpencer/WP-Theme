<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="logged-in-header">
    <div class="logged-in-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/FM-AIRE Logo - Solid White.png'; ?>" alt="Logo">
        </a>
    </div>
    <div class="logged-in-menu">
        <a href="<?php echo esc_url(home_url('/forum')); ?>">Forums</a>
        <a href="<?php echo esc_url(home_url('/account')); ?>">Account</a>
        <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Logout</a>
    </div>
    <a id="logged-mobile-menu-icon" href="#"><i class="fa-solid fa-bars" style="color: white"></i></a>
    <div class="logged-mobile-menu">
        <a href="<?php echo esc_url(home_url('/forum')); ?>">Forums</a>
        <br><br>
        <a href="<?php echo esc_url(home_url('/account')); ?>">Account</a>
        <br><br>
        <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Logout</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('logged-mobile-menu-icon').addEventListener('click', function() {
            document.querySelector('.logged-mobile-menu').style.display == 'block' ? document.querySelector('.logged-mobile-menu').style.display = 'none' : document.querySelector('.logged-mobile-menu').style.display = 'block';
        });
    });
</script>