<?php require_once 'send-mail.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
</head>

<body>

    <div style="background-color: #161616;
        width:800px;
    height:1000px;
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
            <h1 style="color:#f5d108; font-size:45px;">Nuevo Proyecto Web WingsDevs</h1>
            <table  style = "margin: 0  auto;" id="data_table" class="table table-striped">
        <thead>
            <tr>
                <th style= "border-left: 1px solid white; border-right: 1px solid white;">Meses de Servicio</th>
                <th style= "border-left: 1px solid white; border-right: 1px solid white;">Descripción de servicios</th>
                <th style= "border-left: 1px solid white; border-right: 1px solid white;">Precio</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
          
            ?>
               <tr id="<?php echo 'x'; ?>">
               <td style= "border: 1px solid white;"><?php echo 1 ?></td>
               <td style= "border: 1px solid white;"><?php echo 2 ?></td>
               <td style= "border: 1px solid white;"><?php echo 3 ?></td>
             
             
               </tr>
               <tr id="<?php echo 'x1'; ?>">
               <td style= "border: 1px solid white;"><?php echo  '';?></td>
               <td style= "border: 1px solid white;"><?php echo 'Total'; ?></td>
               <td style= "border: 1px solid white;"><?php echo '$'.'Monto'; ?></td>
              
             
               </tr>
            <?php  ?>
        </tbody>
    </table>    
             
           
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
                <p>Iniciar Sesión</p>
            </a>

        </div>



    </div>


</body>

</html>
<?php
$email = 'angel._ruiz@hotmail.com';
date_default_timezone_set('America/Mexico_City');

$fechafinmasseven= date('Y-m-d H:i:s');
$idpago = 1;
$tokencontrato = 'abc';
$idproyecto  = 3;
$link = 'pago.php?pago='.$tokencontrato. '-' . $idpago . '$' . $idproyecto;
$meses = rand(1, 12);
$hosting = 100;
$dominio = 150;
$programacion = 2800;
$mantemiento = 200;
$bdatos = 800;

// enviar_correo113($email, $fechafinmasseven, $link, $tokencontrato, $meses, $hosting, $dominio,$programacion , $mantemiento, $bdatos);
?>