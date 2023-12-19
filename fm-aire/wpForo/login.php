<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
    include_once get_template_directory() . '/custom/login.php';

/*
Old HTML (add after ?>):
<div class="login-container">
    <h2 class="welcome-header">Welcome</h2>
    <p class="intro-text">Please enter your email address and password</p>
    <form class="login-form" name="wpflogin" action="" method="POST">
        <div class="label-input-pair">
            <label for="wpf-login-username"><?php wpforo_phrase('Email Address') ?></label>
            <input autofocus required type="text" name="log" class="login-field" id="wpf-login-username"/>
        </div>
        <div class="label-input-pair">
            <label for="wpf-login-password"><?php wpforo_phrase('Password') ?></label>
            <input required type="password" name="pwd" class="wpf-login-text" id="wpf-login-password"/>
        </div>
        <a href="<?php echo wpforo_lostpassword_url(); ?>" class="forgot-password-link"><?php wpforo_phrase('I forgot my password') ?></a>
        <p class="recaptcha-text">This siteeee is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
        <input class="sign-in-button" type="submit" name="wpforologin" value="<?php wpforo_phrase('Sign In') ?>"/>
        <div class="wpf-field wpf-extra-field-end">
            <div class="wpf-field-wrap" style="text-align:center; width:100%;">
                <?php do_action('wpforo_login_form_end') ?>
                <div class="wpf-field-cl"></div>
            </div>
        </div>
        <div class="wpf-cl"></div>
    </form>
</div>

*/
?>

