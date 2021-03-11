
<?php
session_start();

if ($_POST['accion'] == 'Agregar Paso') {
    $numpaso = filter_var($_POST['numpaso'], FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
    $horainicio = filter_var($_POST['horainicio'], FILTER_SANITIZE_STRING);
    $fechaxfin = filter_var($_POST['fechaxfin'], FILTER_SANITIZE_STRING);
    $horainicioxfin = filter_var($_POST['horainicioxfin'], FILTER_SANITIZE_STRING);
    $idproyecto = filter_var($_POST['idproyecto'], FILTER_SANITIZE_STRING);
    $fechacompleta = $fecha . ' ' . $horainicio;
    $fechaxfincompleta =  $fechaxfin. ' ' . $horainicioxfin;
   

    try {
        require('../../bd/bd.php');
        require('../../bd/bdsqli.php');
        $stmt = $conn1->prepare('INSERT INTO pasos (id_paso, descripcion_paso, fechaini_paso,fechafin_paso,idproyecto_paso,num_paso) VALUES (null,:descripcion_paso, :fechaini_paso, :fechafin_paso, :idproyecto_paso,:num_paso)');
        $stmt->execute(array(
            ':descripcion_paso' => $descripcion,
            ':fechaini_paso'=> $fechacompleta,
            ':fechafin_paso' => $fechaxfincompleta,
            ':idproyecto_paso'=> $idproyecto,
            ':num_paso' => $numpaso



            
           

        ));
        $respuesta = array(
            'estado' => 'paso agregado'
        );
      
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }

    echo json_encode($respuesta);
}

?>