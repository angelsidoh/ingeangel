<?php
function generarQr1($mail, $metodo, $identi, $monto, $link){
    
    require_once('../phpqrcode/qrlib.php');

  
    
    date_default_timezone_set('America/Mexico_City');
   
    $fecha =  date('Y-m-d H:i:s');
    $fechaqr =  date('Y-m-d-H-i-s');
    // $respuestas = pagosconsulta($id);
    $url = 'http://www.wingsdevs.com/'.$link.'#angel-ruiz';
    
    $nombresend = '../temp/qr/'.$identi.$fechaqr. 'codeQr.png';
    
    $nombreqr = $identi.$fechaqr;
    $estructura = '../temp/qr/';
    
    if (!file_exists($estructura))
        mkdir($estructura, 0777, true);
    
    $filename = $estructura . $nombreqr . 'codeQr.png';
    
    $tamaño = 2.6;
    $level = 'L';
    $framSize = 2.3;
    $contenido11 = "Tiked \n Metodo de pago:\n" . $metodo . "\n Monto: " . $pago . "\n Contrato:" . $identi . "\n" . $url;
    QRcode::png($contenido11, $filename, $level, $tamaño, $framSize);
    
    
    $qr = $filename;
    $datos = array(
        'qr' => $qr,
        'nombresend'=> $nombresend
    );
   
    return $datos;
    }
function generarQr($correo, $titular, $id, $pago, $tokenconeckta){
    
require_once('./phpqrcode/qrlib.php');
require_once("includes/modelos/consultanotificaciones.php");
require_once("send-mail.php");
$respuestas = pagosconsulta($id);
date_default_timezone_set('America/Mexico_City');
$tokencontrato = $respuestas['tokencontrato'];
$idproyecto = $respuestas['idproyecto'];
$fecha =  date('Y-m-d H:i:s');
$fechaqr =  date('Y-m-d-H-i-s');
// $respuestas = pagosconsulta($id);
$url = 'http://www.wingsdevs.com//pago.php?pago=' . $tokencontrato . '-' . $id . '$' . $idproyecto.'#angel-ruiz';

$nombresend = '/temp/qr/'.$tokencontrato. '-' . $id .'-'. $idproyecto.$fechaqr. 'codeQr.png';

$nombreqr = $tokencontrato. '-' . $id .'-'. $idproyecto.$fechaqr;
$estructura = './temp/qr/';

if (!file_exists($estructura))
    mkdir($estructura, 0777, true);

$filename = $estructura . $nombreqr . 'codeQr.png';

$tamaño = 2.6;
$level = 'L';
$framSize = 2.3;
$contenido11 = "Tiked \n Nombre de titular:\n" . $titular . "\n Monto: " . $pago . "\n Contrato:" . $tokencontrato . "\n" . $url;
QRcode::png($contenido11, $filename, $level, $tamaño, $framSize);


$qr = $filename;
$datos = array(
    'qr' => $qr,
    'nombresend'=> $nombresend
);
enviar_correo2($correo, $id, $respuestas['fechainicio'], $respuestas['fechafin'], $pago, $tokenconeckta, $respuestas['tokencontrato'], $titular, $fecha, $nombresend);
return $datos;
}

