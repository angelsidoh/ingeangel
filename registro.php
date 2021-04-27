<?php

require 'includes/templates/header.php';
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
if (isset($_SESSION['email'])) {
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
    }
    // echo '<pre>';
    // var_dump($usuario);
    // echo '</pre>';
    if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email'])) && (!isset($_SESSION['token']))) {



            ?>
        <div class="contenedor-especial">
            <div class="titulo-seccion">
                <p>¿Tiene una gran idea? LLené el siguiente formulario</p>
                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Registro de Usuarios</h1>
            </div>
            <div class="datos-contrato">
                <form id="agregar-registrouser" action="#">
                    <div class="contenido-cuenta">
                        <div class="text-dato3">
                            <p>Nombre</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="nameuser" name="nameuser" placeholder="Escriba su Nombre" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Apellidos</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="apellidos" name="apellidos" placeholder="Escriba sus Apellidos" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Correo Electrónico</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="mail" name="mail" placeholder="Escriba su Correo Electrónico" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Teléfono</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="tel" name="tel" placeholder="Escriba su Número de Teléfono" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Sitio web</p>
                        </div>

                        <div class="dato3">
                            <select name="select" id="select" name="select">
                                <option value="Empresa" selected>Para Empresa </option>
                                <option value="Negocio">Para Negocio</option>
                                <option value="Mi profesión">Para mi profesión</option>
                            </select>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>En que sector del mercado se encuentran tus servicios y/o productos</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="sector" name="sector" placeholder="Escriba el sector de mercado">
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Idea de Proyecto</p>
                        </div>
                        <div class="dato3">
                            <div class="contobjs">
                                <textarea type="descrip" id="idea" name="idea" placeholder="Escriba la idea de su proyecto" onkeyup="countChars2(this);" required></textarea>
                                <p id="charNum0">0 Caracteres</p>
                            </div>

                        </div> <!-- rnormal__tarjeta -->




                    </div>
                    <div class="sub-boton">

                        <input id="btnagregarideauser" type="submit" value="Registrarse" class="button">

                    </div>
                </form>
            </div>

        </div>

    <?php
    }else{?>
        <div class="contenedor-especial">
            <div class="titulo-seccion">
                <p>¿Tiene una gran idea? LLené el siguiente formulario</p>
                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Registro de Usuarios</h1>
            </div>
            <div class="datos-contrato">
                <form id="agregar-nuevoproyecto" action="#">
                    <div class="contenido-cuenta">
                        <div class="text-dato3">
                            <p>Nombre</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="nameuser" name="nameuser" placeholder="Escriba su Nombre" value="<?php echo $usuario; ?>" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Apellidos</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="apellidos" name="apellidos" placeholder="Escriba sus Apellidos" value="<?php echo $apellidos;?>" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Correo Electrónico</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="mail" name="mail" placeholder="Escriba su Correo Electrónico" value="<?php echo $email;?>" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Teléfono</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="tel" name="tel" placeholder="Escriba su Número de Teléfono" value="<?php echo $tel;?>" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="dato3">
                            <input type="text" id="idusuario" name="idusuario" placeholder="Escriba su Número de Teléfono" value="<?php echo $idusuario;?>" required>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Sitio web</p>
                        </div>

                        <div class="dato3">
                            <select name="select" id="select" name="select">
                                <option value="Empresa" selected>Para Empresa </option>
                                <option value="Negocio">Para Negocio</option>
                                <option value="Mi profesión">Para mi profesión</option>
                            </select>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>En que sector del mercado se encuentran tus servicios y/o productos</p>
                        </div>
                        <div class="dato3">
                            <input type="text" id="sector" name="sector" placeholder="Escriba el sector de mercado">
                        </div> <!-- rnormal__tarjeta -->
                        <div class="text-dato3">
                            <p>Idea de Proyecto</p>
                        </div>
                        <div class="dato3">
                            <div class="contobjs">
                                <textarea type="descrip" id="idea" name="idea" placeholder="Escriba la idea de su proyecto" onkeyup="countChars2(this);" required></textarea>
                                <p id="charNum0">0 Caracteres</p>
                            </div>

                        </div> <!-- rnormal__tarjeta -->




                    </div>
                    <div class="sub-boton">

                        <input id="btnagregarideauser" type="submit" value="Crear Proyecto" class="button">

                    </div>
                </form>
            </div>

        </div><?php
    }
    require 'includes/templates/footer.php';

    ?>