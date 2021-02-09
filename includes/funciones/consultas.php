
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

?>