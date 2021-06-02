
<?php 
// echo ' hey';
$monto = '0';
$cadena_de_texto = $_GET['ref'];
$cadena_buscada   = 'm';
$posicion_coincidencia1 = strpos($cadena_de_texto, $cadena_buscada);
$posaux = strlen($cadena_de_texto);
// echo $posaux;
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia1 === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;

    for ($x = $posicion_coincidencia1+1; $x < $posaux; $x++) {
        //  $cadena_de_texto[$x];
         $monto .= $cadena_de_texto[$x];
        $tamanio = strlen($refrenciasoxxo);
    }
}
$posaux =  $posicion_coincidencia1;
$refrenciasoxxo = '';
$cadena_de_texto = $_GET['ref'];
$cadena_buscada   = 'x';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);


// echo $posaux;
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;

    for ($x = $posicion_coincidencia+1; $x < $posaux; $x++) {
        //  $cadena_de_texto[$x];
         $refrenciasoxxo .= $cadena_de_texto[$x];
        $tamanio = strlen($refrenciasoxxo);
    }
}
?>
<html>

        <head>
            <link href="business/styles.css" media="all" rel="stylesheet" type="text/css" />
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        </head>

        <body>
            <div class="opps">
                <div class="opps-header">
                    <div class="opps-reminder">Ctrl + P para imprimir en caso de ser nesesario.</div>
                    <div class="opps-info">
                        <div class="opps-brand"><img src="business/oxxopay_brand.png" alt="OXXOPay"></div>
                        <div class="opps-ammount">
                            <h3>Monto a pagar</h3>
                            <h2><?php echo "$" . $monto / 100; ?><sup>MXN</sup></h2>
                            <p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
                        </div>
                    </div>
                    <div class="opps-reference">
                        <h3>Referencia</h3>
                        <h1><?php

                            // echo $order->charges[0]->payment_method->reference;
                            for ($u = 0; $u < $tamanio; $u++) {
                                echo $refrenciasoxxo[$u];
                                if ($u == 3) {
                                    echo '-';
                                }
                                if ($u == 7) {
                                    echo '-';
                                }
                                if ($u == 11) {
                                    echo '-';
                                }
                            }
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

        </html>