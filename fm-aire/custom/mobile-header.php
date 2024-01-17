<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="mobile-header">
    <div class="mobile-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/FM-AIRE Logo - Solid White.png'; ?>" alt="Logo">
        </a>
    </div>
    <a id="mobile-menu-icon" href="#"><i class="fa-solid fa-bars" style="color: white"></i></a>
    <div class="mobile-nav">
        <div class="mobile-icon-nav">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/overview-learnings')); ?>"><i class="fa-solid fa-user-doctor"></i>Overview & Learnings</a></li>
                <li><a href="<?php echo esc_url(home_url('/application-information')); ?>"><i class="fas fa-pen-to-square"></i>Application Information</a></li>
                <li><a href="<?php echo esc_url(home_url('/participating-residencies')); ?>"><i class="fas fa-hospital"></i>Participating Residencies</a></li>
            </ul>
        </div>
        <div class="mobile-links">
            <a href="<?php echo esc_url(home_url('/')); ?>">About Us</a>
            <a href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact Us</a>
            <a href="#">Search <i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="<?php echo esc_url(home_url('/login')); ?>" class="mobile-header-login-button">
                <label>Learning Community Login</label>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('mobile-menu-icon').addEventListener('click', function() {
            document.querySelector('.mobile-nav').style.display == 'flex' ? document.querySelector('.mobile-nav').style.display = 'none' : document.querySelector('.mobile-nav').style.display = 'flex';
        });
    });
</script>