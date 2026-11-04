<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "valeria-francisca.tort-montes@student.tu-freiberg.de"; // YOUR EMAIL ADDRESS
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New message from your website";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    $headers = "From: website@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $body, $headers);

    echo "Thank you! Your message has been sent.";
}
?>
