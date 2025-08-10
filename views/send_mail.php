<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../views/mail_verify/Exception.php';
require '../views/mail_verify/PHPMailer.php';
require '../views/mail_verify/SMTP.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message_content = $_POST['message'];

// Your email credentials
$your_email = "mgpdesaman@gmail.com";
$your_name = "DR_Fashions";
$your_password = "yucnhhieyqcyzxrc"; // Gmail App Password

$mail = new PHPMailer(true);

try {
    // SMTP server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $your_email;
    $mail->Password = $your_password;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Send message to YOU
    $mail->setFrom($your_email, $your_name);
    $mail->addAddress($your_email); // Your own inbox
    $mail->isHTML(true);
    $mail->Subject = "New Contact Form Submission";
    $mail->Body = "
        <h3>New message from contact form</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Message:</strong> {$message_content}</p>
    ";
    $mail->send();

    // Send confirmation to the visitor
    $mail->clearAddresses();
    $mail->addAddress($email);
    $mail->Subject = "Your message was received";
    $mail->Body = "
        <h3>Hi {$name},</h3>
        <p>Thank you for contacting us. We have received your message and will get back to you soon.</p>
        <p>Best regards,<br>Your Company</p>
    ";
    $mail->send();

    echo "<script>alert('Message sent successfully!'); window.history.back(); </script>";

} catch (Exception $e) {
    echo "<script>alert('Error: {$mail->ErrorInfo}'); window.history.back();</script>";
}
