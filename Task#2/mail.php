<?php

$recepient = "1987oem@gmail.com";
$sitename = "Site name";

$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = "E-mail: $email \nТелефон: $phone";

$pagetitle = "Новая заявка с сайта \"$sitename\"";


mail($recepient, $pagetitle, $message, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>
