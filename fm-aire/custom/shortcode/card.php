<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

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
            <div class="info-card-column info-card-right">
                <?php echo $rightContent; ?>
            </div>
        </div>
    </div>
</div>

<?php
}
?>

<?php
function info_card_75_25($title, $leftContent, $rightContent) {
?>
<div class="info-card info-card-75-25">
    <div class="info-card-border">
        <div class="info-card-header">
            <img src="<?php echo get_template_directory_uri() . '/assets/Icon-FPO.png'; ?>" alt="Globe and Branch Icon">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="info-card-content">
            <div class="info-card-column info-card-left-75">
                <?php echo $leftContent; ?>
            </div>
            <div class="info-card-column info-card-right-25">
                <?php echo $rightContent; ?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

