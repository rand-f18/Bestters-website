<?php
require 'lib/PHPMailer.php';
require 'lib/SMTP.php';
require 'lib/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function SendMailUsingPHPMailer($title, $to, $msg)
    {
        $mail = new PHPMailer(true);
        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();
            $mail->CharSet    = 'utf-8';
            $mail->SMTPSecure = 'tls';
            $mail->Host       = 'smtp.gmail.com';      // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                    // Enable SMTP authentication
            $mail->Username   = 'xjax60@gmail.com'; // ur email
            $mail->Password   = 'ciyitiroyjmnccyw'; // ur password

          


            //TLS
           $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
           $mail->Port       = 587;   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
           //Recipients
            $mail->addAddress($to, 'Project Notification');     // Add a recipient
            $mail->setFrom('xjax60@gmail.com', ' Project');    // sender email
            $mail->addReplyTo('xjax60@gmail.com', 'Project Replay'); // replay to 
            $message = "
                            <b>Title :</b>
                            <br>$title<br>
                            <hr />"
                . "<b>Details:</b>
                     <br>$msg<br>";

            // Content
            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body    = $message;


            $mail->send();
        } catch (Exception $e) {

            echo $e->getMessage();
        }
    }