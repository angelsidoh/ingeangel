<?php
session_start();
require_once '../../send-mail.php';

if ($_POST['accion'] == 'Nuevo Proyecto') {
    $name_proyecto = 'Prototipo X';
    $paso1 = '1.-Nos pondremos en contacto con usted a la brevedad posible.';
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_STRING);
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);
    $paquete = filter_var($_POST['paquete'], FILTER_SANITIZE_STRING);
    $fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
    date_default_timezone_set('America/Mexico_City');
    $fechaini =  date('Y-m-d H:i:s');
    $fechafin = date("Y-m-d H:i:s", strtotime($fechaini . "+ 1 days"));
    $fechafinMes = date("Y-m-d H:i:s", strtotime($fechaini . "+ 1 month"));
    $fechafinContrato = date("Y-m-d H:i:s", strtotime($fechaini . "+ 3 month"));
    $dias1 = (strtotime($fechafin) - strtotime($fechaini)) / 86400;
    $mesestring = '3 Meses';
    $meses = 3;
    $contmeses = 1;
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
    $identicontrato = "";
    $url = 'https://wingsdevs.com/contrato.php';
    $respuestas =0;
    $veccondicion = [0];
    for ($i = 0; $i < 18; $i++) {
        $identicontrato .= substr($str, rand(0, 62), 1);
    }
    try {
        require('../../bd/bd.php');
        require('../../bd/bdsqli.php');
        
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email_usuario = :email_usuario LIMIT 1');
        $stmt->execute(array(':email_usuario' => $correo));
        $resultado = $stmt->fetch();
        if ($resultado != false) {
            $stmt = $conn->prepare('INSERT INTO proyectos (id_proyecto, idusuario_proyecto, nombre_proyecto, tipo_proyecto, contrato_proyecto, pago_proyecto) VALUES (null, :idusuario_proyecto, :nombre_proyecto, :tipo_proyecto, :contrato_proyecto, :pago_proyecto)');
            $stmt->execute(array(
                ':idusuario_proyecto' => $resultado['id_usuario'],
                ':nombre_proyecto' => $name_proyecto,
                ':tipo_proyecto' => $paquete,
                ':contrato_proyecto' => 'link',
                ':pago_proyecto' => $precio
            ));
            $LAST_IDb = $conn->lastInsertId();
            $veccondicion[0] = $LAST_IDb;
            
            $stmtf = $connf->prepare("UPDATE usuarios SET idproyecto_usuario = ? WHERE email_usuario = ?");
            $stmtf->bind_param("is", $LAST_IDb, $correo);
            $stmtf->execute();
            $stmtf->close();
            $connf->close();
            

            
            $stmt = $conn0->prepare('INSERT INTO pasos (id_paso, descripcion_paso, idproyecto_paso, fechaini_paso, fechafin_paso, timing_paso) VALUES (null, :descripcion_paso, :idproyecto_paso, :fechaini_paso, :fechafin_paso, :timing_paso)');
            $stmt->execute(array(
                ':descripcion_paso' => $paso1,
                ':idproyecto_paso' => $LAST_IDb,
                ':fechaini_paso' => $fechaini,
                ':fechafin_paso' => $fechafin,
                ':timing_paso' => $dias1

            ));
            $LAST_IDa = $conn0->lastInsertId();
            $veccondicion[3] = $LAST_IDa;

            $stmt = $conn1->prepare('INSERT INTO contratos (id_contrato, idproyecto_contrato, link_contrato, token_contrato, tipo_contrato, tipoint_contrato, fechainicio_contrato, fechafin_contrato) VALUES (null, :idproyecto_contrato, :link_contrato, :token_contrato, :tipo_contrato, :tipoint_contrato, :fechainicio_contrato, :fechafin_contrato)');
            $stmt->execute(array(
                ':idproyecto_contrato' => $LAST_IDb,
                
                ':link_contrato' => $url,
                ':token_contrato' => $identicontrato,
                ':tipo_contrato' => $mesestring,
                ':tipoint_contrato' => $meses,
                ':fechainicio_contrato' => $fechaini,
                ':fechafin_contrato' => $fechafinContrato

            ));
            $LAST_IDc = $conn1->lastInsertId();
            $veccondicion[1] = $LAST_IDc;
            $stmt = $conn2->prepare('INSERT INTO pagos (id_pago, idproyecto_pago, fechainicio_pago, fechafin_pago, tokencontrato_pago, idcontrato_pago, contmeses_pago) VALUES (null, :idproyecto_pago, :fechainicio_pago, :fechafin_pago, :tokencontrato_pago, :idcontrato_pago, :contmeses_pago)');
            $stmt->execute(array(
                ':idproyecto_pago' => $LAST_IDb,
                
                ':fechainicio_pago' => $fechaini,
                ':fechafin_pago' => $fechafinMes,
                ':tokencontrato_pago' => $identicontrato,
                ':idcontrato_pago' => $LAST_IDc,
                ':contmeses_pago'=> $contmeses

            ));
            
            $LAST_IDd = $conn2->lastInsertId();
            
            $veccondicion[2] = $LAST_IDd;
            if($veccondicion[0]!= 0 && $veccondicion[3]!= 0){
                $respuesta = array(
                    'estado' => 'nuevo proyecto creado'
                    );
            }
            if($veccondicion[0]== 0 || $veccondicion[3]== 0){
                
                $respuesta = array(
                    'estado' => 'error en la creacion del nuevo proyecto',
                    'id0' => $veccondicion[0],
                    
                    'id3' => $veccondicion[3]
                    );

            } 
        } else {

        }
        enviar_correo1($correo, $paso1, $paquete);
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
}


