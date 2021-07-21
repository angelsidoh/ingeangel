<?php
require_once '../../send-mail.php';
if ($_POST['accion'] == 'Agregar Pago') {
    $select = filter_var($_POST['select'], FILTER_SANITIZE_STRING);
    $select = $select-1;
    $meses = $select;
    if($select > 1){
        $mesestring = $select.' Meses';
    }else{
        $mesestring = $select.' Mes';
    }
    $fechainicio = filter_var($_POST['fechainicio'], FILTER_SANITIZE_STRING);
    $fechafin = filter_var($_POST['fechafin'], FILTER_SANITIZE_STRING);
    $paquete = filter_var($_POST['paquete'], FILTER_SANITIZE_STRING);
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_STRING);
    $idproyecto = filter_var($_POST['idproyecto'], FILTER_SANITIZE_STRING);
    $contmeses = $meses;
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
    $tokencontrato = filter_var($_POST['tokencontrato'], FILTER_SANITIZE_STRING);
    $url = 'https://wingsdevs.com/contrato.php';
    $fechafinMes = date("Y-m-d H:i:s", strtotime($fechainicio . "+ 1 month"));
    $idcontrato_pago= filter_var($_POST['contratoid'], FILTER_SANITIZE_STRING);;
    $fechafinmasseven = date("Y-m-d H:i:s", strtotime($fechainicio . "+ 7 days"));
    $hosting = $_POST['hosting'];
    $dominio = $_POST['dominio'];
    $mantenimiento = $_POST['mantenimiento'];
    $bdatos = $_POST['bdatos'];
    $programacion = $_POST['programacion'];
    $email = $_POST['correo'];

    try {
        require('../../bd/bd.php');
        require('../../bd/bdsqli.php');
      
       
        
        $stmt = $conn2->prepare('INSERT INTO pagos (id_pago, idproyecto_pago, fechainicio_pago, fechafin_pago, tokencontrato_pago, idcontrato_pago, contmeses_pago) VALUES (null, :idproyecto_pago, :fechainicio_pago, :fechafin_pago, :tokencontrato_pago, :idcontrato_pago, :contmeses_pago)');
        $stmt->execute(array(
            ':idproyecto_pago' => $idproyecto,
            ':fechainicio_pago' => $fechainicio,
            ':fechafin_pago' => $fechafin,
            ':tokencontrato_pago' => $tokencontrato,
            ':idcontrato_pago' => $idcontrato_pago,
            ':contmeses_pago'=>  $contmeses

        ));
        $LAST_ID = $conn2->lastInsertId();
        $respuesta = array(
            'estado' => 'pago agregado'
        );
        $link = 'pago.php?pago='.$tokencontrato. '-' . $LAST_ID . '$' . $idproyecto;

        enviar_correo113($email, $fechafinmasseven, $link, $tokencontrato, $meses, $hosting, $dominio, $programacion, $mantenimiento, $bdatos, $precio);
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }

    
}

?>