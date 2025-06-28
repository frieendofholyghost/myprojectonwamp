<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configuration du serveur SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'espoircompagnie0001@gmail.com';
    $mail->Password = 'ciqypbffltcqtvjp'; // ⚠️ mot de passe d'application SANS espaces
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    // Expéditeur et destinataire
    $mail->setFrom('espoircompagnie0001@gmail.com', 'Michee');
    $mail->addAddress('devmike0002@gmail.com', 'Michee Dev');

    // Contenu
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body = '<h1>Hello World!</h1><p>This is a test email sent using PHPMailer.</p>';

    // Envoi
    $mail->send();
    echo '✅ Un mail vous a été envoyé avec succès.';
} catch (Exception $e) {
    echo '❌ Erreur lors de l\'envoi : ' . $mail->ErrorInfo;
}
?>
