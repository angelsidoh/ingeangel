<?php
session_start();
require_once("bin/conekta-php-master/lib/Conekta.php");
\Conekta\Conekta::setApiKey("key_eYvWV7gSDkNYXsmr");
\Conekta\Conekta::setApiVersion("2.0.0");


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

        for ($x = 0; $x < $posicion_coincidencia; $x++) {
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
        // var_dump($superVecIdProyectoPago);
        // echo '</pre>';
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
                // echo (($superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . '$' . $superVecIdProyectoPago[$x][$y]) .'<->'.($_GET['pago']).'<br>');
                if (($superVecTokenContratoPago[$x][$y] . '-' . $superVecIdPago[$x][$y] . '$' . $superVecIdProyectoPago[$x][$y]) == ($_GET['pago'])) {
                    $direccionx = $x;
                    $direcciony = $y;
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
      
            $cuenta = (($precioDominio + $precioHosting + $precioBD + $precioProgramacion + $precioMantenimiento) * $superVecContMesesPago[$direccionx][$direcciony]);
            $cuenta = $cuenta + ($cuenta * .16);
            // echo  '$' . $cuenta . '.00 MXN';
        
        // if ($vectorTipoProyectos[$direccionProyecto] == 'Paquete Negocio') {
        //     echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioNegocio + $precioMantenimiento)* $superVecContMesesPago[$direccionx][$direcciony]) . '.00 MXN';
        // }
        // if ($vectorTipoProyectos[$direccionProyecto] == 'Paquete Profesional') {
        //     echo  '$' . number_format(($precioDominio + $precioHosting + $precioBD + $precioProfesional + $precioMantenimiento)* $superVecContMesesPago[$direccionx][$direcciony]) . '.00 MXN';
        // }

        $cp = (string)$cp;

        $rep  = 1;
        $modu = $cuenta % 10000;
        //  echo'<br>'.
        $modu = $modu * .0001;
        $reps = $cuenta / 10000;
        // echo '<br>'.
        $reps = bcdiv($reps, '1', 4);
        // echo '<br>'.
       $reps = (($reps - $modu) + 1);
        for ($s = 0; $s < $reps; $s++) {
           
            if ($cuenta >= 10000) {
                $rep++;
                //    echo '<br>'.
               $cuenta = $cuenta - 10000;
            }
           



            # code...
            // echo '<br>--->' . $s . $reps . '<br> ';
            // $operacion = $cuenta*100;
            // echo '<br>-->'.$operacion;
            // echo $superVecIdPago[$direccionx][$direcciony];
            if ($s != $reps - 1) {
               
                for ($x = 1; $x < $rep ; $x++) {
                   $operacion = 10000 * 100;
                }
            }
           
          
           $resultadosreps = $reps - 1;
           intval($resultadosreps);
            if ($s == (intval($resultadosreps))) {
                $operacion = intval($cuenta * 100);
            }
         

            $name = $usuario . ' ' . $apellidos;
            $direccion_usuario = $calle . ' #' . $numie . ' Colonia: ' . $col;
            date_default_timezone_set('America/Mexico_City');
            $fechaini =  date('Y-m-d H:i:s');




            try {
                require('bd/bd.php');
                require('bd/bdsqli.php');


                $stmt = $conn->prepare('SELECT * FROM pagoparts WHERE tokencontrato_pagoparts = :tokencontrato_pagoparts LIMIT 1');
                $stmt->execute(array(':tokencontrato_pagoparts' => $superVecTokenContratoPago[$direccionx][$direcciony] . '-' . $s . $superVecIdPago[$direccionx][$direcciony]));
                $resultado = $stmt->fetch();
                if ($resultado != false) {
                    
                    ?>
                     
        
        <script type="text/javascript">
window.location="partstikeds?pago=<?php echo $_GET['pago']?>#abcdef";
</script>
      
     


    <?php

                } else {
                   
                    try {
                        $thirty_days_from_now = (new DateTime())->add(new DateInterval('P30D'))->getTimestamp();

                        $order = \Conekta\Order::create(
                            [
                                "line_items" => [
                                    [
                                        "name" =>  'Contrato: (' . ($superVecTokenContratoPago[$direccionx][$direcciony] . '-' . $superVecIdPago[$direccionx][$direcciony]) . ') ' . 'Y Servicios varios del Proyecto (' . $vectorNombresProyectos[$direccionProyecto] . ').',
                                        "unit_price" => $operacion,
                                        "quantity" => 1
                                    ]
                                ],
                                "shipping_lines" => [
                                    [
                                        "amount" => 0,
                                        "carrier" => "FEDEX"
                                    ]
                                ], //shipping_lines - physical goods only
                                "currency" => "MXN",
                                "customer_info" => [
                                    "name" => $name,
                                    "email" => $email,
                                    "phone" => $tel
                                ],
                                "shipping_contact" => [
                                    "address" => [
                                        "street1" => $direccion_usuario,
                                        "postal_code" => $cp,
                                        "country" => "MX"
                                    ]
                                ], //shipping_contact - required only for physical goods
                                "charges" => [
                                    [
                                        "payment_method" => [
                                            "type" => "oxxo_cash",
                                            "expires_at" => $thirty_days_from_now
                                        ]
                                    ]
                                ]
                            ]
                        );
                      
                    } catch (\Conekta\ParameterValidationError $error) {
                        echo $error->getMessage();
                    } catch (\Conekta\Handler $error) {
                        echo $error->getMessage();
                    }
                    $stmt = $conn->prepare('INSERT INTO pagoparts (id_pagoparts, idpago_pagoparts, tokencontrato_pagoparts, fecha_pagoparts, order_pagoparts, orderstatus_pagoparts, idconekta_pagoparts, monto_pagoparts) VALUES (null, :idpago_pagoparts, :tokencontrato_pagoparts, :fecha_pagoparts, :order_pagoparts, :orderstatus_pagoparts, :idconekta_pagoparts, :monto_pagoparts)');
                    $stmt->execute(array(
                        ':idpago_pagoparts' =>  $superVecIdPago[$direccionx][$direcciony]."oxxo",
                        ':tokencontrato_pagoparts' => $superVecTokenContratoPago[$direccionx][$direcciony] . '-' . $s . $superVecIdPago[$direccionx][$direcciony],
                        ':fecha_pagoparts' => $fechaini,
                        ':order_pagoparts' =>  $order->charges[0]->payment_method->reference,
                        ':orderstatus_pagoparts' => $order->payment_status,
                        ':idconekta_pagoparts' => $order->id,
                        ':monto_pagoparts' => $operacion

                    ));
                    $orderx = $order->id;
                    $stmt = $connf->prepare("UPDATE pagos SET idconekta_pago = ? WHERE id_pago = ?");
                    $stmt->bind_param("si", $orderx ,$superVecIdPago[$direccionx][$direcciony]);
                    $stmt->execute();
                    $stmt->close();
                    $connf->close();
    ?>
        <!-- <html>

        <head>
            <link href=" business/styles.css" media="all" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        </head>

        <body>
            <div class="opps">
                <div class="opps-header">
                    <div class="opps-reminder">Ficha digital. No es necesario imprimir.</div>
                    <div class="opps-info">
                        <div class="opps-brand"><img src="business/oxxopay_brand.png" alt="OXXOPay"></div>
                        <div class="opps-ammount">
                            <h3>Monto a pagar</h3>
                            <h2><?php echo "$" . $order->amount / 100; ?><sup>MXN</sup></h2>
                            <p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
                        </div>
                    </div>
                    <div class="opps-reference">
                        <h3>Referencia</h3>
                        <h1><?php

                            // echo $order->charges[0]->payment_method->reference;
                           echo  $refrenciasoxxo[$u];
                            // for ($u = 0; $u < $tamanio; $u++) {
                            //     echo '..' . $refrenciasoxxo[$u];
                            //     if ($u == 3) {
                            //         echo '-';
                            //     }
                            //     if ($u == 7) {
                            //         echo '-';
                            //     }
                            //     if ($u == 11) {
                            //         echo '-';
                            //     }
                            // }
                            ?></h1>
                    </div>
                </div>
                <div class="opps-instructions">
                    <h3>Instrucciones</h3>
                    <ol>
                        <li>Acude a la tienda OXXO más cercana. <a href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
                        <li>Indica en caja que quieres realizar un pago de <strong>OXXOPay</strong>.</li>
                        <li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
                        <li>Realiza el pago correspondiente con dinero en efectivo.</li>
                        <li>Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
                    </ol>
                    <div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
                </div>
            </div>
        </body>

        </html> -->
<?php
                }
            } catch (PDOException $e) {
                echo json_encode("Error: " . $e->getMessage());
            }
            $refrenciasoxxo = $order->charges[0]->payment_method->reference;
            $tamanio = strlen($refrenciasoxxo);
            // echo $order . '<br><br>';
                if($s== $reps-1){
                   
                    
                }
            }
        }
        
        ?>
        
                                    <script type="text/javascript">
window.location="partstikeds?pago=<?php echo $_GET['pago']?>#abcdef";
</script>
       
    
