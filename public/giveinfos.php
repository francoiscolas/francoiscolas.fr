<?php
$accepted = false;
$phone    = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/^(\+33|0)\s?[0-9]\s?([0-9]{2}\s?){4}$/']]);
$email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($phone) {
    $phones = json_decode(file_get_contents('phones.json'));
    $phone  = str_replace('+33', '0', $phone);
    $phone  = str_replace(' ', '', $phone);

    if (!$phones) $phones = array();
    if (array_search($phone, $phones) === FALSE) {
        array_push($phones, $phone);
        rename('phones.json', 'phones.json.'.date('Ymd'));
        file_put_contents('phones.json', json_encode($phones));
    }
    $accepted = true;
}

if ($email) {
    $emails = json_decode(file_get_contents('emails.json'));

    if (!$emails) $emails = array();
    if (array_search($email, $emails) === FALSE) {
        array_push($emails, $email);
        rename('emails.json', 'emails.json.'.date('Ymd'));
        file_put_contents('emails.json', json_encode($emails));
    }
    $accepted = true;
}

header('Content-Type: application/json');
echo '{"sent":'.(($accepted) ? 'true' : 'false').'}';
