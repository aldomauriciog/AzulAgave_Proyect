<?php

if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index.html" );
}

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(empty(trim($name))) $name = 'anonimo';

$body = <<<HTML
<h1>Contacto desde la web</h1>
<p>De: $name / $email</p>
<h2>Mensaje</h2>
$message
HTML;

$mailer = new PHPMailer();
$mailer->setFrom($email, $name);
$mailer->addAddress('jahazielmauriciogonzales@gmail.com');
$mailer->Subject = $subject;
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';
$rta = $mailer->send( );