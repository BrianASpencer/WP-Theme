<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<style>
    <?php 
        include 'styling/landing.css';
    ?>
</style>

<div class="two-column-info-placard">
    <div class="image-column">
        <img src="<?php echo get_template_directory_uri() . '/assets/FM-AIRE Wordmark - Gray.png'; ?>" alt="FM-AIRE Wordmark Logo">
    </div>
    <div class="vertical-divider"></div>
    <div class="info-column">
        <ul>
            <li>
                <h2>What is FM-AIRE?</h2>
                <p>
                    Lorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </li>
            <li>
                <h2>Who is eligible to apply</h2>
                <p>
                    Lorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </li>
            <li>
                <h2>What are the priorities for Innovation</h2>
                <p>
                    Lorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </li>
            <li>
                <h2>How do we apply?</h2>
                <p>
                    Lorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </li>
        </ul>
    </div>
</div>

<?php
    include('card.php');

    $left_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    $right_content = $left_content;
?>


<div class="card-spacer">
    <?php
        info_card('What is FM-AIRE?', '<strong>'.$left_content.'</strong>', '<strong>'.$right_content.'</strong>');
    ?>
</div>
<div class="card-spacer">
    <?php
        info_card('Who is eligible to apply', $left_content, $right_content);
    ?>
</div>
<div class="card-spacer">
    <?php
        info_card('What are the priorities for Innovation?', $left_content, $right_content);
    ?>
</div>
<div class="card-spacer">
    <?php
        info_card('How do we apply?', $left_content, $right_content);
    ?>
</div>

<br><br>

