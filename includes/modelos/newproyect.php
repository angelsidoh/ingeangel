<?php

session_start();
require_once '../../send-mail.php';

if ($_POST['accion'] == 'Crear Proyecto') {
    $name_proyecto = 'Sin Proyecto';
    $paso1 = 'Cotización: En proceso';
    $precio = '0';
    $paquete = 'Sin paquete';
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellidos = filter_var($_POST['apellidos'], FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['mail'],  FILTER_SANITIZE_STRING);
    $tel = filter_var($_POST['tel'], FILTER_SANITIZE_STRING);
    $sector = filter_var($_POST['sector'], FILTER_SANITIZE_STRING);
    $select = filter_var($_POST['select'], FILTER_SANITIZE_STRING);
    $idea = filter_var($_POST['idea'], FILTER_SANITIZE_STRING);
    $idusuario = filter_var($_POST['idusuario'], FILTER_SANITIZE_STRING);
    $caracteres = strlen($idea);
    $contcar = $caracteres / 500;
    $imprimir = 0;
    $tipuser = $_SESSION['tipo_usuario'];

    $url = 'https://ingeangel.com/contrato.php';


    date_default_timezone_set('America/Mexico_City');
    $fechaini =  date('Y-m-d H:i:s');
   
    $fechafin = date("Y-m-d H:i:s", strtotime($fechaini . "+ 1 days"));
    $fechafinMes = date("Y-m-d H:i:s", strtotime($fechaini . "+ 1 month"));
    $dias1 = (strtotime($fechafin) - strtotime($fechaini)) / 86400;
 
    $fechafinContrato = date("Y-m-d H:i:s", strtotime($fechaini . "+ 2 seconds"));
  
    $mesestring = '3 Meses';
    $meses = 3;
    $contmeses = 1;

    $fecha =  date('Y-m-d H:i:s');
    $pass = "";
    $respuesta = '';
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
    $idaux = 0;
    for ($i = 0; $i < 8; $i++) {
        $pass .= substr($str, rand(0, 62), 1);
    }
    $identicontrato = "";
    for ($i = 0; $i < 18; $i++) {
        $identicontrato .= substr($str, rand(0, 62), 1);
    }

    try {
        require('../../bd/bd.php');
       
           
            $stmt = $conn1->prepare('INSERT INTO proyectos (id_proyecto, idusuario_proyecto, nombre_proyecto, tipo_proyecto) VALUES (null, :idusuario_proyecto, :nombre_proyecto, :tipo_proyecto)');
            $stmt->execute(array(
                ':idusuario_proyecto' => $idusuario,
                ':nombre_proyecto' => $name_proyecto,
                ':tipo_proyecto' => $paquete
            ));
            $LAST_IDb = $conn1->lastInsertId();
          
            

            $stmt = $conn0->prepare('INSERT INTO pasos (id_paso, descripcion_paso, idproyecto_paso, fechaini_paso, fechafin_paso, timing_paso, num_paso) VALUES (null, :descripcion_paso, :idproyecto_paso, :fechaini_paso, :fechafin_paso, :timing_paso, :num_paso)');
            $stmt->execute(array(
                ':descripcion_paso' => $paso1,
                ':idproyecto_paso' => $LAST_IDb,
                ':fechaini_paso' => $fechaini,
                ':fechafin_paso' => $fechafin,
                ':timing_paso' => $dias1,
                ':num_paso' => 1

            ));
            $LAST_IDa = $conn0->lastInsertId();

            $stmt = $conn2->prepare('INSERT INTO contratos (id_contrato, idproyecto_contrato, link_contrato, token_contrato, tipo_contrato, tipoint_contrato, fechainicio_contrato, fechafin_contrato) VALUES (null, :idproyecto_contrato, :link_contrato, :token_contrato, :tipo_contrato, :tipoint_contrato, :fechainicio_contrato, :fechafin_contrato)');
            $stmt->execute(array(
                ':idproyecto_contrato' => $LAST_IDb,
                
                ':link_contrato' => $url,
                ':token_contrato' => $identicontrato,
                ':tipo_contrato' => $mesestring,
                ':tipoint_contrato' => $meses,
                ':fechainicio_contrato' => $fechaini,
                ':fechafin_contrato' => $fechafinContrato

            ));
            $LAST_IDc = $conn2->lastInsertId();
            $stmt = $conn3->prepare('INSERT INTO pagos (id_pago, idproyecto_pago, fechainicio_pago, fechafin_pago, tokencontrato_pago, idcontrato_pago, contmeses_pago) VALUES (null, :idproyecto_pago, :fechainicio_pago, :fechafin_pago, :tokencontrato_pago, :idcontrato_pago, :contmeses_pago)');
            $stmt->execute(array(
                ':idproyecto_pago' => $LAST_IDb,
                ':fechainicio_pago' => $fechaini,
                ':fechafin_pago' => $fechafinMes,
                ':tokencontrato_pago' => $identicontrato,
                ':idcontrato_pago' => $LAST_IDc,
                ':contmeses_pago'=> $contmeses

            ));

            for ($i = 1; $i <= $contcar + 1; $i++) {

                $nuevomsj = '';
                if ($caracteres > 500) {

                    for ($u = $imprimir; $u < ($i * 500); $u++) {

                        $nuevomsj .= $idea[$u];
                    }
                }else{
                    for ($u=$imprimir; $u < $imprimir+$caracteres; $u++) { 
                        $nuevomsj.= $idea[$u];
                    }
                }
                $stmt = $conn2->prepare('INSERT INTO mensajecliente (id_mensaje, idusuario_mensaje, mensaje_mensaje, admin_mensaje, fecha_mensaje) VALUES (null, :idusuario_mensaje, :mensaje_mensaje, :admin_mensaje, :fecha_mensaje)');

                $stmt->execute(array(
                    ':idusuario_mensaje' => $idusuario,
                    ':mensaje_mensaje' => $nuevomsj,
                    ':admin_mensaje' => $tipuser,
                    ':fecha_mensaje' => $fecha

                ));
                $LAST_IDx = $conn2->lastInsertId();

                if ($i == 1) {
                    $idaux = $LAST_IDx;
                }
                require_once('../../bd/bdsqli.php');
                $stmtx = $connf->prepare("UPDATE mensajecliente SET idmensaje_mensaje = ? WHERE id_mensaje = ?");

                $stmtx->bind_param("ss", $idaux, $LAST_IDx);

                $stmtx->execute();

                



                $imprimir = $imprimir + 500;
                $caracteres = $caracteres - 500;
            }
            $stmtx->close();
            $connf->close();
            $respuesta = array(
                'estado' => 'creandonuevoproyecto'
            );

            // enviar_correo3($nombre, $apellidos, $pass, $mail, $idea, $select, $sector);
        
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
}