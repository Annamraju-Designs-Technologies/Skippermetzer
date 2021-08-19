<?php
require_once "phpmailer/PHPMailerAutoload.php";
$mail = new PHPMailer;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "metzerskipper@gmail.com";  // Gmail username
$mail->Password = "skipperMetzer!001";      //     // SMTP password
$mail->SMTPSecure = 'openssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = '587';                                    // TCP port to connect to
$mail->Sender='metzerskipper@gmail.com';
$mail->setFrom('metzerskipper@gmail.com', 'Skipper Metzer');
$mail->isHTML(true);
?>