<?php
session_start();


?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/f429da79c0.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="js/plugins/malihu-custom-scrollbar-plugin-master/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css">

  <link rel="stylesheet" href="css/normalize.css">

  <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/estilos-pruebas1.css?v=<?php echo time(); ?>">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <meta name="theme-color" content="#fafafa">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
  <script src="js/DetectarVisibilidad.js?v=<?php echo time(); ?>"></script>
  <!-- 08/09/2020 INICIO DEL PROYECTO-->
</head>

<body id="boddu">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

  <!-- Add your site or application content here -->
  <!-- Las secciones en este tipo de sitios web son partes de diviciones que normalmente son de entre 600px a 900px tratando de siempre ajustar a el tamaño de la pantalla del 
    dispocitivo. -->


  <div id="inicio" class="seccion-completa">
    <div id="menubarra" class="menu-barra">
      <div class="logs"> <a href="index.php#">
          <div id = "imglogo" class="imglogo"></div>
        </a></div>

      <div class="menu-hambur">
        <div class="menu-icon">
          <span class="menu-icon__line menu-icon__line-left"></span>
          <span class="menu-icon__line"></span>
          <span class="menu-icon__line menu-icon__line-right"></span>
        </div>
      </div>
      <div class="botonsesiones">
        <div class="botones_barra">
        <a href="<?php
                        if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
                          echo 'login.php#angel-ruiz';
                        }else{
                          echo 'logout.php';
                        }?>"><?php
                                        if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
                                          echo 'Iniciar Sesión';
                                        } else {
                                          echo 'Cerrar Sesión';
                                        } ?>
              </a>
        </div>
      </div>
      <div class="hotcall">
        <input type="checkbox" id="check-hotcall" name="menu1">
        <label for="check-hotcall">
          <i class="fas fa-chevron-down" id="flechaup"> Contacto</i>
          <i class="fas fa-chevron-up" id="flechadown" style="display:none"> Contacto</i>
        </label>
        <div style="display: none;" id="subcall" class="subcall">
        <br>
        <br>
          <a style="color: #ffffff!important;"  class="button" href="tel:+524521441689"><i class="fas fa-phone-alt"></i> +52(452)1441689</a>
          <br>
          <br>
          <br>
          <a style="color: #ffffff!important;"  class="button" href="tel:+524521441689"><i class="fab fa-whatsapp"></i> +52(452)1441689</a>
          <br>
          <br>
          <br>
          <a  style="color: #ffffff!important;" class = " button" href="mailto:infoingeangel@gmail.com"><i class="far fa-envelope"></i> Enviar Correo</a>
      </div>
      </div>
     
      <div class="proyectos">
        <div class="proy">
          <a href="proyectos.php#angel-ruiz">
            <p>Proyectos</p>
          </a>
        </div>


      </div>


    </div>
    <div class="contenedor">

      <div class="corte">
        <div class="imgfondoprincipal">

        </div>

      </div>
      <div id="textBienvenida" class="textBienvenida">
        <!-- <h1>Desarrollo <br> web</h1> -->
        <ul class="slider">
          <li>
            <a href="">
              <h1 id="sparklemaster" class="sparklemaster">Desarrollo Web</h1>
            </a>
          </li>
         
        </ul>

        <!-- <ol class="paginacion">
            
        </ol> -->
        <div class="right">
          <span><i class="fas fa-angle-right"></i></span>
        </div>
        <div class="left">
          <span><i class="fas fa-angle-left"></i></span>
        </div>


        <!--  -->
      </div>
      <div id="angel-ruiz"></div>
      <div id="menu-screen" class="nav">
       
        <div class="nav__content">
          <div style="display: none;" id="imglogo2" class="imglogo"></div>
          <ul class="nav__list">
            <li class="nav__list-item">
              <a href="<?php
                        if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
                          echo 'login.php#angel-ruiz';
                        }else{
                          echo 'logout.php';
                        }?>"><?php
                                        if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
                                          echo 'Iniciar Sesión';
                                        } else {
                                          echo 'Cerrar Sesión';
                                        } ?>
              </a>
            </li>
            <li class="nav__list-item"><a href="cuenta.php#angel-ruiz"> Tu cuenta</a></li>
            <li class="nav__list-item"><a href="proyectos.php#angel-ruiz">Proyectos</a></li>
            <li class="nav__list-item"><a href="#">Contacto</a></li>

          </ul>
        </div>
        
      </div>
      
    </div>
  </div>
