<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'PHPMailer\src\Exception.php';
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\SMTP.php';

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP settings (example uses Gmail)
    $mail->SMTPDebug = 0; // Set to 2 for debugging
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'rayen.askri142@gmail.com'; // Your Gmail email address
    $mail->Password   = 'xhkyvsbduhzihbid';        // Your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Sender information
    $mail->setFrom('rayen.askri142@gmail.com', 'rayen');
    $mail->addReplyTo('rayen.askri142@gmail.com', 'rayen');

    // Recipient
    $to_email = $_POST['to_email'];
    $mail->addAddress($to_email);

    // Email content
    $mail->isHTML(false); // Set to true if you want to send HTML email
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];

    // Send the email
    $mail->send();
    echo 'Email has been sent successfully';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: exempl.html"); // Redirection vers exempl.html
exit(); // Assurez-vous de terminer l'exécution du script après la redirection
césarcésar
?>
