<?php
date_default_timezone_set('America/Mexico_City');
$fecha =  date('2021-02-28-H-i-s');



require "phpqrcode/qrlib.php";


//Declaramos una carpeta temporal para guardar la imagenes generadas
// Estructura de la carpeta deseada
$estructura = './temp/qr/';

// Para crear una estructura anidada se debe especificar
// el parámetro $recursive en mkdir().
if (!file_exists($estructura))
mkdir($estructura, 0777, true);

// if (!mkdir($estructura, 0777, true)) {
//     die('Fallo al crear las carpetas...');
// }

//Si no existe la carpeta la creamos

//Declaramos la ruta y nombre del archivo a generar
$filename = $estructura.$fecha.'CodeQr.png';

//Parametros de Condiguración

$tamaño = 2.6; //Tamaño de Pixel
$level = 'L'; //Precisión Baja
$framSize = 2.3; //Tamaño en blanco




$contenido11 = "Tiked <br>Nombre de titular:" . '$titular' . "<br>" . '$url'; //Texto


//Enviamos los parametros a la Función para generar código QR 
QRcode::png($contenido11, $filename, $level, $tamaño, $framSize);

//Mostramos la imagen generada
// echo '<p><img src="' . $estructura . basename($filename) . '" /></p><hr/>';
$qr = $filename;
