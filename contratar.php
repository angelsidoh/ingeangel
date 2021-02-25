<?php

require 'includes/templates/header.php';
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email'])) && (!isset($_SESSION['token']))) {
    echo 'formulario sin registro';
    echo $_GET["paquete"];
?>
    <div class="contenedorf">
        <?php
        echo 'none user';
        ?>
    </div>
    <div class="contenedor-formulario">
        <div class="titulo-seccion">
            <h1 id="sparklemaster" class="sparklemaster" style="color: #93a9cc;">Nuevo Proyecto</h1>
        </div>
        <div class="icono-formulario">
            <i class="fas fa-folder-plus"></i>
        </div>
        <form id="registro" action="#">
            <div class="normal_tarjeta">

                <p>¿Qué pasa si envió este formulario?</p>
                <p>Tendrá una cuenta de acceso a ingeangel.com.</p>
                <p>Se enviará una contraseña al correo que ingrese, para poder acceder a la cuenta. (Si no llega el correo revise la bandeja de correos no deseados o póngase en contacto con ingeangel.com). </p>
                <p>Agendaremos una cita (vía telefónica o por correo) para definir detalles de su proyecto como el nombre del sitio web</p>
                <p>Además podremos enviarle el primer contrato para su propia revisión.</p>
                <h3>Datos del Cliente</h3>
                <div class="input_grid1">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresé su(s) nombre(s)" value="José Angel">
                </div>
                <div class="input_grid1">
                    <input type="text" id="apellido" name="apellido" placeholder="Ingresé su Apellido" value="Ruiz Chávez">
                </div>
                <div class="input_grid1">
                    <input type="text" id="telefono" name="telefono" placeholder="Ingresé su Teléfono Celular/WhatsApp" value="4521114455">
                </div>
                <div class="input_grid1">
                    <input type="text" id="correo" name="correo" placeholder="Ingresé su Correo Electrónico" value="angel._ruiz@hotmail.com">
                </div>

                <h3>Dirección</h3>
                <div class="input_grid2">
                    <input type="text" id="calle" name="calle" placeholder="Calle" value="San José de la Mina">
                    <input type="text" id="numiedirec" name="numiedirec" placeholder="#Int/Ext" value="42">
                </div>
                <div class="input_grid2">
                    <input type="text" id="col" name="col" placeholder="Colonia" value="San José de la Mina">
                    <input type="text" id="postal" name="postal" placeholder="C.P." value="60125">
                </div>
                <!-- <h3>Datos de la empresa</h3>
                <div class="input_grid1">
                    <input type="text" id="empresa" name="empresa" placeholder="Nombre de su empresa">
                </div>
                <div class="input_grid1">
                    <input type="text" id="domi" name=domi placeholder="Ingresé el nombre del sitio web deseado (Opcional)">
                </div>
                <h3>Datos de facturación</h3>
                <h4>Dirección de facturación</h4>
                <div class="input_grid2">
                    <input type="text" id="calle" name="calle" placeholder="Calle (Opcional)">
                    <input type="text" id="numiedirec" name="numiedirec" placeholder="#Int/Ext ">
                </div>
                <div class="input_grid2">
                    <input type="text" id="col" name="col" placeholder="Colonia (Opcional)">
                    <input type="text" id="postal" name="postal" placeholder="C.P.">
                </div>
                <?php if (!empty($errores)) : ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="recordatorio">
                    <p>Llenar los datos de facturación solo en caso de requerirlo</p>
                    
                </div> -->
                <h3>Pedido</h3>
                <div class="input_grid1">
                    <input type="text" id="paquete" name="paquete" placeholder="Tipo de Paquete" value="<?php
                                                                                                        if (!isset($_GET["paquete"])) {
                                                                                                            echo "¿Cual Servicio desea?, ¿Paquete Básico?, ¿Paquete Negocio?, ¿Paquete Profesional?";
                                                                                                        } else {
                                                                                                            if ($_GET["paquete"] == 1) {
                                                                                                                echo "Paquete Básico";
                                                                                                            } else if ($_GET["paquete"] == 2) {
                                                                                                                echo "Paquete Negocio";
                                                                                                            } else if ($_GET["paquete"] == 3) {
                                                                                                                echo "Paquete Profesional";
                                                                                                            }
                                                                                                        }
                                                                                                        ?>">
                </div>
                <div class="input_grid1">
                    <input type="text" id="fecha" name="fecha" placeholder="Fecha" value="<?php
                                                                                            date_default_timezone_set('America/Mexico_City');
                                                                                            echo date('Y-m-d H:i:s');
                                                                                            ?>" disabled>
                </div>
                <p>¿Tienes dudas sobre como iniciar tu proyecto nuevo? Contacta a: <a href="mailto:infoingeangel@gmail.com">infoingeangel@gmail.com</a>
                </p>
            </div> <!-- rnormal__tarjeta -->
            <div class="sub-boton">
                <input id="btnregcuenta1" type="submit" value="regcuenta1" class="button">

            </div>

        </form>
    </div>
    <div class="contenedor-gradiente">
        <div class="tamanio-final">
        </div>
    </div>
