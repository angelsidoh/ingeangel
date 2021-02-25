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
        echo '<pre>';
var_dump($superVecIdPago);
echo '</pre>';
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

       <?php require('includes/funciones/perfil.php');?>
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
                        for ($x = 0; $x < $contadorProyectos; $x++) {
                        ?>
                            <div class="menu-proyectos">
                                <div class="submenu-proyectos">
                                    <div class="titulo-proyecto">
                                        <h1>Proyecto <?php echo $x + 1; ?>:<span style="font-size: 16px;">
                                                <?php
                                                echo $vectorNombresProyectos[$x];
                                                ?></span></h1>
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
                                                    $textAsunto = "Hola. Me gustaría que resolvieran las siguientes dudas de mi proyecto " . $vectorNombresProyectos[$x] . " del paso " . ($y + 1) . ": >>" . $superVecDesp[$x][$y] . "<< " . "Proyecto id# " . $vectorIdProyectos[$x];
                                                    $asunto = str_replace(' ', '%20', $textAsunto);
                                                    $vectorNombresProyectos[$x] = str_replace('&', 'y', $vectorNombresProyectos[$x]);
                                                    $cuerpo = "Lista de dudas: ";
                                                    $cuerpo = str_replace(' ', '%20', $cuerpo);
                                                    ?>
                                                    <a href="mailto:infoingeangel@gmail.com?subject=<?php echo $asunto; ?>&body=<?php echo $cuerpo; ?>" target="_blank">
                                                        <p>Paso <?php echo $y + 1; ?>: <i class="fas fa-caret-right"></i> <?php echo  $superVecDesp[$x][$y]; ?></p>


                                                    </a>
                                                    <div id="midiv" class="cuenta-regresiva<?php echo $x . '-' . $y; ?> contenedor-cuenta">

                                                        <ul class="clearfix">
                                                            <div class="lix">
                                                                <p>Fecha estimada: Paso <?php echo ($y + 1) . ' (' . $superVec[$x][$y] . ')'; ?></p>
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
                                        <input type="text" id="numie" name="numie" placeholder="Ingresa tu Numero Int/Ext" value="<?php echo $numie; ?>">
                                        <input type="text" id="colonia" name="colonia" placeholder="Ingresa tu colonia" value="<?php echo $col; ?>">
                                        <input type="text" id="cpostal" name="cpostal" placeholder="Ingresa tu Codigo postal" value="<?php echo $cp; ?>">
                                    </div> <!-- rnormal__tarjeta -->
                                    <div class="text-dato2">
                                        <p>Domicilio</p>
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
                </li>
                <li>
                    <div class="contenedor-especial">
                        <div class="titulo-seccion">
                            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Pagos</h1>
                        </div>
                        <?php
                        $contadorpagos2 = 1;
                        for ($x = 0; $x < $contadorProyectos; $x++) {

                        ?>
                            <div class="menu-proyectos">
                                <div class="submenu-proyectos">
                                    <div class="titulo-proyecto">
                                        <h1 class="<?php
                                                    for ($i = 0; $i < sizeof($superVecIdProyectoPago); $i++) {
                                                        $contadorpagos1 = 0;
                                                        for ($y = 0; $y < sizeof($superVecIdProyectoPago[$i]); $y++) {
                                                            if ($vectorIdProyectos[$x] == $superVecIdProyectoPago[$i][$y]) {
                                                                if ($supervecforTarget[$i][$y] == 0 || $supervectokenConekta[$i][$y] == '') {
                                                                    $contadorpagos1++;
                                                                }
                                                                if ($y == (sizeof($superVecIdProyectoPago[$i]) - 1)) {
                                                                    if ($contadorpagos1 >= 1) {
                                                                        echo 'blinkama';
                                                                    } else {
                                                                        echo '';
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>">Proyecto <?php echo $x + 1; ?>:<span style="font-size: 16px;">
                                                <?php
                                                echo $vectorNombresProyectos[$x];

                                                for ($i = 0; $i < sizeof($superVecIdProyectoPago); $i++) {
                                                    $contadorpagos1 = 0;
                                                    for ($f = 0; $f < sizeof($superVecIdProyectoPago[$i]); $f++) {
                                                        if ($vectorIdProyectos[$x] == $superVecIdProyectoPago[$i][$f]) {
                                                            if ($supervecforTarget[$i][$f] == 0 || $supervectokenConekta[$i][$f] == '') {
                                                                $contadorpagos1++;
                                                            }
                                                            if ($f == (sizeof($superVecIdProyectoPago[$i]) - 1)) {
                                                                if ($contadorpagos1 > 1) {
                                                                    echo ' (' . $contadorpagos1 . ') Pagos Pendientes';
                                                                } elseif ($contadorpagos1 == 1) {
                                                                    echo ' (' . $contadorpagos1 . ') Pago Pendiente';
                                                                } else {
                                                                    echo '';
                                                                }
                                                            }
                                                        }
                                                    }
                                                }


                                                ?></span></h1>
                                    </div>
                                    <div class="mas-proyecto">
                                        <input type="checkbox" class="checs" id="check<?php echo $x + 1000; ?>" name="menu">
                                        <label for="check<?php echo $x + 1000; ?>">
                                            <i id="plus<?php echo $x + 1000; ?>" class="far fa-plus-square"></i>
                                            <i id="neg<?php echo $x + 1000; ?>" class="far fa-minus-square" style="display: none;"></i>
                                        </label>
                                    </div>
                                    <div id="lista<?php echo $x + 1000; ?>" class="lista-proyectos" style="display: none;">
                                        <?php
                                        for ($y = 0; $y < 1; $y++) { ?>
                                            <div class="links">
                                                <div class="contenedorconteo1">
                                                    <?php
                                                    $textAsunto = "Hola. Me gustaría que resolvieran las siguientes dudas de mi proyecto " . $vectorNombresProyectos[$x] . " del paso " . ($y + 1) . ": >>" . $superVecDesp[$x][$y] . "<< " . "Proyecto id# " . $vectorIdProyectos[$x];
                                                    $asunto = str_replace(' ', '%20', $textAsunto);
                                                    $vectorNombresProyectos[$x] = str_replace('&', 'y', $vectorNombresProyectos[$x]);
                                                    $cuerpo = "Lista de dudas: ";
                                                    $cuerpo = str_replace(' ', '%20', $cuerpo);
                                                    $xend = 0;
                                                    $auxxend = 0;
                                                    $auxSuper = '';
                                                    $pagopendiente = '';
                                                   
                                                    ?>

                                                    <?php for ($f = 0; $f < sizeof($superVecIdProyectoPago[$x]); $f++) {
                                                        if ($supervectokenConekta[$x][$f] == '' || $supervecforTarget[$x][$f] == 0 || $supervecfechapagoPago == '') {
                                                    ?>
                                                            <a href="pago.php?pago=<?php echo $superVecTokenContratoPago[$x][$f] . '-' . $superVecIdPago[$x][$f]; ?>#angel-ruiz">
                                                                <p> Contrato (#<?php
                                                                    echo $superVecTokenContratoPago[$x][$f];
                                                                    ?>) <br> Periodo de contrato: <?php

                                                                                        echo $supervecfechaIniciopago[$x][$f] . ' a ' . $supervecfechaFinpago[$x][$f];
                                                                                        ?>: <i class="fas fa-caret-right"></i> <?php echo  'Ir a Pagar' ?></p><?php
                                                                                                                                $auxxend++;
                                                                                                                            } else { ?> <p><?php
                                                                                                                                
                                                                                                                                
                                                                                                                                // echo $auxxend;
                                                                        ?><p><?php
                                                                                                                                if($supervectokenConekta[$x][$f]!= '' && $superVecTokenContratoPago[$x][$f]!= '' && $supervecforTarget[$x][$f]!= 0){
                                                                                                                                    
                                                                                                                                    // echo $xend.'<-';
                                                                                                                                    if($f == sizeof($superVecIdProyectoPago[$x])-1){
                                                                                                                                        for ($h=0; $h < sizeof($superVecIdProyectoPago[$x]); $h++) { 
                                                                                                                                            // echo $supervectokenConekta[$x][$h];
                                                                                                                                            if($supervectokenConekta[$x][$h]== ''){
                                                                                                                                                $xend++;
                                                                                                                                               
                                                                                                                                            }else{
                                                                                                                                                if($xend==0){
                                                                                                                                                    $pagopendiente = 'Sin Pagos Pendientes.';
                                                                                                                                                    if($h ==sizeof($superVecIdProyectoPago[$x])-1){
                                                                                                                                                    echo $pagopendiente;
                                                                                                                                                    }
                                                                                                                                                    
                                                                                                                                                } 
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                                    
                                                                                                                                ?></p><?php

                                                                                                                            } ?></p>
                                                            </a><?php
                                                            }
                                                            
                                                                ?>

                                                        <ul class="clearfix">
                                                            <?php
                                                            ?>
                                                        </ul>
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
                        <div class="titulo-seccion" id="#historial">
                            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Historial de pagos</h1>
                        </div>
                        <?php

                        for ($x = 0; $x < $contadorProyectos; $x++) {
                        ?>
                            <div class="menu-proyectos">
                                <div class="submenu-proyectos">
                                    <div class="titulo-proyecto">
                                        <h1>Proyecto <?php echo $x + 1; ?>:<span style="font-size: 16px;">
                                                <?php
                                                echo $vectorNombresProyectos[$x];
                                                ?></span></h1>
                                    </div>
                                    <div class="mas-proyecto">
                                        <input type="checkbox" class="checs" id="check<?php echo $x + 2000; ?>" name="menu">
                                        <label for="check<?php echo $x + 2000; ?>">
                                            <i id="plus<?php echo $x + 2000; ?>" class="far fa-plus-square"></i>
                                            <i id="neg<?php echo $x + 2000; ?>" class="far fa-minus-square" style="display: none;"></i>
                                        </label>
                                    </div>
                                    <div id="lista<?php echo $x + 2000; ?>" class="lista-proyectos" style="display: none;">
                                        <?php
                                        for ($y = 0; $y < 1; $y++) { ?>
                                            <div class="links">
                                                <div class="contenedorconteo1">
                                                    <?php
                                                    $textAsunto = "Hola. Me gustaría que resolvieran las siguientes dudas de mi proyecto " . $vectorNombresProyectos[$x] . " del paso " . ($y + 1) . ": >>" . $superVecDesp[$x][$y] . "<< " . "Proyecto id# " . $vectorIdProyectos[$x];
                                                    $asunto = str_replace(' ', '%20', $textAsunto);
                                                    $vectorNombresProyectos[$x] = str_replace('&', 'y', $vectorNombresProyectos[$x]);
                                                    $cuerpo = "Lista de dudas: ";
                                                    $cuerpo = str_replace(' ', '%20', $cuerpo);
                                                    $xend = 0;
                                                    $auxxend = 0;

                                                    ?>
                                                    <?php for ($f = 0; $f < sizeof($superVecIdProyectoPago[$x]); $f++) {
                                                        if ($superVecTokenpagoPago[$x][$f] != '' && $supervectokenConekta[$x][$f] != '' && $supervecforTarget[$x][$f] != 0 && $supervecfechapagoPago != '') {
                                                    ?>
                                                            <a href="pago.php?pago=<?php echo $superVecTokenContratoPago[$x][$f] . '-' . $superVecIdPago[$x][$f]; ?>" >
                                                                <p>
                                                                    Contrato (#<?php
                                                                    echo $superVecTokenContratoPago[$x][$f];
                                                                    ?>) <br> 
                                                                    Periodo de contrato: <?php

                                                                                        echo $auxxend . $supervecfechaIniciopago[$x][$f] . ' a ' . $supervecfechaFinpago[$x][$f];
                                                                                        ?>: <i class="fas fa-caret-right"></i> <?php echo  'Pagado' ?></Contrato><?php
                                                                                                                            $auxxend++;
                                                                                                                        } else { ?> <p><?php
                                                                                                                            $xend++;
                                                                                                                            // echo $xend. ' <- '. $auxxend;
                                                                                                                            if ($f == (sizeof($superVecIdProyectoPago[$x])) - 1) {
                                                                                                                                if ($auxxend == 0) {
                                                                                                                                    echo 'Sin historial de pagos';
                                                                                                                                }
                                                                                                                            }
                                                                                                                        } ?></p>
                                                            </a><?php
                                                            }
                                                                ?>


                                                        <ul class="clearfix">
                                                            <?php

                                                            ?>

                                                        </ul>

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
                            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Contratos</h1>
                        </div><?php
                        for ($x = 0; $x < $contadorProyectos; $x++) {?>
                            <div class="menu-proyectos">
                                <div class="submenu-proyectos">
                                    <div class="titulo-proyecto">
                                    <h1 class="<?php
                                        // for ($i = 0; $i < sizeof($superVecIdProyectoPago); $i++) {
                                        //     $contadorpagos1 = 0;
                                        //     for ($y = 0; $y < sizeof($superVecIdProyectoPago[$i]); $y++) {
                                        //         if ($vectorIdProyectos[$x] == $superVecIdProyectoPago[$i][$y]) {
                                        //             if ($supervecforTarget[$i][$y] == 0 || $supervectokenConekta[$i][$y] == '') {
                                        //                 $contadorpagos1++;
                                        //             }
                                        //             if ($y == (sizeof($superVecIdProyectoPago[$i]) - 1)) {
                                        //                 if ($contadorpagos1 >= 1) {
                                        //                     echo 'blinkama';
                                        //                 } else {
                                        //                     echo '';
                                        //                 }
                                        //             }
                                        //         }
                                        //     }
                                        // }
                                        ?>">Proyecto <?php echo $x + 1; ?>:<span style="font-size: 16px;">
                                        <?php
                                        echo $vectorNombresProyectos[$x];

                                        // for ($i = 0; $i < sizeof($superVecIdProyectoPago); $i++) {
                                        //     $contadorpagos1 = 0;
                                        //     for ($f = 0; $f < sizeof($superVecIdProyectoPago[$i]); $f++) {
                                        //         if ($vectorIdProyectos[$x] == $superVecIdProyectoPago[$i][$f]) {
                                        //             if ($supervecforTarget[$i][$f] == 0 || $supervectokenConekta[$i][$f] == '') {
                                        //                 $contadorpagos1++;
                                        //             }
                                        //             if ($f == (sizeof($superVecIdProyectoPago[$i]) - 1)) {
                                        //                 if ($contadorpagos1 > 1) {
                                        //                     echo ' (' . $contadorpagos1 . ') Pagos Pendientes';
                                        //                 } elseif ($contadorpagos1 == 1) {
                                        //                     echo ' (' . $contadorpagos1 . ') Pago Pendiente';
                                        //                 } else {
                                        //                     echo '';
                                        //                 }
                                        //             }
                                        //         }
                                        //     }
                                        // }



                                    ?></span></h1>
                                    </div>
                                    <div class="mas-proyecto">
                                        <input type="checkbox" class="checs" id="check<?php echo $x + 3000; ?>" name="menu">
                                        <label for="check<?php echo $x + 3000; ?>">
                                            <i id="plus<?php echo $x + 3000; ?>" class="far fa-plus-square"></i>
                                            <i id="neg<?php echo $x + 3000; ?>" class="far fa-minus-square" style="display: none;"></i>
                                        </label>
                                    </div>
                                    <div id="lista<?php echo $x + 3000; ?>" class="lista-proyectos" style="display: none;">
                                        <?php
                                        for ($y = 0; $y < 1; $y++) { ?>
                                            <div class="links">
                                                <div class="contenedorconteo1">
                                                    <?php
                                                    $xend = 0;
                                                    $auxxend = 0;
                                                    $auxSuper = '';
                                                    ?>
                                                    <?php 
                                                    for ($f = 0; $f < sizeof($superVecIdProyectoPago[$x]); $f++) {
                                                       if($superVecTokenContratoPago[$x][$f] != $auxSuper){
                                                    ?>
                                                            <a href="contrato.php#<?php echo $superVecTokenContratoPago[$x][$f]; ?>" target="_blank">
                                                                <p>Contrato (#<?php
                                                                    echo $superVecTokenContratoPago[$x][$f];
                                                                    ?>) <br> Periodo de contrato:
                                                                    <?php
                                                                        echo $supervecfechaIniciopago[$x][$f] . ' a ' . $supervecfechaFinpago[$x][$f];
                                                                    ?>
                                                                    <i class="fas fa-caret-right"></i> <?php echo  'Ver contrato'
                                                                ?>
                                                                </p>
                                                                <?php
                                                                $auxxend++;
                                                            ?>
                                                            </p>
                                                            </a>
                                                        <?php
                                                        }
                                                        $auxSuper = $superVecTokenContratoPago[$x][$f];
                                                    }
                                                        ?>

                                                        <ul class="clearfix">
                                                            <?php
                                                            ?>
                                                        </ul>
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