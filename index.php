<?php
require 'includes/templates/header.php';

require_once('includes/funciones/consultas.php');
$resultadoProyecto = obtenerPrecios(1);

if ($resultadoProyecto->num_rows) {
    foreach ($resultadoProyecto as $proyecto) {

        $precioBasico = $proyecto['basico_precio'];
        $precioNegocio = $proyecto['negocio_precio'];
        $precioProfesional = $proyecto['profesional_precio'];
        $precioHosting = $proyecto['hosting_precio'];
        $precioDominio = $proyecto['dominio_precio'];
        $precioMantenimiento = $proyecto['mantenimiento_precio'];
        $precioBD = $proyecto['basesdatos_precio'];
    }
}
?>

<title>Desarrollo Web</title>
<meta name="description" content="Aquí encontraras a los mejores programadores/desarrolladores web con la tecnología mas avanzada para crear tu página/sitio web con un diseño totalmente personalizado a tus necesidades.">
<meta name="title" content="Desarrollo Web">
<meta name="keywords" content="Programador Web, Desarrollo Web, ¿Dónde puedo hacer mi pagina web?, ¿Dónde puedo hacer mi sitio web?, Quiero a alguien que haga mi página web, Quiero a alguien que haga mi sitio web , Costos de hacer una página web, Costos de hacer una sitio web " />
<meta name="author" content="José Angel Ruiz Chávez" />
<meta name="copyright" content="José Angel Ruiz Chávez" />



<!-- <div class="contenedorx">
    <div id="paquetes" class="contenedor-paquetes">
        <div class="paquete1">
            <button class="center">
                <div class="text-paquete1">
                    <div class="title">
                        <div class="text">
                            <h1>Paquete Basico</h1>
                        </div>
                        <div class="hr">
                            <span><i class="far fa-bookmark"></i></span>
                        </div>
                    </div>
                    <div class="subtitle">
                        <div class="text">
                            <h3>Ideal para empresas y negocios pequeños, además también para emprendedores.</h3>
                            <div class="hr">
                                <span> <i class="fas fa-angle-double-down"></i> </span>
                            </div>
                        </div>
                    </div>
                    <div class="ventaja">
                        <div class="text">
                            <p>1. Diseño básico de la página Web (En software de diseño gráfico)</p>
                            <p>2. Programación / Maquetación en html5, css3, php y JavaScript</p>
                            <p>3. Dominio gratis el primer año (Segundo año se paga una cuota)</p>
                            <p>4. Hosting (10GB de almacenamiento en SSD para una mejor velocidad)</p>
                            <p>5. Correos personalizados con tu dominio (Ejemplo: info@tudominio.com)</p>
                            <p>6. Certificado SSL de seguridad</p>
                            <p>7. Registro de una cuenta en Google Analytics para que revisé los resultados de tráfico en su sitio web.</p>
                        </div>
                    </div>
                    <a href="#" class="btn third">Información</a>
                </div>
            </button>
        </div>

        <div class="paquete2">
            <button class="center">
                <div class="text-paquete1">
                    <div class="title">
                        <div class="text">
                            <h1>Paquete Negocios</h1>
                        </div>
                        <div class="hr">
                            <span><i class="far fa-bookmark"></i></span>
                        </div>
                    </div>
                    <div class="subtitle">
                        <div class="text">
                            <h3>Ideal para empresas o negocios Medianos, Profesionista Independiente, con capacidades de brindar diferentes productos y servicios.</h3>
                            <div class="hr">
                                <span> <i class="fas fa-angle-double-down"></i> </span>
                            </div>
                        </div>
                    </div>
                    <div class="ventaja">
                        <div class="text">
                            <p>1. Diseño básico de la página Web (En software de diseño gráfico)</p>
                            <p>2. Programación / Maquetación en html5, css3, php y JavaScript además de bases de datos en MySql conectadas a la página.</p>
                            <p>3. Capacidad de bases de datos 1 a 20 servicios o 1 a 20 productos distintos, además de una base de datos para registrar e iniciar sesión para los usuarios de tu página web, y una sección para dar seguimientos a todos los pedidos de tus clientes de la página web. (Ejemplo enlace)</p>
                            <p>4. Dominio gratis el primer año (Segundo año se paga una cuota)</p>
                            <p>5. Hosting (10GB de almacenamiento en SSD para una mejor velocidad)</p>
                            <p>6. Correos personalizados con tu dominio (Ejemplo: info@tudominio.com)</p>
                            <p>7. Certificado SSL de seguridad</p>
                            <p>8. Registro de una cuenta en Google Analytics para que revisé los resultados de tráfico en su sitio web.</p>
                        </div>
                    </div>
                    <a href="#" class="btn third">Información</a>
                </div>
            </button>
        </div>

        <div class="paquete3">
            <button class="center">
                <div class="text-paquete1">
                    <div class="title">
                        <div class="text">
                            <h1>Paquete Profesional</h1>
                        </div>
                        <div class="hr">
                            <span><i class="far fa-bookmark"></i></span>
                        </div>
                    </div>
                    <div class="subtitle">
                        <div class="text">
                            <h3>Ideal para empresas o negocios Medianos/Grandes, Profesionista Independiente; con capacidades de prestar servicios y abastecer la demanda de todos sus productos.</h3>
                            <div class="hr">
                                <span> <i class="fas fa-angle-double-down"></i> </span>
                            </div>
                        </div>
                    </div>
                    <div class="ventaja">
                        <div class="text">
                            <p>1. Diseño básico de la página Web (En software de diseño gráfico)</p>
                            <p>2. Programación / Maquetación en html5, css3, php y JavaScript además de bases de datos en MySql conectadas a la página.</p>
                            <p>3. Capacidad de bases de datos para todos sus servicios y productos, además de una base de datos para registrar e iniciar sesión para los usuarios de tu página, y una sección para dar seguimientos a todos los pedidos de tus clientes de la página web. (Ejemplo enlace)</p>
                            <p>4. Dominio gratis el primer año (Segundo año se paga una cuota)</p>
                            <p>5. Hosting (10GB de almacenamiento en SSD para una mejor velocidad)</p>
                            <p>6. Correos personalizados con tu dominio (Ejemplo: info@tudominio.com)</p>
                            <p>7. Certificado SSL de seguridad</p>
                            <p>8. Registro de una cuenta en Google Analytics para que revisé los resultados de tráfico en su sitio web.</p>
                            <p>9. Cursos gratuitos en una sección para ti y tus empleados, sobre el uso de la plataforma.</p>
                        </div>
                    </div>
                    <a href="#" class="btn third">Información</a>
                </div>
            </button>
        </div>
    </div>
