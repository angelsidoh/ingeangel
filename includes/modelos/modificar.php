<?php

session_start();
if (isset($_SESSION['email'])) {
    $correo = $_SESSION['email'];



    if ($_POST['accion'] == 'Modificar Paso') {

        $idpaso = filter_var($_POST['idpaso'], FILTER_SANITIZE_STRING);
        $num_paso = filter_var($_POST['n_paso'], FILTER_SANITIZE_STRING);
        $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
        $fechainicio = filter_var($_POST['fechainicio'], FILTER_SANITIZE_STRING);
        $horainicio = filter_var($_POST['horainicio'], FILTER_SANITIZE_STRING);
        $fechafin = filter_var($_POST['fechafin'], FILTER_SANITIZE_STRING);
        $horafin = filter_var($_POST['horafin'], FILTER_SANITIZE_STRING);
        $fechainicioCompleta = $fechainicio.' '.$horainicio;
        $fechafinCompleta = $fechafin.' '.$horafin;
      
        try {
            require('../../bd/bd.php');
            $stmt = $conn->prepare('SELECT * FROM pasos WHERE id_paso = :id_paso LIMIT 1');
            $stmt->execute(array(':id_paso' => $idpaso));
            $resultado = $stmt->fetch();

            if ($resultado != false) {
                $num_pasobd = $resultado['num_paso'];
                $descripcionbd = $resultado['descripcion_paso'];
                $fechainicioCompletabd = $resultado['fechaini_paso'];
                $fechafinCompletabd = $resultado['fechafin_paso'];
                
                
                if ($num_paso != $num_pasobd || $descripcion != $descripcionbd || $fechainicioCompleta != $fechainicioCompletabd || $fechafinCompleta != $fechafinCompletabd) {
                    require_once('../../bd/bdsqli.php');
                    $stmt = $connf->prepare("UPDATE pasos SET num_paso = ?, descripcion_paso = ?, fechaini_paso = ?, fechafin_paso = ? WHERE id_paso = ?");

                    $stmt->bind_param("sssss", $num_paso, $descripcion, $fechainicioCompleta, $fechafinCompleta, $idpaso);

                    $stmt->execute();

                    if ($stmt->affected_rows == 1) {
                        $respuesta = array(
                            'estado' => 'paso modificado'
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

?>