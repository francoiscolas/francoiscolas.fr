<?php
header("Content-Type: text/plain");
$file = '../data/'.((isset($_GET['phones'])) ? 'phones.json' : 'emails.json');
echo join(',', json_decode(file_get_contents($file)));

