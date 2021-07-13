<?php
include_once 'includes/templates/header.php';

use PayPal\Rest\ApiContext;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Payment;

require 'config.php';
?>
<section class="seccion contenedor">
    <h2>Resumen Registro</h2>

    <?php
    echo $resultado = $_GET['exito'];
    echo "<hr>";
    echo $paymentId = $_GET['paymentId'];
    echo "<hr>";
    echo $id_pago = (int) $_GET['id_pago'];

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
    } catch (Exception $ex) {
        die($ex);
    }

    // echo "<pre>";
    // var_dump(json_decode( $result ) );
    // echo "</pre>";
    echo "<hr>";
echo 'hey';
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


          
               
                    $stmt = $connf->prepare("UPDATE pagoparts SET orderstatus_pagoparts = ?, idconekta_pagoparts = ? WHERE id_pagoparts = ?");
                    $stmt->bind_param("ssi", $variable, $paymentId, $id_pago);
                    $stmt->execute();
                    $stmt->close();
                    $connf->close();


              
          
        } catch (PDOException $e) {
            echo json_encode("Error: " . $e->getMessage());
        }
    } else {
        echo "<div class='resultado error'>";
        echo "El pago no se realizo";
        echo "</div>";
    }

    ?>



</section>


<?php include_once 'includes/templates/footer.php'; ?>