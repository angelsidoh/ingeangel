<?php
// echo $idusuario;

$resultadoMensajes = obtenerIdMensajes($idusuario);

$contadorPasos1 = 0;
$contadorMensajes = 0;

if ($resultadoMensajes->num_rows) {
    foreach ($resultadoMensajes as $mensaje) {
        $vecmensaje[$contadorPasos1] = $mensaje['mensaje_mensaje'];
        $vecidmensaje[$contadorPasos1] = $mensaje['idmensaje_mensaje'];
        $contadorPasos1++;
    }
}
$superVecMensajes[$i] = $vecmensaje;
$superVecidMensajes[$i] = $vecidmensaje;
for ($ix = 0; $ix < $contadorPasos1; $ix++) {
    unset($vecmensaje[$ix]);
    unset($vecidmensaje[$ix]);
}
// echo '<PRE>';
// var_dump($superVecMensajes);
// echo '</PRE>';
// echo '<PRE>';
// var_dump($superVecidMensajes);
// echo '</PRE>';

$vecaxi = $superVecidMensajes;
// echo '<PRE>';
// var_dump($vecaxi);
// echo '</PRE>';
for ($u=0; $u < sizeof($superVecidMensajes[1]); $u++) { 
    $contadorMensajes = 0;
for ($i = 0; $i < sizeof($superVecidMensajes[1]); $i++) {
    // echo '<br>'.$vecaxi[0][$u].'..'.$superVecidMensajes[0][$i];
    if($superVecidMensajes[1][$u] == $vecaxi[1][$i]){
        
        
        $contadorMensajes++;
        if($contadorMensajes > 1){
            $vecaxi[1][$i] = '';
        }
        // echo '<br>->'.$contadorMensajes;
        
    }
}

}
$contradorresultados=0;
for ($i=0; $i < sizeof( $vecaxi[1]); $i++) { 
    if($vecaxi[1][$i] != ''){
        $resultadovec[$contradorresultados] = $vecaxi[1][$i];
     $contradorresultados++;
    }
}
// echo '<pre>';
// var_dump($resultadovec);
// echo '</pre>';

?>
<div class="contenedor-especial">
    <?php for ($i=0; $i < sizeof($resultadovec); $i++) { 
    ?> 
    <div class="mensaje" id="mensaje">
        <?php
            for ($u=0; $u < sizeof($superVecidMensajes[1]); $u++) { 
                if($resultadovec[$i] == $superVecidMensajes[1][$u]){
                    echo $superVecMensajes[1][$u];
                }
            }
        ?>
    </div>
    <?php
    }
    ?>
</div>

