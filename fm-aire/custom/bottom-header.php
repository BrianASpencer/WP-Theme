<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="bottom-header">
    <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/FM-AIRE Logo - Solid White.png'; ?>" alt="Logo">
        </a>
    </div>
    <div class="bottom-nav">
        <div style="width: 100%">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/overview-learnings')); ?>"><i class="fa-solid fa-user-doctor"></i>Overview & Learnings</a></li>
                <li><a href="<?php echo esc_url(home_url('/application-information')); ?>"><i class="fas fa-pen-to-square"></i>Application Information</a></li>
                <li><a href="<?php echo esc_url(home_url('/participating-residencies')); ?>"><i class="fas fa-hospital"></i>Participating Residencies</a></li>
            </ul>
        </div>
    </div>
</div>
