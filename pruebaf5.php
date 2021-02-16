<?php
require 'includes/templates/header.php';
$dato = 1;
require_once('includes/funciones/consultas.php');
$resultadoConsulta = consultaBd($dato);
$vector1[0] = 0;
$vectorDescrip[0] = '';
$vectorFechafin[0] = '';
$cont = 0;

if ($resultadoConsulta->num_rows) {
  foreach ($resultadoConsulta as $Consulta) {

    echo $Consulta['id_paso'] . '-';
    $vector1[$cont] = $Consulta['id_paso'];
    $vectorDescrip[$cont] = $Consulta['descripcion_paso'];
    $vectorFechafin[$cont] = $Consulta['fechafin_paso'];
    $cont++;
  }
}
echo '<pre>';
var_dump($vector1, $vectorDescrip, $vectorFechafin);
echo '</pre>';
?>
<section class="seccion">
  <h2>Tiempo estimado</h2>
  <p>Días Horas Minutos Segundo</p>
</section>
<section class="seccion9999">

<div class="cuenta-regresiva9999 contenedor-cuenta">
  <h4>x</h4>
  <ul class="clearfix">

    <li>
      <p id="dias9999" class="numero"></p>
    </li>
    <li>
      <p>: </p>
      <p id="horas9999" class="numero"></p>
    </li>
    <li>
      <p>: </p>
      <p id="minutos9999" class="numero"></p>
    </li>
    <li>
      <p>:</p>
      <p id="segundos9999" class="numero"></p>
    </li>
  </ul>
</div>
</section>
<?php
for ($i = 0; $i < $cont; $i++) {


?>

  <section class="seccion">

    <div id="midiv" class="cuenta-regresiva<?php echo $i; ?> contenedor-cuenta">
      <h4><?php
          $iaux = $i + 1;
          echo $iaux . '.- Descripción: ' . $vectorDescrip[$i]; ?></h4>
      <ul class="clearfix">

        <li>
          <p id="dias<?php echo $i; ?>" class="numero"></p>
        </li>
        <li>
          <p>: </p>
          <p id="horas<?php echo $i; ?>" class="numero"></p>
        </li>
        <li>
          <p>: </p>
          <p id="minutos<?php echo $i; ?>" class="numero"></p>
        </li>
        <li>
          <p>:</p>
          <p id="segundos<?php echo $i; ?>" class="numero"></p>
        </li>
      </ul>
    </div>
  </section>





<?php

}
require 'includes/templates/footer.php';
date_default_timezone_set('America/Mexico_City');
$fechaini =  date('Y-m-d H:i:s');
$vectorEspecialMenorFecha[0] = 0;
$vectorEspecialMayorFecha = '0';
$espacioMax = 0;
$max = 0;
for ($xx = 0; $xx < $cont; $xx++) {
  
  $dias1 = (strtotime($vectorFechafin[$xx]) - strtotime($fechaini)) / 86400;
  $vectorEspecialMenorFecha[$xx] = $dias1;

  // echo $vectorEspecialMenorFecha[$xx];
    if ($vectorEspecialMenorFecha[$xx] > $vectorEspecialMayorFecha) {
      $vectorEspecialMayorFecha = $vectorEspecialMenorFecha[$xx];
      $max = $xx;
      
  }
}

echo $max;
echo ($vectorEspecialMayorFecha);
echo '->>'.$cont.'->>';
for ($y = 0; $y < $cont; $y++) {

?>
  <script type="text/javascript">
  var cont = '<?php echo $cont;
                    ?>' 
  var max = '<?php echo $max;
                    ?>'
                     var fechaMayor = '<?php echo $vectorEspecialMayorFecha;
                    ?>'
    var fechasvec = '<?php echo $vectorFechafin[$y];
                    ?>'
    abc(fechasvec, max, cont);
    
  </script>
<?php
}
?>
<!-- <script type="text/javascript">
 
  var fechafin = '<?php echo $vectorFechafin[1]; ?>'

  $('.cuenta-regresiva1').countdown(fechafin, function(event) {

    $('#dias1').html(event.strftime('%D'));
    $('#horas1').html(event.strftime('%H'));
    $('#minutos1').html(event.strftime('%M'));
    $('#segundos1').html(event.strftime('%S'));
    $('.cuenta-regresiva1').addClass('coloryellow');
    $('.cuenta-regresiva1').removeClass('colorgreen');
    if((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)){
      $('.cuenta-regresiva1').removeClass('coloryellow');
      $('.cuenta-regresiva1').addClass('colorgreen');
    }

  });
