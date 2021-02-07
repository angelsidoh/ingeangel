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
    echo 'formulario con registro';
?>
    <div class="contenedorf">
        <?php
        echo ($_SESSION['token']);

        echo ($_SESSION['ip']);
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

                <h3>Bienvenido <?php echo $_SESSION['usuario']; ?></h3>
                <!-- <h3>Datos del Propietario/Cliente</h3>
                <div class="input_grid1">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresé su(s) nombre(s)">
                </div>
                <div class="input_grid1">
                    <input type="text" id="apellido" name="apellido" placeholder="Ingresé su Apellido">
                </div>
                <div class="input_grid1">
                    <input type="text" id="telefono" name="telefono" placeholder="Ingresé su Teléfono Celular/WhatsApp">
                </div>
                <div class="input_grid1">
                    <input type="text" id="correo" name="correo" placeholder="Ingresé su Correo Electrónico">
                </div>
                
                <h3>Dirección</h3>
                <div class="input_grid2">
                    <input type="text" id="calle" name="calle" placeholder="Calle">
                    <input type="text" id="numiedirec" name="numiedirec" placeholder="#Int/Ext">
                </div>
                <div class="input_grid2">
                    <input type="text" id="col" name="col" placeholder="Colonia">
                    <input type="text" id="postal" name="postal" placeholder="C.P.">
                </div> -->
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
                                                                                            ?>">
                </div>
                <p>¿Tienes dudas sobre como iniciar tu proyecto nuevo? Contacta a: <a href="mailto:infoingeangel@gmail.com">infoingeangel@gmail.com</a>
                </p>
            </div> <!-- rnormal__tarjeta -->
            <div class="sub-boton">
                <input id="btnregcuenta2" type="submit" value="regcuenta2" class="button">
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