</div> -->
<!-- <div class="contenedorx">
    <div id="paquetes" class="contenedor-paquetes"> -->
<!-- <div class="fleep1">
            <div class="paquete1">
                <button class="center">
                    <div class="card1">
                        <div id="card1-front" class="front">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Paquete Básico</h1>
                                    </div>
                                    <div class="hr">
                                        <span><i class="far fa-bookmark"></i></span>
                                    </div>
                                </div>
                                <div class="subtitle">
                                    <div class="text">
                                        <h3>Ideal para empresas y negocios pequeños, además también para emprendedores.</h3>
                                        <div class="hr">
                                            <span> <i class="fas fa-angle-double-down"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ventaja">
                                    <div class="text">
                                        <h2>Características</h2>
                                        <p>1. Imagen en internet de tu profesión, marca o empresa.</p>
                                        <p>2. Publicaciones limitadas de sus servicios y productos (Para publicidad unicamente)</p>
                                        <p>3. Web única y personalizable.</p>
                                        <p>4. Soporte Técnico.</p>
                                        <p>5. Propiedad total de tu Sitio Web.</p>
                                        <p>6. Alcance ilimitado para atraer clientes nuevos.</p>
                                        <p>7. Tu página/sitio web siempre estará en línea a cualquier hora del día (24horas, 7 días por semana)</p>
                                        <p>8. Información de contacto de tus clientes.</p>

                                    </div>
                                </div>
                                <div class="botones-text">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                            </div>

                        </div>
                        <div id="card1-back" class="back">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Costo Paquete Básico</h1>
                                    </div>
                                    <div class="hr">
                                        <span><i class="fas fa-wallet"></i></span>
                                    </div>
                                </div>
                                <div class="subtitle">
                                    <div class="text">
                                        <h3><i class="fas fa-dollar-sign"></i> <?php

                                                                                $total0 = $precioBasico + $precioHosting + $precioDominio + $precioMantenimiento + $precioBD;


                                                                                echo number_format($total0) . '.00 MXN Mensual.'; ?></h3>
                                        <a href="#">
                                            <p>¿Tienes dudas?</p>
                                        </a>
                                        <p>¡Pregunta antes de contratar!</p>
                                        <div class="hr">
                                            <span> <i class="fas fa-handshake"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ventaja">
                                    <div class="text">
                                        <h2>Contratarás los servicios:</h2>
                                        <p>1. Programación/Maquetación en html5, css3, php y JavaScript</p>
                                        <p>2. Dominio Gratis.</p>
                                        <p>3. Capacidad de bases de datos 1 a 5 servicios o 1 a 10 productos distintos (Para publicidad unicamente).</p>
                                        <p>3. Hosting (10GB de almacenamiento en SSD para una mejor velocidad)</p>
                                        <p>4. Correos personalizados con tu dominio (Ejemplo: info@tudominio.com)</p>
                                        <p>5. Certificado SSL de seguridad</p>
                                        <p>6. Mantenimiento periódico de sistemas de seguridad</p>
                                        <p>7. Modificación y Actualización de contenido</p>
                                        <p>8. Registro de una cuenta en Google Analytics para que revisé los resultados de tráfico en su sitio web.</p>

                                    </div>
                                </div>
                                <div class="botones">
                                    <a href="contratar.php?paquete=1#angel-ruiz" class="button">Contratar</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </button>
            </div>
        </div> -->
