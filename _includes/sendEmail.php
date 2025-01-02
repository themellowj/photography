<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "justmcgriff01@gmail.com";
    $subject = "New Message from Website Contact Form";
    $headers = "From: $email";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent. Please try again later.";
    }
} else {
    header("HTTP/1.1 405 Method Not Allowed");
}
?>
