<?php

// Put contacting email here
$php_main_email = "thaiiobadze@gmail.com";

//Fetching Values from URL
$php_name = $_POST['ajax_name'];
$php_email = $_POST['ajax_email'];
$php_message = $_POST['ajax_message'];



//Sanitizing email
$php_email = filter_var($php_email, FILTER_SANITIZE_EMAIL);


//After sanitization Validation is performed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Hardcoded recipient email address
    $to = 'thaiiobadze@gmail.com';
    
    // Retrieve subject and body from POST request
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['body']) ? $_POST['body'] : '';
    
    // Set email headers
    $headers = 'From: no-reply@example.com' . "\r\n" .
               'Reply-To: no-reply@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully';
    } else {
        echo 'Failed to send email';
    }
} else {
    echo 'Invalid request';
}
?>
