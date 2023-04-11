<?php

require 'header.php';

$sid = $_SERVER['SID'];
$token = $_SERVER['TOKEN'];
$serviceid = $_SERVER['SERVICEID'];

use Twilio\Rest\Client;

$twilio = new Client($sid, $token);

$_SESSION['email'] = "nasirhafeez2002@gmail.com";
$_SESSION['method'] = "email";

$verification = $twilio->verify->v2->services($serviceid)
  ->verifications
  ->create($_SESSION['address'], $_SESSION['method']);