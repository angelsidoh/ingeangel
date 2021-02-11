<?php
require 'includes/templates/header.php';
require_once('includes/funciones/consultas.php');
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
    session_destroy();
    // header('Location: cuenta.php#angel-ruiz');
?>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=http://localhost/01ingeangel.com/logout.php">
<?php                         
} else {
    $dato = $_SESSION['email'];
    $resultadoConsulta = consultaUsuario($dato);
if ($resultadoConsulta->num_rows) {
    foreach ($resultadoConsulta as $Consulta) {
        $usuario = $Consulta['nombre_usuario'];
        $idproyecto = $Consulta['idproyecto_usuario'];
        $idusuario = $Consulta['id_usuario'];
        $foto = $Consulta['foto_usuario'];
    }
}
$contadorProyectos=0;
$resultadoProyecto = consultaProyecto($idusuario);


if ($resultadoProyecto->num_rows) {
    foreach ($resultadoProyecto as $proyecto) {
        $nombreproyecto = $proyecto['nombre_proyecto'];
        $vectorNombresProyectos[$contadorProyectos] = $nombreproyecto;
        $contadorProyectos++;
    }
}


?>
    <title>Tu Cuenta</title>
    <div class="contenedor-cuenta">
        <div class="contenedor-perfil">
            <div class="imagen">
                <div class="foto">

                    <!-- <img src="img/terceros/avatar.JPG" alt="avatar"> -->
                    <?php if ($foto == '') {
                    ?><img src="img/terceros/avatar.JPG" alt="avatar"><?php
                    } else { ?>
                        <img src="<?php echo $foto; ?>" alt="foto">
                    <?php
                    } ?>
                    <div class="edit-fotox">
                        <div class="upload">
                            <i class="fas fa-user-edit"></i>
                            <input type="file" id="foto1file" name="foto1file">

                        </div>
                        <!-- <a type="file" id="foto1file" name="foto1file" href="#"><i class="fas fa-user-edit"></i></a> -->
                    </div>
                </div>

            </div>
            <div class="text-img">
                <h1><?php
                    echo $usuario; ?></h1>
            </div>
        </div>
    </div>
    <div class="contenedor-cuenta">
        <ol class="paginacion2">

        </ol>
        <ul class="slider2">
            <li>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Proyectos</h1>
                    </div>
                    <?php 
                    for ($i=0; $i < $contadorProyectos; $i++) { 
                       
                    ?>
                    <div class="menu-proyectos">
                        <div class="submenu-proyectos">
                            <div class="titulo-proyecto">
                                <h1>Proyecto <?php echo $i+1;?>:<span style="font-size: 16px;">
                                <?php
                                echo $vectorNombresProyectos[$i];
                                        ?></span></h1>
                            </div>
                            <div class="mas-proyecto">
                                <input type="checkbox" id="check<?php echo $i;?>" name="menu">
                                <label for="check<?php echo $i;?>">
                                    <i id="plus<?php echo $i;?>" class="far fa-plus-square"></i>
                                    <i id="neg<?php echo $i;?>" class="far fa-minus-square" style="display: none;"></i>
                                </label>
                            </div>
                            <div id="lista<?php echo $i;?>" class="lista-proyectos" style="display: none;">
                                <?php  ?>
                                
                                <div class="links">
                                    <a href="#" target="_blank">
                                        <p><i class="fas fa-caret-right"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae accusamus cumque harum exercitationem sed velit.<?php echo $i;?></p>
                                    </a>
                                </div>
                                <?php ?>
                            </div>
                        </div>
                        <?php }?>
                        
                    </div>
            </li>
            <li>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Cuenta</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Pagos</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="contenedor-especial">
                    <div class="titulo-seccion">
                        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Contratos</h1>
                    </div>
                </div>
            </li>
        </ul>


        <div class="right2">
            <span><i class="fas fa-angle-right"></i></span>
        </div>
        <div class="left2">
            <span><i class="fas fa-angle-left"></i></span>
        </div>
    </div>
<?php
}
require 'includes/templates/footer.php';


?>
