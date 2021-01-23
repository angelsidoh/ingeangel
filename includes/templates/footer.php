
<div class="footer">
    <div class="fondo__footer">
    <div class="elem1__fondo">
            <div class="text1__elem1">
                <h3>
                Misión
                </h3>
                <p>
                   <br> <br>
                   Ayudar a nuestros clientes a cumplir con un objetivo importante como tener identidad en internet, dando soluciones en tiempo y forma, a cada reto impuesto por los mismos.
                </p>   
                   
                <a href="index.php#"><div class="imglogo"></div></a>
            </div>
        </div>
        <div class="elem4__fondo">
            <div class="text1__elem1">
                <h3>
                Visión
                </h3>
                <p>
                <br> <br>    
                Convertirnos en los desarrolladores web preferidos de nuestros clientes incorporando conocimiento cada vez más avanzado y ponerlo al servicio de los mismos.</p>
            </div>
            <!-- <div class="feeds__elem4">
                      GRID LISTO 10-12
            </div> -->
        </div>
        <!-- <div class="elem1__fondo">
            <div class="text1__elem1">
                <h3>
                    Sobre Mí
                </h3>
                <p>Soy desarrollador de aplicaciones web, trabajo de forma independiente, con un amplio conocimiento de lenguajes de programación como; HTML5, CSS3, PHP, JAVASCRIPT y Programación de bases de datos con MySql. Acumulando más de 8 años de experiencia dentro de está área de Ingeniería.</p>
                <a href="index.php"><div class="imglogo"></div></a>
            </div>
        </div> -->
        <div class="elem2__fondo">
            <div class="text1__elem2">
                <h3>
                    Contacto
                </h3>
                <div class="a__text1">
                    <div class="icono1__a">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="text1__a">
                        <p>San José de la Mina #42 Col. San José de la Mina, Uruapan Michoacán, México. </p>
                    </div>
                    <div class="icono2__a">
                        <i class="fas fa-phone-square-alt"></i>
                        <i class="fab fa-whatsapp-square"></i>
                    </div>
                    <div class="text2__a">
                        <p>452 144 16 89</p>
                    </div>
                    <div class="icono3__a">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="text3__a">
                        
                    </div>
                </div>
                <div class="iconos__elem2">
                    
                    <a href="https://www.facebook.com/Angel.Sidoh"><i class="fab fa-facebook-square"></i></a>
                 
                    <a href="https://www.youtube.com/channel/UCvuZS4_bAXe0aVed8KxkAYg?view_as=subscriber"><i class="fab fa-youtube"></i></a>
                    
                </div>
            </div>
        </div><!--elem2__fond-->
        <div class="elem3__fondo">
            <div class="text1__elem3">
                <h3>
                    Información
                </h3>
            </div><!--text1__elem3-->
            <div class="ico__elem3">
                <a href="curriculo.php" class = "efecto"><i class="fas fa-angle-right"><p></p> </i>Nuestro equipo</a>
                <a href="#"class = "efecto"><i class="fas fa-angle-right"> <p></p>
                    </i>Preguntas frecuentes</a>
                <a href="condiciones.php"class = "efecto"><i class="fas fa-angle-right"><p></p>  </i>Términos y Condiciones</a>
                <a href="politicas.php"class = "efecto"><i class="fas fa-angle-right"><p></p>  </i>Políticas de privacidad</a>
                <a href="#"class = "efecto"><i class="fas fa-angle-right"><p></p>  </i>Reembolsos</a>
                <a href="#"class = "efecto"><i class="fas fa-angle-right"><p></p>  </i>Artículos</a>
            </div>
            <div class="item1__fondo">
                <p>¿Necesitas ayuda para
                    <br> crear una pagina web de tu negocio?</p>
                <a href="" class = "button">Servicio Personalizado</a>
            </div>        
            
        </div><!--elem3__fondo-->
        <!-- <div class="elem4__fondo">
            <div class="text1__elem4">
                <h3>
                    Instagram
                </h3>
            </div>
            <div class="feeds__elem4">
                      GRID LISTO 10-12
            </div>
        </div> -->
  </div>
  <div class="legenda">
      <p> Copyrigth © 2020 - 2021 Todos los derechos resevados https://ingeangel.com</p>
      <a href="#contactodesarrollador"> Desarrollado por Ingeniero: José Angel Ruiz Chávez</a>
  </div>
