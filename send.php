<?php
$email = "dragoncorexgamer@gmail.com";
$sub = "Date";

if (isset($_POST["send"])) {
    $to = $email;
    $subject = $sub;
    $message = "Date: " . $_POST["date"];
    $headers = "From: dragoncorexgamer@gmail.com\r\n";

    // Use Gmail's SMTP service
    $smtpHost = 'ssl://smtp.gmail.com';
    $smtpPort = 465;
    $smtpUser = 'dragoncorexgamer@gmail.com';
    $smtpPass = '';  // Your App Password

    $socket = stream_socket_client("$smtpHost:$smtpPort", $errno, $errstr, 30);
    if (!$socket) {
        die("Connection failed: $errstr ($errno)");
    } else {
        fputs($socket, "EHLO smtp.gmail.com\r\n");
        fputs($socket, "AUTH LOGIN\r\n");
        fputs($socket, base64_encode($smtpUser) . "\r\n");
        fputs($socket, base64_encode($smtpPass) . "\r\n");
        fputs($socket, "MAIL FROM: <{$smtpUser}>\r\n");
        fputs($socket, "RCPT TO: <{$to}>\r\n");
        fputs($socket, "DATA\r\n");
        fputs($socket, "Subject: {$subject}\r\n\r\n{$message}\r\n.\r\n");
        fputs($socket, "QUIT\r\n");
        fclose($socket);
        echo "<script>alert('Thank you for the response');</script>";
    }
}

?>