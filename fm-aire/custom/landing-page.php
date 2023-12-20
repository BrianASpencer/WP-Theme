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

    $left_content = '<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>';

    $right_content = $left_content;

    $left_content_bottom_long = '<span>Nec ullamcorper sit amet risus. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Laoreet suspendisse interimconsectetur libero id faucibus nisl. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque. Aliquam vestibulum morbi blandit cursus risus at. Viverra ipsum nunc aliquet bibendum enim. Aliquam etiam erat velit scelerisque in dictum non consectuetur a. A iaculis at erat pellentesque adipiscing. Velit sed ullamcorper morbi tincidunt.</span>';

    $left_content_bottom_short = '<span>Nec ullamcorper sit amet risus. Hac Hibitasse platea dictumst vestibulum rhoncus est pellentesque. Laoreet supsendisse interim.</span>';

    $sub_header = '<h3 class="info-card-subheader">Smaller subhead here</h3>';

    $find_out_button = '<button type="button" class="find-out-button">FIND OUT MORE</button>';
?>


<div class="card-spacer">
    <?php
        info_card('What is FM-AIRE?', '<strong>'.$left_content.$sub_header.$left_content_bottom_short.'</strong>', $sub_header.'<strong>'.$right_content.'</strong><br><br>'.$find_out_button);
    ?>
</div>
<div class="card-spacer">
    <?php
        info_card('Who is eligible to apply', $left_content.$sub_header.$left_content_bottom_short, $sub_header.$right_content.'<br><br>'.$find_out_button);
    ?>
</div>
<div class="card-spacer">
    <?php
        info_card('What are the priorities for Innovation?', $left_content.$sub_header.$left_content_bottom_short, $sub_header.$right_content.'<br><br>'.$find_out_button);
    ?>
</div>
<div class="card-spacer">
    <?php
        $list_subheader_doc = '<h3 class="info-card-subheader">Document Link list</h3>';
        $list_subheader_res = '<h3 class="info-card-subheader">Resources</h3>';
        $list = '
        <ul>
            <li>Nec ullamcorper sit amet</li>
            <li>platea dictumst vestibulum</li>
            <li>pellentesque. Laoreet</li>
            <li>Consectetur libero id</li>
        </ul>';
        info_card_75_25('How do we apply?', $left_content.$sub_header.$left_content_bottom_long.'<br><br>'.$find_out_button, $list_subheader_doc.$list.$list_subheader_res.$list);
    ?>
</div>

<br><br>

