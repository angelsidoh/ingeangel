<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Signature Pad demo</title>
  <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link rel="stylesheet" href="css/signature-pad.css?v=<?php echo time(); ?>"">

  <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie9.css">
  <![endif]-->

 
</head>
<body onselectstart="return false">
  <a id="github" style="position: absolute; top: 0; right: 0; border: 0" href="https://github.com/szimek/signature_pad">
    <img src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub">
  </a>

  <div id="signature-pad" class="signature-pad">
    <div class="signature-pad--body">
      <canvas></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description">Firma de cliente con nombre y dominio extraidos de la base de datos</div>

      <div class="signature-pad--actions">
        <div>
          <button type="button" class="button clear" data-action="clear">Borrar</button>
          <button type="button" class="button" data-action="change-color">Cambiar color de tinta</button>
          <button type="button" class="button" data-action="undo">Ultimo detalle</button>

        </div>
        <div>
          <button type="button" class="button save" data-action="save-png">Guadar firma</button>
          <div type="button" class="button save" data-action="save-jpg"></div>
          <div type="button" class="button save" data-action="save-svg"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/signature_pad.umd.js"></script>
  <script src="js/app.js?v=<?php echo time(); ?>"></script>
</body>
</html>
<!-- <?php
// require 'includes/templates/header.php';
// var_dump(getrusage()) ;
?>
<div class="contenedorx">
    <div id="paquetes" class="contenedor-paquetes">
        <div class="fleep1">
            <div class="paquete1">
                <button class="center">
                    <div class="card1">
                        <div id="card1-front" class="front">
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
                                <div class="botones">
                                    <a id="comprarbtn" href="#" class="button">Contratar</a>
                                </div>
                            </div>

                        </div>
                        <div class="back">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Paquete Basico compra</h1>
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
                                        <p>compra</p>
                                    </div>
                                </div>
                                <div class="botones">
                                    <a href="#" class="button">Contratar</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </button>
            </div>
        </div>
        <div class="fleep2">
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
                                <div class="botones">
                                    <a id="comprarbtn" href="#" class="button">Contratar</a>
                                </div>
                            </div>

                        </div>
                        <div class="back">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Paquete Negocios COMPRAR</h1>
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
                                <div class="botones">
                                    <a id="comprarbtn" href="#" class="button">Contratar</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </button>
            </div>
        </div>
        <div class="fleep3">
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
                                <div class="botones">
                                    <a id="comprarbtn" href="#" class="button">Contratar</a>
                                </div>
                            </div>

                        </div>
                        <div class="back">
                            <div class="text-paquete1">
                                <div class="title">
                                    <div class="text">
                                        <h1>Paquete Profesional Comprar</h1>
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
                                <div class="botones">
                                    <a id="comprarbtn" href="#" class="button">Contratar</a>
                                </div>
                            </div>

                        </div>
                </button>
            </div>
        </div>
    </div>
</div>


<?php
// require 'includes/templates/footer.php'
?> -->
