<?php
require 'vendor/autoload.php';

define('URL_SITIO', 'https://wingsdevs.com/paypal/');
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AeAo653-ZN64KjDPWjnIfOTD2-us9Ac_mTxJynYPpEZZhF_mzODInAy4ewL0tCDFnXqobmvE8tT88oBF',
        'ELl1fEn8vBzQdBbnfok8GvbFsU5dSrjZDxqTcT3k5CAOgXF2viQnmXIyAcMkOpVVP1wPp-LuhoA_Ecsx'
    )
);
?>