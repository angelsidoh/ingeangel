<?php
require 'includes/templates/header.php';
session_start();
if(isset($_SESSION['usuario'])){
?>
  <h1>Existe una sesión</h1>
<?php
}else{
?>
<div class="cuadradoleft">
<div class="imgcuadrado_aboutme">
        <h1 class="sparklemaster">INICIO DE SESIÓN</h1>
    <div class="contenedor-login">
        
    </div>
    </div>
    </div>
<?php
}
require 'includes/templates/footer.php';
?>
