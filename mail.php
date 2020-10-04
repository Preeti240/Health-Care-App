<?php
require_once 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->Username = 'lxm95600@ucmo.edu';                 // SMTP username
$mail->Password = 'aabbdullah';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('lxm95600@ucmo.edu', 'Mailer');
$mail->addReplyTo('lxm95600@ucmo.edu', 'ReplyTo');
$mail->addAddress('abdullah1170@gmail.com', 'Joe User');     // Add a recipient
$var = "Abdulla";
$mail->Subject = 'Here is the subject';
$mail->Body    = "'This is the HTML message body <b>in bold!</b>'.$var.cont";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

var_dump($mail->send());
?>	