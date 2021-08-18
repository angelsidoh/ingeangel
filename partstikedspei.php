<?php
require 'includes/templates/header.php';
require_once('includes/funciones/consultas.php');

$tikeds = obtenerTikeds();
//var_dump($tikeds); 
$cadena_de_texto = $_GET['pago'];
$cadena_buscada   = '$';
$posicion_coincidencia1 = strpos($cadena_de_texto, $cadena_buscada);

//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia1 === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
}

$idrelacion = '';
$cadena_de_texto = $_GET['pago'];
$cadena_buscada   = '-';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);

//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;

    for ($x = $posicion_coincidencia+1; $x < $posicion_coincidencia1; $x++) {
        //  $cadena_de_texto[$x];
        $idrelacion .= $cadena_de_texto[$x];
    }
}

?>
<div class="titulo-seccion">
    <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Pagos por SPEI Generados</h1>
</div>
<div class="content_tikedsoxxo">
    <?php
    $contadortiked = 0;
    if ($tikeds->num_rows) {
        foreach ($tikeds as $tiked) {
           
            // echo '<br>' .$idrelacion . '-' . $tiked['idpago_pagoparts'];
            $condicion0 = $idrelacion."spei";
            // echo '<br>' .$condicion0. '-' . $tiked['idpago_pagoparts'];
            if ($condicion0 == $tiked['idpago_pagoparts']) {
                $contadortiked++;
    ?>
                <a href="javascript:window.open('imprimirspei?ref=x<?php echo $tiked['order_pagoparts'].'m'. $tiked['monto_pagoparts']; ?>','popup','top=100, left=100, width=599, height=820');">
                    <div class="tikedoxxo">
                        <div class="part">
                            <p><?php echo $contadortiked; ?></p>
                        </div>
                        <div class="part">
                            <p><?php echo 'SPEI'; ?></p>
                        </div>
                        <div class="part">
                            <p><?php echo $tiked['tokencontrato_pagoparts']; ?></p>
                        </div>
                        <div class="part">
                            <p><?php echo $tiked['fecha_pagoparts']; ?></p>
                        </div>
                        <div class="part">
                            <p><?php echo $tiked['pagado_pagoparts']; ?></p>
                        </div>
                        <div class="part">
                            <p><?php echo $tiked['order_pagoparts']; ?></p>
                        </div>
                        <div class="part">
                            <p><?php 
                            if( $tiked['orderstatus_pagoparts'] == 'pending_payment'){
                                echo 'Pendiente de pago';
                            }else{
                                echo 'Pagado';
                            }?></p>
                        </div>
                        <div class="part">
                            <p><?php echo $tiked['idconekta_pagoparts']; ?></p>
                        </div>

                    </div>
                </a>
    <?php
            }
        }
    }
    ?>
</div>
<?php
require 'includes/templates/footer.php'; ?>