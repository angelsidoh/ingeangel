<?php
require 'includes/templates/header.php';
?>

<title>Proyectos Web</title>
<meta name="description" content="Una lista de todos nuestros proyectos. Además de proyectos futuros.">
<meta name="title" content="Proyectos Web">
<meta name="keywords" content="Proyectos web, Proyectos páginas web, Portafolio ingeangel, Portafolio web de ingeangel" />
<meta name="author" content="José Angel Ruiz Chávez" />
<meta name="copyright" content="José Angel Ruiz Chávez" />

<div id="proyectos" class="proyectos-gridconteiner">
    <div class="titulo-seccion">
        <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Proyectos</h1>
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
                    <a href="https://ibauruapan.com.mx/"><p><i class="fas fa-caret-right"></i> https://ibauruapan.com.mx/</p></a>
                </div>
                <div class="links">
                    <a href="https://sociedadintelectualdelaguacatemexicano.com/"><p><i class="fas fa-caret-right"></i> https://sociedadintelectualdelaguacatemexicano.com/</p></a>
                </div>
                <div class="links">
                    <a href="https://ingeangel.com/"><p><i class="fas fa-caret-right"></i> https://ingeangel.com/</p></a>
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
                    <a href="#"><p><i class="fas fa-caret-right"></i> MexMuebles</p></a>
                </div>
                <div class="links">
                    <a href="#"><p><i class="fas fa-caret-right"></i> Sushi´s</p></a>
                </div>
                <div class="links">
                    <a href="#"><p><i class="fas fa-caret-right"></i> FluidMouse</p></a>
                </div>
            </div>
       </div>
    </div>
</div>


<?php
require 'includes/templates/footer.php'
?>