<?php
$idU='';
$idP='';
if ($_SESSION['tipo_usuario'] == 'admin') {
    $idusuario =  $_GET['id'];
    $cadena_de_texto = $_GET['id'];
$cadena_buscada   = 'idu';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
$auxpos0 = 0;

//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    $auxpos0 = $posicion_coincidencia;
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: idu " . $posicion_coincidencia;
    for ($x = $posicion_coincidencia + 3; $x < strlen($cadena_de_texto); $x++) {
        //  $cadena_de_texto[$x];
       $idU .= $cadena_de_texto[$x];
        
        // echo '<br>'.$x.$hora;
    }
    for ($y=0; $y < $posicion_coincidencia; $y++) { 
      $idP .= $cadena_de_texto[$y];
    }
    
   
}
$idusuario = $idU;
} else {

    // echo $idusuario;
}
// echo $_SESSION['email'];

$resultadoMensajes = obtenerIdMensajes($idusuario);
// echo 'hola->'.$idusuario;
$contadorPasos1 = 0;
$contadorMensajes = 0;
$resultadoConsulta = consultaUsuarioContrato($idusuario);
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

if ($resultadoMensajes->num_rows) {
    foreach ($resultadoMensajes as $mensaje) {
        $vecmensaje[$contadorPasos1] = $mensaje['mensaje_mensaje'];
        $vecidmensaje[$contadorPasos1] = $mensaje['idmensaje_mensaje'];
        $vecasuntomensaje[$contadorPasos1] = $mensaje['asunto_mensaje'];
        $vecidusuario[$contadorPasos1] = $mensaje['idusuario_mensaje'];
        $vecfechamensaje[$contadorPasos1] = $mensaje['fecha_mensaje'];
        $vecidconversancion[$contadorPasos1] = $mensaje['idconversacion_mensaje'];
        $vecadminmensaje[$contadorPasos1] = $mensaje['admin_mensaje'];
        $contadorPasos1++;
    }
}
$superVecMensajes[0] = $vecmensaje;
$superVecidMensajes[0] = $vecidmensaje;
$superVecasuntoMensaje[0] = $vecasuntomensaje;
$superVecIdUsuario[0] = $vecidusuario;
$superVecFechaMensaje[0] = $vecfechamensaje;
$superVecIdConversacion[0] = $vecidconversancion;
$superVecAdminMensaje[0] = $vecadminmensaje;
for ($ix = 0; $ix < $contadorPasos1; $ix++) {
    unset($vecmensaje[$ix]);
    unset($vecidmensaje[$ix]);
    unset($vecasuntomensaje[$ix]);
    unset($vecidusuario[$ix]);
    unset($vecidconversancion[$ix]);
    unset($vecfechamensaje[$ix]);
    unset($vecadminmensaje[$ix]);
}

// echo '<PRE>';
// var_dump($superVecAdminMensaje);
// echo '</PRE>';
// echo '<PRE>';
// var_dump($superVecasuntoMensaje);
// echo '</PRE>';
$vecaxiasuntox = $superVecasuntoMensaje;
// echo  sizeof($superVecasuntoMensaje[0]);
for ($u = 0; $u < sizeof($superVecasuntoMensaje[0]); $u++) {
    $contadorMensajes = 0;
    for ($i = 0; $i < sizeof($superVecasuntoMensaje[0]); $i++) {
        if ($superVecasuntoMensaje[0][$u] == $vecaxiasuntox[0][$i]) {
            $contadorMensajes++;
            if ($contadorMensajes > 1) {
                $vecaxiasuntox[0][$i] = '';
                // echo $u.$i.'<br>';
            }
        }
    }
}
// echo '<PRE>';
// var_dump( $vecaxiasuntox);
// echo '</PRE>';
$cont = 0;
$vecaxiasunto = $vecaxiasuntox[0];
foreach ($vecaxiasunto as $key => $value) {
    if ($value === '') {
        unset($vecaxiasunto[$key]);
    } else {
        // echo $vecaxiIDMensajes[$key];

        $vecaxiasuntoRes[$cont] = $superVecasuntoMensaje[0][$key];
        $cont++;
    }
}



