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


<div class="index-banner">

</div>


<?php
require 'includes/templates/footer.php'

?>