<!-- <div class="fleep2">
            <div class="paquete2">
                <button class="center">
                    <div class="card2">
                        <div id="card2-front" class="front">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Paquete Negocios</h1>
                                    </div>
                                    <div class="hr">
                                        <span><i class="far fa-bookmark"></i></span>
                                    </div>
                                </div>
                                <div class="subtitle">
                                    <div class="text">
                                        <h3>Ideal para empresas o negocios Medianos, Profesionista Independiente, con capacidades de brindar diferentes productos y servicios.</h3>
                                        <div class="hr">
                                            <span> <i class="fas fa-angle-double-down"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ventaja">
                                    <div class="text">
                                        <h2>Características</h2>
                                        <p>1. La imagen en internet de tu profesión, marca, o empresa.</p>
                                        <p>2. Publicaciones limitadas de sus servicios y productos (Para publicidad y ventas en linea)</p>
                                        <p>3. Programación de APIS para realizar ventas en línea.</p>
                                        <p>4. Sección de Pedidos y seguimiento de los mismos.</p>
                                        <p>5. Web única y personalizable.</p>
                                        <p>6. Soporte Técnico.</p>
                                        <p>7. Propiedad total de su Sitio Web.</p>
                                        <p>8. Alcance ilimitado para atraer clientes nuevos.</p>
                                        <p>9. Página/sitio web en linea 24horas, 7 días por semana (Para unicamente por Mantenimiento)</p>
                                        <p>10. Información de contacto de sus clientes.</p>
                                    </div>
                                </div>
                                <div class="botones-text">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                            </div>

                        </div>
                        <div id="card2-back" class="back">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Costo Paquete Negocios</h1>
                                    </div>
                                    <div class="hr">
                                        <span><i class="fas fa-wallet"></i></span>
                                    </div>
                                </div>
                                <div class="subtitle">
                                    <div class="text">
                                        <h3><i class="fas fa-dollar-sign"></i> 
                                        <?php

                                        $total1 = $precioNegocio + $precioHosting + $precioDominio + $precioMantenimiento + $precioBD;


                                        echo number_format($total1) . '.00 MXN Mensual.'; ?>
                                        </h3>
                                        <a href="#">
                                            <p>¿Tienes dudas?</p>
                                        </a>
                                        <p>¡Pregunta antes de contratar!</p>
                                        <div class="hr">
                                            <span> <i class="fas fa-handshake"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ventaja">
                                    <div class="text">
                                        <h2>Contratarás los servicios:</h2>
                                        <p>1. Programación / Maquetación en html5, css3, php y JavaScript además de bases de datos en MySql conectadas a la página.</p>
                                        <p>2. Capacidad de bases de datos 1 a 6 servicios o 1 a 20 productos distintos. (Para publicidad y ventas en linea)</p>
                                        <p>3. Dominio Gratis.</p>
                                        <p>4. Hosting (10GB de almacenamiento en SSD para una mejor velocidad)</p>
                                        <p>5. Correos personalizados con tu dominio (Ejemplo: info@tudominio.com)</p>
                                        <p>6. Certificado SSL de seguridad</p>
                                        <p>7. Mantenimiento periódico de sistemas de seguridad</p>
                                        <p>8. Modificación y Actualización de contenido</p>
                                        <p>9. Registro de una cuenta en Google Analytics para que revisé los resultados de tráfico en su sitio web.</p>
                                    </div>
                                </div>
                                <div class="botones">
                                    <a id="comprarbtn" href="contratar.php?paquete=2#angel-ruiz" class="button">Contratar</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </button>
            </div>
        </div> -->
