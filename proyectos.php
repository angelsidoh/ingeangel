<?php
require 'includes/templates/header.php';
?>

<title>Proyectos Web</title>
<meta name="description" content="Una lista de todos nuestros proyectos. Además de proyectos futuros.">
<meta name="title" content="Proyectos Web">
<meta name="keywords" content="Proyectos web, Proyectos páginas web, Portafolio ingeangel, Portafolio web de ingeangel" />
<meta name="author" content="José Angel Ruiz Chávez" />
<meta name="copyright" content="José Angel Ruiz Chávez" />
<div class="imgangel-ruiz">
    <div class="text-imgangel">
        <h4>José Angel Ruiz Chávez <br> Ingeniero en Mecatrónica</h4>
        
        
    </div>
    <img src="img/creadasporlaempresa/fotospc-min.png" alt="">
</div>
<div id="proyectos" class="proyectos-gridconteiner">
    <div class="titulo-seccion">
        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Proyectos WEB</h1>
    </div>
    <div class="menu-proyectos">
       <div class="submenu-proyectos">
            <div class="titulo-proyecto">
               <h1>Proyectos</h1>
            </div>
            <div class="mas-proyecto">
                <input type = "checkbox" id = "checkproyectos" name = "menu">
                    <label for = "checkproyectos">
                    <i id="plus" class="far fa-plus-square"></i>
                    <i id="neg" class="far fa-minus-square" style="display: none;"></i>
                    </label>
            </div>
            <div id="lista-proyectos" class="lista-proyectos" style="display: none;">
                <div class="links">
                    <a href="https://ibauruapan.com.mx/" target="_blank"><p><i class="fas fa-caret-right"></i> https://ibauruapan.com.mx/</p></a>
                </div>
                <div class="links">
                    <a href="https://sociedadintelectualdelaguacatemexicano.com/" target="_blank"><p><i class="fas fa-caret-right"></i> https://sociedadintelectualdelaguacatemexicano.com/</p></a>
                </div>
                <div class="links">
                    <a href="https://ingeangel.com/" target="_blank"><p><i class="fas fa-caret-right"></i> https://ingeangel.com/</p></a>
                </div>
            </div>
       </div>
       <div class="submenu-proyectos">
            <div class="titulo-proyecto">
               <h1>Prácticas proyectos</h1>
            </div>
            <div class="mas-proyecto">
                <input type = "checkbox" id = "checkpracticas" name = "menu">
                    <label for = "checkpracticas">
                    <i id="plus1" class="far fa-plus-square"></i>
                    <i id="neg1" class="far fa-minus-square" style="display: none;"></i>
                    </label>
            </div>
            <div id="lista-practicas" class="lista-practicas" style="display: none;">
                <div class="links">
                    <a href="proyectos/MEXmubles/mexmbles.html" target="_blank"><p><i class="fas fa-caret-right"></i> MexMuebles</p></a>
                </div>
                <div class="links">
                    <a href="proyectos/Sushis/sushis.html" target="_blank"><p><i class="fas fa-caret-right"></i> Sushi´s</p></a>
                </div>
                <div class="links">
                    <a href="proyectos/Animaciondeplaneta/planet.php" target="_blank"><p><i class="fas fa-caret-right"></i> Animación de Planeta</p></a>
                </div>
                <div class="links">
                    <a href="proyectos/fluidmouse/fluidmouse.php" target="_blank"><p><i class="fas fa-caret-right"></i> Animación de API FluidSimu</p></a>
                </div>
            </div>
       </div>
       <div class="submenu-proyectos">
            <div class="titulo-proyecto">
               <h1>API´s</h1>
            </div>
            <div class="mas-proyecto">
                <input type = "checkbox" id = "check-apis" name = "menu">
                    <label for = "check-apis">
                    <i id="plus2" class="far fa-plus-square"></i>
                    <i id="neg2" class="far fa-minus-square" style="display: none;"></i>
                    </label>
            </div>
            <div id="lista-apis" class="lista-apis" style="display: none;">
                <div class="links">
                    <a href="#" target="_blank"><p><i class="fas fa-caret-right"></i> Conekta - API de pagos con tarjeta de Crédito/Debito</p> </a>
                </div>
                <div class="links">
                    <a href="#" target="_blank"><p><i class="fas fa-caret-right"></i> Paypal - API de pagos por cuentas PayPal</p></a>
                </div>
                <div class="links">
                    <a href="#" target="_blank"><p><i class="fas fa-caret-right"></i> Hybridauth - API Registro y inicios de sesión con redes soliales</p></a>
                </div>
                <div class="links">
                    <a href="#" target="_blank"><p><i class="fas fa-caret-right"></i> Animación de API FluidSimu</p></a>
                </div>
            </div>
       </div>
    </div>
</div>


<?php
require 'includes/templates/footer.php'
?>