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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks | Azul Agave Family Mexican Cuisine</title>
    <link rel="stylesheet" href="assets/css/thanks.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="bg">
        <img src="assets/img/main/LOGO VERSION NEGRO.png" alt="">
    </div>
    <main>
        <section class="thanks">
            <h2>Thank you for contacting us <?php  echo $name ?>!</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, non sed dolorem velit consequuntur placeat, ipsa in ipsam nobis officiis amet, sit rerum deleniti perferendis!</p>
            <a href="contact.php"><i class="fa-solid fa-angles-left"> &nbsp; </i> Go back </a>
        </section>
        <section class="social">
            <h2>Follow us also on our social networks</h2>
            <div>
                <a href="https://www.facebook.com/AzulAgaveCornwall/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/azulagavecornwall/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </section>
    </main>
</body>
</html>