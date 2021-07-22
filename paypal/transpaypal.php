<?php
session_start();


use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

require 'config.php';
$compra = new Payer();
$compra->setPaymentMethod('paypal');

$cuenta = $_GET['pago'];
$contrato = $_GET['contrato'];
$idpago = $_GET['idpago'];
$mail = $_GET['marx'];
$idproyecto = $_GET['sub'];
date_default_timezone_set('America/Mexico_City');
            $fechaini =  date('Y-m-d H:i:s');
try {
    require('../bd/bd.php');
    require('../bd/bdsqli.php');


    $stmt = $conn->prepare('SELECT * FROM pagoparts WHERE tokencontrato_pagoparts = :tokencontrato_pagoparts LIMIT 1');
    $stmt->execute(array(':tokencontrato_pagoparts' => $contrato.'-paypal'.$idpago));
    $resultado = $stmt->fetch();
    if ($resultado != false) {
    
     $linksand = $resultado['link_pagoparts'] ;
      
        header("Location:{$linksand}");
    } else {
       
        $articulo = new Item();
        $articulo->setName($producto)
            ->setCurrency('MXN')
            ->setQuantity(1)
            ->setPrice($cuenta);
        
        $arreglo_pedido = array();
        for ($i = 1; $i <= 1; $i++) {
        
        
            ${"articulo$i"} = new Item();
            $arreglo_pedido[] = ${"articulo$i"};
            ${"articulo$i"}->setName('Contrato ' . $contrato)
                ->setCurrency('MXN')
                ->setQuantity((int) 1)
                ->setPrice($cuenta);
        }
        
        
        
        // var_dump($arreglo_pedido);
        $none = 'none';
        $stmt = $conn->prepare('INSERT INTO pagoparts (id_pagoparts, idpago_pagoparts, tokencontrato_pagoparts, fecha_pagoparts,orderstatus_pagoparts,  monto_pagoparts, link_pagoparts) VALUES (null, :idpago_pagoparts, :tokencontrato_pagoparts, :fecha_pagoparts,:orderstatus_pagoparts, :monto_pagoparts, :link_pagoparts)');
        $stmt->execute(array(
            ':idpago_pagoparts' =>  $idpago ."paypal",
            ':tokencontrato_pagoparts' =>  $contrato.'-paypal'.$idpago,
            ':fecha_pagoparts' => $fechaini,
            // ':order_pagoparts' =>  $order->charges[0]->payment_method->receiving_account_number,
            ':orderstatus_pagoparts' => 'pending_payment',
            // ':idconekta_pagoparts' => $order->id,
            ':monto_pagoparts' => $cuenta,
            ':link_pagoparts' =>  $none
        
        ));
        $LAST_IDx = $conn->lastInsertId();
        $ID_registro =$LAST_IDx;
        $listaArticulos = new ItemList();
        $listaArticulos->setItems($arreglo_pedido);
        
        
        
        
        $cantidad = new Amount();
        $cantidad->setCurrency('MXN')
            ->setTotal($cuenta);
        
        
        $transaccion =  new Transaction();
        $transaccion->setAmount($cantidad)
            ->setItemList($listaArticulos)
            ->setDescription('Pago mensualidad https://wingsdevs.com')
            ->setInvoiceNumber($ID_registro);
        
        $redireccionar = new RedirectUrls();
        $redireccionar->setReturnUrl(URL_SITIO . "pago_finalizado.php?exito=true&id_pago={$ID_registro}&monto={$cuenta}&seccion={$idpago}&marx={$mail}&numx={$contrato}&sub={$idproyecto}")
            ->setCancelUrl(URL_SITIO . "pago_finalizado.php?exito=false&id_pago={$ID_registro}&monto={$cuenta}&seccion={$idpago}&marx={$mail}&numx={$contrato}&sub={$idproyecto}");
        
        
        $pago = new Payment();
        $pago->setIntent("sale")
            ->setPayer($compra)
            ->setRedirectUrls($redireccionar)
            ->setTransactions(array($transaccion));
        
        try {
            $pago->create($apiContext);
        } catch (PayPal\Exception\PayPalConnectionException $pce) {
            echo "<pre>";
            print_r(json_decode($pce->getData()));
            exit;
            echo "</pre>";
        }
        
        // 
        $aprobado = $pago->getApprovalLink();
        // echo 'hola';
 


      
           
                $stmt = $connf->prepare("UPDATE pagoparts SET link_pagoparts = ? WHERE id_pagoparts = ?");
                $stmt->bind_param("si", $aprobado,  $ID_registro);
                $stmt->execute();
                $stmt->close();
                $connf->close();
        // echo 'hey';
        header("Location: {$aprobado}");
    }
} catch (PDOException $e) {
    echo json_encode("Error: " . $e->getMessage());
}


