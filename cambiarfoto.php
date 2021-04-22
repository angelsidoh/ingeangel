<?php 
require 'includes/templates/header.php';
require_once('includes/funciones/consultas.php');
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
            $tipouser = $Consulta['tipo_usuario'];
        }
    }
require('includes/funciones/perfil.php');
?>

<form id="upload_form" enctype="multipart/form-data" method="post">

<div class="titulo-seccion">
                                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Cambiar foto de perfil</h1>
                            </div>


  
                    


                    <br>
                    <input class="button" type="file" name="file2" id="file2"><br>
                    <progress id="progressBar1" value="0" max="100" style="width:53%;"></progress>
                    <h3 id="status1"></h3>
                    <p id="loaded_n_total1"></p>
                    <br>
                    <input class="button" type="button" value="Subir Archivos" onclick="uploadFile()">
                    
             
      
</form>



<?php 
require 'includes/templates/footer.php';
?>