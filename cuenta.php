<?php
require 'includes/templates/header.php';
require_once('includes/funciones/consultas.php');
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
    session_destroy();
    // header('Location: cuenta.php#angel-ruiz');
?>
    <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=http://localhost/01ingeangel.com/logout.php">
<?php
} else {
    $dato = $_SESSION['email'];
    $resultadoConsulta = consultaUsuario($dato);
    if ($resultadoConsulta->num_rows) {
        foreach ($resultadoConsulta as $Consulta) {
            $usuario = $Consulta['nombre_usuario'];
            $idproyecto = $Consulta['idproyecto_usuario'];
            $idusuario = $Consulta['id_usuario'];
            $foto = $Consulta['foto_usuario'];
        }
    }
    $contadorProyectos = 0;
    $resultadoProyecto = consultaProyecto($idusuario);


    if ($resultadoProyecto->num_rows) {
        foreach ($resultadoProyecto as $proyecto) {
            $nombreproyecto = $proyecto['nombre_proyecto'];
            $idProyecto = $proyecto['id_proyecto'];
            $vectorNombresProyectos[$contadorProyectos] = $nombreproyecto;
            $vectorIdProyectos[$contadorProyectos] = $idProyecto;
            $contadorProyectos++;
        }
    }
    var_dump($vectorIdProyectos);




?>
    <title>Tu Cuenta</title>

    <div class="contenedor-cuenta">
        <div class="contenedor-perfil">
            <div class="imagen">
                <div class="foto">

                    <!-- <img src="img/terceros/avatar.JPG" alt="avatar"> -->
                    <?php if ($foto == '') {
                    ?><img src="img/terceros/avatar.JPG" alt="avatar"><?php
                                                                    } else { ?>
                        <img src="<?php echo $foto; ?>" alt="foto">
                    <?php
                                                                    } ?>
                    <div class="edit-fotox">
                        <div class="upload">
                            <i class="fas fa-user-edit"></i>
                            <input type="file" id="foto1file" name="foto1file">

                        </div>
                        <!-- <a type="file" id="foto1file" name="foto1file" href="#"><i class="fas fa-user-edit"></i></a> -->
                    </div>
                </div>

            </div>
            <div class="text-img">
                <h1><?php
                    echo $usuario; ?></h1>
            </div>
        </div>
    </div>
    <div class="contenedor-cuenta">
        <ol class="paginacion2">

        </ol>
        <ul class="slider2">
            <li>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Proyectos</h1>
                    </div>
                    <?php
                    for ($i = 0; $i < $contadorProyectos; $i++) {

                    ?>
                        <div class="menu-proyectos">
                            <div class="submenu-proyectos">
                                <div class="titulo-proyecto">
                                    <h1>Proyecto <?php echo $i + 1; ?>:<span style="font-size: 16px;">
                                            <?php
                                            echo $vectorNombresProyectos[$i];
                                            ?></span></h1>
                                </div>
                                <div class="mas-proyecto">
                                    <input type="checkbox" id="check<?php echo $i; ?>" name="menu">
                                    <label for="check<?php echo $i; ?>">
                                        <i id="plus<?php echo $i; ?>" class="far fa-plus-square"></i>
                                        <i id="neg<?php echo $i; ?>" class="far fa-minus-square" style="display: none;"></i>
                                    </label>
                                </div>
                                <div id="lista<?php echo $i; ?>" class="lista-proyectos" style="display: none;">
                                    <?php
                                    // consulta de pasos
                                    $contadorPasos = 0;
                                    $resultadoPasos = consultaPasos($vectorIdProyectos[$i]);
                                    echo $i;
                                    // $vector1[0] = 0;
                                    $vectorDescrip[0] = '';
                                    $vectorFechafin[0] = '';

                                    if ($resultadoPasos->num_rows) {
                                        foreach ($resultadoPasos as $paso) {
                                            $descripcionPaso = $paso['descripcion_paso'];
                                            $textAsunto = "Hola. Me gustaría que resolvieran las siguientes dudas de mi proyecto " . $vectorNombresProyectos[$i] . " del paso " . ($contadorPasos + 1) . ": >>" . $descripcionPaso . "<< " . "Proyecto id# " . $vectorIdProyectos[$i];
                                            $asunto = str_replace(' ', '%20', $textAsunto);
                                            $vectorNombresProyectos[$i] = str_replace('&', 'y', $vectorNombresProyectos[$i]);
                                            $cuerpo = "Lista de dudas: ";
                                            $cuerpo = str_replace(' ', '%20', $cuerpo);
                                            $vectorDescrip[$contadorPasos] = $paso['descripcion_paso'];
                                            $vectorFechafin[$contadorPasos] = $paso['fechafin_paso'];



                                    ?>


                                            <div class="links">
                                                <a href="mailto:infoingeangel@gmail.com?subject=<?php echo $asunto; ?>&body=<?php echo $cuerpo; ?>" target="_blank">
                                                    <p>Paso <?php echo $contadorPasos + 1; ?>: <i class="fas fa-caret-right"></i> <?php echo $descripcionPaso; ?></p>
                                                </a>
                                            </div>
                                    <?php
                                            // echo ($contadorPasos+1);
                                            $contadorPasoxProyecto[$i] = ($contadorPasos + 1);
                                            $contadorPasos++;
                                        }
                                    }

                                    ?>

                                </div>
                            </div>
                        <?php $superVec[$i] = $vectorFechafin;
                        $superVecDesp[$i] = $vectorDescrip;
                        for ($ix = 0; $ix < $contadorPasos; $ix++) {
                            $vectorFechafin[$ix] = '';
                            $vectorDescrip[$ix] = '';
                        }?></div><?php
                    } ?>

                    
            </li>
            <li>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Cuenta</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Pagos</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Contratos</h1>
                    </div>
                </div>
            </li>
        </ul>


        <div class="right2">
            <span><i class="fas fa-angle-right"></i></span>
        </div>
        <div class="left2">
            <span><i class="fas fa-angle-left"></i></span>
        </div>
    </div>
    <div style="display: none;" class="cuenta-regresiva9999 contenedor-cuenta">
        <h4>x</h4>
        <ul class="clearfix">

            <li>
                <p id="dias9999" class="numero"></p>
            </li>
            <li>
                <p>: </p>
                <p id="horas9999" class="numero"></p>
            </li>
            <li>
                <p>: </p>
                <p id="minutos9999" class="numero"></p>
            </li>
            <li>
                <p>:</p>
                <p id="segundos9999" class="numero"></p>
            </li>
        </ul>
    </div>
    </section>
    <?php
    for ($i = 0; $i < 1; $i++) {
        for ($x = 0; $x < $contadorProyectos; $x++) {
            for ($y = 0; $y < $contadorPasoxProyecto[$x]; $y++) {
    ?>
                

                    <div id="midiv" class="cuenta-regresiva<?php echo $x .'-'. $y; ?> contenedor-cuenta">
                        <h4><?php
                            $iaux = $y + 1;
                            echo $iaux . '.- Descripción: ' . $superVecDesp[$x][$y]; ?></h4>
                        <ul class="clearfix">

                            <li>
                                <p id="dias<?php echo $x .'-'. $y ?>" class="numero"></p>
                            </li>
                            <li>
                                <p>: </p>
                                <p id="horas<?php echo $x .'-'. $y ?>" class="numero"></p>
                            </li>
                            <li>
                                <p>: </p>
                                <p id="minutos<?php echo $x .'-'. $y ?>" class="numero"></p>
                            </li>
                            <li>
                                <p>:</p>
                                <p id="segundos<?php echo $x .'-'. $y ?>" class="numero"></p>
                            </li>
                        </ul>
                    </div>
               
        <?php
            }
        }
    }
}
require 'includes/templates/footer.php';
// var_dump($contadorPasoxProyecto);
// echo $contadorProyectos;
date_default_timezone_set('America/Mexico_City');
// echo '<pre>Super';
// var_dump($superVec);
// echo '</pre>';
$fechaini =  date('Y-m-d H:i:s');

