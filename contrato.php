<?php
require 'includes/templates/header.php';
require_once('includes/funciones/consultas.php');
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
    session_destroy();
    // header('Location: cuenta.php#angel-ruiz');
?>
    <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=http://localhost/01ingeangel.com/logout.php">

    <?php
} else {
?>
<title>Contrato de servicios</title>
<div class="contenedory">
    <div class="contendor-efecto">
        <div class="titulo-seccion">
            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Contrato de prestación de servicios</h1>
        </div>
        <p>Mediante el sitio web ingeangel.com, el C. Pedro Sánchez Tapia, residente de la calle Mina de Oro número 896b colonia Ramón Farias, para iniciar con el proyecto web escritoriosgamer.com
        El ingeniero en Mecatrónica José Angel Ruiz Chávez, residente de la calle San José de la Mina número 42 colonia San José de la Mina, responsable de ingeangel.com y sus servicios.
        Tienen entre sí, justo y acordado este contrato, para la prestación de servicios profesionales independientes, que se regirá por las siguientes clausulas y condiciones;
        </p>
    </div>
</div>



<?php

}
require 'includes/templates/footer.php';
?>