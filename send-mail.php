<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require 'vendor/autoload.php';


function enviar_correo4($mensaje,$asunto,$tipo_user, $correo,$nombre)
{
    
    $nombreTo = utf8_decode($nombre);
   
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Nuevo mensaje en wingsdevs.com');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo, $nombreTo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Mensajes de tu cuenta. https://wingsdevs.com/');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode(' <div style="background-color: #161616;
    width:800px;
    height:auto;
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
   " src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">
    
        </div>
        <div style="
    text-align: center;
    color:#ffffff;
    margin-top: 0px;
    " class="textbienvenida">
            <h1 style="color:#f5d108; font-size:45px;">Nuevo Mensaje</h1>
            <h2></h2>
            <h2 style="color:#fe4918; font-size: 46px;">Asunto: '.$asunto.'</h2>
            <h2>
            '.$mensaje.'
            </h2>
           
            
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
    " href="https://wingsdevs.com/login#abcdef">
                <p>Iniciar Sesión</p>
            </a>

        </div>


       
    </div>');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    function save_mail4($mail)
    {
        //You can change 'Sent Mail' to any other folder or tag
        $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

        //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
        $imapStream = imap_open($path, $mail->Username, $mail->Password);

        $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
        imap_close($imapStream);

        return $result;
    }
}
function enviar_correo3($nombre, $apellido, $pass, $correo, $idea, $select, $sector)
{
    
    $nombreTo = utf8_decode($nombre);
    $apellidoTo = utf8_decode($apellido);
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Nueva cuenta en wingsdevs.com');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo, $nombreTo . ' ' . $apellidoTo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Datos importantes cuenta https://wingsdevs.com/');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('<div style="background-color: #161616;
                                width:600px;
                                height:900px;
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
                                " src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="Logo Mensaje automático">
                                </div>
                                <div style="
                                text-align: center;
                                color:#ffffff;
                                margin-top: 60px;
                                " class="textbienvenida">
                                <a style="

                                color: #ffffff;
                                font-family: "Roboto", sans-serif;


                                text-decoration: none;
                                font-size: 28px;
                                text-shadow: 0px 0px 10px #ff7b00;
                                " href="https://wingsdevs.com/">
                                <h1>https://wingsdevs.com/</h1>
                                </a>
                                <h1 style="color:#f5d108; font-size:45px;">Bienvenido(a)</h1>

                                <h2 style="

                                color: grey;">Tu cuenta ha sido registrada. A la brevedad posible recibirá un correo con la cotización correspondiente</h2>

                                <h3 style="

                                color: grey;">Puede iniciar sesión con los siguientes datos:</h3>

                                <h2>Ingrese su Correo Electrónico</h2>
                                <h1 style="color:#fe4918; text-decoration: none;">' . $correo . '</h1>
                                <h2>Y su contraseña</h2>
                                <h1 style="color:#fe4918;">' . $pass . '</h1>
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
                                " href="https://wingsdevs.com/login#abcdef">
                                <p>Iniciar Sesión</p>
                                </a>
                                </div></div>');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    function save_mail3($mail)
    {
        //You can change 'Sent Mail' to any other folder or tag
        $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

        //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
        $imapStream = imap_open($path, $mail->Username, $mail->Password);

        $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
        imap_close($imapStream);

        return $result;
    }
}

