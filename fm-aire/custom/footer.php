<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
//wp_footer();
?>

<style>
    <?php 
        include 'styling/footer.css';
    ?>
</style>

<footer class="footer">
    <div class="footer-content">
        <!-- Logo -->
        <img src="<?php echo get_template_directory_uri() . '/assets/FM-AIRE Logo - Solid White.png'; ?>" alt="Solid White FM-AIRE Logo">
        <!-- centered description -->
        <span>
            Nec ullamcorper sit amet risus. Hac habitasse platea dictumst vestibulum rhoncus est pellente sque. Laoreet suspe ndisse interim
        </span>
        <!-- phone nunber with vertical pipe and then email address -->
        <br><br>
        <strong>
            1-866-123-1234
        </strong>
        <span style="font-weight: lighter">
            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        </span>
        <strong>
            fm-aire@theabfm.org
        </strong>
    </div>
    <div class="footer-bottom-content">
        <span>
            © Copyright 2012 - 2023
            &nbsp;&nbsp;|&nbsp;&nbsp;
            The American Board of Family Medicine
            &nbsp;&nbsp;|&nbsp;&nbsp;
            All Rights Reserved
        </span>
    </div>
</footer>