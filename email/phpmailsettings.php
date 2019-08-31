<?php
include '../global/php/connection.php';

//Get SMTP Connection Details...
$mailq = "SELECT * FROM `mailgun_credentials`";
$mailg = mysqli_query($conn, $mailq) or die($conn->error);
$mailr = mysqli_fetch_array($mailg);

//Settings for the PHPMailer Class

//$mail->SMTPDebug = 3;                               // Enable (2 - Connection Troubleshooting | 3 - verbose debug output)

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $mailr['host'];  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $mailr['username'];                 // SMTP username
$mail->Password = $mailr['password'];                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->isHTML(true); 
$mail->CharSet = 'UTF-8';
?>