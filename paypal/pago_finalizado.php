<?php


use PayPal\Rest\ApiContext;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Payment;
use phpDocumentor\Reflection\Location;

require 'config.php';
?>
<section class="seccion contenedor">
    <h2>Proceso autorizado por la plataforma</h2>

    <?php
    echo 'redireccionando...';
    $resultado = $_GET['exito'];
    "<hr>";
    $paymentId = $_GET['paymentId'];
     "<hr>";
     $id_pago = $_GET['id_pago'];

    $monto = $_GET['monto'];
    $idpago = $_GET['seccion'];

    if($resultado == 'false'){
     ?>
        <script> 
     
        window.location.replace('https://wingsdevs.com/cuenta.php#angel-ruiz'); 

        </script>
        <?php
    }else{

   
    $payment = Payment::get($paymentId, $apiContext);
    $execution = new PaymentExecution();
    $execution->setPayerId($_GET['PayerID']);

    //Execute the payment
    // $result = $payment->execute($execution, $apiContext);


    try {
        $result = $payment->execute($execution, $apiContext);
    } catch (PayPal\Exception\PayPalConnectionException $ex) {
        echo "<pre>";
        print_r(json_decode($ex->getCode())); // Prints the Error Code 
        echo "</pre>";
        echo "<pre>";
        print_r(json_decode($ex->getData())); // Prints the detailed error message 
        echo "</pre>";
        
        die($ex);
        ?>
        <script> 
     
        window.location.replace('https://wingsdevs.com/errorpago.php'); 

        </script>
        <?php
    } catch (Exception $ex) {
        die($ex);
    }

    // echo "<pre>";
    // var_dump(json_decode( $result ) );
    // echo "</pre>";
    echo "<hr>";

    $respuesta = $result->transactions[0]->related_resources[0]->sale->state;

    if ($respuesta == "completed") {
        echo "<div class='resultado correcto'>";
        echo "El pago se realizó correctamente <br/>";
        echo "el ID es {$paymentId}";
        echo "</div>";

        date_default_timezone_set('America/Mexico_City');
        $fechaini =  date('Y-m-d H:i:s');
        $variable= 'pagado';
       

        try {
         
            require('../bd/bd.php');
            require('../bd/bdsqli.php');


          $tarjeta = 9999;
          
         
          preg_match_all('!\d+!', $string, $matches);
               
                    $stmt = $connf->prepare("UPDATE pagoparts SET pagado_pagoparts = ?, orderstatus_pagoparts = ?, idconekta_pagoparts = ? WHERE id_pagoparts = ?");
                    $stmt->bind_param("sssi", $fechaini ,$variable, $paymentId, $id_pago);
                    $stmt->execute();

                    $stmtx = $connf->prepare("UPDATE pagos SET fechadepago_pago = ?, tokenconekta_pago = ?, tokenpago_pago = ?, fortarget_pago = ?, money_pago = ? WHERE id_pago = ?");
                    $stmtx->bind_param("sssisi", $fechaini, $paymentId, $paymentId, $tarjeta, $monto, $idpago);
                    $stmtx->execute();
                    $stmt->close();
                    $connf->close();
              

              
          
        } catch (PDOException $e) {
            echo json_encode("Error: " . $e->getMessage());
        }
        ?>
        <script> 
     
        window.location.replace('https://wingsdevs.com/cuenta.php#angel-ruiz'); 

        </script>
        <?php
    } else {
        echo "<div class='resultado error'>";
        echo "El pago no se realizo";
        echo "</div>";
    }
}
    ?>



</section>


