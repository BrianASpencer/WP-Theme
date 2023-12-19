<?php
/*
 * Template Name: Contact Us
 */
?>

<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<style>
    <?php 
        include 'styling/contact-us.css';
    ?>
</style>

<div id="contact-form-container">
    <h2>Contact Us</h2>
    <form id="contact-form">
        <label for="full-name">Full Name:</label>
        <input type="text" id="full-name" name="full-name" class="contact-input" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" class="contact-input" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" class="contact-input" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" class="contact-input" required></textarea>

        <button type="button" id="submit-btn" onclick="submitForm()">SEND IT!</button>
        <div id="success-message" class="success-message">Message sent!</div>
    </form>
</div>

<script>
    function submitForm() {
        var xhr = new XMLHttpRequest();
        var formData = new FormData(document.getElementById('contact-form'));

        xhr.open('POST', 'your-php-script.php', true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Clear the form
                document.getElementById('contact-form').reset();
                // Show success message
                document.getElementById('success-message').style.display = 'block';
            }
        };

        xhr.send(formData);
    }
</script>

