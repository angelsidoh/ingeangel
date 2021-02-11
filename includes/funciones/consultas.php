
<?php
function consultaBd($dato){
    include 'bd/bdsqli.php';
    try{
        return $connf->query("SELECT id_paso, descripcion_paso, fechafin_paso, fechaini_paso, timing_paso FROM pasos WHERE idproyecto_paso = '$dato'");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaUsuario($dato){
    include 'bd/bdsqli.php';
    try{
        return $connf->query("SELECT id_usuario, nombre_usuario, foto_usuario, idproyecto_usuario FROM usuarios WHERE email_usuario = '$dato'");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaProyecto($dato){
    include 'bd/bdsqli.php';
    try{
        return $connf->query("SELECT nombre_proyecto, tipo_proyecto FROM proyectos WHERE idusuario_proyecto = '$dato'");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
?>