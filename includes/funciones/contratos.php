<?php

?>
<li>
    <div class="contenedor-especial">
        <div class="titulo-seccion">
            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Contratos</h1>
        </div><?php
                for ($x = 0; $x < $contadorProyectos; $x++) { ?>
            <div class="menu-proyectos">
                <div class="submenu-proyectos">
                    <div class="titulo-proyecto">
                        <h1 class="<?php
                                    if ($vectorNombresProyectos[$x] == 'Sin Proyecto') {
                                    } else {
                                    ?>">Proyecto <?php echo $x + 1; ?>:<span style="font-size: 16px;">
                            <?php
                                        echo $vectorNombresProyectos[$x];
                                    }
                            ?></span></h1>
                    </div>
                    <div class="mas-proyecto">
                        <input type="checkbox" class="checs" id="check<?php echo $x + 3000; ?>" name="menu">
                        <label for="check<?php echo $x + 3000; ?>">
                            <i id="plus<?php echo $x + 3000; ?>" class="far fa-plus-square"></i>
                            <i id="neg<?php echo $x + 3000; ?>" class="far fa-minus-square" style="display: none;"></i>
                        </label>
                    </div>
                    <div id="lista<?php echo $x + 3000; ?>" class="lista-proyectos" style="display: none;">

                        <div class="links">
                            <div class="contenedorconteo1">
                                <?php

                                ?>
                                <?php
                             
                                for ($f = 0; $f < sizeof($supervecIdContrato[$x]); $f++) {
                                    if ($f = !0) {
                                        if (isset($supervecIdContrato[$x])) {
                                 
                                            if(sizeof($supervecIdContrato[$x])>1){
                                ?>

                                            <a href="contrato.php?contrato=<?php echo  $supervecTokenContrato[$x][$f]; ?>-id=<?php echo $vectorIdProyectos[$x]; ?>#angel-ruiz" target="_blank">
                                                <p><?php echo    $supervecIdContrato[$x][$f]; ?>. Contrato (#<?php
                                                                                                                echo $supervecTokenContrato[$x][$f];
                                                                                                                ?>) <br> Periodo de contrato:
                                                    <?php
                                                    echo '(' . $supervecFechaInicioContrato[$x][$f] . ') a (' . $supervecFechaFinContrato[$x][$f] . ')';
                                                    ?>
                                                    <i class="fas fa-caret-right"></i> <?php echo  'Ver contrato'
                                                                                        ?>
                                                </p>
                                                <?php

                                                ?>
                                                </p>
                                            </a>
                                    <?php





                                        }
                                        }
                                    }
                                    ?>

                                    <ul class="clearfix">
                                        <?php
                                        ?>
                                    </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    <?php
                                }
                            }
    ?>
    </div>