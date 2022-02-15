<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'airsehat32@gmail.com'

$email_body = "User Name: $name.\n". "user Email: $visitor_email.\n". "Subject: $subject.\n". "User Message: $message.\n";

$to = 'nuraiman0302@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$subject,$message,$headers);

header("Location: contact.html")
?>