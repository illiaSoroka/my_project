<?php

$frm_name  = "Youname";
$recepient = "ilysha92@bigmir.net";
$sitename  = "Название Сайта";
$subject   = "Новая заявка с сайта \"$sitename\"";


$email = trim($_POST["email"]);
$subject = trim($_POST["subject"]);
$company = trim($_POST["company name"]);
$message = trim($_POST["message"]);

$message = "
E-mail: $email <br>
Обьект: $subject
Название Компании: $company
Сообщение: $message
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
