<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<style>
    <?php include 'styling/header.css';
    ?>
</style>

<header class="site-header">
    <?php 
        include_once get_template_directory() . '/custom/top-header.php';
        include_once get_template_directory() . '/custom/bottom-header.php';
        include_once get_template_directory() . '/custom/mobile-header.php';
    ?>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle regular and mobile headers based on screen size
        function toggleHeaders() {
            const topHeader = document.querySelector('.top-header');
            const bottomHeader = document.querySelector('.bottom-header');
            const mobileHeader = document.querySelector('.mobile-header');

            if (window.innerWidth <= 767) {
                bottomHeader.style.display = 'none';
                topHeader.style.display = 'none';
                mobileHeader.style.display = 'flex';
            } else {
                bottomHeader.style.display = 'flex';
                topHeader.style.display = 'flex';
                mobileHeader.style.display = 'none';
            }
        }

        // Initial toggle check
        toggleHeaders();

        // Event listener for window resize
        window.addEventListener('resize', toggleHeaders);
    });

</script>
