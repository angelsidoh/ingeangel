<?php
session_start();
if ($_POST['accion'] == 'Iniciar Sesion') {
    $mail = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
    // echo json_encode($mail."-".$pass);
    try {
        require('../../bd/bd.php');

        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email_usuario = :email_usuario AND pass_usuario = :pass_usuario');
        $stmt->execute(array(':email_usuario' => $mail, 'pass_usuario' => $pass));
        $resultado = $stmt->fetch();
        if ($resultado != false) {
            $respuesta = array(
                'mails' => $mail,
                'pass' => $pass
            );

            $respuesta = array(
                'Estado' => 'Correcto',
                'Usuario' => $resultado['nombre_usuario'],

            );
            $_SESSION['usuario'] = $resultado['nombre_usuario'];

            $_SESSION['email'] = $resultado['email_usuario'];
        } else {
            $respuesta = array(
                'Estado' => 'Incorrecto'
            );
        }
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
}
