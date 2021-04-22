<?php

// echo $_SESSION['tipo_usuario'];
// echo '<br>'.$idproyecto;
// echo '<br>'.$idusuario;
$resultadoArchivos = obtenerarchivos($idproyecto);
$contadorPasos4 = 0;
if ($resultadoArchivos->num_rows) {
    foreach ($resultadoArchivos as $archivo) {
        $vecDireccionArchivo[$contadorPasos4] = $archivo['direccion_archivo'];
        $vecIdUArchivo[$contadorPasos4] = $archivo['idusuario_archivo'];
        $vecIdPArchivo[$contadorPasos4] = $archivo['idproyecto_archivo'];
        $vecFechaArchivo[$contadorPasos4]  = $archivo['fecha_archivo'];
        $vecIndentificacionArchivo[$contadorPasos4] = $archivo['identificacion_archivo'];

        $contadorPasos4++;
    }
}
$superVecDireccionArchivo[0] = $vecDireccionArchivo;
$superVecIdU[0] = $vecIdUArchivo;
$superVecIdP[0] = $vecIdPArchivo;
$superVecFechaArchivo[0] = $vecFechaArchivo;
$superVecIndentificacionArchivo[0] = $vecIndentificacionArchivo;

for ($ix = 0; $ix < $contadorPasos1; $ix++) {
    unset($vecDireccionArchivo[$ix]);
    unset($vecIdUArchivo[$ix]);
    unset($vecIdPArchivo[$ix]);
    unset($vecFechaArchivo[$ix]);
    unset($vecIndentificacionArchivo[$ix]);
}
// echo '<PRE>';
// // var_dump($superVecDireccionArchivo);
// var_dump($superVecIdP);
// // var_dump($superVecIndentificacionArchivo);
// echo '</PRE>';
?>

<div class="contenedor-especialx">

<h2>Haga clic sobre un archivo para descargarlo</h2>
    <?php for ($x = 0; $x < sizeof($superVecDireccionArchivo[0]); $x++) { ?>
        <div class="menu-proyectoss">
        
            <div class="submenu-proyectoss">
                <div class="titulo-proyectos">
                    <a href="<?php echo $superVecDireccionArchivo[0][$x] ?>" download="<?php echo $superVecDireccionArchivo[0][$x] ?>">
                        <h4><?php
                            $resultado = str_replace("archivos", "", $superVecDireccionArchivo[0][$x]);
                            $resultado = str_replace("/", "", $resultado);
                            echo ($x + 1) . ".- Nombre del archivo: <br>";
                            ?><span class="<?php echo $superVecIndentificacionArchivo[0][$x];?>"><?php
                                            echo $resultado . '<br>';
                                            ?>
                                            </span>
                            <?php
                             echo 'Enviado en: '.$superVecFechaArchivo[0][$x];
                             if($superVecIndentificacionArchivo[0][$x] == 'admin'){
                                 echo '<br>'.'Por: José Angel Ruiz Chávez Ingeniero responsable del proyecto';
                             }else{
                                 echo '<br>Por: Usuario';
                             }

                            ?>                 
                        </h4>
                    </a>

                </div>
            </div>
        </div>

    <?php
    }
    ?>
</div>

<form id="upload_form1" enctype="multipart/form-data" method="post">

<div class="titulo-seccion">
                                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Subir un archivo</h1>
                            </div>


  
                    


                    <br>
                    <input class="button" type="file" name="file1" id="file1"><br>
                    <progress id="progressBar2" value="0" max="100" style="width:53%;"></progress>
                    <h3 id="status2"></h3>
                    <p id="loaded_n_total2"></p>
                    <br>
                    <input class="button" type="button" value="Subir Archivos" onclick="uploadFile1()">
                  
                  
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="idp" name="idp" placeholder="Ingrese código de contrato" value="<?php  echo $idProyecto ;?>" >
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="idu" name="idu" placeholder="Ingrese código de contrato" value="<?php echo  $vectorIdUsuarioProyectos[0]?>" >
                                </div> <!-- rnormal__tarjeta -->
             
      
</form>