$vectorEspecialMayorFecha[0][0] = 0;
$vectorMax[0] = 0;
$auxMayorFecha = '0';
$sumaPasos = 0;
$espacioMax = 0;

for ($x = 0; $x < $contadorProyectos; $x++) {
    for ($y = 0; $y < $contadorPasoxProyecto[$x]; $y++) {
        // echo '<br>->'.$x."-".$superVec[$x][$y];
        $dias1 = (strtotime($superVec[$x][$y]) - strtotime($fechaini)) / 86400;
        $vectorEspecialMayorFecha[$x][$y] = $dias1;
        // // echo '<br>x='.$x;
        // echo '<pre>';
        // var_dump($vectorEspecialMayorFecha);
        // echo '</pre>';
        if ($vectorEspecialMayorFecha[$x][$y] > $auxMayorFecha) {
            $auxMayorFecha = $vectorEspecialMayorFecha[$x][$y];

            $vectorMax[0] = $x;
            $vectorMax[0 + 1] = $y;
        }
        if ($y == ($contadorPasoxProyecto[$x] - 1)) {
            // echo 'hola';
            // echo $contadorPasoxProyecto[$x];
            $sumaPasos = $sumaPasos + $contadorPasoxProyecto[$x];
        }
        // if($x == ($contadorProyectos-1)){

        // }
        // echo '->'.$vectorEspecialMayorFecha[$vectorMax[0]][$vectorMax[1]];

    }
    // echo '->' . $vectorMax[0], $vectorMax[1];
    // echo '->' . $superVec[$vectorMax[0]][$vectorMax[1]];
}
// echo '<pre>';
// var_dump($superVec);
// echo '</pre>';
// echo '<pre>';
// var_dump($superVecDesp);
// echo '</pre>';
// echo $sumaPasos;
for ($x = 0; $x < $contadorProyectos; $x++) {
    for ($y = 0; $y < $contadorPasoxProyecto[$x]; $y++) {
        // echo '<br>->' . $x . '-'.$y. $superVec[$x][$y];
        ?>
        <script type="text/javascript">
        
            var fechasphp = '<?php echo $superVec[$x][$y];
                                ?>'
                                
            var vectorMax1fechaphp = '<?php echo $superVec[$vectorMax[0]][$vectorMax[1]];
                                        ?>'
            var contPasosxProyphp = '<?php echo $contadorPasoxProyecto[$x];
                                        ?>'
            var contadorProyectos = '<?php echo $contadorProyectos;
                                        ?>'
            var contadordePasos = '<?php echo $sumaPasos;
                                    ?>'
                                    var x = '<?php echo $x;
                                    ?>'
                                    var y = '<?php echo $y;
                                    ?>'

// console.log(x+'-'+y+'-'+fechasphp);
            abc(fechasphp, vectorMax1fechaphp, contadorProyectos, contPasosxProyphp, contadordePasos);
        </script>
<?php
    }
}
?>
