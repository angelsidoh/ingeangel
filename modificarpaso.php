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
    if ($_SESSION['tipo_usuario'] == 'admin') {

        $resultadoPasos = consultaIdPasos($_GET['idpaso']);

        $vectorDescrip[0] = '';
        $vectorFechafin[0] = '';
        $vectoridpaso[0] = '';
        $vectorFechaIni[0] = '';
        $vector_n[0] = '';
        $contadorPasos = 0;

        if ($resultadoPasos->num_rows) {
            foreach ($resultadoPasos as $paso) {
                $descripcionPaso = $paso['descripcion_paso'];
                $vectoridpaso[$contadorPasos] = $paso['id_paso'];
                $vectorDescrip[$contadorPasos] = $paso['descripcion_paso'];
                $vectorFechafin[$contadorPasos] = $paso['fechafin_paso'];
                $vector_n[$contadorPasos] = $paso['num_paso'];
                $vectorFechaIni[$contadorPasos] = $paso['fechaini_paso'];
                $contadorPasoxProyecto[0] = ($contadorPasos + 1);
                $contadorPasos++;
            }
        }
        $superVecIdPaso[0] = $vectoridpaso;
        $superVecFechaFin[0] = $vectorFechafin;
        $superVecFechaIni[0] = $vectorFechaIni;
        $superVecDesp[0] = $vectorDescrip;
        $superVec_n[0] = $vector_n;
        for ($ix = 0; $ix < $contadorPasos; $ix++) {
            unset($vectorFechafin[$ix]);
            unset($vectorDescrip[$ix]);
            unset($vectoridpaso[$ix]);
            unset($vector_n[$ix]);
        }
        // echo '<pre>';
        // var_dump($superVecFechaIni);
        // echo '</pre>';
        // echo $_GET['idpaso'];
        $cadena_de_texto = $superVecFechaIni[0][0];
        $cadena_buscada   = ':';
        $posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
        $hora = '';
        $fecha = '';

        //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
        if ($posicion_coincidencia === false) {
            // echo "NO se ha encontrado la palabra deseada!!!!";
        } else {
            // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;
            for ($x = $posicion_coincidencia - 2; $x < strlen($cadena_de_texto); $x++) {
                //  $cadena_de_texto[$x];
                $hora .= $cadena_de_texto[$x];

                // echo '<br>'.$x.$hora;
            }
            for ($y = 0; $y <  ($posicion_coincidencia - 3); $y++) {
                $fecha .= $cadena_de_texto[$y];
            }
        }
        $cadena_de_textofin = $superVecFechaFin[0][0];
        $cadena_buscadafin   = ':';
        $posicion_coincidenciafin = strpos($cadena_de_textofin, $cadena_buscadafin);
        $horafin = '';
        $fechafin = '';

        //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
        if ($posicion_coincidenciafin === false) {
            // echo "NO se ha encontrado la palabra deseada!!!!";
        } else {
            // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidenciafin;
            for ($x = $posicion_coincidenciafin - 2; $x < strlen($cadena_de_textofin); $x++) {
                //  $cadena_de_textofin[$x];
                $horafin .= $cadena_de_textofin[$x];

                // echo '<br>'.$x.$hora;
            }
            for ($y = 0; $y <  ($posicion_coincidenciafin - 3); $y++) {
                $fechafin .= $cadena_de_textofin[$y];
            }
        }

    ?>
        <div class="contenedor-especial">
            <div class="titulo-seccion">
                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Modificar paso</h1>
            </div>
            <div class="datos-contrato">
                <form id="modificar-paso" action="#">
                    <div class="contenido-cuenta">
                        <div class="text-dato3">
                            <p>ID Paso a modificar</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="contrato_pago2" name="contrato_pago2" placeholder="Ingrese código de contrato" value="<?php echo    $superVecIdPaso[0][0]; ?>" disabled>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>No Paso</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="nopaso" name="nopaso" placeholder="Ingrese la descripción" value="<?php echo  $superVec_n[0][0]; ?>">
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Descripción</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese la descripción" value="<?php echo  $superVecDesp[0][0]; ?>">
                        </div> <!-- rnormal__tarjeta -->


                        <div class="text-dato3">
                            <p>Fecha Inicio</p>
                        </div>
                        <div class="dato3">
                            <input type="date" id="fecha" name="fecha" value="<?php echo $fecha; ?>">
                            <input type="time" id="horainicio" name="limitetiempo" list="listalimitestiempo" step="1" value="<?php echo  $hora ?>">

                        </div> <!-- rnormal__tarjeta -->

                        <div class="text-dato3">
                            <p>Fecha Final</p>
                        </div>
                        <div class="dato3">
                            <input type="date" id="fechafin" name="fechafin" value="<?php
                                                                                    echo $fechafin;
                                                                                    ?>">
                            <input type="time" id="horafin" name="limitetiempo" list="listalimitestiempo" step="1" value="<?php echo  $horafin ?>">
                        </div> <!-- rnormal__tarjeta -->
                    </div>
                    <div class="sub-boton">

                        <input style="margin-top:10px;  margin-bottom: 10px;" id="btnmodificarpaso" type="submit" value="Modificar Paso" class="button">
                    </div>

                </form>
                <form id="eliminar-paso" action="#">
                    <div style="display: none;" class="contenido-cuenta">
                        <div class="text-dato3">
                            <p>ID Paso a modificar</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="idpago2" name="idpago2" placeholder="Ingrese código de contrato" value="<?php echo    $superVecIdPaso[0][0]; ?>" disabled>
                        </div> <!-- rnormal__tarjeta -->
                    </div>

                    <div class="sub-boton">

                        <input style="margin-top:10px; margin-bottom: 10px;" id="btneliminarpaso" type="submit" value="Eliminar Paso" class="button">
                    </div>

                </form>
            </div>

        </div>
    <?php
    } else {
        session_destroy();
    ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=logout.php">

<?php
    }
}
require 'includes/templates/footer.php';
