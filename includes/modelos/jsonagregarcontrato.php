<?php

if ($_POST['accion'] == 'Agregar Contrato') {
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
    $contmeses = 1;
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
    $tokencontrato = "";
    $url = 'https://ingeangel.com/contrato.php';
    $fechafinMes = date("Y-m-d H:i:s", strtotime($fechainicio . "+ 1 month"));
    for ($i = 0; $i < 18; $i++) {
        $tokencontrato .= substr($str, rand(0, 62), 1);
    }

    try {
        require('../../bd/bd.php');
        require('../../bd/bdsqli.php');
        $stmt = $conn1->prepare('INSERT INTO contratos (id_contrato, idproyecto_contrato, link_contrato, token_contrato, tipo_contrato, tipoint_contrato, fechainicio_contrato, fechafin_contrato) VALUES (null, :idproyecto_contrato, :link_contrato, :token_contrato, :tipo_contrato, :tipoint_contrato, :fechainicio_contrato, :fechafin_contrato)');
        $stmt->execute(array(
            ':idproyecto_contrato' => $idproyecto,
            
            ':link_contrato' => $url,
            ':token_contrato' => $tokencontrato,
            ':tipo_contrato' => $mesestring,
            ':tipoint_contrato' => $meses,
            ':fechainicio_contrato' => $fechainicio,
            ':fechafin_contrato' => $fechafin

        ));
        $LAST_IDc = $conn1->lastInsertId();
        $stmt = $conn2->prepare('INSERT INTO pagos (id_pago, idproyecto_pago, fechainicio_pago, fechafin_pago, tokencontrato_pago, idcontrato_pago, contmeses_pago) VALUES (null, :idproyecto_pago, :fechainicio_pago, :fechafin_pago, :tokencontrato_pago,:idcontrato_pago, :contmeses_pago)');
        $stmt->execute(array(
            ':idproyecto_pago' => $idproyecto,
            
            ':fechainicio_pago' => $fechainicio,
            ':fechafin_pago' => $fechafinMes,
            ':tokencontrato_pago' => $tokencontrato,
            ':idcontrato_pago' => $LAST_IDc,
            ':contmeses_pago'=>  $contmeses

        ));
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }

    echo json_encode($_POST);
}

?>