if ($_POST['accion'] == 'Registrar') {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);
    $calle = filter_var($_POST['calle'], FILTER_SANITIZE_STRING);
    $numiedirec = filter_var($_POST['numiedirec'], FILTER_SANITIZE_STRING);
    $col = filter_var($_POST['col'], FILTER_SANITIZE_STRING);
    $postal = filter_var($_POST['postal'], FILTER_SANITIZE_STRING);
    $paquete = filter_var($_POST['paquete'], FILTER_SANITIZE_STRING);
    $fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
    // $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&/()=+-~1234567890");
    $pass = "";
   
    $precio = '';
    $url = 'https://wingsdevs.com/contrato.php';
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
    $identicontrato = "";
    for ($i = 0; $i < 18; $i++) {
        $identicontrato .= substr($str, rand(0, 62), 1);
    }
    date_default_timezone_set('America/Mexico_City');
    $fechaini =  date('Y-m-d H:i:s');
    $fechafin = date("Y-m-d H:i:s", strtotime($fechaini . "+ 1 days"));
    $fechafinMes = date("Y-m-d H:i:s", strtotime($fechaini . "+ 1 month"));
    $dias1 = (strtotime($fechafin) - strtotime($fechaini)) / 86400;
 
    $fechafinContrato = date("Y-m-d H:i:s", strtotime($fechaini . "+ 3 month"));
  
    $mesestring = '3 Meses';
    $meses = 3;
    $contmeses = 1;

    

    // $dias1 = (strtotime($hoy)-strtotime($restadia))/86400;

    $paso1 = '1.-Nos pondremos en contacto con usted a la brevedad posible.';

    $name_proyecto = 'Prototipo X';

    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_STRING);

    for ($i = 0; $i < 8; $i++) {
        $pass .= substr($str, rand(0, 62), 1);
    }

    try {
        require('../../bd/bd.php');
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email_usuario = :email_usuario LIMIT 1');
        $stmt->execute(array(':email_usuario' => $correo));
        $resultado = $stmt->fetch();
        if ($resultado != false) {
            $respuesta = array(
                'estado' => 'correoexiste'
            );
        } else {

            $stmt = $conn->prepare('INSERT INTO usuarios (id_usuario, nombre_usuario, apellidos_usuario, telefono_usuario, email_usuario, calle_usuario, numiedireccion_usuario, colonia_usuario, cp_usuario, paquetes_usuario, fecha_usuario, pass_usuario) VALUES (null, :nombre_usuario,:apellidos_usuario, :telefono_usuario, :email_usuario, :calle_usuario, :numiedireccion_usuario, :colonia_usuario, :cp_usuario, :paquetes_usuario, :fecha_usuario, :pass_usuario)');

            $stmt->execute(array(
                ':nombre_usuario' => $nombre,
                ':apellidos_usuario' => $apellido,
                ':telefono_usuario' => $telefono,
                ':email_usuario' => $correo,
                ':calle_usuario' => $calle,
                ':numiedireccion_usuario' => $numiedirec,
                ':colonia_usuario' => $col,
                ':cp_usuario' => $postal,
                ':paquetes_usuario' => $paquete,
                ':fecha_usuario' => $fecha,
                ':pass_usuario' => $pass,

            ));
            $LAST_ID = $conn->lastInsertId();


            $stmt = $conn->prepare('INSERT INTO proyectos (id_proyecto, idusuario_proyecto, nombre_proyecto, tipo_proyecto, contrato_proyecto, pago_proyecto) VALUES (null, :idusuario_proyecto, :nombre_proyecto, :tipo_proyecto, :contrato_proyecto, :pago_proyecto)');
            $stmt->execute(array(
                ':idusuario_proyecto' => $LAST_ID,
                ':nombre_proyecto' => $name_proyecto,
                ':tipo_proyecto' => $paquete,
                ':contrato_proyecto' => 'link',
                ':pago_proyecto' => $precio
            ));
            $LAST_IDb = $conn->lastInsertId();
            $veccondicion[0] = $LAST_IDb;
            
            require_once('../../bd/bdsqli.php');
            $stmtf = $connf->prepare("UPDATE usuarios SET idproyecto_usuario = ? WHERE pass_usuario = ?");
            $stmtf->bind_param("is", $LAST_IDb, $pass);
            $stmtf->execute();
            $stmtf->close();
            $connf->close();

            $stmt = $conn0->prepare('INSERT INTO pasos (id_paso, descripcion_paso, idproyecto_paso, fechaini_paso, fechafin_paso, timing_paso) VALUES (null, :descripcion_paso, :idproyecto_paso, :fechaini_paso, :fechafin_paso, :timing_paso)');
            $stmt->execute(array(
                ':descripcion_paso' => $paso1,
                ':idproyecto_paso' => $LAST_IDb,
                ':fechaini_paso' => $fechaini,
                ':fechafin_paso' => $fechafin,
                ':timing_paso' => $dias1

            ));
            $LAST_IDa = $conn0->lastInsertId();

            $stmt = $conn1->prepare('INSERT INTO contratos (id_contrato, idproyecto_contrato, link_contrato, token_contrato, tipo_contrato, tipoint_contrato, fechainicio_contrato, fechafin_contrato) VALUES (null, :idproyecto_contrato, :link_contrato, :token_contrato, :tipo_contrato, :tipoint_contrato, :fechainicio_contrato, :fechafin_contrato)');
            $stmt->execute(array(
                ':idproyecto_contrato' => $LAST_IDb,
                
                ':link_contrato' => $url,
                ':token_contrato' => $identicontrato,
                ':tipo_contrato' => $mesestring,
                ':tipoint_contrato' => $meses,
                ':fechainicio_contrato' => $fechaini,
                ':fechafin_contrato' => $fechafinContrato

            ));
            $LAST_IDc = $conn1->lastInsertId();
            $veccondicion[1] = $LAST_IDc;
         $stmt = $conn2->prepare('INSERT INTO pagos (id_pago, idproyecto_pago, fechainicio_pago, fechafin_pago, tokencontrato_pago, idcontrato_pago, contmeses_pago) VALUES (null, :idproyecto_pago, :fechainicio_pago, :fechafin_pago, :tokencontrato_pago, :idcontrato_pago, :contmeses_pago)');
            $stmt->execute(array(
                ':idproyecto_pago' => $LAST_IDb,
                
                ':fechainicio_pago' => $fechaini,
                ':fechafin_pago' => $fechafinMes,
                ':tokencontrato_pago' => $identicontrato,
                ':idcontrato_pago' => $LAST_IDc,
                ':contmeses_pago'=> $contmeses

            ));
            
            $LAST_IDd = $conn2->lastInsertId();
            enviar_correo($nombre,$apellido,$pass,$correo);
            enviar_correo1($correo, $paso1, $paquete);


            $respuesta = array(
                'datosid' => $LAST_ID,
                'variables' => $variables = array(
                    'nombre' => $nombre
                    // 'apellido' => $apellido,
                    // 'telefono' => $telefono,
                    // 'correo' => $correo,
                    // 'calle' => $calle,
                    // 'numero' => $numiedirec,
                    // 'colonia' => $col,
                    // 'cp' => $postal,
                    // 'paquete' => $paquete,
                    // 'fecha' => $fecha

                ),
                'estado' => 'nuevacuentaregistrada',
            );
         
        }
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
}