</div><!--footer-->
<script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    
    <script src="https://kit.fontawesome.com/f429da79c0.js" crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
	<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>
	<script src="js/plugins/jquery.lettering-0.6.1.min.js"></script>
	<!-- MaxCDN Bootstrap plugins -->
	
	
	<!-- custom scrollbar plugin -->
    <script src="js/plugins/malihu-custom-scrollbar-plugin-master/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js?v=<?php echo time(); ?>"></script>
    <script>
    /* ésto comprueba la localStorage si ya tiene la variable guardada */
    function compruebaAceptaCookies() {
    if(localStorage.aceptaCookies == 'true'){
        cajacookies.style.display = 'none';
    }
    }

    /* aquí guardamos la variable de que se ha
    aceptado el uso de cookies así no mostraremos
    el mensaje de nuevo */
    function aceptarCookies() {
    localStorage.aceptaCookies = 'true';
    cajacookies.style.display = 'none';
    }

    /* ésto se ejecuta cuando la web está cargada */
    $(document).ready(function () {
    compruebaAceptaCookies();
    });
    </script><!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-NMVHLC0SJF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NMVHLC0SJF');
</script> -->
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    <div id="cajacookies">
<p><div onclick="aceptarCookies()" class="pull-right btncookie third"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</div>
Éste sitio web usa cookies, si permanece aquí acepta su uso.
Puede leer más sobre el uso de cookies en nuestra <a href="politicas.php">política de privacidad</a>.
</p>
</div>
<script>
    
    function cambiaVisibilidad(visible, elemento){
        console.log("¿Elemento %s está visible?: %s", elemento.id, visible);
        if(visible == true){
            $("#efecto-ventanaleft").addClass('ventanaleft-efecto');
            $("#efecto-ventanaleft").addClass('ventanaleft-efecto');
        }
    }
    
    function cambiaVisibilidad1(visible, elemento){
        console.log("¿Elemento %s está visible?: %s", elemento.id, visible);
        if(visible == true){
            $("#efecto-ventanaright").addClass('ventanaright-efecto');
            $("#efecto-ventanaright").addClass('ventanaright-efecto');
        }
    }
    function cambiaVisibilidad2(visible, elemento){
        console.log("¿Elemento %s está visible?: %s", elemento.id, visible);
        if(visible == true){
            $("#efecto-ventanaleft1").addClass('ventanaleft-efecto');
            $("#efecto-ventanaleft1").addClass('ventanaleft-efecto');
        }
    }
    function cambiaVisibilidad3(visible, elemento){
        console.log("¿Elemento %s está visible?: %s", elemento.id, visible);
        if(visible == true){
            $("#efecto-ventanaright1").addClass('ventanaright-efecto');
            $("#efecto-ventanaright1").addClass('ventanaright-efecto');
        }
    }
    function cambiaVisibilidad4(visible, elemento){
        console.log("¿Elemento %s está visible?: %s", elemento.id, visible);
        if(visible == true){
            $("#dinamico-efecto").addClass('dinamico-efectox');
            $("#dinamico-efecto").addClass('dinamico-efectox');
        }
    }
    
    var paquetes = document.getElementById("efecto-ventanaleft");
    var paquetes1 = document.getElementById("efecto-ventanaright");
    var paquetes2 = document.getElementById("efecto-ventanaleft1");
    var paquetes3 = document.getElementById("efecto-ventanaright1");
    var paquetes4 = document.getElementById("dinamico-efecto");
    
    inViewportPartially(paquetes, cambiaVisibilidad);
    inViewportTotally(paquetes, cambiaVisibilidad);

    inViewportPartially1(paquetes1, cambiaVisibilidad1);
    inViewportTotally1(paquetes1, cambiaVisibilidad1);

    inViewportPartially2(paquetes2, cambiaVisibilidad2);
    inViewportTotally2(paquetes2, cambiaVisibilidad2);

    inViewportPartially3(paquetes3, cambiaVisibilidad3);
    inViewportTotally3(paquetes3, cambiaVisibilidad3);

    inViewportPartially4(paquetes4, cambiaVisibilidad4);
    inViewportTotally4(paquetes4, cambiaVisibilidad4);
</script>
<script type="text/javascript">
function moverseA(idDelElemento) {
    location.hash = "#" + idDelElemento;
}
function capturarf5(e){
	var code = (e.keyCode ? e.keyCode : e.which);
	if(code == 116) {
		moverseA("inicio"); // sin el #
	 }
}

document.onkeydown=capturarf5;

</script>
</body>

</html>