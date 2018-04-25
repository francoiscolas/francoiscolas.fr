<?php
$accepted = false;
$to       = 'moi@francoiscolas.fr';
$person   = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$subject  = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message  = $_POST['message'];

if (empty($subject)) {
  $subject = "(pas d'objet)";
}

$message .= "\r\n\r\n--\r\n$person\r\n";

if (!empty($person) && !empty($email)) {
  $accepted = mail($to, $subject, utf8_decode($message), "From: $person <$email>\r\n");
}

header('Content-Type: application/json');
echo '{"sent":'.(($accepted) ? 'true' : 'false').'}';