</script>
<script type="text/javascript">
 


  var fechafin = '<?php echo $vectorFechafin[2]; ?>'

  $('.cuenta-regresiva2').countdown(fechafin, function(event) {
    $('#dias2').html(event.strftime('%D'));
    $('#horas2').html(event.strftime('%H'));
    $('#minutos2').html(event.strftime('%M'));
    $('#segundos2').html(event.strftime('%S'));
    $('.cuenta-regresiva2').addClass('coloryellow');
    $('.cuenta-regresiva2').removeClass('colorgreen');
    if((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)){
      $('.cuenta-regresiva2').removeClass('coloryellow');
      $('.cuenta-regresiva2').addClass('colorgreen');
    }
  });
</script>
<script type="text/javascript">
 
  var fechafin = '<?php echo $vectorFechafin[3]; ?>'
  $('.cuenta-regresiva3').countdown(fechafin, function(event) {
    $('#dias3').html(event.strftime('%D'));
    $('#horas3').html(event.strftime('%H'));
    $('#minutos3').html(event.strftime('%M'));
    $('#segundos3').html(event.strftime('%S'));
    $('.cuenta-regresiva3').addClass('coloryellow');
    $('.cuenta-regresiva3').removeClass('colorgreen');
    if((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)){
      $('.cuenta-regresiva3').removeClass('coloryellow');
      $('.cuenta-regresiva3').addClass('colorgreen');
    }

  });
</script>
<script type="text/javascript">
 
  var fechafin = '<?php echo $vectorFechafin[4]; ?>'
  $('.cuenta-regresiva4').countdown(fechafin, function(event) {
    $('#dias4').html(event.strftime('%D'));
    $('#horas4').html(event.strftime('%H'));
    $('#minutos4').html(event.strftime('%M'));
    $('#segundos4').html(event.strftime('%S'));
    $('.cuenta-regresiva4').addClass('coloryellow');
    $('.cuenta-regresiva4').removeClass('colorgreen');
    if((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)){
      $('.cuenta-regresiva4').removeClass('coloryellow');
      $('.cuenta-regresiva4').addClass('colorgreen');
    }
  });
</script>

<script type="text/javascript">
 
  var fechafin = '<?php echo $vectorFechafin[5]; ?>'

  $('.cuenta-regresiva5').countdown(fechafin, function(event) {
    $('#dias5').html(event.strftime('%D'));
    $('#horas5').html(event.strftime('%H'));
    $('#minutos5').html(event.strftime('%M'));
    $('#segundos5').html(event.strftime('%S'));
    $('.cuenta-regresiva5').addClass('coloryellow');
    $('.cuenta-regresiva5').removeClass('colorgreen');
    if((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)){
      $('.cuenta-regresiva5').removeClass('coloryellow');
      $('.cuenta-regresiva5').addClass('colorgreen');
    }
  });
</script>
<script type="text/javascript">



  var fechafin = '<?php echo $vectorFechafin[6]; ?>'

  $('.cuenta-regresiva6').countdown(fechafin, function(event) {
    $('#dias6').html(event.strftime('%D'));
    $('#horas6').html(event.strftime('%H'));
    $('#minutos6').html(event.strftime('%M'));
    $('#segundos6').html(event.strftime('%S'));
    $('.cuenta-regresiva6').addClass('coloryellow');
    $('.cuenta-regresiva6').removeClass('colorgreen');
    if((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)){
      $('.cuenta-regresiva6').removeClass('coloryellow');
      $('.cuenta-regresiva6').addClass('colorgreen');
    }

  });
</script>
<script type="text/javascript">
  



  var fechafin = '<?php echo $vectorFechafin[7]; ?>'

  $('.cuenta-regresiva7').countdown(fechafin, function(event) {
    $('#dias7').html(event.strftime('%D'));
    $('#horas7').html(event.strftime('%H'));
    $('#minutos7').html(event.strftime('%M'));
    $('#segundos7').html(event.strftime('%S'));
    $('.cuenta-regresiva7').addClass('coloryellow');
    $('.cuenta-regresiva7').removeClass('colorgreen');
    if((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)){
      $('.cuenta-regresiva7').removeClass('coloryellow');
      $('.cuenta-regresiva7').addClass('colorgreen');
    }

  });
</script> -->