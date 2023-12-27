<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/**
 * Template Name: Forum Index (Forums List)
 */

if (WPF()->board->get_current('is_standalone')) get_header();
?>

<div id="wpforo">
    <div id="wpforo-wrap" class="<?php do_action('wpforo_wrap_class'); ?>">

        <div class="wpforo-main">
            <div class="wpforo-content">
                <?php do_action('wpforo_content_start'); ?>

                <?php
                if (!in_array(WPF()->current_user_status, ['banned', 'trashed']) && !WPF()->current_object['is_404']) {
                    wpforo_template('forum');
                } else {
                    ?>
                    <p class="wpf-p-error">
                        <?php wpforo_phrase('You have been banned. Please contact the forum administrator for more information.'); ?>
                    </p>
                <?php } ?>
            </div>

            <div class="wpf-clear"></div>
        </div>

        <?php
        do_action('wpforo_bottom_hook');
        ?>

    </div>
</div>

<?php if (WPF()->board->get_current('is_standalone')) get_footer(); ?>
