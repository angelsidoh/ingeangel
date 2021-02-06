
<html></html>
<head>
<title>Jquery Easy - Verificar si un dominio esta disponible con php y json</title>
 
<link href="main.css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
 
<script language="javascript">
$(document).ready(function() {
 
    var loading;
    var results;
        var form;
    form = document.getElementById('form');
    loading = document.getElementById('loading');
    results = document.getElementById('results');
 
    $('#Submit').click( function() {
 
        if($('#Search').val() == "")
        {alert('Ingrese un dominio');return false;}
 
        results.style.display = 'none';
        $('#results').html('');
        loading.style.display = 'inline';
 
        $.post('process.php?domain=' + escape($('#Search').val()),{
        }, function(response){
 
            results.style.display = 'block';
            $('#results').html(unescape(response));
            loading.style.display = 'none';
        });
 
        return false;
    });
 
});
</script>
</head>
<body>
<div class="cabecera"><img src="images/logo.gif" /></div>
 
<h3 >Verificar si un dominio esta disponible con php y json</h3>

 
    <form method="post" action="./" id="form">
         <h3 style="color:#FFF">Ingrese solo el nombre del dominio (*sin prefijo .com, .org, etc)</h3>
        <input type="text" autocomplete="off" id="Search" name="domain">
        <input type="submit" id="Submit" value="Submit">
 
    </form>
 
    <div id="loading">Enviando datos....</div>
 
     <div id="results" style="width:420px; height:600px;" ></div>
 
     
 

 </body>
 </html></pre>
En este archivo estamos diseñando nuestro formulario de consulta y estamos creando un metodo con jquery para validar y enviar los datos de mi formulario por ajax hacia el archivo que va aprocesar los datos.
<h5>process.php</h5>
<pre class="brush:php"><?php
set_time_limit(0);
ob_start();
 
########### Extensiones
$extensions = array(
    '.com'      => array('whois.crsnic.net','No match for'),
    '.info'     => array('whois.afilias.net','NOT FOUND'),
    '.net'      => array('whois.crsnic.net','No match for'),
    '.co.uk'    => array('whois.nic.uk','No match'),
    '.nl'       => array('whois.domain-registry.nl','not a registered domain'),
    '.ca'       => array('whois.cira.ca', 'AVAIL'),
    '.name'     => array('whois.nic.name','No match'),
    '.ws'       => array('whois.website.ws','No Match'),
    '.be'       => array('whois.ripe.net','No entries'),
    '.org'      => array('whois.pir.org','NOT FOUND'),
    '.biz'      => array('whois.biz','Not found'),
    '.tv'       => array('whois.nic.tv', 'No match for'),
);
###########
 
if(isset($_GET['domain']))
{
    $domain = str_replace(array('www.', 'http://','/'), NULL, $_GET['domain']);
 
    if(strlen($domain) > 0)
    {
        foreach($extensions as $extension => $who)
        {
            $buffer = NULL;
 
            $sock = fsockopen($who[0], 43) or die('Error Connecting To Server:' . $server);
            fputs($sock, $domain.$extension . "\r\n");
 
                while( !feof($sock) )
                {
                    $buffer .= fgets($sock,128);
                }
 
            fclose($sock);
 
            if(eregi($who[1], $buffer))
            {
                echo '<h4 class="available"><span>Disponible</span>' . $domain. '<b>' . $extension .'</b> Esta Disponible</h4>';
            }
            else
            {
                echo '<h4 class="taken"><span>Tomado</span>' . $domain . '<b>' .$extension .'</b> Esta Tomado</h4>';
            }
            echo '<br />';    
 
            ob_flush();
            flush();
            sleep(0.3);
 
        }
    }
    else
    {
        echo 'Por favor ingrese nombre del dominio';
    }
}
?></pre>

<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Signature Pad demo</title>
  <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link rel="stylesheet" href="css/signature-pad.css?v=<?php echo time(); ?>"">

  

 
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
</html> -->
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
