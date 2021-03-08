<?php
require 'includes/templates/header.php';
require_once('includes/funciones/consultas.php');
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
    session_destroy();
    // header('Location: cuenta.php#angel-ruiz');
?>
    <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=https://ingeangel.com/logout.php">

    <?php
} else {
    $resultadoProyecto = obtenerPrecios(1);

    if ($resultadoProyecto->num_rows) {
        foreach ($resultadoProyecto as $proyecto) {

            $precioBasico = $proyecto['basico_precio'];
            $precioNegocio = $proyecto['negocio_precio'];
            $precioProfesional = $proyecto['profesional_precio'];
            $precioHosting = $proyecto['hosting_precio'];
            $precioDominio = $proyecto['dominio_precio'];
            $precioMantenimiento = $proyecto['mantenimiento_precio'];
            $precioBD = $proyecto['basesdatos_precio'];
        }
    }
    $dato = $_SESSION['email'];
    // echo $_GET['id'];
    $idProyecto = $_GET['id'];
    // $contadorProyectos = 0;
    $resultadoProyecto = consultaProyectos($idProyecto);
    $contadorProyectos = 0;
    if ($resultadoProyecto->num_rows) {
        foreach ($resultadoProyecto as $proyecto) {
            $nombreproyecto = $proyecto['nombre_proyecto'];
            $idProyecto = $proyecto['id_proyecto'];
            $vectorTipoProyectos = $proyecto['tipo_proyecto'];
            $vectorNombresProyectos[$contadorProyectos] = $nombreproyecto;
            $vectorIdProyectos[$contadorProyectos] = $idProyecto;
            $contadorProyectos++;
        }
    }
    for ($i = 0; $i < 1; $i++) {

        $contadorPasos = 0;
        $resultadoPasos = consultaPasos($idProyecto);

        $vectorDescrip[0] = '';
        $vectorFechafin[0] = '';

        if ($resultadoPasos->num_rows) {
            foreach ($resultadoPasos as $paso) {
                $descripcionPaso = $paso['descripcion_paso'];

                $vectorDescrip[$contadorPasos] = $paso['descripcion_paso'];
                $vectorFechafin[$contadorPasos] = $paso['fechafin_paso'];

                $contadorPasoxProyecto[$i] = ($contadorPasos + 1);
                $contadorPasos++;
            }
        }

    ?>

        <?php
        $superVec[$i] = $vectorFechafin;
        $superVecDesp[$i] = $vectorDescrip;
        for ($ix = 0; $ix < $contadorPasos; $ix++) {
            unset($vectorFechafin[$ix]);
            unset($vectorDescrip[$ix]);
        } ?><?php
        }

        // var_dump($vectorIdProyectos);
        for ($i = 0; $i < 1; $i++) {
            $resultadoPagos = consultaPagos($idProyecto);

            $contadorPasos1 = 0;
            $contadorPagos = 0;
            if ($resultadoPagos->num_rows) {
                foreach ($resultadoPagos as $pago) {
                    $vecIdPago[$contadorPasos1] = $pago['id_pago'];
                    $vecfechaIniciopago[$contadorPasos1] = $pago['fechainicio_pago'];
                    $vecfechaFinpago[$contadorPasos1] = $pago['fechafin_pago'];
                    $vecfechapagoPago[$contadorPasos1] = $pago['fechadepago_pago'];
                    $vectokenConekta[$contadorPasos1] = $pago['tokenconekta_pago'];
                    $vecforTarget[$contadorPasos1] = $pago['fortarget_pago'];
                    $vecIdProyectoPago[$contadorPasos1] = $pago['idproyecto_pago'];
                    $vecTokenpagopago[$contadorPasos1] = $pago['tokenpago_pago'];
                    $vecIdContratoPago[$contadorPasos1] = $pago['idcontrato_pago'];
                    $vecTokenContratoPago[$contadorPasos1] = $pago['tokencontrato_pago'];
                    $vecContMesesPago[$contadorPasos1] = $pago['contmeses_pago'];
                    $contadorPasos1++;
                    $contadorPagos++;
                }
            }
            $superVecIdPago[$i] = $vecIdPago;
            $supervecfechaIniciopago[$i] = $vecfechaIniciopago;
            $supervecfechaFinpago[$i] = $vecfechaFinpago;
            $supervecfechapagoPago[$i] =  $vecfechapagoPago;
            $supervectokenConekta[$i] = $vectokenConekta;
            $supervecforTarget[$i] = $vecforTarget;
            $superVecIdProyectoPago[$i] = $vecIdProyectoPago;
            $superVecTokenpagoPago[$i] = $vecTokenpagopago;
            $superVecIdContratoPago[$i] = $vecIdContratoPago;
            $superVecTokenContratoPago[$i] = $vecTokenContratoPago;
            $superVecContMesesPago[$i] = $vecContMesesPago;
            for ($ix = 0; $ix < $contadorPasos1; $ix++) {
                unset($vecIdPago[$ix]);
                unset($vecfechaIniciopago[$ix]);
                unset($vecfechaFinpago[$ix]);
                unset($vecfechapagoPago[$ix]);
                unset($vectokenConekta[$ix]);
                unset($vecforTarget[$ix]);
                unset($vecIdProyectoPago[$ix]);
                unset($vecTokenpagopago[$ix]);
                unset($vecIdContratoPago[$ix]);
                unset($vecTokenContratoPago[$ix]);
                unset($vecContMesesPago[$ix]);
            }
        }
        for ($i = 0; $i < 1; $i++) {
            $resultadoContratos = consultaContratos($idProyecto);

            $contadorPasos1 = 0;
            if ($resultadoContratos->num_rows) {
                foreach ($resultadoContratos as $contrato) {
                    $vecIdContrato[$contadorPasos1] = $contrato['id_contrato'];
                    $vecLinkContrato[$contadorPasos1] = $contrato['link_contrato'];
                    $vecTokenContrato[$contadorPasos1] = $contrato['token_contrato'];
                    $vecTipoContrato[$contadorPasos1] = $contrato['tipo_contrato'];
                    $vecTipoIntContrato[$contadorPasos1] = $contrato['tipoint_contrato'];
                    $vecFechaInicioContrato[$contadorPasos1] = $contrato['fechainicio_contrato'];
                    $vecFechaFinContrato[$contadorPasos1] = $contrato['fechafin_contrato'];

                    $contadorPasos1++;
                }
            }
            $supervecIdContrato[$i] = $vecIdContrato;
            $supervecLinkContrato[$i] = $vecLinkContrato;
            $supervecTokenContrato[$i] =  $vecTokenContrato;
            $supervecTipoContrato[$i] =  $vecTipoContrato;
            $supervecTipoIntContrato[$i] =  $vecTipoIntContrato;
            $supervecFechaInicioContrato[$i] =  $vecFechaInicioContrato;
            $supervecFechaFinContrato[$i] =  $vecFechaFinContrato;
            

            for ($ix = 0; $ix < $contadorPasos1; $ix++) {

                unset($vecIdContrato[$ix]);
                unset($vecLinkContrato[$ix]);
                unset($vecTokenContrato[$ix]);
                unset($vecTipoContrato[$ix]);
                unset($vecTipoIntContrato[$ix]);
                unset($vecFechaInicioContrato[$ix]);
                unset($vecFechaFinContrato[$ix]);
            }
        }
        // echo $precioBasico+$precioBD+$precioDominio+$precioHosting+$precioMantenimiento;
        // echo '<pre>';
        // var_dump($vectorTipoProyectos);
        // echo '</pre>';
        // echo '<pre>';
        // var_dump($superVecContMesesPago);
        // echo '</pre>';
        // echo '<pre>';
        // var_dump($superVecTokenContratoPago);
        // echo '</pre>';
        // echo '<pre>';
        // var_dump($supervecTokenContrato);
        // echo '</pre>';
        // echo '<pre>';
        // var_dump($supervecFechaInicioContrato);
        // echo '</pre>';
        echo '<pre>';
    var_dump($precioBasico);
        echo '</pre>';
        // echo $idProyecto ;

        for ($x = 0; $x < sizeof($supervecTipoIntContrato); $x++) {

            for ($y = 0; $y < sizeof(($supervecTipoIntContrato[$x])); $y++) {
                // echo '->>>>>>>>>>>>>>' . $supervectokenConekta[$x][$y];
                for ($u = 0; $u < $supervecTipoIntContrato[$x][$y]; $u++) {
                }
            }
        }

            ?>

        <title>Administrador de proyectos</title>
        <section>
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

        <div class="contenedor-cuenta">
            <ol class="paginacion3">

            </ol>
            <ul class="slider3">

                <li>

                    <div class="contenedor-especial">
                        <div class="titulo-seccion">
                            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;"><?php echo $vectorNombresProyectos[0]; ?></h1>
                        </div>
                        <div class="menu-proyectos">
                            <div class="submenu-proyectos">
                                <div class="titulo-proyecto">

                                </div>
                                <div class="mas-proyecto">
                                    <!-- <input type="checkbox" class="checs" id="check<?php echo 0; ?>" name="menu">
                        <label for="check<?php echo 0; ?>">
                            <i id="plus<?php echo 0; ?>" class="far fa-plus-square"></i>
                            <i id="neg<?php echo 0; ?>" class="far fa-minus-square" style="display: none;"></i>
                        </label> -->
                                </div>
                                <div id="lista<?php echo 0; ?>" class="lista-proyectos">
                                    <?php
                                    for ($y = 0; $y < $contadorPasoxProyecto[0]; $y++) { ?>
                                        <div class="links">
                                            <div class="contenedorconteo">
                                                <?php
                                                $textAsunto = "Hola. Me gustaría que resolvieran las siguientes dudas de mi proyecto " . $vectorNombresProyectos[0] . " del paso " . ($y + 1) . ": >>" . $superVecDesp[0][$y] . "<< " . "Proyecto id# " . $vectorIdProyectos[0];
                                                $asunto = str_replace(' ', '%20', $textAsunto);
                                                $vectorNombresProyectos[0] = str_replace('&', 'y', $vectorNombresProyectos[0]);
                                                $cuerpo = "Lista de dudas: ";
                                                $cuerpo = str_replace(' ', '%20', $cuerpo);
                                                ?>
                                                <a href="mailto:infoingeangel@gmail.com?subject=<?php echo $asunto; ?>&body=<?php echo $cuerpo; ?>" target="_blank">
                                                    <p>Paso <?php echo $y + 1; ?>: <i class="fas fa-caret-right"></i> <?php echo  $superVecDesp[0][$y]; ?></p>


                                                </a>
                                                <div id="midiv" class="cuenta-regresiva<?php echo 0 . '-' . $y; ?> contenedor-cuenta">

                                                    <ul class="clearfix">
                                                        <div class="lix">
                                                            <p>Fecha estimada: Paso <?php echo ($y + 1) . ' (' . $superVec[0][$y] . ')'; ?></p>
                                                        </div>


                                                        <div class="lix">
                                                            <p id="dias<?php echo 0 . '-' . $y ?>" class="numero"></p>

                                                        </div>

                                                        <div class="lix">
                                                            <p id="horas<?php echo 0 . '-' . $y ?>" class="numero"></p>

                                                        </div>
                                                        <div class="lix">

                                                            <p id="minutos<?php echo 0 . '-' . $y ?>" class="numero"></p>

                                                        </div>
                                                        <div class="lix">

                                                            <p id="segundos<?php echo 0 . '-' . $y ?>" class="numero"></p>
                                                        </div>
                                                        <div class="lix">
                                                            <p>Días</p>
                                                        </div>
                                                        <div class="lix">
                                                            <p>Horas</p>
                                                        </div>
                                                        <div class="lix">
                                                            <p>Minutos</p>
                                                        </div>
                                                        <div class="lix">
                                                            <p>Segundos</p>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-especial">
                        <div class="titulo-seccion">
                            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">
                        </div>

                    </div>

                </li>
                <?php include('includes/funciones/historial-pagos.php');
                ?><?php
                    date_default_timezone_set('America/Mexico_City');
                    $fechahoy =  date('Y-m-d H:i:s');

                    for ($i = 0; $i < sizeof($supervecTokenContrato); $i++) {

                        for ($u = 0; $u < sizeof($supervecTokenContrato[$i]); $u++) {
                            $contadorPagos = 0;


                            $diasInicio = (strtotime($supervecFechaInicioContrato[$i][$u]) - strtotime($fechahoy)) / 86400;
                            $diasFin = (strtotime($supervecFechaFinContrato[$i][$u]) - strtotime($fechahoy)) / 86400;
                            // echo $diasInicio . $diasFin;

                            if ($diasInicio < 0 && $diasFin > 0) {
                                // echo $supervecTokenContrato[$i][$u] . ' <' . $i . '-' . $u . ' (';
                                // echo $supervecFechaInicioContrato[$i][$u] . ') (';
                                // echo  $supervecFechaFinContrato[$i][$u] . ')<br>';
                                // echo  '(' . $diasInicio . ') (' . $diasFin . ')<br>';
                                // echo  '-<' . $supervecTipoIntContrato[$i][$u];
                                // echo '<br>-----x ' . $supervecFechaFinContrato[$i][$u] . '<br>';



                                for ($l = 0; $l < sizeof($superVecTokenContratoPago[$i]); $l++) {
                                    if ($supervecTokenContrato[$i][$u] == $superVecTokenContratoPago[$i][$l]) {
                                        // echo $superVecTokenContratoPago[$i][$l];
                                        // echo '<br>' .  $superVecContMesesPago[$i][$l];
                                        $contadorPagos = $contadorPagos + $superVecContMesesPago[$i][$l];
                                    }
                                }
                                // echo '<br>->' . $contadorPagos;
                                if ($contadorPagos < $supervecTipoIntContrato[$i][$u]) {
                                    // echo 'Opcion de agregar pago habilitada '. $i.')x('.$u.'<br>';
                              

                                    for ($j = ($contadorPagos - 1); $j < ($supervecTipoIntContrato[$i][$u]); $j++) {
                                        $aux = ($j) * (-1);
                                        $opercionFecha = ($supervecTipoIntContrato[$i][$u] - ($contadorPagos)) * (-1);
                                        $fechadiv = date("Y-m-d H:i:s", strtotime($supervecFechaFinContrato[$i][$u] . $aux . " month"));
                                        
                                        $fechain = date("Y-m-d H:i:s", strtotime($supervecFechaFinContrato[$i][$u] . $opercionFecha . " month"));
                                        // echo '<br>->>>' .$supervecFechaFinContrato[$i][$u] . $fechain;
                                    }

                    ?>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Agregar Nuevo Pago</h1>
                    </div>
                    <div class="datos-contrato">
                        <form id="agregar-pago" action="#">
                            <div class="contenido-cuenta">
                                <div class="text-dato3">
                                    <p>Contrato</p>
                                </div>
                                <div class="dato3">
                                    <input type="text" id="contrato_pago" name="contrato_pago" placeholder="Ingrese código de contrato" value="<?php echo $supervecTokenContrato[$i][$u]; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Fecha Inicio</p>
                                </div>
                                <div class="dato3">
                                    <input type="text" id="fechainicio1" name="fechainicio1" placeholder="" value="<?php echo $fechain; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Tiempo</p>
                                </div>
                                <div class="dato3">
                                    <select name="select" id="seleccion1">
                                        <option value="2" selected>1 Mes</option>
                                        <option value="<?php if (4 > (($supervecTipoIntContrato[$i][$u] + 1) - $contadorPagos)) {
                                                            echo (($supervecTipoIntContrato[$i][$u] + 1) - $contadorPagos);
                                                        } else {
                                                            echo 4;
                                                        } ?>"><?php if (4 > (($supervecTipoIntContrato[$i][$u] + 1) - $contadorPagos)) {
                                                                    echo (($supervecTipoIntContrato[$i][$u]) - $contadorPagos);
                                                                } else {
                                                                    echo 3;
                                                                } ?> Meses</option>
                                        <option value="<?php
                                                        if (7 > (($supervecTipoIntContrato[$i][$u] + 1) - $contadorPagos)) {
                                                            echo (($supervecTipoIntContrato[$i][$u] + 1) - $contadorPagos);
                                                        } else {
                                                            echo 7;
                                                        } ?>"><?php if (7 > (($supervecTipoIntContrato[$i][$u] + 1) - $contadorPagos)) {
                                                                    echo (($supervecTipoIntContrato[$i][$u]) - $contadorPagos);
                                                                } else {
                                                                    echo 6;
                                                                } ?> Meses</option>
                                        <option value="<?php echo (($supervecTipoIntContrato[$i][$u] + 1) - $contadorPagos); ?>">Total Contrato</option>
                                    </select>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Fecha Fin</p>
                                </div>
                                <div class="dato3">
                                    <input type="text" id="fechafin1" name="fechafin1" placeholder="Fecha de fin de contrato" value="<?php echo $_GET['strDate']; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Tipo de Paquete</p>
                                </div>

                                <div class="dato3">
                                    <select name="select" id="paquete1">
                                        <?php if ($vectorTipoProyectos == 'Paquete Básico') { ?>
                                            <option value="Paquete Básico" selected>Paquete Básico</option>
                                            <option value="Paquete Negocio">Paquete Negocio</option>
                                            <option value="Paquete Profesional">Paquete Profesional</option>
                                        <?php } ?>
                                        <?php if ($vectorTipoProyectos == 'Paquete Negocio') { ?>
                                            <option value="Paquete Básico">Paquete Básico</option>
                                            <option value="Paquete Negocio" selected>Paquete Negocio</option>
                                            <option value="Paquete Profesional">Paquete Profesional</option>
                                        <?php } ?>
                                        <?php if ($vectorTipoProyectos == 'Paquete Profesional') { ?>
                                            <option value="Paquete Básico">Paquete Básico</option>
                                            <option value="Paquete Negocio">Paquete Negocio</option>
                                            <option value="Paquete Profesional" selected>Paquete Profesional</option>
                                        <?php } ?>

                                    </select>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Precio</p>
                                </div>
                                <div class="dato3">
                                    <input type="text" id="precioshow1" name="precioshow" 1 placeholder="Ingrese el Monto" value="" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="precio1" name="precio1" placeholder="Ingrese el Monto" value="" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="preciobasico1" name="preciobasico1" placeholder="" value="<?php echo $precioBasico + $precioBD + $precioDominio + $precioHosting + $precioMantenimiento; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="precionegocio1" name="precionegocio1" placeholder="" value="<?php echo $precioNegocio + $precioBD + $precioDominio + $precioHosting + $precioMantenimiento; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="precioprofesional1" name="precioprofesional1" placeholder="" value="<?php echo $precioProfesional + $precioBD + $precioDominio + $precioHosting + $precioMantenimiento; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="contratoid" name="contratoid" placeholder="" value="<?php echo $supervecIdContrato[$i][$u]; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="tokencontrato" name="tokencontrato" placeholder="" value="<?php echo $supervecTokenContrato[$i][$u]; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="idproyecto1" name="idproyecto1" placeholder="" value="<?php echo $idProyecto; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->

                            </div>
                            <div class="sub-boton">

                                <input id="btnagregarpago" type="submit" value="Agregar Pago" class="button">

                            </div>
                        </form>
                    </div>
                </div><?php
                                }else {
                                    echo 'Modificar fechas de un pago?';
                                }
                            }
                        }
                    }
                        ?>

