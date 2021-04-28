<?php
session_start();
require_once '../../send-mail.php';
if ($_POST['accion'] == 'Responder' || $_POST['accion'] == 'Enviar Mensaje') {
    $asunto = filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
    $idmensaje = filter_var($_POST['idmensaje'], FILTER_SANITIZE_STRING);
    $idusuario = filter_var($_POST['idusuario'], FILTER_SANITIZE_STRING);
    $mensaje = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);
    $nombreusuario = filter_var($_POST['nombreusuario'], FILTER_SANITIZE_STRING);

    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    date_default_timezone_set('America/Mexico_City');
    $fecha =  date('Y-m-d H:i:s');
    $caracteres = strlen($mensaje);
    $contcar = $caracteres / 500;
    $imprimir = 0;
    
    
    if ($_SESSION['tipo_usuario'] == 'admin') {
        $tipo_user = 'José Angel Ruiz Chávez. Ingeniero';
        
    }
    if ($_SESSION['tipo_usuario'] == 'Usuario') {
        $tipo_user = $nombreusuario. '. Usuario';
        
    }
   
    try {
        require('../../bd/bd.php');
        require_once('../../bd/bdsqli.php');
        for ($i = 1; $i <= $contcar + 1; $i++) {

            $nuevomsj = '';
            if ($caracteres > 500) {

                for ($u = $imprimir; $u < ($i * 500); $u++) {

                    $nuevomsj .= $mensaje[$u];
                }
            } else {
                for ($u = $imprimir; $u < $imprimir + $caracteres; $u++) {
                    $nuevomsj .= $mensaje[$u];
                }
            }
            $stmt = $conn2->prepare('INSERT INTO mensajecliente (id_mensaje, idusuario_mensaje, mensaje_mensaje, admin_mensaje, fecha_mensaje, asunto_mensaje) VALUES (null, :idusuario_mensaje, :mensaje_mensaje, :admin_mensaje, :fecha_mensaje, :asunto_mensaje)');

            $stmt->execute(array(
                ':idusuario_mensaje' => $idusuario,
                ':mensaje_mensaje' => $nuevomsj,
                ':admin_mensaje' => $tipo_user,
                ':fecha_mensaje' => $fecha,
                ':asunto_mensaje' => $asunto

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
            'estado' => 'enviado'
        );
        enviar_correo4($mensaje,$asunto,$tipo_user,$email,$nombreusuario);
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
}
