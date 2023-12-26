<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}


function login() {
?>
<form class="login-form" name="wpflogin" action="" method="POST">
    <div class="form-header">Welcome</div>
    <div class="form-description">Please enter your email address and password.</div>

    <div class="login-inputs">
        <div class="form-row">
            <label for="wpf-login-username">Email Address</label>
            <input autofocus required type="text" name="log" id="wpf-login-username" />
        </div>

        <div class="form-row">
            <label for="wpf-login-password">Password</label>
            <input required type="password" name="pwd" id="wpf-login-password" />
            <br>
            <a href="<?php echo wpforo_lostpassword_url(); ?>" class="forgot-password">I forgot my password</a>
        </div>
    </div>

    <p class="recaptcha-text">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>

    <input class="sign-in-btn" type="submit" name="wpforologin" value="Sign In" />
    
    <div style="text-align:center; width:100%;">
        <?php do_action('wpforo_login_form_end') ?>
    </div>
</form>
<?php
}
?>