function enviar_correo2($correo, $idpago, $fechainicio, $fechafin, $montopago, $conekta, $contrato, $nombre, $fecha, $qr)
{
    
    
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Factura de servicios');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Factura pagada');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('<div style="background-color: #161616;
    width:800px;
    height:1100px;
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
   " src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">
   <img style="
   width:220px;

height:220px;
text-align: center;
margin: 20px auto;
padding: 10px;

filter: drop-shadow(1px 2px 5px #ff4800);
" src="https://www.wingsdevs.com'.$qr.'" alt="https://www.wingsdevs.com'.$qr.'">
</div>
<div style="
    text-align: center;
    color:#ffffff;
    margin-top: 300px;
    " class="textbienvenida">
<h1 style="color:#f5d108; font-size:45px;">Tiket de pago</h1>
<h2 style="color:#fe4918; font-size: 46px;
">Token: '.$conekta.'</h2>
<h2 style="color:#ffffff;" >Contrato: '.$contrato.'
</h2>
<h2 style="color:#ffffff;" >Nombre del responsable: '.$nombre.'
</h2>
<h2 style="color:#ffffff;" >Fecha de pago: '.$fecha.'
</h2>
<h2 style="color:#ffffff;" >Periodo de factura:<br>('.$fechainicio.')<br>('.$fechafin.')

</h2>
<h2 style="color:#ffffff;" >Monto: $'.$montopago.'</h2>

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
    " href="https://wingsdevs.com/login#abcdef">
    <p>Iniciar Sesión</p>
</a>

</div>



</div>');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    function save_mail2($mail)
    {
        //You can change 'Sent Mail' to any other folder or tag
        $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

        //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
        $imapStream = imap_open($path, $mail->Username, $mail->Password);

        $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
        imap_close($imapStream);

        return $result;
    }
}
function enviar_correo111($correo, $nombrepagina, $tokencontrato, $fechainicio, $fechafinal, $total)
{
    
    
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Nuevo contrato generado');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Nuevo Proyecto Web');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('
    <div style="background-color: #161616; width:800px; height:1000px; margin:0 auto; box-shadow: -1px -1px 5px rgb(255, 255, 255, 0.1), 1px 1px 20px rgba(0,0,0,0.7), inset 1px -1px 5px rgb(255, 255, 255, 0.1), inset 1px 1px 5px rgba(0,0,0,0.7);" class="header">
        <div style="width:220px; height:80px; margin: 0 auto; "class="imagen">
            <img style="width:220px; height:80px; margin: 20px auto; filter: drop-shadow(1px 2px 5px #ff4800);" src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">
        </div>
        <div style="text-align: center; color:#ffffff; margin-top: 0px;" class="textbienvenida">
            <h1 style="color:#f5d108; font-size:45px;">
                Contratos WingsDevs
            </h1>
            <h2 style="color:yellowgreen; font-size: 46px;">
              Asunto : Nuevo contrato del proyecto('.$nombrepagina.')
            </h2>
            <p style="color:#ffffff; font-size: 18px;">
                Hemos generado un nuevo contrato con el siguiente ID:
            </p>
            <p style="color:#fe4918; font-size: 18px;">
            '. $tokencontrato.' 
            </p>
            iniciando en la fecha:
            <p style="color:#fe4918; font-size: 18px;">'. $fechainicio.'</p> 
            <p style="color :#ffffff;">y concluyendo en la fecha:</p> 
            <p style="color:#fe4918; font-size: 18px;">
            '. $fechafinal.'
            </p>
            <p style="color :#ffffff;"> Por un monto de: </p>
            <p style="color:#fe4918; font-size: 18px;">
            $'. $total.'
            </p>
            <p style="color :#ffffff;"> por mes de contrato. </p><br><br>
            <p style="color :#ffffff;"> Inicie sesión para leer y firmar el contrato.</p>
            <br><br>
            <a style="background-color: #fe4918; padding: 1px 40px; color: #ffffff; text-transform: uppercase; font-weight: bold; text-decoration: none; font-size: 20px; border-radius:12px; display: inline-block; transition: all .1s ease; border: 2px solid #fe4918; "href="https://ingeangel.com/login#abcdef">
            <p>Iniciar Sesión</p>
            </a>

        </div>
</div>');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    // function save_mail111($mail)
    // {
    //     //You can change 'Sent Mail' to any other folder or tag
    //     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    //     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    //     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    //     imap_close($imapStream);

    //     return $result;
    // }
}
function enviar_correo112($correo)
{
    
    
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Nuevo Proyecto Web');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Nuevo Proyecto Web');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('
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
   " src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">

        </div>
        <div style="
    text-align: center;
    color:#ffffff;
    margin-top: 0px;
    " class="textbienvenida">
            <h1 style="color:#f5d108; font-size:45px;">Nuevo Proyecto Web WingsDevs</h1>
           <p> ¡Gracias por su confianza, siempre estamos tratando de mejorar 
               <br>
               
                para brindar el mejor servicio de desarrollo web a nuestros clientes!<br> 
                </p>
                <h3> Hemos sido notificados de un nuevo proyecto, en la brevedad posible nos comunicaremos con usted para revisar los detalles.</h3>
             
           
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
    " href="https://wingsdevs.com/login#abcdef">
                <p>Iniciar Sesión</p>
            </a>

        </div>



    </div>');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    // function save_mail111($mail)
    // {
    //     //You can change 'Sent Mail' to any other folder or tag
    //     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    //     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    //     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    //     imap_close($imapStream);

    //     return $result;
    // }
}
function enviar_correo113($correo, $fecha, $link, $tokencontrato, $meses, $hosting, $dominio, $programacion, $mantemiento, $bdatos, $total)
{
    $hosting = ($hosting*.16) + $hosting;
    $dominio = ($dominio*.16) + $dominio;
    $programacion = ($programacion*.16) + $programacion;
    $mantemiento = ($mantemiento*.16) + $mantemiento;
    $bdatos = ($bdatos*.16) + $bdatos;
    $total = number_format($total,2, '.', ',');
    $hosting = number_format($hosting,2, '.', ',');
    $dominio = number_format($dominio,2, '.', ',');
    $programacion = number_format($programacion,2, '.', ',');
    $mantemiento = number_format($mantemiento,2, '.', ',');
    $bdatos = number_format($bdatos,2, '.', ',');
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Nuevo Pago Pendiente');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Nuevo Pago Pendiente');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('
    <div style="background-color: #161616;
        width:800px;
    height:1200px;
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
   " src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">

        </div>
        <div style="
    text-align: center;
    color:#ffffff;
    margin-top: 0px;
    " class="textbienvenida">
            <h1 style="color:#f5d108; font-size: 45px;">Nuevo Pago Pendiente WingsDevs</h1>
            <p style= "color: #ffffff; font-size: 18px;">Hemos generado un nuevo pago. Deberá pagar antes de la fecha:</p>
            <p style= "color: #ff4800; font-size: 18px;">'.$fecha.'</p>
            <p style= "color: yellow; font-size: 24px;">PAGO ID:</p>
            <p style= "color: #ff4800; font-size: 18px;">'.$tokencontrato.'</p>
            <table  style = "margin: 0  auto;" id="data_table" class="table table-striped">
                <thead>
                    <tr>
                        <th style= "border: 2px solid yellow;"><p style=" color: yellow;">Meses de Servicio</p></th>
                        <th style= "border: 2px solid yellow;"><p style=" color: yellow;">Descripción de servicios</p></th>
                        <th style= "border: 2px solid yellow;"><p style=" color: yellow;">Precio</p></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr id="table">
                        <td style= "border: 1px solid yellow;"><p style= "color: yellow; font-size: 22px;">'.$meses.'</p></td>
                        <td style= "border: 1px solid white;"><p style= "color: #ffffff;">Servicio de Hosting.</p></td>
                        <td style= "border: 1px solid white;">$'.$hosting.'</td>
                    </tr>
                    <tr id="table">
                        <td style= "border: 1px solid yellow;"><p style= "color: yellow; font-size: 22px;">'.$meses.'</p></td>
                        <td style= "border: 1px solid white;"><p style= "color: #ffffff;">Servicio de Dominio.</p></td>
                        <td style= "border: 1px solid white;">$'.$dominio.'</td>
                    </tr>
                    <tr id="table">
                        <td style= "border: 1px solid yellow;"><p style= "color: yellow; font-size: 22px;">'.$meses.'</p></td>
                        <td style= "border: 1px solid white;"><p style= "color: #ffffff;">Servicio de Programación/Construcción del sitio web.</p></td>
                        <td style= "border: 1px solid white;">$'.$programacion.'</td>
                    </tr>
                    <tr id="table">
                        <td style= "border: 1px solid yellow;"><p style= "color: yellow; font-size: 22px;">'.$meses.'</p></td>
                        <td style= "border: 1px solid white;"><p style= "color: #ffffff;">Servicio de Mantenimiento General para el proyecto.</p></td>
                        <td style= "border: 1px solid white;">$'.$mantemiento.'</td>
                    </tr>
                        <tr id="table">
                        <td style= "border: 1px solid yellow;"><p style= "color: yellow; font-size: 22px;">'.$meses.'</p></td>
                        <td style= "border: 1px solid white;"><p style= "color: #ffffff;">Servicio de programación y mantenimiento de bases MySql.</p></td>
                        <td style= "border: 1px solid white;">$'.$bdatos.'</td>
                    </tr>
                    </tr>
                        <tr id="table">
                        <td style= "border: 2px solid yellow;"><p style=" color: yellow; font-size: 18px;">X</p></td>
                        <td style= "border: 2px solid yellow;"><p style=" color: yellow; font-size: 20px;">Total:</p></td>
                        <td style= "border: 2px solid yellow;"><p style="color: yellow; font-size: 24px;">$'.$total.'</td>
                    </tr>
                  

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
    " href="https://wingsdevs.com/'.$link.'">
                <p>Pagar</p>
            </a>

        </div>



    </div>
    ');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    // function save_mail111($mail)
    // {
    //     //You can change 'Sent Mail' to any other folder or tag
    //     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    //     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    //     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    //     imap_close($imapStream);

    //     return $result;
    // }
}
function enviar_correo114($correo, $metodo, $identi, $total, $link)
{
    $total = number_format($total,2, '.', ',');

    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Nuevo Pago Pendiente');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Nuevo Pago Pendiente');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('
    <div style="background-color: #161616;
    width:640px;
height:900px;
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
" src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">

    </div>
    <div style="
text-align: center;
color:#ffffff;
margin-top: 0px;
" class="textbienvenida">
        <h1 style="color:#f5d108; font-size:45px;">Pago realizado</h1>
        <p style="color: #ffffff;">Método de pago:</p>
        <p style="color: green; font-size: 24px;">'.$metodo.'</p>
        <p style="color: #ffffff;">El estado del pago</p>
       <p style="color: green; font-size: 24px;">ID: '.$identi.'</p>
        <p style="color: #ffffff;">Por un monto de:</p>
       <p style="color: green; font-size: 24px;">$'.$total.'</p>
        
        <p style="color:#ffffff; font-size: 28px; background-color: green;">PAGADO</p>

    
         
       
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
"href="https://wingsdevs.com/'.$link.'">
            <p>Ver detalles</p>
        </a>
        <p style="color:#ffffff; font-size: 10px;">*****Este correo sirve de comprobante de pago.*****</p>
        <p style="color:#ffffff; font-size: 10px;">https://wingsdevs.com/</p>

    </div>



</div>
    ');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    // function save_mail111($mail)
    // {
    //     //You can change 'Sent Mail' to any other folder or tag
    //     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    //     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    //     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    //     imap_close($imapStream);

    //     return $result;
    // }
}
function enviar_correo115($correo, $fecha1, $paso,$descripcion, $duracion, $fecha2,$proyecto)
{
    

    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Nueva Actividad Agendada a tu Proyecto '.$proyecto);

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Nueva Actividad Agendada a tu Proyecto '.$proyecto);

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('
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
" src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">

    </div>
    <div style="
text-align: center;
color:#ffffff;
margin-top: 0px;
" class="textbienvenida">
        <h1 style="color:#f5d108; font-size:45px;">Información Sobre su Proyecto ('.$proyecto.')</h1>
        <p style="color:white; font-size:22px;">Hoy:</p>
        <p style="color:green; font-size:22px;">'.$fecha1.'</p>
        <p style="color:white; font-size:20px;">Hemos conmenzado con el paso:</p>
        <p style="color:green; font-size:22px;">'.$descripcion.'</p>
        <p style="color:white; font-size:20px;">Que tendrá una duración de</p>
        <p style="color:green; font-size:22px;">'.$duracion.' Días</p>
        <p style="color:white; font-size:20px;">Es decir, la fecha estimada para completar esté paso es el día:</p>
        <p style="color:green; font-size:22px;">'.$fecha2.'</p>

    
         
       
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
" href="https://wingsdevs.com/cuenta#abcdef">
            <p>ver detalles</p>
        </a>

    </div>


</div>

    ');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    // function save_mail111($mail)
    // {
    //     //You can change 'Sent Mail' to any other folder or tag
    //     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    //     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    //     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    //     imap_close($imapStream);

    //     return $result;
    // }
}
function enviar_correo116($correo, $descripcion)
{
    

    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Pago Aprovado');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Pago Aprovado');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('
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
" src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">

    </div>
    <div style="
text-align: center;
color:#ffffff;
margin-top: 0px;
" class="textbienvenida">
        <h1 style="color:#f5d108; font-size:45px;">Estado de pago</h1>
        <p style="color:white; font-size:22px;">El pago fue aprovado.</p>
        <p style="color:green; font-size:22px;"></p>
        <p style="color:white; font-size:22px;">En este momento puedes entrar a tu cuenta y revisar el historial de tus pagos.</p>

    
         
       
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
" href="https://wingsdevs.com/cuenta#abcdef">
            <p>ver detalles</p>
        </a>

    </div>


</div>

    ');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    // function save_mail111($mail)
    // {
    //     //You can change 'Sent Mail' to any other folder or tag
    //     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    //     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    //     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    //     imap_close($imapStream);

    //     return $result;
    // }
}
function enviar_correo117($correo, $tokencontrato)
{
    

    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Contratos https://Wingsdevs.com');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Contratos https://Wingsdevs.com');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('
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
" src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">

    </div>
    <div style="
text-align: center;
color:#ffffff;
margin-top: 0px;
" class="textbienvenida">
        <h1 style="color:yellow; font-size:35px;">Firma de Contrato('.$tokencontrato.')</h1>
        <p style="color:#ffffff; font-size:22px;">Estamos muy contentos, hoy firmamos un contrato para trabajar.</p>
        <p style="color:#ffffff; font-size:22px;">Nuestro objetivo principal es entregarle en tiempo y forma este proyecto.</p>
        <p style="color:#ffffff; font-size:22px;">En lo que necesite estamos para servirle.</p>

    
         
       
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
" href="https://wingsdevs.com/cuenta#abcdef">
            <p>ver detalles</p>
        </a>

    </div>


</div>

    ');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    // function save_mail111($mail)
    // {
    //     //You can change 'Sent Mail' to any other folder or tag
    //     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    //     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    //     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    //     imap_close($imapStream);

    //     return $result;
    // }
}

function enviar_correo1($correo, $paso1, $paquete)
{
    
    
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Solicitud de servicios');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Nuevo Proyecto Web');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('<div style="background-color: #161616;
    width:600px;
    height:900px;
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
    margin: 0px auto;
    filter: drop-shadow(1px 2px 5px #ff4800);
   " src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="imagen">
</div>
<div style="
    text-align: center;
    color:#ffffff;
    margin-top: 10px;
    " class="textbienvenida">
<h1 style="color:#f5d108; font-size:45px;">Solicitud de servicios</h1>
<h2 style="color:#fe4918; font-size: 46px;
">Nuevo Proyecto</h2>
<h2>¡Gracias por tu preferencia!<br>'.$paso1.'</h2>
<h2>De esta manera platicaremos un poco sobre sus necesidades para el proyecto, y se definirán objetivos iniciales para comenzar a trabajar.</h2>
<h2>Al iniciar sesión en http://wingsdevs.com/ verá en la sección -tu cuenta- varias opciones donde le presentamos todos los proyectos (y sus pasos detallados) asociados a su cuenta, datos importantes de su cuenta, pagos y contratos.</h2>
<h2>El proyecto comenzará en cuanto se firme y se haga el pago del primer mes de contrato.</h2>
<h2>Seguiremos enviando instrucciones para el seguimiento de su nuevo proyecto</h2>
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
    " href="https://wingsdevs.com/login#abcdef">
    <p>Iniciar Sesión</p>
</a>

</div>



</div>');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    // function save_mail1($mail)
    // {
    //     //You can change 'Sent Mail' to any other folder or tag
    //     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    //     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    //     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    //     imap_close($imapStream);

    //     return $result;
    // }
}

function enviar_correo($nombre, $apellido, $pass, $correo)
{
    
    $nombreTo = utf8_decode($nombre);
    $apellidoTo = utf8_decode($apellido);
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPDebug = 0;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'infoingeangel@gmail.com
';

    //Password to use for SMTP authentication
    $mail->Password = 'hyo2021k5a';

    //Set who the message is to be sent from
    $mail->setFrom('infoingeangel@gmail.com', 'WingsDevs Nueva cuenta en wingsdevs.com');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo, $nombreTo . ' ' . $apellidoTo);

    //Set the subject line
    $mail->Subject = utf8_decode('WingsDevs Datos importantes cuenta https://wingsdevs.com/');

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body = utf8_decode('<div style="background-color: #161616;
                                width:600px;
                                height:900px;
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
                                " src="https://wingsdevs.com/img/terceros/wingprodevsLOGO.png" alt="Logo Mensaje automático">
                                </div>
                                <div style="
                                text-align: center;
                                color:#ffffff;
                                margin-top: 60px;
                                " class="textbienvenida">
                                <a style="

                                color: #ffffff;
                                font-family: "Roboto", sans-serif;


                                text-decoration: none;
                                font-size: 28px;
                                text-shadow: 0px 0px 10px #ff7b00;
                                " href="https://wingsdevs.com/">
                                <h1>https://wingsdevs.com/</h1>
                                </a>
                                <h1 style="color:#f5d108; font-size:45px;">Bienvenido(a)</h1>

                                <h2 style="

                                color: grey;">Tu cuenta ha sido registrada.</h2>

                                <h3 style="

                                color: grey;">Puede iniciar sesión con los siguientes datos:</h3>

                                <h2>Ingrese su Correo Electrónico</h2>
                                <h1 style="color:#fe4918; text-decoration: none;">' . $correo . '</h1>
                                <h2>Y su contraseña</h2>
                                <h1 style="color:#fe4918;">' . $pass . '</h1>
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
                                " href="https://wingsdevs.com/login#abcdef">
                                <p>Iniciar Sesión</p>
                                </a>
                                </div></div>');

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    function save_mail($mail)
    {
        //You can change 'Sent Mail' to any other folder or tag
        $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

        //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
        $imapStream = imap_open($path, $mail->Username, $mail->Password);

        $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
        imap_close($imapStream);

        return $result;
    }
}
