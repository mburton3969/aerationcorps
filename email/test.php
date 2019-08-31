<?php

include 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
include 'phpmailsettings.php';

$mail->setFrom("service@theaerationcorps.com","Aeration Service");
$mail->addAddress("michael@ignition-innovations.com");
$mail->Subject = 'Test Email!';
$mail->Body = '<html>
                <h1>Test Email</h1>
                </html>';

if($mail->send()){
  echo 'Email Sent!';
}else{
  echo 'Error: ' . $mail->ErrorInfo;
}

?>