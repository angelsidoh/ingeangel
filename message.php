<?php require_once 'send-mail.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
</head>
<?php

setlocale(LC_ALL, 'es_MX');

$miFecha1= gmmktime(12,0,0,7,24,2021);
$miFecha2 =gmmktime(12,0,0,8,24,2021);
echo $miFecha11= utf8_encode(strftime("%A, %d de %B de %Y", $miFecha1));
echo $miFecha12= utf8_encode(strftime("%A, %d de %B de %Y", $miFecha2));

?>
<body>

    <div style="background-color: #161616;
        width:640px;
    height:800px;
    margin:0 auto;
    box-shadow: -1px -1px 5px rgb(255, 255, 255, 0.1),
    1px 1px 20px rgba(0,0,0,0.7),
    inset 1px -1px 5px rgb(255, 255, 255, 0.1),
    inset 1px 1px 5px rgba(0,0,0,0.7);" class="header">
        <div style="
    width:220px;
    height:80px;
    margin: 0 auto;
   " class="imagen">

            <img style="
    width:220px;
    height:80px;
    margin: 20px auto;
    filter: drop-shadow(1px 2px 5px #ff4800);
   " src="https://wingsdevs.com/img/terceros/wingsdevslog.svg" alt="imagen">

        </div>
        <div style="
    text-align: center;
    color:#ffffff;
    margin-top: 0px;
    " class="textbienvenida">
            <h1 style="color:#f5d108; font-size:45px;">Información Sobre su Proyecto</h1>
            <p style="color:green; font-size:22px;">Hoy: <?php echo $miFecha11;?></p>
            <p style="color:white; font-size:20px;">Hemos conmenzado con el paso:</p>
            <p style="color:green; font-size:22px;">eSTOY TOCANDO TETA</p>
            <p style="color:white; font-size:20px;">Que tendrá una duración de</p>
            <p style="color:green; font-size:22px;">X Días</p>
            <p style="color:white; font-size:20px;">Es decir, la fecha estimada para completar esté paso es el día:</p>
            <p style="color:green; font-size:22px;"><?php echo $miFecha12?></p>

        
             
           
            <br><br>




            <a style="
    background-color: #fe4918;
    padding: 1px 40px;
    color: #ffffff;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
    font-size: 20px;
    border-radius:12px;
    display: inline-block;
    transition: all .1s ease;
    border: 2px solid #fe4918;
    " href="https://wingsdevs.com/login.php#angel-ruiz">
                <p>ver detalles</p>
            </a>

        </div>



    </div>


</body>

</html>
<?php
$correo = 'angel._ruiz@hotmail.com';
$metodo = 'PayPal';
date_default_timezone_set('America/Mexico_City');

$fechafinmasseven= date('Y-m-d H:i:s');
$idpago = 1;
$tokencontrato = 'abc';
$idproyecto  = 3;
$link = 'pago.php?pago='.$tokencontrato. '-' . $idpago . '$' . $idproyecto;
$indenti=$tokencontrato. '-' . $idpago . '$' . $idproyecto; 
$meses = rand(1, 12);
$hosting = 100;
$dominio = 150;
$programacion = 2800;
$mantemiento = 200;
$bdatos = 800;
$total = 4000;
$paso = 2;
$duracion = 2;
$proyecto = 'wingsdevs.com';
$descripcion = 'Esto aqui';

// enviar_correo115($correo, $miFecha11, $paso,$descripcion, $duracion, $miFecha12,$proyecto);
