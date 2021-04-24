<?php

// echo $_SESSION['tipo_usuario'];
// echo '<br>'.$idproyecto;
// echo '<br>'.$idusuario;
$resultadoArchivos = obtenerarchivos($idusuario);
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

$vecaxiIdP = $superVecIdP[0];
for ($u = 0; $u < sizeof($superVecIdP[0]); $u++) {
    $contadorx = 0;
    for ($i = 0; $i <  sizeof($superVecIdP[0]); $i++) {
        if ($superVecIdP[0][$u] == $vecaxiIdP[$i]) {
            $contadorx++;
            if ($contadorx > 1) {
                $vecaxiIdP[$i] = '';
                // echo $u.$i.'<br>';
            }
        }
    }
}
echo '<PRE>';
var_dump($superVecIdP);
var_dump($superVecIdU);
echo '</PRE>';



$vecaxiredIdP = $vecaxiIdP;
$cont = 0;
foreach ($vecaxiredIdP as $key => $value) {
    if ($value === '') {
        unset($vecaxiredIdP[$key]);
    } else {
        // echo $vecaxiIDMensajes[$key];

        $vecaxiredIdPRes[$cont] = $superVecIdP[0][$key];
        $cont++;
    }
}
echo '<PRE>';
// var_dump($superVecIdP);
var_dump($vecaxiredIdPRes);
echo '</PRE>';

?>
<div class="contenedor-especial">
    <?php
    if ($_SESSION['tipo_usuario'] == 'Usuario') {
        for ($x = 0; $x < sizeof($vecaxiredIdPRes); $x++) {

    ?>
            <div class="menu-proyectos">
                <div class="submenu-proyectos">
                    <div class="titulo-proyecto">
                        <h2><?php
                            echo  'Proyecto:' . $vecaxiredIdPRes[$x] . '<br>';
                            ?>
                        </h2>
                    </div>
                    <div class="mas-proyecto">
                        <div class="inps" id="inps<?php echo 100000 + $x; ?>">
                            <input name="angel" type="checkbox" class="checs" id="check<?php echo 100000 + $x; ?>" name="menu<?php echo 100000 + $x; ?>">
                        </div>
                        <label for="check<?php echo 100000 + $x; ?>">
                            <i id="plus<?php echo 100000 + $x; ?>" class="far fa-plus-square"></i>
                            <i id="neg<?php echo 100000 + $x; ?>" class="far fa-minus-square" style="display: none;"></i>
                        </label>
                    </div>
                    <div id="lista<?php echo 100000 + $x; ?>" class="lista-proyectos" style="display: none;">
                        <div class="links1">
                            <div class="contenedorconteo1">

                                <div class="contenedor-especialx">

                                    <h2>Haga clic sobre un archivo para descargarlo</h2>
                                    <?php
                                    $contadorarchivos = 0;
                                    for ($y = 0; $y < sizeof($superVecDireccionArchivo[0]); $y++) {

                                        if ($superVecIdP[0][$y] == $vecaxiredIdPRes[$x]) {
                                            $contadorarchivos++;



                                    ?>
                                            <div class="menu-proyectoss">

                                                <div class="submenu-proyectoss">
                                                    <div class="titulo-proyectos">
                                                        <a href="<?php echo $superVecDireccionArchivo[0][$y] ?>" download="<?php echo $superVecDireccionArchivo[0][$y] ?>">
                                                            <h4><?php
                                                                $resultado = str_replace("archivos", "", $superVecDireccionArchivo[0][$y]);
                                                                $resultado = str_replace("/", "", $resultado);
                                                                echo $contadorarchivos . ".- Nombre del archivo: <br>";
                                                                ?><span class="<?php echo $superVecIndentificacionArchivo[0][$y]; ?>"><?php
                                                                                                                                        echo $resultado . '<br>';
                                                                                                                                        ?>
                                                                </span>
                                                                <?php
                                                                echo 'Enviado en: ' . $superVecFechaArchivo[0][$y];
                                                                if ($superVecIndentificacionArchivo[0][$y] == 'admin') {
                                                                    echo '<br>' . 'Por: José Angel Ruiz Chávez Ingeniero responsable del proyecto';
                                                                } else {
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
                                        <input style="" type="text" id="idp" name="idp" placeholder="Ingrese código de contrato" value="<?php echo $vecaxiredIdPRes[$x]; ?>">
                                    </div> <!-- rnormal__tarjeta -->
                                    <div class="dato3">
                                        <input style="" type="text" id="idu" name="idu" placeholder="Ingrese código de contrato" value="<?php echo  $superVecIdU[0][$x] ?>">
                                    </div> <!-- rnormal__tarjeta -->


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
    } else { ?>
        <div class="contenedor-especialx">

            <h2>Haga clic sobre un archivo para descargarlo</h2>
            <?php
            $contadorarchivos = 0;
            for ($y = 0; $y < sizeof($superVecDireccionArchivo[0]); $y++) {



                echo $superVecIdP[0][$y];
                if ($superVecIdP[0][$y] == $idProyecto) {
                    $contadorarchivos++;
            ?>
                    <div class="menu-proyectoss">

                        <div class="submenu-proyectoss">
                            <div class="titulo-proyectos">
                                <a href="<?php echo $superVecDireccionArchivo[0][$y] ?>" download="<?php echo $superVecDireccionArchivo[0][$y] ?>">
                                    <h4><?php
                                        $resultado = str_replace("archivos", "", $superVecDireccionArchivo[0][$y]);
                                        $resultado = str_replace("/", "", $resultado);
                                        echo $contadorarchivos . ".- Nombre del archivo: <br>";
                                        ?><span class="<?php echo $superVecIndentificacionArchivo[0][$y]; ?>"><?php
                                                                                                                echo $resultado . '<br>';
                                                                                                                ?>
                                        </span>
                                        <?php
                                        echo 'Enviado en: ' . $superVecFechaArchivo[0][$y];
                                        if ($superVecIndentificacionArchivo[0][$y] == 'admin') {
                                            echo '<br>' . 'Por: José Angel Ruiz Chávez Ingeniero responsable del proyecto';
                                        } else {
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
            }
            ?>
        </div>





    <?php
    }
    ?>
</div>

<!-- 
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
        <input style="" type="text" id="idp" name="idp" placeholder="Ingrese código de contrato" value="<?php echo $idProyecto; ?>">
    </div> 
    <div class="dato3">
        <input style="" type="text" id="idu" name="idu" placeholder="Ingrese código de contrato" value="<?php echo  $vectorIdUsuarioProyectos[0] ?>">
    </div> 


</form> -->