$vecaxiIdMesnajesx =  $superVecidMensajes;
$vecaxiadminx = $superVecAdminMensaje;
$vecaxiasuntox2 = $superVecasuntoMensaje;

for ($u = 0; $u < sizeof($superVecidMensajes[0]); $u++) {
    $contadorMensajes = 0;
    for ($i = 0; $i < sizeof($superVecidMensajes[0]); $i++) {
        if ($superVecidMensajes[0][$u] == $vecaxiIdMesnajesx[0][$i]) {
            $contadorMensajes++;
            if ($contadorMensajes > 1) {
                $vecaxiIdMesnajesx[0][$i] = '';
                $vecaxiadminx[0][$i] = '';
                $vecaxiasuntox2[0][$i] = ''; 
            }
        }
    }
}
$vecaxiIDMensajes =  $vecaxiIdMesnajesx[0];
$vecaxiadmin =  $vecaxiadminx[0];
$vecaxiasunto2= $vecaxiasuntox2[0];
$cont = 0;
// echo '<PRE>';
// var_dump($vecaxiasuntox);
// echo '</PRE>';
// echo '<PRE>';
// var_dump( $vecaxiIdMesnajesx);
// echo '</PRE>';
foreach ($vecaxiIDMensajes as $key => $value) {
    if ($value === '') {
        unset($vecaxiIDMensajes[$key]);
    } else {
        // echo $vecaxiIDMensajes[$key];
        $vecaxiIdMensajesRes[$cont] = $superVecidMensajes[0][$key];
        $vecaxiadminResp[$cont] = $superVecAdminMensaje[0][$key];
        $vecaxiFechasRes[$cont] =  $superVecFechaMensaje[0][$key];
        $vecaxiasuntoRes2[$cont] = $superVecasuntoMensaje[0][$key];

        $cont++;
    }
}
// var_dump($vecaxiadminResp);


$vecaxi = $superVecidMensajes;

for ($u = 0; $u < sizeof($superVecidMensajes[0]); $u++) {
    $contadorMensajes = 0;
    for ($i = 0; $i < sizeof($superVecidMensajes[0]); $i++) {
        // echo '<br>'.$vecaxi[0][$u].'..'.$superVecidMensajes[0][$i];
        if ($superVecidMensajes[0][$u] == $vecaxi[0][$i]) {


            $contadorMensajes++;
            if ($contadorMensajes > 1) {
                $vecaxi[0][$i] = '';
            }
            // echo '<br>->'.$contadorMensajes;

        }
    }
}
$contradorresultados = 0;
for ($i = 0; $i < sizeof($vecaxi[0]); $i++) {
    if ($vecaxi[0][$i] != '') {
        $resultadovec[$contradorresultados] = $vecaxi[0][$i];
        $contradorresultados++;
    }
}
// echo '<pre>';
// var_dump($resultadovec);
// echo '</pre>';
// echo '<PRE>';
// var_dump($vecaxiFechasRes);
// echo '</PRE>';
// echo '<PRE>';
// var_dump($vecaxiasuntoRes2);
// echo '</PRE>';
$vectaxu2 =  $vecaxi;

$vectaxu2 = $vecaxi[0];
$conta = 0;
foreach ($vectaxu2 as $posicion => $id) {
    if ($id === '') {
        unset($vectaxu2[$posicion]);
    } else {

        $vectaxu3[$conta] = $vectaxu2[$posicion];
        $conta++;
    }
}
// echo '<PRE>';
// var_dump($resultadovec);
// var_dump(  $superVecidMensajes);
// echo '</PRE>';

$resultadoUser = consultaUsuarioContrato($superVecIdUsuario[0][0]);

if ($resultadoUser->num_rows) {
    foreach ($resultadoUser as $resultado) {
        $nombreuser = $resultado['nombre_usuario'];
        $apellidouser = $resultado['apellidos_usuario'];
    }
}

