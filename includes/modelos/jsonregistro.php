<?php
session_start();
if ($_POST['accion'] == 'regcuenta1') {
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
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&/()=+-~1234567890");
    $pass = "";
    $precio = '';

    date_default_timezone_set('America/Mexico_City');
    $fechaini =  date('Y-m-d H:i:s'); 
    $fechafin = date("Y-m-d H:i:s",strtotime($fechaini."+ 1 days"));
    $dias1 = (strtotime($fechafin)-strtotime($fechaini))/86400;
    
    // $dias1 = (strtotime($hoy)-strtotime($restadia))/86400;
    
    $paso1 = 'Contacto Cliente-Ingeniero';

    $name_proyecto = 'jugos&tortas.com';

    if($paquete == 'Paquete Básico'){

        $precio = '4980.00';
    }elseif ($paquete == 'Paquete Negocio') {
        $precio = '7299.00';
    }elseif ($paquete == 'Paquete Profesional') {
        $precio = '9620.00';
    }
    for ($i = 0; $i < 8; $i++) {
        $pass .= substr($str, rand(0, 74), 1);
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
            require_once('../../bd/bdsqli.php');
            $stmtf = $connf->prepare("UPDATE usuarios SET idproyecto_usuario = ? WHERE pass_usuario = ?");
            $stmtf->bind_param("is", $LAST_IDb, $pass);
            $stmtf->execute();
            $stmtf->close();
            $connf->close();

            $stmt = $conn->prepare('INSERT INTO pasos (id_paso, descripcion_paso, idproyecto_paso, fechaini_paso, fechafin_paso, timing_paso) VALUES (null, :descripcion_paso, :idproyecto_paso, :fechaini_paso, :fechafin_paso, :timing_paso)');
            $stmt->execute(array(
                ':descripcion_paso' => $paso1,
                ':idproyecto_paso' => $LAST_IDb,
                ':fechaini_paso' => $fechaini,
                ':fechafin_paso' => $fechafin,
                ':timing_paso' => $dias1
                
            ));
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
            if ($LAST_ID == 0) {
                $respuesta = array(
                    'estado' => 'errorINSERTARenBD'

                );
                session_destroy();
            }
            if ($LAST_IDb == 0) {
                $respuesta = array(
                    'estado' => 'errorINSERTARenBD'

                );
                session_destroy();
            }
            
        }
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
}
