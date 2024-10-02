<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!class_exists('PHPMailer\PHPMailer\Exception'))
{
    require 'PHPMAILER/Exception.php';
    require 'PHPMAILER/PHPMailer.php';
    require 'PHPMAILER/SMTP.php';
}


$mail   = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    /*$mail->Host       = 'mail.gestorescolar.com.mx';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'carreon@gestorescolar.com.mx';
    $mail->Password   = 'WkS909021'; 
    $mail->SMTPSecure = 'auto';
    $mail->Port       = 26;  */

    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'controlescolarmexico@gmail.com';
    $mail->Password   = 'fdwkyezthlprmnnj'; //'yadslqxbjlmfzfqc'; Es de luisgcarreon || fdwkyezthlprmnnj de controlescolarmexico
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;  

    //Recipients
    //$mail->setFrom('controlescolarmexico@gmail.com', 'Colegio de Prueba escolar');
    $mail->setFrom($correo, $nombre);
    //$mail->addAddress('luisgcarreon@gmail.com');
    $mail->addAddress($miCorreo);
    
    //Content
    $mail->isHTML(true); 
    $mail->Subject = $subject;
    $mail->Body    = $mensaje."||".$correo;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //$mail->addAttachment($archivo);
    // Activo condificacción utf-8
    $mail->CharSet = 'UTF-8';

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>