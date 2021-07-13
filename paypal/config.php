<?php
require 'vendor/autoload.php';

define('URL_SITIO', 'https://wingsdevs.com/paypal/');
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ARvgtB042KmuJg7Ej03wqeXneX7H1WtB5PuBTaYYMJsg36NQYHk5iYGpfYd6QuFLjsni7lsIiO2SYVUV',
        'EBqoSfKW5KoWBXL2vwKnJap_Kx4CMsxMKFoA6vSdEgvqrghgKaSID_GjuaDvJ_7IueL2Gy-drVzPNNuy'
    )
);
?>