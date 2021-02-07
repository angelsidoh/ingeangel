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
                ':pass_usuario' => $pass
            ));
            $LAST_ID = $conn->lastInsertId();
            
            $respuesta = array(
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
                'estado' => 'nuevacuentaregistrada'
            );
            if($LAST_ID == 0){
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
