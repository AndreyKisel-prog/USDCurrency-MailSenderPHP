<?php
require './currency.php';
require './SMTP.php';

include_once('./vendor/autoload.php');
$message = get_currency_USD();
sendMail($message);

