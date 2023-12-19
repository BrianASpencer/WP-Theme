<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<style>
    <?php 
        include 'styling/header.css';
    ?>
</style>

<header class="site-header">
    <?php 
        include_once get_template_directory() . '/custom/top-header.php';
        include_once get_template_directory() . '/custom/secondary-header.php';
    ?>
</header>
