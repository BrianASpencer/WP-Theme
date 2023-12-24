<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="top-header">
    <div class="top-header-nav">
        <a id="about-us-link" href="<?php echo esc_url(home_url('/')); ?>">About Us</a>
        <a id="contact-us-link" href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact Us</a>
        <a id="search-link" href="#">Search <i class="fa-solid fa-magnifying-glass"></i></a>
    </div>
    <a href="<?php echo esc_url(home_url('/sign-in')); ?>" class="login-header-button">
        <label>Learning Community Login</label>
    </a>
</div>
