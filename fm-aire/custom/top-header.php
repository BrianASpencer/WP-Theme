<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="top-header">
    <div class="top-header-nav">
        <a href="#">About Us</a>
        <a href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact Us</a>
        <a style="border: none; border-right: none" href="#">Search <i class="fa-solid fa-magnifying-glass"></i></a>
    </div>
    <a href="<?php echo esc_url(home_url('/sign-in')); ?>" class="login-header-button">Learning Community Login</a>
</div>
