<?php
 date_default_timezone_set('America/Mexico_City');
    $fechaini =  date('2021-02-28 H:i:s');
    $fechafin = date("Y-m-d H:i:s", strtotime($fechaini . "+ 1 days"));
    $fechafinMes = date("Y-m-d H:i:s", strtotime($fechaini . "+ 10 months"));
    echo $fechaini .'<br>'. $fechafin .'<br>'. $fechafinMes;

?>
