<?php
include("storage/PHPMailer-master/src/PHPMailer.php");
include("storage/PHPMailer-master/src/Exception.php");
include("storage/PHPMailer-master/src/OAuth.php");
include("storage/PHPMailer-master/src/POP3.php");
include("storage/PHPMailer-master/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try{
//Server settings
$mail->SMTPDebug = 2; 
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'nguyentiendat099912c1@gmail.com'; // SMTP username
$mail->Password = 'thptyla12c1'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port lớn connect to
//Recipients
$mail->setFrom('nguyentiendat099912c1@gmail.com', 'Mailer');
$mail->addAddress('kenllykenlly009@gmail.com', 'Joe User'); // Add a recipient
// $mail->addAddress('ellen@example.com'); // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
//Content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body = 'This is the HTML message body in bold!';
$mail->AltBody = 'This is the body in plain text for non-HTML email clients';
$mail->send();
echo 'Message has been sent';
}
catch (Exception $e){
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}