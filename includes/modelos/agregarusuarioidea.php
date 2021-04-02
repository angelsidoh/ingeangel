<?php
session_start();
require_once '../../send-mail.php';

if ($_POST['accion'] == 'Registrarse') {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellidos = filter_var($_POST['apellidos'], FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['mail'],  FILTER_SANITIZE_STRING);
    $tel = filter_var($_POST['tel'], FILTER_SANITIZE_STRING);
    $sector = filter_var($_POST['sector'], FILTER_SANITIZE_STRING);
    $select = filter_var($_POST['select'], FILTER_SANITIZE_STRING);
    $idea = filter_var($_POST['idea'], FILTER_SANITIZE_STRING);

    $caracteres = strlen($idea);
    $contcar = $caracteres / 500;
    $imprimir = 0;


    date_default_timezone_set('America/Mexico_City');
    $fecha =  date('Y-m-d H:i:s');
    $pass = "";
    $respuesta = '';
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
    $idaux = 0;
    for ($i = 0; $i < 8; $i++) {
        $pass .= substr($str, rand(0, 62), 1);
    }

    try {
        require('../../bd/bd.php');
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email_usuario = :email_usuario LIMIT 1');
        $stmt->execute(array(':email_usuario' => $mail));
        $resultado = $stmt->fetch();
        if ($resultado != false) {
            $respuesta = array(
                'estado' => 'correoexiste'
            );
        } else {
            $stmt = $conn->prepare('INSERT INTO usuarios (id_usuario, nombre_usuario, apellidos_usuario, telefono_usuario, email_usuario, fecha_usuario, pass_usuario) VALUES (null, :nombre_usuario,:apellidos_usuario, :telefono_usuario, :email_usuario, :fecha_usuario, :pass_usuario)');

            $stmt->execute(array(
                ':nombre_usuario' => $nombre,
                ':apellidos_usuario' => $apellidos,
                ':telefono_usuario' => $tel,
                ':email_usuario' => $mail,
                ':fecha_usuario' => $fecha,
                ':pass_usuario' => $pass

            ));
            $LAST_ID = $conn->lastInsertId();

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
                $stmt = $conn1->prepare('INSERT INTO mensajecliente (id_mensaje, idusuario_mensaje, mensaje_mensaje) VALUES (null, :idusuario_mensaje, :mensaje_mensaje)');

                $stmt->execute(array(
                    ':idusuario_mensaje' => $LAST_ID,
                    ':mensaje_mensaje' => $nuevomsj

                ));
                $LAST_IDx = $conn1->lastInsertId();

                if ($i == 1) {
                    $idaux = $LAST_IDx;
                }
                require_once('../../bd/bdsqli.php');
                $stmtx = $connf->prepare("UPDATE mensajecliente SET idmensaje_mensaje = ? WHERE id_mensaje = ?");

                $stmtx->bind_param("ss", $idaux, $LAST_IDx);

                $stmtx->execute();

                if ($stmtx->affected_rows == 1) {
                }



                $imprimir = $imprimir + 500;
                $caracteres = $caracteres - 500;
            }
            $stmtx->close();
            $connf->close();
            $respuesta = array(
                'estado' => 'creandocuenta'
            );

            // enviar_correo3($nombre, $apellidos, $pass, $mail, $idea, $select, $sector);
        }
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
}