<!-- <div class="fleep3">
            <div class="paquete3">
                <button class="center">
                    <div class="card3">
                        <div id="card3-front" class="front">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Paquete Profesional</h1>
                                    </div>
                                    <div class="hr">
                                        <span><i class="far fa-bookmark"></i></span>
                                    </div>
                                </div>
                                <div class="subtitle">
                                    <div class="text">
                                        <h3>Ideal para empresas o negocios Medianos/Grandes, Profesionista Independiente; con capacidades de prestar servicios y abastecer la demanda de todos sus productos.</h3>
                                        <div class="hr">
                                            <span> <i class="fas fa-angle-double-down"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ventaja">
                                    <div class="text">
                                        <h2>Características</h2>
                                        <p>1. La imagen en internet de tu profesión, marca, o empresa.</p>
                                        <p>2. Publicaciones ILIMITADAS de sus servicios y productos (Para publicidad y ventas en linea)</p>
                                        <p>3. Programación de APIS para realizar ventas en línea.</p>
                                        <p>4. Sección de Pedidos y seguimiento de los mismos.</p>
                                        <p>5. Web única y personalizable.</p>
                                        <p>6. Soporte Técnico.</p>
                                        <p>7. Propiedad total de su Sitio Web.</p>
                                        <p>8. Alcance ilimitado para atraer clientes nuevos.</p>
                                        <p>9. Página/sitio web en linea 24horas, 7 días por semana (Para unicamente por Mantenimiento)</p>
                                        <p>10. Información de contacto de sus clientes.</p>
                                    </div>
                                </div>
                                <div class="botones-text">
                                    <i id="mybutton1" class="fas fa-exchange-alt"></i>
                                </div>
                            </div>

                        </div>
                        <div id="card3-back" class="back">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Costo Paquete Profesional</h1>
                                    </div>
                                    <div class="hr">
                                        <span><i class="fas fa-wallet"></i> </span>
                                    </div>
                                </div>
                                <div class="subtitle">
                                    <div class="text">
                                        <h3><i class="fas fa-dollar-sign"></i>
                                        <?php

                                        $total2 = $precioProfesional + $precioHosting + $precioDominio + $precioMantenimiento + $precioBD;


                                        echo number_format($total2) . '.00 MXN Mensual.'; ?>
                                        </h3>
                                        <a href="#">
                                            <p>¿Tienes dudas?</p>
                                        </a>
                                        <p>¡Pregunta antes de contratar!</p>
                                        <div class="hr">
                                            <span> <i class="fas fa-handshake"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ventaja">
                                    <div class="text">
                                        <h2>Contratarás los servicios:</h2>
                                        <p>1. Programación / Maquetación en html5, css3, php y JavaScript además de bases de datos en MySql conectadas a la página.</p>
                                        <p>2. Capacidad de bases de datos para todos sus servicios y productos, además de una base de datos para registrar a los usuarios de tu pagina web.</p>
                                        <p>3. Dominio gratis.</p>
                                        <p>4. Hosting (10GB de almacenamiento en SSD para una mejor velocidad).</p>
                                        <p>5. Correos personalizados con tu dominio (Ejemplo: info@tudominio.com)</p>
                                        <p>6. Certificado SSL de seguridad</p>
                                        <p>7. Mantenimiento periódico de sistemas de seguridad</p>
                                        <p>8. Modificación y Actualización de contenido</p>
                                        <p>9. Registro de una cuenta en Google Analytics para que revisé los resultados de tráfico en su sitio web.</p>

                                    </div>
                                </div>
                                <div class="botones">
                                    <a id="comprarbtn" href="contratar.php?paquete=3#angel-ruiz" class="button">Contratar</a>
                                </div>
                            </div>

                        </div>
                </button>
            </div> -->
