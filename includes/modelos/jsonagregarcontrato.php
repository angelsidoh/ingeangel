<?php
require_once '../../send-mail.php';
session_start();
if ($_POST['accion'] == 'Agregar Contrato') {
    $select = filter_var($_POST['select'], FILTER_SANITIZE_STRING);
    $select = $select-1;
    $tipodesarrollo = $_POST['tipodesarrollo'];
    $meses = $select;
    if($select > 1){
        $mesestring = $select.' Meses';
    }else{
        $mesestring = $select.' Mes';
    }
    $fechainicio = filter_var($_POST['fechainicio'], FILTER_SANITIZE_STRING);
    $fechafin = filter_var($_POST['fechafin'], FILTER_SANITIZE_STRING);
    // $paquete = filter_var($_POST['paquete'], FILTER_SANITIZE_STRING);
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_STRING);
    $idproyecto = filter_var($_POST['idproyecto'], FILTER_SANITIZE_STRING);
    $hosting = filter_var($_POST['hosting'], FILTER_SANITIZE_STRING);
    $dominio = filter_var($_POST['dominio'], FILTER_SANITIZE_STRING);
    $mantenimiento = filter_var($_POST['mantenimiento'], FILTER_SANITIZE_STRING);
    $basededatos = filter_var($_POST['basededato'], FILTER_SANITIZE_STRING);
    $programacion = filter_var($_POST['programacion'], FILTER_SANITIZE_STRING);
    $nombreproyecto = filter_var($_POST['nombreproyecto'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $contmeses = 1;
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
    $tokencontrato = "";
    $url = 'https://wingsdevs.com/contrato.php';
    $fechafinMes = date("Y-m-d H:i:s", strtotime($fechainicio . "+ 1 month"));
    for ($i = 0; $i < 18; $i++) {
        $tokencontrato .= substr($str, rand(0, 62), 1);
    }

    try {
        require('../../bd/bd.php');
        require('../../bd/bdsqli.php');
        $stmt = $conn1->prepare('INSERT INTO contratos (id_contrato, idproyecto_contrato, tipocx_contrato, link_contrato, token_contrato, tipo_contrato, tipoint_contrato, fechainicio_contrato, fechafin_contrato) VALUES (null, :idproyecto_contrato, :tipocx_contrato, :link_contrato, :token_contrato, :tipo_contrato, :tipoint_contrato, :fechainicio_contrato, :fechafin_contrato)');
        $stmt->execute(array(
            ':idproyecto_contrato' => $idproyecto,
            ':tipocx_contrato'=> $tipodesarrollo,
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
        $stmt = $conn2->prepare('INSERT INTO precios (id_precio, basico_precio, tokencontrato_precio, idcontrato_precio, hosting_precio, dominio_precio, mantenimiento_precio, basesdatos_precio, programacion_precio) VALUES (null, :basico_precio, :tokencontrato_precio, :idcontrato_precio, :hosting_precio, :dominio_precio, :mantenimiento_precio, :basesdatos_precio, :programacion_precio)');
        $stmt->execute(array(
            ':basico_precio' => $precio,
            'tokencontrato_precio' => $tokencontrato,
            ':idcontrato_precio' => $LAST_IDc,
            ':hosting_precio' => $hosting,
            ':dominio_precio' => $dominio,
            ':mantenimiento_precio' => $mantenimiento,
            ':basesdatos_precio' => $basededatos,
            ':programacion_precio' => $programacion

            
            

        ));

        $proyecto = $nombreproyecto;
        if($tipodesarrollo ==1){
            $tipoproyecto= 'desarrollo en lenguajes de alto nivel';
        }else{
            $tipoproyecto= 'desarrollo en WordPress y plugins de construcción de interfaces';
        }
        

        $stmt = $connf->prepare("UPDATE proyectos SET nombre_proyecto = ?, tipo_proyecto = ? WHERE id_proyecto = ?");

        $stmt->bind_param("sss", $proyecto, $tipoproyecto, $idproyecto);

        $stmt->execute();
        $stmt->close();
        $connf->close();
        $respuesta = array(
            'estado' => 'contrato nuevo agregado',
            'tipocx' => $tipodesarrollo
        );
    
        enviar_correo111($email, $nombreproyecto, $tokencontrato, $fechainicio, $fechafin, $precio);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }

    echo json_encode($respuesta);
}

?>