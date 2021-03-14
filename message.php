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
   " src="https://ingeangel.com/img/terceros/logooooo02.png" alt="imagen">
    <img style="
        width:220px;
    
    height:220px;
    text-align: center;
    margin: 20px auto;
    padding: 10px;
    
    filter: drop-shadow(1px 2px 5px #ff4800);
   " src="https://www.ingeangel.com/temp/qr/2021-03-12-15-10-51CodeQr.png" alt="https://www.ingeangel.com/temp/qr/2021-03-12-15-10-51CodeQr.png">
        </div>
        <div style="
    text-align: center;
    color:#ffffff;
    margin-top: 280px;
    " class="textbienvenida">
            <h1 style="color:#f5d108; font-size:45px;">Tiket de pago</h1>
            <h2 style="color:#fe4918; font-size: 46px;
">Token: '.$conekta.'</h2>
            <h2>Contrato: '.$contrato.'
            </h2>
            <h2>Nombre del responsable: '.$nombre.'
            </h2>
            <h2>Fecha de pago: '.$fecha.'
            </h2>
            <h2>Periodo de factura:<br>('.$fechainicio.')<br>('.$fechafin.')

            </h2>
            <h2>Monto: $'.$montopago.'</h2>
            
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
    " href="https://ingeangel.com/login.php#angel-ruiz">
                <p>Iniciar Sesión</p>
            </a>

        </div>


       
    </div>


</body>

</html>