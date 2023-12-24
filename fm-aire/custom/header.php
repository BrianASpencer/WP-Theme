<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
//wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
?>

<style>
    <?php 
        include 'styling/header.css';
    ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/styles.css'; ?>">
</style>

<header class="site-header">
    <?php 
        include_once get_template_directory() . '/custom/top-header.php';
        include_once get_template_directory() . '/custom/secondary-header.php';
    ?>
</header>
