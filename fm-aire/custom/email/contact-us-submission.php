<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full-name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Compose the email
    $to = "jfetter@theabfm.org";
    $subject = "Contact Form Submission - $subject";
    $headers = "From: $email";

    // Send the email
    //mail($to, $subject, $message, $headers);
}
?>
