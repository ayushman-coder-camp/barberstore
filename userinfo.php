<?php

$full_name = $_POST['full_name'];
$user_email = $_POST['user_email'];
$message = $_POST['message'];

$email_from = 'ayushman45082@gmail.com';

$email_subject = 'New Message From TheaterView Cinemas';

$email_body = "Your Name: $full_name.\n";
               "Your Email: $user_email.\n";
               "Your Message: $message.\n";

$to = $user_email;

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $user_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>