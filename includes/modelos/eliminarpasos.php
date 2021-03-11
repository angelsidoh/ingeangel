<?php
session_start();
if($_POST['accion'] == 'Eliminar Paso'){
    
    
    $id0 = $_POST['idpaso'];
    
    $correo = '';
    try {
        
        require('../../bd/bd.php');
        require('../../bd/bdsqli.php');
        $stmt = $conn->prepare('SELECT * FROM pasos WHERE id_paso = :id_paso LIMIT 1');
        $stmt->execute(array(':id_paso' => $id0));
        $resultado = $stmt->fetch();
        if ($resultado != false) {
            // $correo = $resultado['email_usuario'];
            // $respuesta = array(
            //     'var' => $correo
            // );
         
            $stmtf = $connf->prepare("DELETE FROM pasos WHERE id_paso = ?");
            $stmtf->bind_param("i", $id0);
            $stmtf->execute();
           
           
            $stmtf->close();
            $connf->close(); 
            $respuesta = array(
                'estado' => 'se elimino el paso'
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