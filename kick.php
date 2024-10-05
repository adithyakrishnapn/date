<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'sendemail/phpmailer/src/Exception.php';
require 'sendemail/phpmailer/src/PHPMailer.php';
require 'sendemail/phpmailer/src/SMTP.php';

$email = "dragoncorexgamer@gmail.com";
$sub = "Kick";

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dragoncorexgamer@gmail.com';
    $mail->Password = '';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('dragoncorexgamer@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $sub;
    $mail->Body = "Slapped using Chappals";

    $mail->send();
    
    echo "<script>
        alert('Don\'t take it seriously, and try not to share it with anyone please..');
        window.location.href='https://www.google.com'; // Use window.location.href for redirection
    </script>";
    
}
?>