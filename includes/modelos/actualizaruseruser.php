<?php
session_start();
if (isset($_SESSION['email'])) {
    $correo = $_SESSION['email'];



    if ($_POST['accion'] == 'Actualizar') {

        $calle = filter_var($_POST['calle'], FILTER_SANITIZE_STRING);
        $numie = filter_var($_POST['numie'], FILTER_SANITIZE_STRING);
        $colonia = filter_var($_POST['colonia'], FILTER_SANITIZE_STRING);
        $cpostal = filter_var($_POST['cpostal'], FILTER_SANITIZE_STRING);
        $domiciliof = filter_var($_POST['domiciliof'], FILTER_SANITIZE_STRING);
        $cfdi = filter_var($_POST['cfdi'], FILTER_SANITIZE_STRING);
        $rfc = filter_var($_POST['rfc'], FILTER_SANITIZE_STRING);

        try {
            require('../../bd/bd.php');
            $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email_usuario = :email_usuario LIMIT 1');
            $stmt->execute(array(':email_usuario' => $correo));
            $resultado = $stmt->fetch();

            if ($resultado != false) {
                $numiebd = $resultado['numiedireccion_usuario'];
                $coloniabd = $resultado['colonia_usuario'];
                $cpostalbd = $resultado['cp_usuario'];
                $domiciliofbd = $resultado['domiciliofiscal_usuario'];
                $cfdibd = $resultado['cfdi_usuario'];
                $callebd = $resultado['calle_usuario'];
                $rfcbd = $resultado['rfc_usuario'];
                if (
                    $calle != $callebd
                    || $numie != $numiebd
                    || $colonia != $coloniabd
                    || $cpostal != $cpostalbd
                    || $domiciliof != $domiciliofbd
                    || $cfdi != $cfdibd
                    || $rfc != $rfcbd
                ) {
                    require_once('../../bd/bdsqli.php');
                    $stmt = $connf->prepare("UPDATE usuarios SET calle_usuario = ?, numiedireccion_usuario = ?, colonia_usuario = ?, cp_usuario = ?, domiciliofiscal_usuario = ?, cfdi_usuario = ?, rfc_usuario = ? WHERE email_usuario = ?");

                    $stmt->bind_param("ssssssss", $calle,$numie,$colonia,$cpostal, $domiciliof, $cfdi, $rfc, $correo);

                    $stmt->execute();

                    if ($stmt->affected_rows == 1) {
                        $respuesta = array(
                            'estado' => 'hubo cambios'
                        );
                    }

                    $stmt->close();
                    $connf->close();

                   
                } else {
                    $respuesta = array(
                        'estado' => 'no cambios'
                    );
                }
            } else {
                $respuesta = array(
                    'estado' => 'no existe'
                );
            }
            echo json_encode($respuesta);
        } catch (PDOException $e) {
            echo json_encode("Error: " . $e->getMessage());
        }
    }
}
