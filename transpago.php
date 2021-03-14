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
        echo '<pre>';
        var_dump($superVecIdProyectoPago);
        echo '</pre>';
        // echo '<pre>';
        // var_dump(   $superVecIdPago);
        // echo '</pre>';
        // $lastnum = str_pad($supervecforTarget[1][4], 4, "0", STR_PAD_LEFT);
        // echo  $lastnum;
        $direccionx = 0;
        $direcciony = 0;
        $direccionProyecto = 0;
        for ($x = 0; $x < sizeof($superVecIdPago); $x++) {
            for ($y = 0; $y < sizeof($superVecIdPago[$x]); $y++) {
                echo (($superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . '$' . $superVecIdProyectoPago[$x][$y]) .'<->'.($_GET['pago']).'<br>');
                if (($superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . '$' . $superVecIdProyectoPago[$x][$y]) == ($_GET['pago'])) {
                    echo '<br>'.$direccionx = $x;
                    echo $direcciony = $y;
                    echo 'hola'. $superVecContMesesPago[$direccionx][$direcciony].'<br>';
                   
                }
            }
        }
        for ($x = 0; $x < sizeof($vectorIdProyectos); $x++) {
            // echo '<br>'.$superVecIdProyectoPago[$direccionx][$direcciony].'<.>'.$vectorIdProyectos[$x];
            if (($superVecIdProyectoPago[$direccionx][$direcciony]) == $vectorIdProyectos[$x]) {
                // echo 'hola';
                // echo $superVecIdProyectoPago[$direccionx][$direcciony];
                $direccionProyecto = $x;
            }
        }
        // echo '<br> ->'.$superVecIdProyectoPago[$direccionx][$direcciony];
        // echo '<br> ->'.$superVecIdPago[$direccionx][$direcciony];
        // echo '<pre>';
        // var_dump( $superVecContMesesPago);
        // echo '</pre>';

            ?>
        <title>Pago con Tarjeta</title>
        <?php require('includes/funciones/perfil.php'); ?>

        <script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
        <div class="contenedor-especial">
            <div class="titulo-seccion">
                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Pagos Targeta crédito o débito.</h1>
            </div>
            <div class="datos-usuario">
                <form id="card-form">

                    <div class="contenido-pago">

                        <div class="dato1">

                            <input  data-conekta="card[name]" class="form-control" name="name" id="name" type="text" value="JOSÉ ANGEL RUIZ CHÁVEZ">
                        </div>
                        <div class="text-dato1">
                            <p>Nombre de titular de la cuenta.</p>
                        </div>
                        <div class="dato22">

                            <input value="" name="card" id="card" data-conekta="card[number]" class="form-control" type=" text" maxlength="16">

                        </div>
                        <div class="text-dato2">
                            <p>Número de Tarjeta:</p>
                        </div>



                        <div class="dato3">

                            <input style="width:60px; display:inline-block; " value="" data-conekta="card[cvc]" class="form-control" type="text" maxlength="4">
                        </div>
                        <div class="text-dato3">
                            <p>CVC:</p>
                        </div>
                        <div class="dato4">

                            <input style="width:50px; display:inline-block;" value="" data-conekta="card[exp_month]" class="form-control" type=" text" maxlength="2">
                            <input style="width:50px; display:inline-block;" value="" data-conekta="card[exp_year]" class="form-control" type=" text" maxlength="2">
                        </div>
                        <div class="text-dato4">
                            <p> Fecha de expiración (MM/AA):</p>
                        </div>


                        <div class="dato55">

                            <input class="form-control" type="text" name="email" id="email" maxlength="200" value="<?php echo $_SESSION['email'];?>">
                        </div>
                        <div class="text-dato55">
                            <p>Email</p>
                        </div>
                        <div class="dato66">

                            <input class="form-control" type="text" name="description" id="description" maxlength="100" value="<?php echo 'Contrato: (' . ($superVecTokenContratoPago[$direccionx][$direcciony] . '-' . $superVecIdPago[$direccionx][$direcciony]) . ') ' . $vectorTipoProyectos[$direccionProyecto] . ' y Servicios varios (' . $vectorNombresProyectos[$direccionProyecto] . ').'; ?>">
                        </div>

                        <div class="text-dato66">
                            <p>Concepto</p>

                        </div>
                        <div class="dato77">

                            <input class="form-control" type="text" value="<?php
                            if ($vectorTipoProyectos[$direccionProyecto] == 'Paquete Básico') {
                                echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioBasico + $precioMantenimiento)* $superVecContMesesPago[$direccionx][$direcciony]) . '.00 MXN';
                            }
                            if ($vectorTipoProyectos[$direccionProyecto] == 'Paquete Negocio') {
                                echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioNegocio + $precioMantenimiento)* $superVecContMesesPago[$direccionx][$direcciony]) . '.00 MXN';
                            }
                            if ($vectorTipoProyectos[$direccionProyecto] == 'Paquete Profesional') {
                                echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioProfesional + $precioMantenimiento)* $superVecContMesesPago[$direccionx][$direcciony]) . '.00 MXN';
                            }
                            ?>">
                        </div>
                        <div class="dato777">

                            <input style="display:none;" class="form-control" type="text" name="total" id="total" value="
                            <?php
                            if ($vectorTipoProyectos[$direccionProyecto] == 'Paquete Básico') {
                                echo (($precioDominio + $precioHosting + $precioBD + $precioBasico + $precioMantenimiento)* $superVecContMesesPago[$direccionx][$direcciony]);
                            }
                            if ($vectorTipoProyectos[$direccionProyecto] == 'Paquete Negocio') {
                                echo (($precioDominio + $precioHosting + $precioBD + $precioNegocio + $precioMantenimiento)* $superVecContMesesPago[$direccionx][$direcciony]);
                            }
                            if ($vectorTipoProyectos[$direccionProyecto] == 'Paquete Profesional') {
                            echo (($precioDominio + $precioHosting + $precioBD + $precioProfesional + $precioMantenimiento)* $superVecContMesesPago[$direccionx][$direcciony]) ;
                            }
                            ?>">
                        </div>
                        <div class="dato7777">

                            <input style="display:none;" class="form-control" type="text" name="idex" id="idex" value="<?php echo $superVecIdPago[$direccionx][$direcciony]; ?>">
                        </div>
                        
                        <div class="text-dato77">
                            <p>Monto</p>

                        </div>
                        <div class="sub-boton">
                            <input id="pagar" type="submit" value="Pagar" class="button">
                        </div>
                    </div>
                    <br>

            </div>
            <input type="hidden" name="conektaTokenId" id="conektaTokenId" value="">
            </form>
        </div>
    <?php
}
require 'includes/templates/footer.php';
    ?>
    <script>
        Conekta.setPublicKey("key_eYvWV7gSDkNYXsmr");

        var successResponseHandler = function(token) {
            var $form = ("#card-form");

            $("#conektaTokenId").val(token.id);

            jsPay();
        };
        var errorResponseHandler = function(response) {
            var $form = $("#card-form");

            swal({
                content: "",
                text: response.message_to_purchaser,
                icon: "error",
                button: {
                    text: "Continuar",
                    closeModal: true,
                },
            }).then((value) => {
                switch (value) {
                    default:
                        location.reload();
                }
            });

        };

        $(document).ready(function() {
            $("#card-form").submit(function(e) {
                e.preventDefault();
                var $form = $("#card-form");
                console.log($form);
                Conekta.Token.create($form, successResponseHandler, errorResponseHandler);
            });
        });

        function jsPay() {

            let params = $("#card-form").serialize();
            let url = "pay.php";

            $.post(url, params, function(data) {
                if (data == 1) {
                    swal({
                        content: "",
                        text: "¡Gracias por su preferencia! Su pago fue realizado, y se verá reflejado en el historial de pagos.",
                        icon: "success",
                        button: {
                            text: "Continuar",
                            closeModal: true,
                        },
                    }).then((value) => {
                        switch (value) {
                            default:
                                window.location.href = 'cuenta.php#angel-ruiz';
                        }
                    });
                    jsClean();
                } else {
                    swal({
                        content: "",
                        text: data,
                        icon: "error",
                        button: {
                            text: "Continuar",
                            closeModal: true,
                        },
                    }).then((value) => {
                        switch (value) {
                            default:
                                location.reload();
                        }
                    });
                }
            });
        }

        function jsClean() {
            $(".form-control").prop("value", "");
            $("#conektaTokenId").prop("values", "");
        }
    </script>