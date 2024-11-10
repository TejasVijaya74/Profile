<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "rishigowda71826@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: no-reply@example.com";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