<!-- </div>
    </div> -->




<div class="contendor-efecto">
    <div class="titulo-seccion">
        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Mejoras</h1>
    </div>
</div>

<div class="estructurasubcards">
    <div class="contanedorsubcards">
        <div class="cardsub">
            <div class="imgbox" data-text="Seguridad">
                <i class="fas fa-user-shield"></i>
            </div>
            <div class="contentsub">
                <h3>Seguridad</h3>
                <p>Monitorización, nuevos parches de seguridad, bases de datos seguras, y control de versiones de todo el proyecto</p>
                <!-- <a class="button" href="#">Leer</a> -->
            </div>
        </div>
        <div class="cardsub">
            <div class="imgbox" data-text="Hosting y Dominio">
                <i class="fas fa-hdd"></i>
            </div>
            <div class="contentsub">
                <h3>Hosting y Dominio</h3>
                <p>Contacto con los mejores provedores de estos servicios para México y otros países</p>
                <!-- <a class="button" href="#">Leer</a> -->
            </div>
        </div>
        <div class="cardsub">
            <div class="imgbox" data-text="Responcivo">
                <i class="fas fa-laptop"></i> <i style="font-size: 20px; transform: rotate(70deg);" class="fas fa-slash"></i><i class="fas fa-mobile-alt"></i>

            </div>
            <div class="contentsub">
                <h3>Responcivo</h3>
                <p>Proyectos web con capacidades de ajustarse automaticamente a cualquier dispocitivo con el que acceden los clientes</p>
                <!-- <a class="button" href="#">Leer</a> -->
            </div>
        </div>
    </div>
    <div class="contanedorsubcards">
        <div class="cardsub">
            <div class="imgbox" data-text="Optimización de recursos">
                <i class="fas fa-photo-video"></i>

            </div>
            <div class="contentsub">
                <h3>Optimización de recursos</h3>
                <p>Mejoramos las velocidades de carga de tu sitio web, bajando el peso de archivos al máximo sin perder calidad</p>
                <!-- <a class="button" href="#">Leer</a> -->
            </div>
        </div>
        <div class="cardsub">
            <div class="imgbox" data-text="Herramientas extra">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="contentsub">
                <h3>Herramientas extra</h3>
                <p>Herramientas de utilidad que permiten a su empresas o negocios ver estadistica de sus sitios web por ejemplo; Google Analytics</p>
                <!-- <a class="button" href="#">Leer</a> -->
            </div>
        </div>
    </div>
</div>
<div class="contendor-efecto">
    <div class="titulo-seccion" id="promos">
        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Promociones</h1>
    </div>
</div>

<?php require 'promo.php'; ?>
<!-- <div class="contendor-efecto">
    <div class="titulo-seccion">
        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;"> Diseño en software</h1>
    </div>
</div>
<div class="container-videoface">
<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F108991444712996%2Fvideos%2F591249598538609%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay;" allowFullScreen="true"></iframe>
</div> -->



<div class="contenedor-video">
    <video autoplay muted loop poster="img/books-min.jpg">
        <source id="center" src="video/atxb.mp4" type="video/mp4">


    </video>
    <div class="contendor-efecto">
        <div class="titulo-seccion">
            <h1 id="sparklemaster" class="sparklemaster" style="color:  #ffffff;">Animación</h1>
        </div>
        <a class="button" href="https://fb.watch/7Eu9KNuGaz/" targZet="_blank">Ver</a>
    </div>
</div>
<div class="contendor-efecto">
    <div class="titulo-seccion">
        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Tecnología</h1>
    </div>
</div>







