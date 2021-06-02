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
 $contratox = '';
    $cadena_de_texto = $_GET['pago'];
    $cadena_buscada   = '-';
    $posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);

    //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
    if ($posicion_coincidencia === false) {
        // echo "NO se ha encontrado la palabra deseada!!!!";
    } else {
        // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;

        for ($x = 0 ; $x < $posicion_coincidencia; $x++) {
            //  $cadena_de_texto[$x];
           $contratox .= $cadena_de_texto[$x];
        }
    }
    $resultadoProyecto = obtenerPrecios($contratox);
 
    if ($resultadoProyecto->num_rows) {
        foreach ($resultadoProyecto as $proyecto) {

            $precioBasico = $proyecto['basico_precio'];
            // echo $precioNegocio = $proyecto['negocio_precio'];
            // echo $precioProfesional = $proyecto['profesional_precio'];
            $precioHosting = $proyecto['hosting_precio'];
            $precioDominio = $proyecto['dominio_precio'];
            $precioMantenimiento = $proyecto['mantenimiento_precio'];
            $precioBD = $proyecto['basesdatos_precio'];
            $precioProgramacion = $proyecto['programacion_precio'];
        }
    }

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
        }
    }
    $contadorProyectos = 0;
    if ($_SESSION['tipo_usuario'] == 'admin') {
     //   echo 'hola angel' . $_GET['pago'];

        $cadena_de_texto = $_GET['pago'];
        $cadena_buscada   = '$';
        $posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);

        //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
        if ($posicion_coincidencia === false) {
            // echo "NO se ha encontrado la palabra deseada!!!!";
        } else {
            // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;

            for ($x = $posicion_coincidencia + 1; $x < strlen($cadena_de_texto); $x++) {
                //  $cadena_de_texto[$x];
                $idproyget = $cadena_de_texto[$x];
            }
        }
        $i = 0;
        $contadorPasos = 0;
        $resultadoPasos = consultaPasos($idproyget);

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
        $resultadoPagos = consultaPagos($idproyget);

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
                $vecContMesesPago[$contadorPasos1] = $pago['contmeses_pago'];
                $contadorPasos1++;
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
        $resultadoProyecto = consultaProyectos($idproyget);

        if ($resultadoProyecto->num_rows) {
            foreach ($resultadoProyecto as $proyecto) {
                $nombreproyecto = $proyecto['nombre_proyecto'];
                $idProyecto = $proyecto['id_proyecto'];
                $vectorNombresProyectos[$contadorProyectos] = $nombreproyecto;
                $vectorIdProyectos[$contadorProyectos] = $idProyecto;
                $vectorTipoProyectos[$contadorProyectos] = $proyecto['tipo_proyecto'];
                $vectorPrecioProyectos[$contadorProyectos] = $proyecto['pago_proyecto'];
                $contadorProyectos++;
            }
        }

        // echo '->>>>>>>>>>>>>'.$contadorPasos1;
        // echo '<pre>';
        // var_dump($superVecContMesesPago);
        // echo '</pre>';
        // echo '<pre>';
        // var_dump($superVecTokenContratoPago);
        // echo '</pre>';
        // echo '<pre>';
        // var_dump($superVecIdPago);
        // echo '</pre>';
        // echo '.....hola';
        // echo '->'. $superVecIdPago;
        for ($x = 0; $x < $contadorProyectos; $x++) {
            // echo '..hola';
            for ($y = 0; $y < sizeof($superVecTokenContratoPago[$x]); $y++) {

                if (isset($_GET['pago'])) {
                    // echo '<br>hey (' . $superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . '$' . $idproyget[$x] . '=' . $_GET['pago'];
                    if (($superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . '$' . $idproyget[$x]) == ($_GET['pago'])) {
                        
                        // echo $superVecIdPago[$x][$y];
                        // echo '->>>>' . $superVecTokenContratoPago[$x][$y] . '-' . $supervectokenConekta[$x][$y];
                        // echo $_GET['pago'];

    ?>

                        <title>Pago de servicios</title>
                        <?php require('includes/funciones/perfil.php'); ?>
                        <div class="contenedor-cuenta">
                            <div class="titulo-seccion">
                                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Pago por (<?php 
                    if( $superVecContMesesPago[$x][$y]!=1){
                        echo $superVecContMesesPago[$x][$y].'Meses';
                    }else{
                        echo $superVecContMesesPago[$x][$y].'Mes';
                    }
                   ?>)</h1>
                            </div>
                            <div class="menu-proyectos1">
                                <div class="submenu-proyectos1">
                                    <div class="titulo-proyecto1">
                                        <h1>
                                            <?php
                                            echo 'Pago (' . $superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . ')';
                                            ?></h1>
                                    </div>
                                    <?php


                                    for ($i = 0; $i < 3; $i++) {
                                    ?>
                                        <div class="servicio<?php echo $i; ?>">
                                            <h2><?php
                                                if ($i == 0) {
                                                    echo 'Meses de servicio';
                                                } elseif ($i == 1) {
                                                    echo 'Descripción de servicio';
                                                } else {
                                                    echo 'Precio';
                                                }
                                                ?></h2>
                                        </div>

                                    <?php
                                    }
                                    for ($i = 0; $i < 3; $i++) {
                                    ?>
                                        <div class="servicio1<?php echo $i; ?>">
                                            <h2><?php
                                                if ($i == 0) {
                                                    echo $superVecContMesesPago[$x][$y];
                                                } elseif ($i == 1) {
                                                    echo 'Servicio de Hosting';
                                                } else {
                                                    echo '$' . number_format(($precioHosting) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                                }
                                                ?></h2>
                                        </div>

                                    <?php
                                    }
                                    for ($i = 0; $i < 3; $i++) {
                                    ?>
                                        <div class="servicio2<?php echo $i; ?>">
                                            <h2><?php
                                                if ($i == 0) {
                                                    echo $superVecContMesesPago[$x][$y];
                                                } elseif ($i == 1) {
                                                    echo 'Servicio de Dominio';
                                                } else {
                                                    echo '$' . number_format(($precioDominio) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                                }
                                                ?></h2>
                                        </div>

                                    <?php
                                    }
                                    for ($i = 0; $i < 3; $i++) {
                                    ?>
                                        <div class="servicio3<?php echo $i; ?>">
                                            <h2><?php
                                                if ($i == 0) {
                                                    echo $superVecContMesesPago[$x][$y];
                                                } elseif ($i == 1) {
                                                    echo 'Servicio de Programación';
                                                } else {
                                                    if ($vectorTipoProyectos[$x] == 'Sin paquete') {
                                                        echo '$' . number_format(($precioProgramacion) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                                    }
                                                    if ($vectorTipoProyectos[$x] == 'Paquete Negocio') {
                                                        echo '$' . number_format(($precioNegocio) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                                    }
                                                    if ($vectorTipoProyectos[$x] == 'Paquete Profesional') {
                                                        echo '$' . number_format(($precioProfesional) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                                    }
                                                }
                                                ?></h2>
                                        </div>

                                    <?php
                                    }
                                    for ($i = 0; $i < 3; $i++) {
                                    ?>
                                        <div class="servicio4<?php echo $i; ?>">
                                            <h2><?php
                                                if ($i == 0) {
                                                    echo $superVecContMesesPago[$x][$y];
                                                } elseif ($i == 1) {
                                                    echo 'Servicio de Mantenimiento General para el proyecto.<br>Actualización y verificación de Programación (Código de programación)';
                                                } else {

                                                    echo '$' . number_format(($precioMantenimiento) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                                }
                                                ?></h2>
                                        </div>

                                    <?php
                                    }
                                    for ($i = 0; $i < 3; $i++) {
                                    ?>
                                        <div class="servicio5<?php echo $i; ?>">
                                            <h2><?php
                                                if ($i == 0) {
                                                    echo $superVecContMesesPago[$x][$y];
                                                } elseif ($i == 1) {
                                                    echo 'Servicio de programación y mantenimiento de bases de datos en PHP y MySql';
                                                } else {

                                                    echo '$' . number_format(($precioBD) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                                }
                                                ?></h2>
                                        </div>

                                    <?php
                                    }



                                    ?>

                                    <div class="total-title">
                                        <h2>Total (iva Incluido)</h2>
                                        <div class="imgpago">

                                            <img src="<?php
                                                        if ($supervectokenConekta[$x][$y] == '' || $supervecforTarget[$x][$y] == 0) {
                                                            echo 'img/terceros/PAGOPENDIENTE.png';
                                                        } else {
                                                            echo 'img/terceros/pagado.png';
                                                        }
                                                        ?>" alt="<?php
                                                            if ($supervectokenConekta[$x][$y] == '' || $supervecforTarget[$x][$y] == 0) {
                                                                echo 'img/terceros/PAGOPENDIENTE.png';
                                                            } else {
                                                                echo 'img/terceros/pagado.png';
                                                            }
                                                            ?>">
                                        </div>
                                    </div>
                                    <div class="total-total">
                                        <h2>
                                            <?php
                                            if ($vectorTipoProyectos[$x] == 'Sin paquete') {
                                                $cuenta = (($precioDominio + $precioHosting + $precioBD + $precioProgramacion + $precioMantenimiento) * $superVecContMesesPago[$x][$y]);
                                                
                                                $cuenta =  number_format($cuenta+$cuenta*.16);
                                                echo  '$' . $cuenta . '.00 MXN';
                                            }
                                            if ($vectorTipoProyectos[$x] == 'Paquete Negocio') {
                                                echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioNegocio + $precioMantenimiento) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                            }
                                            if ($vectorTipoProyectos[$x] == 'Paquete Profesional') {
                                                echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioProfesional + $precioMantenimiento) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                            }

                                            ?></h2>



                                    </div>
                                </div>
                            </div>
                            <div class="pagos-metodos 
                <?php
                        if (($supervectokenConekta[$x][$y] == '' || $supervecforTarget[$x][$y] == 0) && ($_SESSION['tipo_usuario']) != 'admin') {
                            echo '';
                        } else {
                            echo 'no-active';
                        }
                ?>
                ">
                                <div class="pago">
                                    <div class="text-pago">
                                        <p>Pago en efectivo</p>
                                    </div>

                                    <div class="efectivo-oxxopay">

                                        <img src="img/terceros/oxxopay.png" alt="oxxo pay">
                                    </div>
                                    <div class="btnpago">
                                        <a class="button" href="business/pagoxo.php=<?php echo $_GET['pago']; ?>#angel-ruiz">Pagar</a>
                                    </div>
                                </div>
                                <div class="pago">
                                    <div class="text-pago">
                                        <p>Tarjeta de Crédito o Débito</p>
                                    </div>
                                    <div class="visa"><i class="fab fa-cc-visa"></i></div>
                                    <div class="master"><i class="fab fa-cc-mastercard"></i></div>
                                    <div class="american"><i class="fab fa-cc-amex"></i></div>
                                    <div class="btnpago">
                                        <a class="button" href="transpago.php?pago=<?php echo $_GET['pago']; ?>#angel-ruiz">Pagar</a>


                                    </div>
                                </div>
                                <div class="pago">
                                    <div class="text-pago">
                                        <p>Transferencia Bancaria via SPEI</p>
                                    </div>
                                    <div class="trans-spei">
                                        <img src="img/terceros/speipay.png" alt="transferencia SPEI">
                                    </div>
                                    <div class="btnpago">
                                        <a class="button" href="#transferencia">Pagar</a>
                                    </div>
                                </div>
                            </div>


                        </div>

            <?php

                    }
                }
            }
        }
    } else {


        $resultadoProyecto = consultaProyecto($idusuario);

        if ($resultadoProyecto->num_rows) {
            foreach ($resultadoProyecto as $proyecto) {
                $nombreproyecto = $proyecto['nombre_proyecto'];
                $idProyecto = $proyecto['id_proyecto'];
                $vectorNombresProyectos[$contadorProyectos] = $nombreproyecto;
                $vectorIdProyectos[$contadorProyectos] = $idProyecto;
                $vectorTipoProyectos[$contadorProyectos] = $proyecto['tipo_proyecto'];
                $vectorPrecioProyectos[$contadorProyectos] = $proyecto['pago_proyecto'];
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
                $vectorFechafin[$ix] = '';
                $vectorDescrip[$ix] = '';
            } ?><?php
            }

           // var_dump($vectorIdProyectos);
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
                        $vecContMesesPago[$contadorPasos1] = $pago['contmeses_pago'];
                        $contadorPasos1++;
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
            for ($i = 0; $i < $contadorProyectos; $i++) {
                $resultadoContratos = consultaContratos($vectorIdProyectos[$i]);

                $contadorPasos1 = 0;
                if ($resultadoContratos->num_rows) {
                    foreach ($resultadoContratos as $contrato) {
                        $vecIdContrato[$contadorPasos1] = $contrato['id_contrato'];
                        $vecLinkContrato[$contadorPasos1] = $contrato['link_contrato'];
                        $vecTokenContrato[$contadorPasos1] = $contrato['token_contrato'];

                        $contadorPasos1++;
                    }
                }
                $supervecIdContrato[$i] = $vecIdContrato;
                $supervecLinkContrato[$i] = $vecLinkContrato;
                $supervecTokenContrato[$i] =  $vecTokenContrato;

                for ($ix = 0; $ix < $contadorPasos1; $ix++) {

                    unset($vecIdContrato[$ix]);
                    unset($vecLinkContrato[$ix]);
                    unset($vecTokenContrato[$ix]);
                }
            }
            // echo '<pre>';
            // var_dump( $superVecIdProyectoPago);
            // echo '</pre>';

            // echo '<pre>';
            // var_dump($supervecforTarget);
            // echo '</pre>';
            // echo '<pre>';
            // var_dump($supervecforTarget);
            // echo '</pre>';
            // // $lastnum = str_pad($supervecforTarget[1][4], 4, "0", STR_PAD_LEFT);
            // // echo  $lastnum;

            // echo '<pre>';
            // var_dump($superVecTokenContratoPago);
            // echo '</pre>';
            for ($x = 0; $x < $contadorProyectos; $x++) {
               // echo '..hola';
                for ($y = 0; $y < sizeof($superVecTokenContratoPago[$x]); $y++) {
                    if (isset($_GET['pago'])) {
                        //echo '<br>' . $superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . '$' .  $superVecIdProyectoPago[$x][$y] . ' =' . $_GET['pago'];
                       
                        if (($superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . '$' . $superVecIdProyectoPago[$x][$y]) == ($_GET['pago'])) {
                            // echo '->>>>>>>>>>>>>>>>>hola';
                            // echo $_GET['pago'];
                            // echo $superVecIdPago[$x][$y];
                            // echo '->>>>'.$superVecTokenContratoPago[$x][$y] . '-' . $supervectokenConekta[$x][$y];
                            // echo '<br>x y y' . $x . $y;



                ?>

            <title>Pago de servicios</title>
            <?php require('includes/funciones/perfil.php'); ?>
            <div class="contenedor-cuenta">
                <div class="titulo-seccion">
                    <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Pago por (<?php 
                    if( $superVecContMesesPago[$x][$y]!=1){
                        echo $superVecContMesesPago[$x][$y].'Meses';
                    }else{
                        echo $superVecContMesesPago[$x][$y].'Mes';
                    }
                   ?>)</h1>
                </div>
                <div class="menu-proyectos1">
                    <div class="submenu-proyectos1">
                        <div class="titulo-proyecto1">
                            <h1>
                                <?php
                                echo 'Pago (' . $superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . ')' . $x . $y;
                                echo $superVecIdProyectoPago[$x][$y];
                                ?></h1>
                        </div>
                        <?php


                            for ($i = 0; $i < 3; $i++) {
                        ?>
                            <div class="servicio<?php echo $i; ?>">
                                <h2><?php
                                    if ($i == 0) {
                                        echo 'Meses de servicio';
                                    } elseif ($i == 1) {
                                        echo 'Descripción de servicio';
                                    } else {
                                        echo 'Precio';
                                    }
                                    ?></h2>
                            </div>

                        <?php
                            }
                            for ($i = 0; $i < 3; $i++) {
                        ?>
                            <div class="servicio1<?php echo $i; ?>">
                                <h2><?php
                                    if ($i == 0) {
                                        echo $superVecContMesesPago[$x][$y];
                                    } elseif ($i == 1) {
                                        echo 'Servicio de Hosting';
                                    } else {
                                        echo '$' . number_format(($precioHosting)  * $superVecContMesesPago[$x][$y]). '.00 MXN';
                                    }
                                    ?></h2>
                            </div>

                        <?php
                            }
                            for ($i = 0; $i < 3; $i++) {
                        ?>
                            <div class="servicio2<?php echo $i; ?>">
                                <h2><?php
                                    if ($i == 0) {
                                        echo $superVecContMesesPago[$x][$y];
                                    } elseif ($i == 1) {
                                        echo 'Servicio de Dominio';
                                    } else {
                                        echo '$' . number_format(($precioDominio) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                    }
                                    ?></h2>
                            </div>

                        <?php
                            }
                            for ($i = 0; $i < 3; $i++) {
                        ?>
                            <div class="servicio3<?php echo $i; ?>">
                                <h2><?php
                                    if ($i == 0) {
                                        echo $superVecContMesesPago[$x][$y];
                                    } elseif ($i == 1) {
                                        echo 'Servicio de Programación';
                                    } else {
                                        if ($vectorTipoProyectos[$x] == 'Sin paquete') {
                                            echo '$' . number_format(($precioProgramacion) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                        }
                                        if ($vectorTipoProyectos[$x] == 'Paquete Negocio') {
                                            echo '$' . number_format(($precioNegocio)  * $superVecContMesesPago[$x][$y]). '.00 MXN';
                                        }
                                        if ($vectorTipoProyectos[$x] == 'Paquete Profesional') {
                                            echo '$' . number_format(($precioProfesional) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                        }
                                    }
                                    ?></h2>
                            </div>

                        <?php
                            }
                            for ($i = 0; $i < 3; $i++) {
                        ?>
                            <div class="servicio4<?php echo $i; ?>">
                                <h2><?php
                                    if ($i == 0) {
                                        echo $superVecContMesesPago[$x][$y];
                                    } elseif ($i == 1) {
                                        echo 'Servicio de Mantenimiento General para el proyecto.<br>Actualización y verificación de Programación (Código de programación)';
                                    } else {

                                        echo '$' . number_format(($precioMantenimiento) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                    }
                                    ?></h2>
                            </div>

                        <?php
                            }
                            for ($i = 0; $i < 3; $i++) {
                        ?>
                            <div class="servicio5<?php echo $i; ?>">
                                <h2><?php
                                    if ($i == 0) {
                                        echo $superVecContMesesPago[$x][$y];
                                    } elseif ($i == 1) {
                                        echo 'Servicio de programación y mantenimiento de bases de datos en PHP y MySql';
                                    } else {

                                        echo '$' . number_format(($precioBD) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                    }
                                    ?></h2>
                            </div>

                        <?php
                            }



                        ?>

                        <div class="total-title">
                            <h2>Total</h2>
                            <div class="imgpago">

                                <img src="<?php
                                            if ($supervectokenConekta[$x][$y] == '' || $supervecforTarget[$x][$y] == 0) {
                                                echo 'img/terceros/PAGOPENDIENTE.png';
                                            } else {
                                                echo 'img/terceros/pagado.png';
                                            }
                                            ?>" alt="<?php
                                                            if ($supervectokenConekta[$x][$y] == '' || $supervecforTarget[$x][$y] == 0) {
                                                                echo 'img/terceros/PAGOPENDIENTE.png';
                                                            } else {
                                                                echo 'img/terceros/pagado.png';
                                                            }
                                                            ?>">
                            </div>
                        </div>
                        <div class="total-total">
                            <h2>
                                <?php
                                if ($vectorTipoProyectos[$x] == 'Sin paquete') {
                                    $cuenta = (($precioDominio + $precioHosting + $precioBD + $precioProgramacion + $precioMantenimiento) * $superVecContMesesPago[$x][$y]);
                                                
                                                $cuenta =  number_format($cuenta+$cuenta*.16);
                                                echo  '$' . $cuenta . '.00 MXN';
                                }
                                if ($vectorTipoProyectos[$x] == 'Paquete Negocio') {
                                    echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioNegocio + $precioMantenimiento) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                }
                                if ($vectorTipoProyectos[$x] == 'Paquete Profesional') {
                                    echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioProfesional + $precioMantenimiento) * $superVecContMesesPago[$x][$y]) . '.00 MXN';
                                }

                                ?></h2>



                        </div>
                    </div>
                </div>
                <div class="pagos-metodos <?php
                            if (($supervectokenConekta[$x][$y] == '' || $supervecforTarget[$x][$y] == 0) && ($_SESSION['tipo_usuario'] != 'admin' && $email != 'jose@gmail.com' && $_SESSION['email'] != 'jose@gmail.com')) {
                                echo '';
                            } else {
                                echo 'no-active';
                            }?>
                ">
                    <div class="pago">
                        <div class="text-pago">
                            <p>Pago en efectivo</p>
                        </div>

                        <div class="efectivo-oxxopay">

                            <img src="img/terceros/oxxopay.png" alt="oxxo pay">
                        </div>
                        <div class="btnpago">
                            <a class="button" href="pagooxxo.php?pago=<?php echo $_GET['pago']; ?>#angel-ruiz">Pagar</a>
                        </div>
                    </div>
                    <div class="pago">
                        <div class="text-pago">
                            <p>Tarjeta de Crédito o Débito</p>
                        </div>
                        <div class="visa"><i class="fab fa-cc-visa"></i></div>
                        <div class="master"><i class="fab fa-cc-mastercard"></i></div>
                        <div class="american"><i class="fab fa-cc-amex"></i></div>
                        <div class="btnpago">
                            <a class="button" href="transpago.php?pago=<?php echo $_GET['pago']; ?>#angel-ruiz">Pagar</a>


                        </div>
                    </div>
                    <div class="pago">
                        <div class="text-pago">
                            <p>Transferencia Bancaria via SPEI</p>
                        </div>
                        <div class="trans-spei">
                            <img src="img/terceros/speipay.png" alt="transferencia SPEI">
                        </div>
                        <div class="btnpago">
                            <a class="button" href="#transferencia">Pagar</a>
                        </div>
                    </div>
                </div>


            </div>

<?php


                        }
                    }
                }
            }
        }
    }
    require 'includes/templates/footer.php';
?>