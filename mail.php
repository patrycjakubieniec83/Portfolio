<?php
$to      = 'patrycjakubieniec83@gmail.com';
$subject = $_POST ['subject'];
$message = $_POST ['message'];
$headers = 'From: ' . $_POST ['email'] . "\r\n" .
    'Content-type: text/html; charset=utf-8';   

mail($to, $subject, $message, $headers);
echo 'E-mail został wysłany';
?>