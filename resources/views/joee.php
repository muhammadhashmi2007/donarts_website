<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Prepare email
    $to = "muhammadhashmi764@gmail.com"; // Replace with the recipient's email address
    $subject = "New Message from " . $name;
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: \n" . $message . "\n";
    $headers = "From: " . $email . "\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to";
    } else {
        echo "Email sending failed";
    }
}
?>
