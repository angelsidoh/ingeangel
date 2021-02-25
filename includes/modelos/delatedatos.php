<?php
session_start();
if($_POST['accion'] == 'eliminar'){
    
    
    $id0 = $_POST['id0'];
    
    $correo = '';
    try {
        
        require('../../bd/bd.php');
        require('../../bd/bdsqli.php');
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE id_usuario = :id_usuario LIMIT 1');
        $stmt->execute(array(':id_usuario' => 1));
        $resultado = $stmt->fetch();
        if ($resultado != false) {
            $correo = $resultado['email_usuario'];
            // $respuesta = array(
            //     'var' => $correo
            // );
            if($id0 != 0){
            $stmtf = $connf->prepare("DELETE FROM proyectos WHERE id_proyecto = ?");
            $stmtf->bind_param("i", $id0);
            $stmtf->execute();

            $stmtf = $connf->prepare("DELETE FROM contratos WHERE idproyecto_contrato = ?");
            $stmtf->bind_param("i", $id0);
            $stmtf->execute();

            $stmtf = $connf->prepare("DELETE FROM pagos WHERE idproyecto_pago = ?");
            $stmtf->bind_param("i", $id0);
            $stmtf->execute();

            $stmtf = $connf->prepare("DELETE FROM pasos WHERE idproyecto_paso = ?");
            $stmtf->bind_param("i", $id0);
            $stmtf->execute();
           
            }
           
            $stmtf->close();
            $connf->close(); 
            $respuesta = array(
                'estado' => 'no se puedo crear un proyecto nuevo'
            );


        }

    }catch(Exception $e){
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
    echo json_encode($respuesta);
}
    


?>