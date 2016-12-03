<?php

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
$sid = $_ENV['SID'];
$token = $_ENV['TOKEN'];

echo $sid.' : '.$token;