</li>
<?php include('includes/funciones/contratos.php');
    for ($i = 0; $i < sizeof($supervecTokenContrato); $i++) {
        $contadorContrato = 0;
        for ($u = 0; $u < sizeof($supervecTokenContrato[$i]); $u++) {
            $diasInicio = (strtotime($supervecFechaInicioContrato[$i][$u]) - strtotime($fechahoy)) / 86400;
            $diasFin = (strtotime($supervecFechaFinContrato[$i][$u]) - strtotime($fechahoy)) / 86400;
            // echo $diasInicio . ')(' . $diasFin;
            if ($diasInicio < 0 && $diasFin > 0) {
            
                $u = sizeof($supervecTokenContrato[$i]) - 1;
                $i = sizeof($supervecTokenContrato) - 1;
            } else {

                if ($contadorContrato == sizeof($supervecTokenContrato[$i]) - 1) {
                    // echo 'opcion habilitada'.$u;
?>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Agregar Nuevo Contrato</h1>
                    </div>
                    <div class="datos-contrato">
                        <form id="agregar-contrato" action="#">
                            <div class="contenido-cuenta">
                                <div class="text-dato3">
                                    <p>Fecha Inicio</p>
                                </div>
                                <div class="dato3">
                                    <input type="text" id="fechainicio" name="fechainicio" placeholder="Ingrease la fecha de inicio" value="-" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Tiempo</p>
                                </div>
                                <div class="dato3">
                                    <select name="select" id="seleccion">
                                        <option value="2" selected>1 Mes</option>
                                        <option value="4">3 Meses</option>
                                        <option value="7">6 Meses</option>
                                        <option value="13">12 Meses</option>
                                    </select>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Fecha Fin</p>
                                </div>
                                <div class="dato3">
                                    <input type="text" id="fechafin" name="fechafin" placeholder="Fecha de fin de contrato" value="<?php echo $_GET['strDate']; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Tipo de Paquete</p>
                                </div>

                                <div class="dato3">
                                    <select name="select" id="paquete">
                                        <?php if ($vectorTipoProyectos == 'Paquete Básico') { ?>
                                            <option value="Paquete Básico" selected>Paquete Básico</option>
                                            <option value="Paquete Negocio">Paquete Negocio</option>
                                            <option value="Paquete Profesional">Paquete Profesional</option>
                                        <?php } ?>
                                        <?php if ($vectorTipoProyectos == 'Paquete Negocio') { ?>
                                            <option value="Paquete Básico">Paquete Básico</option>
                                            <option value="Paquete Negocio" selected>Paquete Negocio</option>
                                            <option value="Paquete Profesional">Paquete Profesional</option>
                                        <?php } ?>
                                        <?php if ($vectorTipoProyectos == 'Paquete Profesional') { ?>
                                            <option value="Paquete Básico">Paquete Básico</option>
                                            <option value="Paquete Negocio">Paquete Negocio</option>
                                            <option value="Paquete Profesional" selected>Paquete Profesional</option>
                                        <?php } ?>

                                    </select>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="text-dato3">
                                    <p>Precio</p>
                                </div>
                                <div class="dato3">
                                    <input type="text" id="precioshow" name="precioshow" placeholder="Ingrese el Monto" value="" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="precio" name="precio" placeholder="Ingrese el Monto" value="" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="preciobasico" name="preciobasico" placeholder="" value="<?php echo $precioBasico + $precioBD + $precioDominio + $precioHosting + $precioMantenimiento; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="precionegocio" name="precionegocio" placeholder="" value="<?php echo $precioNegocio + $precioBD + $precioDominio + $precioHosting + $precioMantenimiento; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="precioprofesional" name="precioprofesional" placeholder="" value="<?php echo $precioProfesional + $precioBD + $precioDominio + $precioHosting + $precioMantenimiento; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->
                                <div class="dato3">
                                    <input style="display: none;" type="text" id="idproyecto" name="idproyecto" placeholder="" value="<?php echo $idProyecto; ?>" disabled>
                                </div> <!-- rnormal__tarjeta -->

                            </div>
                            <div class="sub-boton">

                                <input id="btnagregarcontrato" type="submit" value="Agregar Contrato" class="button">

                            </div>
                        </form>
                    </div>
                </div>

                </li><?php

                    }
                    $contadorContrato++;
                }
            }
        }

                        ?>
        </div>
        <?php









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


        for ($y = 0; $y < $contadorPasoxProyecto[0]; $y++) {
            // echo '<br>->'.0."-".$superVec[0][$y];
            $dias1 = (strtotime($superVec[0][$y]) - strtotime($fechaini)) / 86400;
            $vectorEspecialMayorFecha[0][$y] = $dias1;
            // // echo '<br>x='.0;
            // echo '<pre>';
            // var_dump($vectorEspecialMayorFecha);
            // echo '</pre>';
            if ($vectorEspecialMayorFecha[0][$y] > $auxMayorFecha) {
                $auxMayorFecha = $vectorEspecialMayorFecha[0][$y];

                $vectorMax[0] = 0;
                $vectorMax[0 + 1] = $y;
            }
            if ($y == ($contadorPasoxProyecto[0] - 1)) {
                // echo 'hola';
                // echo $contadorPasoxProyecto[0];
                $sumaPasos = $sumaPasos + $contadorPasoxProyecto[0];
            }
            // if($x == ($contadorProyectos-1)){

            // }
            // echo '->'.$vectorEspecialMayorFecha[$vectorMax[0]][$vectorMax[1]];

        }
        // echo '->' . $vectorMax[0], $vectorMax[1];
        // echo '->' . $superVec[$vectorMax[0]][$vectorMax[1]];
        // echo '<br><br><br>';
        // echo '<pre>';
        // var_dump($vectorMax);
        // echo '</pre>';
        // echo '<pre>';
        // var_dump($superVecDesp);
        // echo '</pre>';
        // echo '<br>------>'.$contadorPasoxProyecto[0];
        // echo '->'.$sumaPasos;

        for ($y = 0; $y < $contadorPasoxProyecto[0]; $y++) {
            // echo '<br>-xxxxxxxx>' . 0 . '-'.$y. $superVec[0][$y];
        ?>
            <script type="text/javascript">
                var fechasphp = '<?php echo $superVec[0][$y];
                                    ?>'

                var vectorMax1fechaphp = '<?php

                                            if ($y > 1) {
                                                echo $superVec[$vectorMax[0]][$vectorMax[1]];
                                            } else {
                                                echo $superVec[$vectorMax[0]][$vectorMax[0]];
                                            }

                                            ?>'
                var contPasosxProyphp = '<?php echo $contadorPasoxProyecto[0];
                                            ?>'
                var contadorProyectos = '<?php echo 1;
                                            ?>'
                var contadordePasos = '<?php echo $sumaPasos;
                                        ?>'
                var x = '<?php echo 0;
                            ?>'
                var y = '<?php echo $y;
                            ?>'

                // console.log(x + '-' + y + '-' + fechasphp);
                abc(fechasphp, vectorMax1fechaphp, contadorProyectos, contPasosxProyphp, contadordePasos);
            </script>
    <?php
        }
    } ?>