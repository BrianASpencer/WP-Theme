<style>
    <?php include 'styling/info-card.css';
    ?>

</style>

<?php

function info_card($title, $leftContent, $rightContent) {
?>
<div class="info-card">
    <div class="info-card-border">
        <div class="info-card-header">
            <img src="<?php echo get_template_directory_uri() . '/assets/Icon-FPO.png'; ?>" alt="Globe and Branch Icon">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="info-card-content">
            <div class="info-card-column info-card-left">
                <?php echo $leftContent; ?>
            </div>
            <div class="info-card-column-divider"></div>
            <div class="info-card-column info-card-right">
                <?php echo $rightContent; ?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
