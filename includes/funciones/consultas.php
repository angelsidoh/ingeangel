
<?php

function obtenerarchivos($dato)
{

    try {
        require('bd/bdsqli.php');


        return $connf->query("SELECT direccion_archivo, idusuario_archivo, idproyecto_archivo, fecha_archivo, identificacion_archivo FROM pr WHERE idusuario_archivo = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerMensajes($dato)
{

    try {
        require('bd/bdsqli.php');


        return $connf->query("SELECT mensaje_mensaje, idmensaje_mensaje, asunto_mensaje FROM mensajecliente WHERE idusuario_mensaje = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function obtenerIdMensajes($dato)
{

    try {
        require('bd/bdsqli.php');


        return $connf->query("SELECT mensaje_mensaje, idmensaje_mensaje, asunto_mensaje, idusuario_mensaje, idconversacion_mensaje, fecha_mensaje, admin_mensaje FROM mensajecliente WHERE idusuario_mensaje = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function obtenerPrecios2($dato)
{

    try {
        require('../../bd/bdsqli.php');


        return $connf->query("SELECT basico_precio, hosting_precio, dominio_precio, mantenimiento_precio, basesdatos_precio, programacion_precio FROM precios WHERE tokencontrato_precio = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaContratosContrato2($dato)
{
    include '../../bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_contrato, link_contrato, token_contrato, idproyecto_contrato, tipo_contrato, tipoint_contrato, fechainicio_contrato, fechafin_contrato, firmacliente_contrato FROM contratos WHERE token_contrato = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaUsuarioContrato2($dato)
{
    include '../../bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_usuario, nombre_usuario, foto_usuario, idproyecto_usuario, apellidos_usuario, email_usuario, telefono_usuario, calle_usuario,numiedireccion_usuario, colonia_usuario, cp_usuario, fecha_usuario, domiciliofiscal_usuario, cfdi_usuario, rfc_usuario, tipo_usuario  FROM usuarios WHERE id_usuario = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaProyectos2($dato)
{
    include '../../bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_proyecto, nombre_proyecto, tipo_proyecto, pago_proyecto, idusuario_proyecto FROM proyectos WHERE id_proyecto = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaPagos2($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_pago, fechainicio_pago, fechafin_pago, fechadepago_pago, tokenconekta_pago, fortarget_pago, idproyecto_pago,tokenpago_pago,idcontrato_pago, tokencontrato_pago, contmeses_pago, money_pago FROM pagos WHERE id_pago = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}


// END consultas extras
function obtenerContactos()
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_usuario, nombre_usuario, apellidos_usuario, email_usuario, telefono_usuario, fecha_usuario,  foto_usuario, tipo_usuario  FROM usuarios");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaBd($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_paso, descripcion_paso, fechafin_paso, fechaini_paso, timing_paso FROM pasos WHERE idproyecto_paso = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaUsuario($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_usuario, nombre_usuario, foto_usuario, idproyecto_usuario, apellidos_usuario, email_usuario, telefono_usuario, calle_usuario,numiedireccion_usuario, colonia_usuario, cp_usuario, fecha_usuario, domiciliofiscal_usuario, cfdi_usuario, rfc_usuario, tipo_usuario  FROM usuarios WHERE email_usuario = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaUsuarioContrato($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_usuario, nombre_usuario, foto_usuario, idproyecto_usuario, apellidos_usuario, email_usuario, telefono_usuario, calle_usuario,numiedireccion_usuario, colonia_usuario, cp_usuario, fecha_usuario, domiciliofiscal_usuario, cfdi_usuario, rfc_usuario, tipo_usuario  FROM usuarios WHERE id_usuario = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaProyecto($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_proyecto, nombre_proyecto, tipo_proyecto, pago_proyecto FROM proyectos WHERE idusuario_proyecto = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaProyectos($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_proyecto, nombre_proyecto, tipo_proyecto, pago_proyecto, idusuario_proyecto FROM proyectos WHERE id_proyecto = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

function consultaPasos($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_paso, descripcion_paso, fechafin_paso, fechaini_paso, timing_paso, num_paso FROM pasos WHERE idproyecto_paso = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaIdPasos($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_paso, descripcion_paso, fechafin_paso, fechaini_paso, timing_paso, num_paso, idproyecto_paso FROM pasos WHERE id_paso = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaPagos($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_pago, fechainicio_pago, fechafin_pago, fechadepago_pago, tokenconekta_pago, fortarget_pago, idproyecto_pago,tokenpago_pago,idcontrato_pago, tokencontrato_pago, contmeses_pago FROM pagos WHERE idproyecto_pago = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaContratos($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_contrato, link_contrato, token_contrato, idproyecto_contrato, tipo_contrato, tipoint_contrato, fechainicio_contrato, fechafin_contrato FROM contratos WHERE idproyecto_contrato = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function consultaContratosContrato($dato)
{
    include 'bd/bdsqli.php';
    try {
        return $connf->query("SELECT id_contrato, link_contrato, token_contrato, idproyecto_contrato, tipo_contrato, tipoint_contrato, fechainicio_contrato, fechafin_contrato, firmacliente_contrato FROM contratos WHERE token_contrato = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function obtenerPrecios($dato)
{

    try {
        require('bd/bdsqli.php');


        return $connf->query("SELECT basico_precio, hosting_precio, dominio_precio, mantenimiento_precio, basesdatos_precio, programacion_precio FROM precios WHERE tokencontrato_precio = '$dato'");
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
?>