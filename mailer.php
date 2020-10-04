<?php
require_once 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->Username = 'lxm95600@ucmo.edu';                 // SMTP username
$mail->Password = 'aabbdullah';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to


$mail->setFrom('lxm95600@ucmo.edu', 'KCC CLINIC');
$mail->addReplyTo('lxm95600@ucmo.edu', 'ReplyTo');
?>