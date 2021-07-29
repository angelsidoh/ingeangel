<?php
require 'vendor/autoload.php';

define('URL_SITIO', 'https://wingsdevs.com/paypal/');
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AQdc02lV7EBx8k4M_PIl9sjmgwBE31P6emBywY0B_0Zo04-0BOCfo55TaqO8EBNw0LCNOJ76jdw2Sht0',
        'EK53iMqCXjO3ROe68yV443QvXAaDDZG55u55jhXqSZ2K8F6W1wsb7xV26sesnYQ2EMuN1DG6LnqOv5Ls'
    )
);
$apiContext->setConfig([
    'mode' => 'live',
   ]);
?>