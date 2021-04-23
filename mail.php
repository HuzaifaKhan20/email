<?php
//get data from form  
$name = $_POST['name'];
$email = $_POST['email address'];
$message = $_POST['message'];
$number = $_POST['mobile'];

$to = "muhammadumarkhan72@gmail.com";

$subject = "Mail From codeconia";
$txt = "Name = " . $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message . "\r
\n Mobile number =" . $number;

$headers = "From: noreply@codeconia.com" . "\r\n" .
    "CC: somebodyelse@example.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
