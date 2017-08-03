<?php

$recepient = "1987oem@gmail.com";

$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = "E-mail: $email \nТелефон: $phone";
$pagetitle = "Новая заявка с сайта ".$sitename;


 if (empty($phone)) {
    exit("Phone is required");
 } else {
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
		exit("Invalid phone number");
    }
 }

if (empty($email)) { exit("Empty email field"); }
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (!preg_match($regex, $email)) {
 	exit($email . " is an invalid email. Please try again.");
} 


/********************* for user send email about answer    ********************/
$subject = "Hello";
$message = 'New msg from telephone '.$phone.' '.$email;
$headers = "MIME-Version: 1.0" . "\r\n" . "Content-type: text/html; charset=UTF-8" . "\r\n" . "From: admin@ant3dstudio.com" ;

mail($recepient, $subject, $message, $headers);
echo 'Mail send'

?>
