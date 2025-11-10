<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // composer se install hua hai to ye line rakho
// Agar manually install kiya hai to:
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $subject = htmlspecialchars(trim($_POST['subject']));
        $message = htmlspecialchars(trim($_POST['message']));

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';       // Gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'ayushbaliyan71@gmail.com'; // Apna Gmail daal
            $mail->Password = 'pjxlfkskinuarmxc';   // Gmail App Password (normal password nahi chalega)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Sender & Receiver
            $mail->setFrom($email, $name);
            $mail->addAddress('achantbaliyan00@gmail.com', 'achant'); // jahan mail receive karni hai

            // Content
            $mail->isHTML(true);
            $mail->Subject = "Contact Form: $subject";
            $mail->Body    = "
                <h3>New Message from Contact Form</h3>
                <p><b>Name:</b> $name</p>
                <p><b>Email:</b> $email</p>
                <p><b>Message:</b><br>$message</p>
            ";

        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location='index.html';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