<div class="backgroundsubcards">
    <div class="contenedor-efecto">
        <div id="efecto-ventanaleft" class="contenedorx">
            <div class="ventana-left">
                <div class="marcotext-left">
                    <div class="descripcion">
                        <div class="tecnologia1">
                            <i class="fab fa-html5"></i>
                            <div class="titulo-tecnologia">
                                <h1 id="sparklemaster" class="sparklemaster">HTML-5</h1>
                            </div>
                            <div class="descripcion-tecnologia">
                                <h3>Historia</h3>
                                <p>Desarrollada por el físico Tim Berners-Lee, con la idea de poder compartir documentos por internet, y uniendo fuerzas con Robert Cailliau Ingeniero en Sistemas, Presentaron el proyecto ganador ante la World Wide Web.
                                </p>
                                <p>
                                    En wingsDevs, este lenguaje de programación (lenguaje de etiquetas HTML) para etiquetar cada elemento que demande el proyecto, siendo capaces etiquetar todo tipo de contenido en una página/sitio web.</p>
                                <h3>Ventajas</h3>
                                <ul>
                                    <li>1. Maquetación de la página web estructurada de una manera personalizada.</li>
                                    <li>2. Mejora del rendimiento debido a la estructura de código.</li>
                                    <li>3. Peso del archivo programado muy pequeño, facilitando su ejecución.</li>
                                    <li>4. Despliegue en el navegador rápido.</li>
                                    <li>5. Compatibilidad alta en todos los navegadores web actuales.</li>
                                </ul>
                                <i class="fas fa-award"></i><br>
                                <!-- <a class="button" href="#">Leer</a> -->
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="contenedor-efecto">
        <div id="efecto-ventanaright" class="contenedorx">
            <div class="ventana-right">
                <div class="marcotext-right">
                    <div class="descripcion">
                        <div class="tecnologia2">
                            <i class="fab fa-css3-alt"></i>
                            <div class="titulo-tecnologia">
                                <h1 id="sparklemaster" class="sparklemaster">CSS3</h1>
                            </div>
                            <div class="descripcion-tecnologia">
                                <h3>Historia</h3>
                                <p>Propuesto en la World Wide Web por Haron Wium Le y Bert Bos, llamada también “hoja de estilos” en un lenguaje de programación que permite dar forma gráfica a etiquetas de html.
                                </p>
                                <p>
                                    En WingsDevs la “hoja de estilos” es para dar seguimiento al diseño entregado por el cliente, cada detalles gráficos quedara plasmado en el proyecto.
                                </p>
                                <h3>Ventajas</h3>
                                <ul>
                                    <li>1. Mejora los tiempos de respuesta.</li>
                                    <li>2. Estructura fiel al código html.</li>
                                    <li>3. Se mantiene en el cache del navegador de los usuarios.</li>
                                    <li>4. Funciones para realizar una página/sitio web responsivo o adaptativo a cualquier dispositivo.</li>
                                    <li>5. Archivos de estilos muy pequeños.</li>
                                </ul>
                                <i class="fas fa-award"></i><br>
                                <!-- <a class="button" href="#">Leer</a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor-efecto">
        <div id="efecto-ventanaleft1" class="contenedorx">
            <div class="ventana-left">
                <div class="marcotext-left">
                    <div class="descripcion">
                        <div class="tecnologia3">
                            <i class="fab fa-php"></i>
                            <div class="titulo-tecnologia">
                                <h1 id="sparklemaster" class="sparklemaster">PHP</h1>
                            </div>
                            <div class="descripcion-tecnologia">
                                <h3>Historia</h3>
                                <p>PHP es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web. Fue creado inicialmente por el programador danés-canadiense Rasmus Lerdorf en 1994.
                                </p>
                                <p>
                                    En WingsDevs este lenguaje de programación es por mucho el más importante de todos. Pues de este depende que tan segura e inteligente puede ser tu página/sitio web.</p>
                                <h3>Ventajas</h3>
                                <ul>
                                    <li>1. Brinda capacidades para la página/sitio web de conexión con bases de datos en MySQL.</li>
                                    <li>2. Capacidad para la página/sitio web de gestionar contenido.</li>
                                    <li>3. Capacidad para el registro de usuarios e inicios de sesión en tu página/sitio web.</li>
                                    <li>4. Gran cantidad de Apis de uso gratuito disponibles.</li>
                                    <li>5. Crea paso de pagos a través de tu página/sitio web con tarjeta de crédito/debito y pasarelas de pago como PayPal.</li>
                                    <li>6. Archivos de Php muy pequeños.</li>
                                    <li>7. Mejora estructura de la página/sitio web.</li>
                                    <li>8. Mejor Optimización de los recursos.</li>
                                </ul>
                                <i class="fas fa-award"></i> <br>
                                <!-- <a class="button" href="#">Leer</a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-efecto">
        <div id="efecto-ventanaright1" class="contenedorx">
            <div class="ventana-right">
                <div class="marcotext-right">
                    <div class="descripcion">
                        <div class="tecnologia4">
                            <i class="fab fa-js-square"></i>
                            <div class="titulo-tecnologia">
                                <h1 id="sparklemaster" class="sparklemaster">JavaScript</h1>
                            </div>
                            <div class="descripcion-tecnologia">
                                <h3>Historia</h3>
                                <p>JavaScript fue desarrollado originalmente por Brendan Eich de Netscape con el nombre de Mocha, el desarrollador se enfrento al problema de las capacidades de velocidad del internet, que hacían torpes a los formularios que interactuaban con los usuarios de una página, pues si por algún motivo se equivocaba tendría que esperar a recargar la pagina del error y volver al formulario para corregirlo. La función de JavaScript arreglo muy bien este problema, permitiendo interactuar con los usuarios previo al envió de los formularios advirtiéndoles de los errores y facilitando su uso.
                                </p>
                                <p>
                                    En WingsDevs este lenguaje brinda inteligencia extra, que puede ser ejecutada desde la computadora del usuario. Esto sirve, por ejemplo, para el efecto de animación que estás viendo en este momento.
                                </p>
                                <h3>Ventajas</h3>
                                <ul>
                                    <li>1. Compatibilidad alta con los navegadores más populares y actualizados.</li>
                                    <li>2. Capacidades extra para una página/sitio web dinámico.</li>
                                    <li>3. Notifica en caso de cometer un error a los usuarios en los formularios.</li>
                                    <li>4. Ejecución en el cliente (computadora del usuario de la página/sitio web), por lo que tu servidor no se verá afectado la carga.</li>
                                    <li>5. Gestión de datos en bases de datos MySQL y PHP</li>
                                    <li>6. Archivos de JavaScript muy pequeños.</li>
                                    <li>7. Amplio catálogo de Apis a para incorporar a tu página/sitio web.</li>
                                </ul>
                                <i class="fas fa-award"></i> <br>
                                <!-- <a class="button" href="#">Leer</a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor-gradientex">
        <div class="contenedor-efecto">
            <div class="efecto-dinamico">

                <div id="dinamico-efecto" class="contenedor-info">
                    <div class="descripcion">
                        <div class="tecnologia5">
                            <i class="fas fa-database"></i>
                            <div class="titulo-tecnologia">
                                <h1 id="sparklemaster" class="sparklemaster">MySQL</h1>
                            </div>
                            <div class="descripcion-tecnologia">
                                <h3>Historia</h3>
                                <p>Fue desarrollado inicialmente por MySQL AB (empresa fundada por David Axmark, Allan Larsson y Michael Widenius). es un tipo de base de datos muy popular para el desarrollo de proyectos web, en gran parte de su desarrollo esta escrita en ANSI y C++.
                                </p>
                                <p>
                                    En WingsDevs, en estos últimos (código ANSI y C++), cuenta con amplia experiencia, con casi 10 años en el campo, brindado a nuestro cliente, mucha mas capacidad para las conexiones con las bases de datos de su página/sitio web.
                                </p>
                                <h3>Ventajas</h3>
                                <ul>
                                    <li>1. Disponibilidad en todas las plataformas o sistemas de servidores.</li>
                                    <li>2. Búsquedas e indexación de campos de texto.</li>
                                    <li>3. Soporte de 500 millones de registros.</li>
                                    <li>4. Soporta 64 índices por tabla (Quiere decir que podremos estructurar tablas muy complejas si es necesario).</li>
                                    <li>5. Ejecución de instrucciones muy rápida.</li>
                                    <li>6. Seguridad de la integridad para los datos de una tabla</li>
                                    <li>7. Posibilidad de descargar archivos para respaldo.</li>
                                    <li>8. Archivos de MySQL pequeños.</li>
                                    <li>9. Compatibilidad con PHP.</li>
                                </ul>
                                <i class="fas fa-award"></i> <br>
                                <!-- <a class="button" href="#">Leer</a> -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'includes/templates/footer.php'

?>