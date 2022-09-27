<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once("vendor/autoload.php");
if(!file_exists('config.php')) {
    echo "Arquivo config.php não encontrado. <br> Renomeie o arquivo config.php.example para config.php";
    exit();
} else {
    require_once("config.php");
}

$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 2;

$mail->Debugoutput = "html";

$mail->Host = $emailConfig['host'];

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = $emailConfig['username'];

$mail->Password = $emailConfig['password'];

$mail->setFrom($emailConfig['from']);


$mail->addAddress('aajunior@mpac.mp.br', 'Antonio');

$mail->Subject = 'teste de email SIGEP';

$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

$mail->AltBody = 'Teste de email SIGEP';


if (!$mail->send()) {
    echo "Erro de email: " . $mail->ErrorInfo;
} else {
    echo "Mensagem Enviada.";
}


