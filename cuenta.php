<?php
require 'includes/templates/header.php';
require_once('includes/funciones/consultas.php');
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
    session_destroy();
    // header('Location: cuenta.php#angel-ruiz');
?>
    <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=http://localhost/01ingeangel.com/logout.php"><?php                                                                                  } else { 
        $dato = $_SESSION['email'];
        $resultadoConsulta = consultaUsuario($dato);
        if ($resultadoConsulta->num_rows) {
            foreach ($resultadoConsulta as $Consulta) {
                $usuario = $Consulta['nombre_usuario'];
                $foto = $Consulta['foto_usuario'];
                
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
                    }else{?>
                        <img src="<?php echo $foto;?>" alt="foto">
                        <?php
                    }?>
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
<?php
                                                                                        }
                                                                                        require 'includes/templates/footer.php';
?>