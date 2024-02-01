<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function contact_us() {
?>
<div id="contact-form-container">
    <h2 id="contact-form-header">Contact Us</h2>
    <form id="contact-form">
        <div id="contact-form-inputs">
            <div class="contact-form-row">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" class="contact-input" required>
            </div>

            <div class="contact-form-row">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="contact-input" required>
            </div>

            <div class="contact-form-row">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" class="contact-input" required>
            </div>

            <div class="contact-form-row">
                <label for="message">Message</label>
                <textarea name="message" class="contact-input" required></textarea>
            </div>

            <div class="contact-form-row">
                <button type="button" id="submit-btn" onclick="submitForm()">SEND IT!</button>
            </div>
        </div>
    </form>
    
    <div class="contact-form-row success-message">
        Message sent!
    </div>
</div>

<script>
    function submitForm() {
        var xhr = new XMLHttpRequest();
        var formData = new FormData(document.getElementById('contact-form'));

        xhr.open('POST', 'your-php-script.php', true);
        
        // Clear the form
        document.getElementById('contact-form').reset();
        // Show success message
        document.querySelector('.success-message').style.display = 'block';
        // Hide the form and its header
        document.getElementById('contact-form-header').style.display = 'none';
        document.getElementById('contact-form').style.display = 'none';
        //pad now that the form shrunk
        //document.getElementById('contact-form-container').style.marginTop = '15em';
        //document.getElementById('contact-form-container').style.marginBottom = '15em';

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Clear the form
                document.getElementById('contact-form').reset();
                // Show success message
                document.querySelector('.success-message').style.display = 'block';
            }
        };

        //xhr.send(formData);
    }
</script>

<?php
}
?>
