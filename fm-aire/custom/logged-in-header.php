<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="logged-in-header">
    <a href="<?php echo esc_url(home_url('/forum')); ?>">Forums</a>
    <a href="<?php echo esc_url(home_url('/account')); ?>">Account</a>
    <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Logout</a>
</div>
s