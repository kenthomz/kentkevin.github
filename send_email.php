<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set email destination and subject
    $to = "kenthomzhilay@gmail.com";  // Replace with your email
    $subject = "New Contact Form Submission from $name";

    // Create the email body
    $body = "You have received a new message from the contact form on your website.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Message delivery failed. Please try again.";
    }
}
?>
