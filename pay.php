<?php
    require_once("business/Payment.php");
    extract($_REQUEST);
    // var_dump($oPayment = new Payment($conektaTokenId,$card,$name,$desx,$total,$email,$idex));
    $oPayment = new Payment($conektaTokenId,$card,$name,$desx,$total,$email,$idex);
    if($oPayment->Pay()){
        echo "1";
    }else{
        echo $oPayment->error;
    }
?>