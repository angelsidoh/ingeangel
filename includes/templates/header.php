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
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
          <div id="imglogo" class="imglogo"></div>
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
                    } else {
                      echo 'logout.php';
                    } ?>"><?php
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
          <a style="color: #ffffff!important;" class="button" href="tel:+524521441689"><i class="fas fa-phone-alt"></i> +52(452)1441689</a>
          <br>
          <br>
          <br>
          <a style="color: #ffffff!important;" class="button" href="tel:+524521441689"><i class="fab fa-whatsapp"></i> +52(452)1441689</a>
          <br>
          <br>
          <br>
          <a style="color: #ffffff!important;" class=" button" href="mailto:wingsdevs@gmail.com"><i class="far fa-envelope"></i> Enviar Correo</a>
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
            <div class="imgslider">
              <img src="img/terceros/fondoprinctransparnt.png" alt="fondo">

              <div class="texta">
                <h1 id="sparklemaster" class="sparklemaster">¿Por qué necesita una página web profesional?</h1>
               

               
              </div>
              <div class="cards-swiper">
             
                  <div class="swiper-container">
                
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide">
                      
                        <div class="card">
                            <div class="layer">
                              <div class="content">
                              <i class="fas fa-check"></i>
                              <h3>Ventas</h3>
                              <p>Como herramienta, un sitio web bien estructurado y atractivo mejorará significativamente las ventas.</p>
                              </div>
                              <div class="imgBx">
                              </div>
                              <div class="details">
                              </div>
                            </div>
                        </div>
                        
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                            <div class="layer">
                              <div class="content">
                              <i class="fas fa-check"></i>
                                <h3>Expansión de fronteras</h3>
                                <p>Publicidad al nivel mas alto, alcanzando países y nuevos clientes de todo el mundo</p>
                              </div>
                              <div class="imgBx">
                              </div>
                              <div class="details">
                              </div>
                            </div>
                        </div>
                        
                        
                      </div>
                      <div class="swiper-slide" data-hash="slide3">
                        <div class="card">
                            <div class="layer">
                              <div class="content">
                              <i class="fas fa-check"></i>
                                <h3>Identidad en Internet</h3>
                                <p>Los cambios en los hábitos de compra están ocurriendo, y un sitio web es la herramienta adecuada para adaptarse</p>
                              </div>
                              <div class="imgBx">
                              </div>
                              <div class="details">
                              </div>
                            </div>
                        </div>
                       
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                            <div class="layer">
                              <div class="content">
                              <i class="fas fa-check"></i>
                                <h3>Credibilidad y Prestigio</h3>
                                <p>Clientes atraen a mas clientes, presentación a detalle de sus servicios y productos, ademas, solucionando las necesidades de sus clientes </p>
                              </div>
                              <div class="imgBx">
                              </div>
                              <div class="details">
                              </div>
                            </div>
                        </div>
                        
                        
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                            <div class="layer">
                              <div class="content">
                              <i class="fas fa-check"></i>
                                <h3>Servicio 24/7</h3>
                                <p>Clientes que pueden revisar, comprar o firmar un contrato en cualquier día y hora de la semana</p>
                              </div>
                              <div class="imgBx">
                              </div>
                              <div class="details">
                              </div>
                            </div>
                        </div>
                        
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                            <div class="layer">
                              <div class="content">
                              <i class="fas fa-check"></i>
                                <h3>Google</h3>
                                <p>Sus servicios y productos saldrán en el buscador de internet más importante del mundo</p>
                              </div>
                              <div class="imgBx">
                              </div>
                              <div class="details">
                              </div>
                            </div>
                        </div>
                        
                        
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                            <div class="layer">
                              <div class="content">
                              <i class="fas fa-check"></i>
                                <h3>Competencia</h3>
                                <p>Sus servicios y productos serán fuertes frente a otros. Además la buena disposición de información disolverá cualquier tipo de duda en sus clientes</p>
                              </div>
                              <div class="imgBx">
                              </div>
                              <div class="details">
                              </div>
                            </div>
                        </div>
                        
                        
                      </div>
                    </div>
                  
                  </div>
                  <a class="button" href="registro.php#angel-ruiz">
                  Cotizar
                </a>
                </div>

            </div>

          </li>
         
          <li>
            <div class="imgslider">
              <img src="img/terceros/fondoslider5.png" alt="fondo">
              <div class="texta">
                <h1 id="sparklemaster" class="sparklemaster">¿Que servicios ofrecemos?</h1>
                


           
              </div>
              <div class="cards-swiper">
             
             <div class="swiper-container">
           
               <div class="swiper-wrapper">
               
                 <div class="swiper-slide">
                 
                   <div class="card">
                       <div class="layer">
                         <div class="content">
                         <i class="fas fa-check"></i>
                                <h3>Programación</h3>
                                <p>Soy un profesional en programación en HTML CSS3, PHP y JavaScript. Entre otros lenguajes de programación</p>
                         </div>
                         <div class="imgBx">
                         </div>
                         <div class="details">
                         </div>
                       </div>
                   </div>
                   
                 </div>
                 <div class="swiper-slide">
                   <div class="card">
                       <div class="layer">
                         <div class="content">
                         <i class="fas fa-check"></i>
                                <h3>Planeación</h3>
                                <p>Los proyectos que desarrollo están planificados para cumplir con objetivos en el tiempo marcado.</p>
                         </div>
                         <div class="imgBx">
                         </div>
                         <div class="details">
                         </div>
                       </div>
                   </div>
                   
                   
                 </div>
                 <div class="swiper-slide" data-hash="slide3">
                   <div class="card">
                       <div class="layer">
                         <div class="content">
                         <i class="fas fa-check"></i>
                                <h3>Mantenimiento Preventivo</h3>
                                <p>Constantemente actualizo o modifico partes de código mejorando la calidad de navegación por el sitio web</p>
                         </div>
                         <div class="imgBx">
                         </div>
                         <div class="details">
                         </div>
                       </div>
                   </div>
                  
                 </div>
                 <div class="swiper-slide">
                   <div class="card">
                       <div class="layer">
                         <div class="content">
                         <i class="fas fa-check"></i>
                                <h3>Mantenimiento Correctivo</h3>
                                <p>Corrijo y empleo nuevas funciones resolviendo los problemas que afecten al sitio web</p>
                         </div>
                         <div class="imgBx">
                         </div>
                         <div class="details">
                         </div>
                       </div>
                   </div>
                   
                   
                 </div>
                 <div class="swiper-slide">
                   <div class="card">
                       <div class="layer">
                         <div class="content">
                         <i class="fas fa-check"></i>
                                <h3>Expanción del contenido</h3>
                                <p>Actualización o modificación del contenido para su disposición en el sitio web</p>
                         </div>
                         <div class="imgBx">
                         </div>
                         <div class="details">
                         </div>
                       </div>
                   </div>
                   
                 </div>
                 <div class="swiper-slide">
                   <div class="card">
                       <div class="layer">
                         <div class="content">
                         <i class="fas fa-check"></i>
                                <h3>Creatibidad</h3>
                                <p>Siempre encuentro la manera de solucionar problemas y retos en cada proyecto</p>
                         </div>
                         <div class="imgBx">
                         </div>
                         <div class="details">
                         </div>
                       </div>
                   </div>
                   
                   
                 </div>
               </div>
             
             </div>
             <a class="button" href="registro.php#angel-ruiz">
             Cotizar
           </a>
           </div>

            </div>

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
                        } else {
                          echo 'logout.php';
                        } ?>"><?php
                              if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
                                echo 'Iniciar Sesión';
                              } else {
                                echo 'Cerrar Sesión';
                              } ?>
              </a>
            </li>
            <li class="nav__list-item"><a href="cuenta.php#angel-ruiz"> Tu cuenta</a></li>
            <li class="nav__list-item"><a href="proyectos.php#angel-ruiz">Proyectos</a></li>
            <li class="nav__list-item"><a href="mailto:wingsdevs@gmail.com">Contacto</a></li>

          </ul>
        </div>

      </div>

    </div>
  </div>