// echo sizeof($vecaxiasuntoRes);

?>
<div  class="contenedor-especial">
    <?php for ($x = 0; $x < sizeof($vecaxiasuntoRes); $x++) { ?>
        <div class="menu-proyectos">
            <div class="submenu-proyectos">
                <div class="titulo-proyecto">
                    <h2><?php
                        echo  'Asunto: ' . $vecaxiasuntoRes[$x] . '<br>';
                        ?>
                    </h2>
                </div>
                <div class="mas-proyecto">
                    <div class="inps" id="inps<?php echo 4000 + $x; ?>">
                        <input name="angel" type="checkbox" class="checs" id="check<?php echo 4000 + $x; ?>" name="menu<?php echo 4000 + $x; ?>">
                    </div>
                    <label for="check<?php echo 4000 + $x; ?>">
                        <i id="plus<?php echo 4000 + $x; ?>" class="far fa-plus-square"></i>
                        <i id="neg<?php echo 4000 + $x; ?>" class="far fa-minus-square" style="display: none;"></i>
                    </label>
                </div>
                <div id="lista<?php echo 4000 + $x; ?>" class="lista-proyectos" style="display: none;">
                    <div class="links1">
                        <div class="contenedorconteo1">
                        
                        <?php 
                        $contadorshow = 0;
                        $contadorshow1 = 0;
                        for ($i=0; $i < sizeof($resultadovec); $i++) { 
                            # code...
                            // echo $resultadovec[$i];
                            if($vecaxiasuntoRes2[$i] == $vecaxiasuntoRes[$x]){
                        ?>
                           <div class="mensaje" id="mensaje">
                                <div class="contenido">
                                    <?php
                                    echo $vecaxiadminResp[$i] . "<br>" . $vecaxiFechasRes[$i] . "<br><br>";
                                    ?>
                                </div>
                                <?php
                                
                                for ($u = 0; $u < sizeof($superVecidMensajes[0]); $u++) {

                                    $contadorshow1++;
                                    if ($resultadovec[$i] == $superVecidMensajes[0][$u]) {
                                        echo $superVecMensajes[0][$u];
                                        
                                        $contadorshow ++;
                                       
                                      
                                    }
                                   
                                }
                             
                                ?>
                            </div>

                            <!-- <div class="botonresp">
                    <a class="button" href="id=<?php echo $vectaxu3[$i] ?>#angel-ruiz">Responder</a>
                    </div> -->
                            <?php
                           
                           }
                    } 
                            ?>
                             
                            <div class="contenedor-especial">
                                <div class="titulo-seccion">

                                    <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Responder</h1>
                                </div>
                                <div class="datos-contrato">
                                    <form id="agregar-nuevomensaje<?php echo $x;?>" action="#">
                                        <div class="contenido-cuenta">
                                            <div class="text-dato3">
                                                <p>Asunto</p>
                                            </div>
                                            <div class="dato3">
                                                <input style="color: #ff7b00;" type="text" id="asunto<?php echo $x;?>" name="asunto" placeholder="Escriba el asunto" value="<?php echo $vecaxiasuntoRes[$x];?>" required disabled>
                                            </div> <!-- rnormal__tarjeta -->
                                        
                                            <div class="dato3">
                                                <input style="display: none;" type="text" id="idmensaje<?php echo $x;?>" name="idmensaje" placeholder="" value="<?php 
                                               for ($s=0; $s < sizeof($superVecidMensajes[0]); $s++) { 
                                                   if($s == (sizeof($superVecidMensajes[0])-1)){
                                                echo $superVecidMensajes[0][$s];}
                                               }
                                                 ?>" required >
                                            </div> <!-- rnormal__tarjeta -->
                                            <div class="dato3">
                                                <input style="" type="text" id="email<?php echo $x;?>" name="email" placeholder="" value="<?php echo $email;?>" required>
                                            </div> <!-- rnormal__tarjeta -->
                                            <div class="dato3">
                                                <input  style="display: none;" type="text" id="idusuario<?php echo $x;?>" name="idusuario" placeholder="" value="<?php echo $superVecIdUsuario[0][$x]; ?>" required>
                                            </div> <!-- rnormal__tarjeta -->
                                          
                                            <div class="dato3">
                                                <input style="display: none;" type="text" id="nombreusuario<?php echo $x;?>" name="nombreusuario" placeholder="" value="<?php echo $usuario . " " . $apellidos ?>" required>
                                            </div> <!-- rnormal__tarjeta -->

                                            <div class="text-dato3">
                                                <p>Mensaje</p>
                                            </div>
                                            <div class="dato3">
                                                <div class="contobjs">
                                                    <textarea class="idea" type="descrip" id="idea<?php echo $x;?>" name="idea" placeholder="Escriba el mensaje" onkeyup="countChars(this,<?php echo $x;?>);" required></textarea>
                                                    <p id="charNum<?php echo $x;?>">0 Caracteres</p>
                                                </div>

                                            </div> <!-- rnormal__tarjeta -->




                                        </div>
                                        <div class="sub-boton">

                                            <input id="btnagregarmensaje<?php echo $x;?>" type="submit" value="Responder" class="button">

                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php

    }
    ?>
     <div class="contenedor-especial">
                                <div class="titulo-seccion">

                                    <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Nuevo Mensaje</h1>
                                </div>
                                <div class="datos-contrato">
                                    <form id="agregar-nuevomensaje<?php echo $x;?>" action="#">
                                        <div class="contenido-cuenta">
                                            <div class="text-dato3">
                                                <p>Asuntox</p>
                                            </div>
                                            <div class="dato3">
                                                <input type="text" id="asunto<?php echo $x;?>" name="asunto" placeholder="Escriba el asunto" value="" required>
                                            </div> <!-- rnormal__tarjeta -->
                                          
                                            <div class="dato3">
                                                <input style="display:none;" type="text" id="idmensaje<?php echo $x;?>" name="idmensaje" placeholder="" value="<?php 
                                               for ($s=0; $s < sizeof($superVecidMensajes[0]); $s++) { 
                                                   if($s == (sizeof($superVecidMensajes[0])-1)){
                                                echo $superVecidMensajes[0][$s];}
                                               }
                                                 ?>" required>
                                            </div> <!-- rnormal__tarjeta -->
                                            
                                            <div class="dato3">
                                                <input style="display: none;" type="text" id="idusuario<?php echo $x;?>" name="idusuario" placeholder="" value="<?php  echo $superVecIdUsuario[0][0]; ?>" required>
                                            </div> <!-- rnormal__tarjeta -->
                                            <div class="dato3">
                                                <input style="" type="text" id="email<?php echo $x;?>" name="email" placeholder="" value="<?php echo $email;?>" required>
                                            </div> <!-- rnormal__tarjeta -->
                                          
                                            <div class="dato3">
                                                <input style="display:none;" type="text" id="nombreusuario<?php echo $x;?>" name="nombreusuario" placeholder="" value="<?php echo $usuario . " " . $apellidos ?>" required>
                                            </div> <!-- rnormal__tarjeta -->

                                            <div class="text-dato3">
                                                <p>Mensaje</p>
                                            </div>
                                            <div class="dato3">
                                                <div class="contobjs">
                                                    <textarea class="idea" type="descrip" id="idea<?php echo $x;?>" name="idea" placeholder="Escriba el mensaje" onkeyup="countChars(this,<?php echo $x;?>);" required></textarea>
                                                    <p id="charNum<?php echo $x;?>">0 Caracteres</p>
                                                </div>

                                            </div> <!-- rnormal__tarjeta -->




                                        </div>
                                        <div class="sub-boton">

                                            <input id="btnagregarmensaje<?php echo $x;?>" type="submit" value="Enviar Mensaje" class="button">

                                        </div>
                                    </form>
                                </div>

                            </div>
</div>