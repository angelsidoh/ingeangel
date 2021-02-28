<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require 'vendor/autoload.php';

// $correo= 'joseangelruizchavez@gmail.com';
// // $nombre= 'José Angel';
// // $apellido= 'Ruiz Chávez';
// $paso1 = '1.-nos pondremos en contacto con usted';

// // $pass = 'ndosksd';
// // enviar_correo($nombre,$apellido,$pass,$correo);
// enviar_correo1($correo, $paso1);
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
    $mail->setFrom('infoingeangel@gmail.com
', 'Desarrollo de Sitios WEB');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo);

    //Set the subject line
    $mail->Subject = utf8_decode('Nuevo Proyecto Web');

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
   " src="https://ingeangel.com/img/terceros/logooooo02.png" alt="imagen">
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
<h2>Al iniciar sesión en http://ingeangel.com/ verá en la sección -tu cuenta- varias opciones donde le presentamos todos los proyectos (y sus pasos detallados) asociados a su cuenta, datos importantes de su cuenta, pagos y contratos.</h2>
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
    " href="https://ingeangel.com/login.php#angel-ruiz">
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
    function save_mail1($mail)
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
    $mail->setFrom('infoingeangel@gmail.com
', 'Desarrollo de Sitios WEB');

    //Set an alternative reply-to address
    // $mail->addReplyTo('replyto@example.com', 'First Last');
    // $mail->addCC('angelsidohpubg@gmail.com');
    $mail->addBCC('angelsidohpubg@gmail.com');

    //Set who the message is to be sent to
    $mail->addAddress($correo, $nombreTo . ' ' . $apellidoTo);

    //Set the subject line
    $mail->Subject = utf8_decode('Datos importantes cuenta https://ingeangel.com/');

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
                                " src="https://ingeangel.com/img/terceros/logooooo02.png" alt="Logo Mensaje automático">
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
                                " href="https://ingeangel.com/">
                                <h1>https://ingeangel.com/</h1>
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
                                " href="https://ingeangel.com/login.php#angel-ruiz">
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
