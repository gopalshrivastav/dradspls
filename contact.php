<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $to = "info@dradspl.com";
    $subject = "New Contact Form Submission";
    $body = "
    <h2>New Enquiry Received</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Service:</strong> $service</p>
    <p><strong>Message:</strong><br>$message</p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@dradspl.com";

    if (mail($to, $subject, $body, $headers)) {
        $_SESSION['form_submitted'] = true;  // ✅ Session flag
        header("Location: thankyou.php");     // ✅ Redirect
        exit;
    } else {
        echo "Mail sending failed.";
    }
}
?>
