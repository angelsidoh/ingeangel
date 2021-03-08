<?php
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
    $url = 'https://ingeangel.com/contrato.php';
    $fechafinMes = date("Y-m-d H:i:s", strtotime($fechainicio . "+ 1 month"));
    $idcontrato_pago= filter_var($_POST['contratoid'], FILTER_SANITIZE_STRING);;
   

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
        echo json_encode($_POST);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }

    
}

?>