<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function landing_placard() {
?>

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
}
?>
