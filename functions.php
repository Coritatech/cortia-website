<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

require "PHPMailer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function mailingMethod($email, $name, $subject, $msg) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = $_ENV['SMTPAuth'];
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
        $mail->Port = $_ENV['MAIL_PORT'];

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('cortiatechnology@gmail.com', $name);
        $mail->addReplyTo($email, $name);
        $mail->addCC('tesleemolamilekan902@gmail.com');
        // $mail->addBCC('bcc@example.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $msg;

        // Attempt to send the email
        if ($mail->send()) {
           return 1;
        } else {
           return 0;
        }
    } catch (Exception $e) {
       return "Mailer Error: {$mail->ErrorInfo}";
    }
}


