<?php
require 'includes/templates/header.php';
require_once('includes/funciones/consultas.php');
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
    session_destroy();
    // header('Location: cuenta.php#angel-ruiz');
?>
    <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=logout.php">

    <?php
} else {
    $dato = $_SESSION['email'];

    $resultadoConsulta = consultaUsuario($dato);
    if ($resultadoConsulta->num_rows) {
        foreach ($resultadoConsulta as $Consulta) {
            $usuario = $Consulta['nombre_usuario'];
            $apellidos =  $Consulta['apellidos_usuario'];
            $idproyecto = $Consulta['idproyecto_usuario'];
            $idusuario = $Consulta['id_usuario'];
            $foto = $Consulta['foto_usuario'];
            $calle = $Consulta['calle_usuario'];
            $numie = $Consulta['numiedireccion_usuario'];
            $col = $Consulta['colonia_usuario'];
            $cp = $Consulta['cp_usuario'];
            $email = $Consulta['email_usuario'];
            $tel = $Consulta['telefono_usuario'];
            $fec = $Consulta['fecha_usuario'];
            $domiciliof = $Consulta['domiciliofiscal_usuario'];
            $cfdi = $Consulta['cfdi_usuario'];
            $rfc = $Consulta['rfc_usuario'];
            $tipouser = $Consulta['tipo_usuario'];
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

    for ($i = 0; $i < $contadorProyectos; $i++) {

        $contadorPasos = 0;
        $resultadoPasos = consultaPasos($vectorIdProyectos[$i]);

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
        $contadordepagos = 0;
        for ($i = 0; $i < $contadorProyectos; $i++) {
            $resultadoPagos = consultaPagos($vectorIdProyectos[$i]);

            $contadorPasos1 = 0;
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
                    $contadorPasos1++;
                    $contadordepagos = $contadorPasos1;
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
            }
        }
        for ($i = 0; $i < $contadorProyectos; $i++) {
            $resultadoContratos = consultaContratos($vectorIdProyectos[$i]);

            $contadorPasos1 = 0;
            $contadorPagos = 0;
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
        //         echo '<pre>';
        // var_dump($supervecFechaInicioContrato);
        // echo '</pre>';

        // echo $contadorProyectos.'->'.$contadordepagos;
        for ($i = 0; $i < $contadordepagos; $i++) {
            $pagosparts = obtenerPartPago();
            $contadorPasos1 = 0;
            $contadorPagos = 0;
            if ($pagosparts->num_rows) {
                foreach ($pagosparts as $pagosp) {
                    $payedEstado[$contadorPasos1] = $pagosp['orderstatus_pagoparts'];
                    $idpagoProcesado[$contadorPasos1] = $pagosp['idpago_pagoparts'];
                    $contadorPasos1++;
                }
            }
            // $superVecPayedEstado[$i] = $payedEstado; 
            // $superVecidPagoProcesado[$i]= $idpagoProcesado;
            // for ($ix = 0; $ix < $contadorPasos1; $ix++) {
            //     unset($payedEstado[$ix]);
            //     unset($idpagoProcesado[$ix]);
            // }
        }
        // echo   $usuario . '------>';
        // echo ('<pre>');
        // var_dump($superVecPayedEstado);
        // echo ('</pre>');

        $_SESSION['tipo_usuario'] = $tipouser;
            ?>





        <title>Tu Cuenta</title>

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

        <?php

        require('includes/funciones/perfil.php');
        if ($_SESSION['tipo_usuario'] == 'admin') {
        ?>
            <?php require('includes/funciones/admin.php'); ?>

        <?php
        } else {


        ?>
            <div class="contenedor-cuenta">

                <ol class="paginacion2">
                    <div class="mensajealerta<?php if ($calle == '' || $numie == '' || $col == '' || $cp == '') {
                                                    echo ' mensajeon';
                                                } else {
                                                    echo ' mensajeoff';
                                                } ?>">


                        <p class="globo iii abajo-izquierda">
                            Para acceder a panel de firma de contrato, primero debes tener los datos de "dirección de cliente".
                        </p>
                    </div>


                </ol>
                <ul class="slider2">
                    <li>
                        <div class="contenedor-especial">
                            <div class="titulo-seccion">
                                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Proyectos</h1>
                            </div>
                            <?php
                            for ($x = 0; $x < $contadorProyectos; $x++) {
                            ?>
                                <div class="menu-proyectos">
                                    <div class="submenu-proyectos">
                                        <div class="titulo-proyecto">
                                            <?php if (($x + 1) == 1) {
                                            ?>
                                                <h1>Proyecto :<span style="font-size: 16px;">
                                                        <?php
                                                        if ($vectorNombresProyectos[$x] == 'Sin Proyecto') {
                                                            echo 'Proyecto en cotización y verificación';
                                                        } else {
                                                            echo 'https://' . $vectorNombresProyectos[$x];
                                                        }
                                                        ?></span></h1><?php
                                                                    } else { ?>
                                                <h1>Proyecto <?php echo $x + 1; ?>:<span style="font-size: 16px;">
                                                        <?php

                                                                        echo 'https://' . $vectorNombresProyectos[$x];
                                                        ?></span></h1><?php
                                                                    }
                                                                        ?>
                                        </div>
                                        <div class="mas-proyecto">
                                            <input type="checkbox" class="checs" id="check<?php echo $x; ?>" name="menu">
                                            <label for="check<?php echo $x; ?>">
                                                <i id="plus<?php echo $x; ?>" class="far fa-plus-square"></i>
                                                <i id="neg<?php echo $x; ?>" class="far fa-minus-square" style="display: none;"></i>
                                            </label>
                                        </div>
                                        <div id="lista<?php echo $x; ?>" class="lista-proyectos" style="display: none;">
                                            <?php
                                            for ($y = 0; $y < $contadorPasoxProyecto[$x]; $y++) { ?>
                                                <div class="links">
                                                    <div class="contenedorconteo">
                                                        <?php
                                                        $textAsunto = "Hola. Me gustaría que resolvierán las siguientes dudas de mi proyecto " . $vectorNombresProyectos[$x] . " del paso " . ($y + 1) . ": >>" . $superVecDesp[$x][$y] . "<< " . "Proyecto id# " . $vectorIdProyectos[$x];
                                                        $asunto = str_replace(' ', '%20', $textAsunto);
                                                        $vectorNombresProyectos[$x] = str_replace('&', 'y', $vectorNombresProyectos[$x]);
                                                        $cuerpo = "Lista de dudas: ";
                                                        $cuerpo = str_replace(' ', '%20', $cuerpo);
                                                        ?>
                                                        <a href="mailto:wingsdevs@gmail.com?subject=<?php echo $asunto; ?>&body=<?php echo $cuerpo; ?>" target="_blank">
                                                            <p>Actividad <?php echo $y + 1; ?>: <i class="fas fa-caret-right"></i> <?php echo  $superVecDesp[$x][$y]; ?></p>


                                                        </a>
                                                        <?php
                                                        date_default_timezone_set('America/Mexico_City');
                                                        $fechainix =  date('Y-m-d H:i:s');
                                                        if ($superVec[$x][$y] > $fechainix) {
                                                        ?>
                                                            <div id="midiv" class="cuenta-regresiva<?php echo $x . '-' . $y; ?> contenedor-cuenta">

                                                                <ul class="clearfix">
                                                                    <div class="lix">
                                                                        <p>Fecha estimada: Actividad <?php echo ($y + 1) . ' (' . $superVec[$x][$y] . ')'; ?></p>
                                                                    </div>


                                                                    <div class="lix">
                                                                        <p id="dias<?php echo $x . '-' . $y ?>" class="numero"></p>

                                                                    </div>

                                                                    <div class="lix">
                                                                        <p id="horas<?php echo $x . '-' . $y ?>" class="numero"></p>

                                                                    </div>
                                                                    <div class="lix">

                                                                        <p id="minutos<?php echo $x . '-' . $y ?>" class="numero"></p>

                                                                    </div>
                                                                    <div class="lix">

                                                                        <p id="segundos<?php echo $x . '-' . $y ?>" class="numero"></p>
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
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            <?php
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </li>
                    <li>
                        <div class="contenedor-especial">
                            <div class="titulo-seccion">
                                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Cuenta</h1>
                            </div>

                            <div class="datos-usuario">
                                <form id="cuenta" action="#">
                                    <div class="contenido-cuenta">
                                        <div class="dato1">
                                            <input style="border: 1px solid #161616;" type="text" id="Nombre" name="Nombre" placeholder="Ingresa tu Nombre" value="<?php echo $usuario . ' ' . $apellidos ?>" disabled>
                                        </div> <!-- rnormal__tarjeta -->
                                        <div class="text-dato1">
                                            <p>Cliente</p>
                                        </div>
                                        <div class="dato2">
                                            <input type="text" id="calle" name="calle" placeholder="Calle" value="<?php echo $calle; ?>">
                                            <input type="text" id="numie" name="numie" placeholder="Número Int/Ext del domicilio" value="<?php echo $numie; ?>">
                                            <input type="text" id="colonia" name="colonia" placeholder="Colonia" value="<?php echo $col; ?>">
                                            <input type="text" id="cpostal" name="cpostal" placeholder="Código Postal" value="<?php echo $cp; ?>">
                                        </div> <!-- rnormal__tarjeta -->
                                        <div class="text-dato2">
                                            <p>Dirección del cliente</p>
                                        </div>
                                        <div class="dato3">
                                            <input style="border: 1px solid #161616;" type="text" id="email" name="email" placeholder="Ingresa tu email" value="<?php echo $email; ?>" disabled>
                                        </div> <!-- rnormal__tarjeta -->
                                        <div class="text-dato3">
                                            <p>Correo Electrónico</p>
                                        </div>

                                        <div class="dato4">
                                            <input style="border: 1px solid #161616;" type="text" id="telefono" name="telefono" placeholder="Ingresa tu telefono" value="<?php echo $tel; ?>" disabled>
                                        </div> <!-- rnormal__tarjeta -->
                                        <div class="text-dato4">
                                            <p>Teléfono</p>
                                        </div>

                                        <div class="dato5">
                                            <p><?php echo $fec; ?></p>
                                        </div> <!-- rnormal__tarjeta -->
                                        <div class="text-dato5">
                                            <p>Cliente desde</p>
                                        </div>
                                        <div class="dato6">
                                            <input type="text" id="domiciliof" name="domiciliof" placeholder="Domicilio fiscal" value="<?php
                                                                                                                                        if ($domiciliof != '') {
                                                                                                                                            echo $domiciliof;
                                                                                                                                        } else {
                                                                                                                                            echo '';
                                                                                                                                        }
                                                                                                                                        ?>">
                                            <input type="text" id="cfdi" name="cfdi" placeholder="CDFI" value="<?php
                                                                                                                if ($cfdi != '') {
                                                                                                                    echo $cfdi;
                                                                                                                } else {
                                                                                                                    echo '';
                                                                                                                }
                                                                                                                ?>">
                                            <input type="text" id="rfc" name="rfc" placeholder="RFC" value="<?php
                                                                                                            if ($rfc != '') {
                                                                                                                echo $rfc;
                                                                                                            } else {
                                                                                                                echo '';
                                                                                                            }
                                                                                                            ?>">

                                        </div> <!-- rnormal__tarjeta -->
                                        <div class="text-dato6">
                                            <p>Datos fiscales</p>
                                        </div>
                                        <div class="sub-boton">
                                            <div class="text-btn">
                                                <p style="color: #fff;">Si desea cambiar datos como la dirección de correo electrónico por favor póngase en contacto con el soporte técnico</p>
                                            </div>
                                            <input id="btnactualizar" type="submit" value="Actualizar" class="button">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <?php


                    include('includes/funciones/historial-pagos.php');

                    ?>
                    </li>
                    <?php include('includes/funciones/contratos.php');
                    ?>
                    </li>
                    <li>
                        <div class="contenedor-especial">
                            <div class="titulo-seccion">
                                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Mensajes</h1>
                            </div>
                            <?php include('includes/funciones/mensajes.php'); ?>
                        </div>

                    </li>
                    <li>
                        <div class="contenedor-especial">
                            <div class="titulo-seccion">
                                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Archivos</h1>
                            </div>
                            <?php include('includes/funciones/subirarchivo.php'); ?>
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

        <?php

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