<?php
    require_once("business/Payment.php");
    extract($_REQUEST);
    $oPayment = new Payment($conektaTokenId,$card,$name,$description,$total,$email,$idex);
    if($oPayment->Pay()){
        echo "1";
    }else{
        echo $oPayment->error;
    }
?>