<?php
} else {
    require_once('includes/funciones/consultas.php');
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
        // echo '<pre>';
        // var_dump($vectorPrecioProyectos);
        // echo '</pre>';
        // echo '<pre>';
        // var_dump($supervecforTarget);
        // echo '</pre>';
        // $lastnum = str_pad($supervecforTarget[1][4], 4, "0", STR_PAD_LEFT);
        // echo  $lastnum;
        // $direccionx = 0;
        // $direcciony = 0;
        // $direccionProyecto = 0;
        // for ($x = 0; $x < sizeof($superVecIdPago); $x++) {
        //     for ($y = 0; $y < sizeof($superVecIdPago[$x]); $y++) {

        //         if (($superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y]) == $_GET['pago']) {
        //             $direccionx = $x;
        //             $direcciony = $y;
        //             // echo $_GET['pago'] . '(' . $superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . ')';
        //         }
        //     }
        // }
        // for ($x = 0; $x < sizeof($vectorIdProyectos); $x++) {
        //     // echo '<br>'.$superVecIdProyectoPago[$direccionx][$direcciony].'.'.$vectorIdProyectos[$x];
        //     if (($superVecIdProyectoPago[$direccionx][$direcciony]) == $vectorIdProyectos[$x]) {
        //         // echo 'hola';
        //         $direccionProyecto = $x;
        //     }
        // }
        // echo $superVecIdProyectoPago[$direccionx][$direcciony];

        // echo '<pre>';
        // var_dump($vectorIdProyectos);
        // echo '</pre>';
        // echo $email;
    
    
?>
    <div class="contenedorf">
        <?php
        // echo ($_SESSION['token']);

        // echo ($_SESSION['ip']);
        ?>
    </div>
    <div class="contenedor-formulario">
        <div class="titulo-seccion">
            <h1 id="sparklemaster" class="sparklemaster" style="color: #93a9cc;">Nuevo Proyecto</h1>
        </div>
        <div class="icono-formulario">
            <i class="fas fa-folder-plus"></i>
        </div>
        <form id="registro" action="#">
            <div class="normal_tarjeta">

                <h3>¡Gracias por tu preferencia! <?php echo $_SESSION['usuario'];?></h3>
                <!-- <h3>Datos del Propietario/Cliente</h3>
                <div class="input_grid1">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresé su(s) nombre(s)">
                </div>-->
                <div style="display: none;" class="input_grid1">
                    <input type="text" id="precio" name="precio" placeholder="Ingresé su Apellido" value="<?php
                      if ($_GET["paquete"] == 1) {
                        echo ($precioDominio + $precioHosting + $precioBD + $precioBasico + $precioMantenimiento);
                    }
                    if ($_GET["paquete"] == 2) {
                        echo ($precioDominio + $precioHosting + $precioBD + $precioNegocio + $precioMantenimiento);
                    }
                    if ($_GET["paquete"] == 3)  {
                        echo ($precioDominio + $precioHosting + $precioBD + $precioProfesional + $precioMantenimiento);
                    }
                    ?>">
                </div>
                <div class="input_grid1">
                    <input type="text" id="telefono" name="telefono" placeholder="Ingresé su Teléfono Celular/WhatsApp" value="<?php echo $tel;?>" disabled>
                </div>
                <div class="input_grid1">
                    <input type="text" id="correo" name="correo" placeholder="Ingresé su Correo Electrónico" value="<?php echo $email;?>"disabled>
                </div>
               
                <!-- <h3>Dirección</h3>
                <div class="input_grid2">
                    <input type="text" id="calle" name="calle" placeholder="Calle">
                    <input type="text" id="numiedirec" name="numiedirec" placeholder="#Int/Ext">
                </div>
                <div class="input_grid2">
                    <input type="text" id="col" name="col" placeholder="Colonia">
                    <input type="text" id="postal" name="postal" placeholder="C.P.">
                </div> 
                 <h3>Datos de la empresa</h3>
                <div class="input_grid1">
                    <input type="text" id="empresa" name="empresa" placeholder="Nombre de su empresa">
                </div>
                <div class="input_grid1">
                    <input type="text" id="domi" name=domi placeholder="Ingresé el nombre del sitio web deseado (Opcional)">
                </div>
                <h3>Datos de facturación</h3>
                <h4>Dirección de facturación</h4>
                <div class="input_grid2">
                    <input type="text" id="calle" name="calle" placeholder="Calle (Opcional)">
                    <input type="text" id="numiedirec" name="numiedirec" placeholder="#Int/Ext ">
                </div>
                <div class="input_grid2">
                    <input type="text" id="col" name="col" placeholder="Colonia (Opcional)">
                    <input type="text" id="postal" name="postal" placeholder="C.P.">
                </div>
                <?php if (!empty($errores)) : ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="recordatorio">
                    <p>Llenar los datos de facturación solo en caso de requerirlo</p>
                    
                </div> -->
                <h3>Pedido</h3>
                <div class="input_grid1">
                    <input type="text" id="paquete" name="paquete" placeholder="Tipo de Paquete" value="<?php
                        if (!isset($_GET["paquete"])) {
                            echo "No es seleccionado ningún Paquete";
                        } else {
                            if ($_GET["paquete"] == 1) {
                                echo "Paquete Básico";
                            } else if ($_GET["paquete"] == 2) {
                                echo "Paquete Negocio";
                            } else if ($_GET["paquete"] == 3) {
                                echo "Paquete Profesional";
                            }
                        }
                        ?>">
                </div>
                <div class="input_grid1">
                <input type="text" id="fecha" name="fecha" placeholder="Fecha" value="<?php
                                                                                            date_default_timezone_set('America/Mexico_City');
                                                                                            echo date('Y-m-d H:i:s');
                                                                                            ?>" disabled>
                </div>
                <p>¿Tienes dudas sobre como iniciar tu proyecto nuevo? Contacta a: <a href="mailto:infoingeangel@gmail.com">infoingeangel@gmail.com</a>
                </p>
            </div> <!-- rnormal__tarjeta -->
            <div class="sub-boton">
            <input id="btnregcuenta1" type="submit" value="Nuevo Proyecto" class="button">
            </div>
        </form>
    </div>
    <div class="contenedor-gradiente">
        <div class="tamanio-final">
        </div>
    </div>
<?php
}
require 'includes/templates/footer.php';

?>



<!-- Tengo la idea de que los usuarios hagan una activacion de su cuenta como
se debe asi todo estaría en regla para las cuentas.
 -->