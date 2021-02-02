<?php
require 'includes/templates/header.php';

?>

<div class="contenedor-formulario">
  <div class="titulo-seccion">
    <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Inicio de Sesión</h1>
  </div>
  <div class="icono-formulario">
    <i class="fas fa-users"></i>
  </div>

  <form id="login" action="#">
    <div class="normal_tarjeta">


      <div class="input_grid">
        <div class="icono-grid">
          <i class="fas fa-envelope"></i>
        </div>
        <input type="text" id="correo" name="correo" placeholder="Ingresa tu Correo">
        
      </div>
      
      <div class="input_grid">
        <div class="icono-grid">
          <i class="fas fa-unlock"></i>
        </div>
        <input type="password" id="pass" name="pass" placeholder="Contraseña"  Class="form-control">
        <div class="mostrar-pass">
            <button id="show_passwords" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
        </div>

      </div>
      <?php if (!empty($errores)) : ?>
        <div class="error">
          <ul>
            <?php echo $errores; ?>
          </ul>
        </div>
      <?php endif; ?>

      <div class="recordatorio">
        <p>Te recordamos que la contraseña se envió al correo electrónico que ingresaste en tu registro</p>
        <p>Si aún no has revido un correo con tus datos de registro. Por favor contáctese al correo: <a href="mailto:infoingeangel@gmail.com"></a>

        </p>
      </div>
    </div> <!-- rnormal__tarjeta -->
    <div class="sub-boton">
      <input id="btnlogin" type="submit" value="Iniciar Sesión" class="button">
      <p>¿Aún no tienes una cuenta en ingeangel?</p> <a class="button" href="registro.php#reg">Registrate</a>
    
    </div>
    

      
  </form>

</div>
<div class="contenedor-gradiente">
  <div class="tamanio-final">
  </div>
</div>
<?php

require 'includes/templates/footer.php';
?>