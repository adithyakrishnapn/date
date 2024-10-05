<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'sendemail/phpmailer/src/Exception.php';
require 'sendemail/phpmailer/src/PHPMailer.php';
require 'sendemail/phpmailer/src/SMTP.php';

$email = "dragoncorexgamer@gmail.com";
$sub = "Date";

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dragoncorexgamer@gmail.com';
    $mail->Password = 'noojxldfsynvrqaj';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('dragoncorexgamer@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $sub;
    $mail->Body = "Quit Disgusting";

    $mail->send();
    
    echo "<script>
    alert('Sorry to cause you trouble, Please keep it between us... and I\'m sorry if it made you uncomfortable :(');
    window.location.href='https://www.google.com';
    </script>";
}
?>