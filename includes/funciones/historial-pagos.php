<li>
    <div class="contenedor-especial">
        <div class="titulo-seccion">
            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Pagos</h1>
        </div>
        <?php
        $contadorpagos2 = 1;
        for ($x = 0; $x < $contadorProyectos; $x++) {

        ?>
            <div class="menu-proyectos">
                <div class="submenu-proyectos">
                    <div class="titulo-proyecto">
                        <h1 class="<?php
                                    for ($i = 0; $i < sizeof($superVecIdProyectoPago); $i++) {
                                        $contadorpagos1 = 0;
                                        for ($y = 0; $y < sizeof($superVecIdProyectoPago[$i]); $y++) {
                                            if ($vectorIdProyectos[$x] == $superVecIdProyectoPago[$i][$y]) {
                                                if ($supervecforTarget[$i][$y] == 0 || $supervectokenConekta[$i][$y] == '') {
                                                    $contadorpagos1++;
                                                }
                                                if ($y == (sizeof($superVecIdProyectoPago[$i]) - 1)) {
                                                    if ($contadorpagos1 >= 1) {
                                                        echo 'blinkama';
                                                    } else {
                                                        echo '';
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if($vectorNombresProyectos[$x] == 'Sin Proyecto'){
                                    }else{
                                    
                                    ?>">Proyecto <?php echo $x + 1; ?>:<span style="font-size: 16px;">
                                <?php
                                
                                echo $vectorNombresProyectos[$x];

                                for ($i = 0; $i < sizeof($superVecIdProyectoPago); $i++) {
                                    $contadorpagos1 = 0;
                                    for ($f = 0; $f < sizeof($superVecIdProyectoPago[$i]); $f++) {
                                        if ($vectorIdProyectos[$x] == $superVecIdProyectoPago[$i][$f]) {
                                            if ($supervecforTarget[$i][$f] == 0 || $supervectokenConekta[$i][$f] == '') {
                                                $contadorpagos1++;
                                            }
                                            if ($f == (sizeof($superVecIdProyectoPago[$i]) - 1)) {
                                                if ($contadorpagos1 > 1) {
                                                    echo ' (' . $contadorpagos1 . ') Pagos Pendientes';
                                                } elseif ($contadorpagos1 == 1) {
                                                    echo ' (' . $contadorpagos1 . ') Pago Pendiente';
                                                } else {
                                                    echo '';
                                                }
                                            }
                                        }
                                    }
                                }}


                                ?></span></h1>
                    </div>
                    <div class="mas-proyecto">
                        <input type="checkbox" class="checs" id="check<?php echo $x + 1000; ?>" name="menu">
                        <label for="check<?php echo $x + 1000; ?>">
                            <i id="plus<?php echo $x + 1000; ?>" class="far fa-plus-square"></i>
                            <i id="neg<?php echo $x + 1000; ?>" class="far fa-minus-square" style="display: none;"></i>
                        </label>
                    </div>
                    <div id="lista<?php echo $x + 1000; ?>" class="lista-proyectos" style="display: none;">
                        <?php
                        for ($y = 0; $y < 1; $y++) { ?>
                            <div class="links">
                                <div class="contenedorconteo1">
                                    <?php
                                    $textAsunto = "Hola. Me gustaría que resolvieran las siguientes dudas de mi proyecto " . $vectorNombresProyectos[$x] . " del paso " . ($y + 1) . ": >>" . $superVecDesp[$x][$y] . "<< " . "Proyecto id# " . $vectorIdProyectos[$x];
                                    $asunto = str_replace(' ', '%20', $textAsunto);
                                    $vectorNombresProyectos[$x] = str_replace('&', 'y', $vectorNombresProyectos[$x]);
                                    $cuerpo = "Lista de dudas: ";
                                    $cuerpo = str_replace(' ', '%20', $cuerpo);
                                    $xend = 0;
                                    $auxxend = 0;
                                    $auxSuper = '';
                                    $pagopendiente = '';

                                    ?>

                                    <?php for ($f = 0; $f < sizeof($superVecIdProyectoPago[$x]); $f++) {
                                        if ($supervectokenConekta[$x][$f] == '' || $supervecforTarget[$x][$f] == 0 || $supervecfechapagoPago == '') {
                                    ?>
                                            <a href="pago.php?pago=<?php
                                            
                                            echo $superVecTokenContratoPago[$x][$f] . '-' . $superVecIdPago[$x][$f].'$'.$vectorIdProyectos[$x]; 
                                            
                                            ?>#angel-ruiz">
                                                <p> Contrato (#<?php
                                                                echo $superVecTokenContratoPago[$x][$f];
                                                                ?>) <br> Periodo de contrato: <?php

                                                                                                    echo $supervecfechaIniciopago[$x][$f] . ' a ' . $supervecfechaFinpago[$x][$f];
                                                                                                    ?>: <i class="fas fa-caret-right"></i> <?php echo  'Ir a Pagar' ?></p><?php
                                                                                                                                                                $auxxend++;
                                                                                                                                                            } else { ?> <p><?php


                                                                                                                                                                // echo $auxxend;
                                                                                                                                            ?><p><?php
                                                                                                                                                                if ($supervectokenConekta[$x][$f] != '' && $superVecTokenContratoPago[$x][$f] != '' && $supervecforTarget[$x][$f] != 0) {

                                                                                                                                                                    // echo $xend.'<-';
                                                                                                                                                                    if ($f == sizeof($superVecIdProyectoPago[$x]) - 1) {
                                                                                                                                                                        for ($h = 0; $h < sizeof($superVecIdProyectoPago[$x]); $h++) {
                                                                                                                                                                            // echo $supervectokenConekta[$x][$h];
                                                                                                                                                                            if ($supervectokenConekta[$x][$h] == '') {
                                                                                                                                                                                $xend++;
                                                                                                                                                                            } else {
                                                                                                                                                                                if ($xend == 0) {
                                                                                                                                                                                    $pagopendiente = 'Sin Pagos Pendientes.';
                                                                                                                                                                                    if ($h == sizeof($superVecIdProyectoPago[$x]) - 1) {
                                                                                                                                                                                        echo $pagopendiente;
                                                                                                                                                                                    }
                                                                                                                                                                                }
                                                                                                                                                                            }
                                                                                                                                                                        }
                                                                                                                                                                    }
                                                                                                                                                                }

                                                                                ?></p><?php

                                                                                                                                                            } ?></p>
                                            </a><?php
                                            }

                                                ?>

                                        <ul class="clearfix">
                                            <?php
                                            ?>
                                        </ul>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="titulo-seccion" id="#historial">
            <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Historial de pagos</h1>
        </div>
        <?php

        for ($x = 0; $x < $contadorProyectos; $x++) {
        ?>
            <div class="menu-proyectos">
                <div class="submenu-proyectos">
                    <div class="titulo-proyecto">
                    <?php if($vectorNombresProyectos[$x] == 'Sin Proyecto'){
                                    
                                }else{
                                    ?>
                        <h1>Proyecto <?php echo $x + 1; ?>:<span style="font-size: 16px;">
                                <?php
                                echo $vectorNombresProyectos[$x];
                                ?></span></h1>
                    </div>
                    <div class="mas-proyecto">
                        <input type="checkbox" class="checs" id="check<?php echo $x + 2000; ?>" name="menu">
                        <label for="check<?php echo $x + 2000; ?>">
                            <i id="plus<?php echo $x + 2000; ?>" class="far fa-plus-square"></i>
                            <i id="neg<?php echo $x + 2000; ?>" class="far fa-minus-square" style="display: none;"></i>
                        </label>
                    </div>
                    <div id="lista<?php echo $x + 2000; ?>" class="lista-proyectos" style="display: none;">
                        <?php
                        for ($y = 0; $y < 1; $y++) { ?>
                            <div class="links">
                                <div class="contenedorconteo1">
                                    <?php
                                    $textAsunto = "Hola. Me gustaría que resolvieran las siguientes dudas de mi proyecto " . $vectorNombresProyectos[$x] . " del paso " . ($y + 1) . ": >>" . $superVecDesp[$x][$y] . "<< " . "Proyecto id# " . $vectorIdProyectos[$x];
                                    $asunto = str_replace(' ', '%20', $textAsunto);
                                    $vectorNombresProyectos[$x] = str_replace('&', 'y', $vectorNombresProyectos[$x]);
                                    $cuerpo = "Lista de dudas: ";
                                    $cuerpo = str_replace(' ', '%20', $cuerpo);
                                    $xend = 0;
                                    $auxxend = 0;

                                    ?>
                                    <?php for ($f = 0; $f < sizeof($superVecIdProyectoPago[$x]); $f++) {
                                        if ($superVecTokenpagoPago[$x][$f] != '' && $supervectokenConekta[$x][$f] != '' && $supervecforTarget[$x][$f] != 0 && $supervecfechapagoPago != '') {
                                    ?>
                                            <a href="pago.php?pago=<?php echo $superVecTokenContratoPago[$x][$f] . '-' . $superVecIdPago[$x][$f].'$'.$vectorIdProyectos[$x];  ?>">
                                                <p>
                                                    Contrato (#<?php
                                                                echo $superVecTokenContratoPago[$x][$f];
                                                                ?>) <br>
                                                    Periodo de contrato: <?php

                                                                            echo $supervecfechaIniciopago[$x][$f] . ' a ' . $supervecfechaFinpago[$x][$f];
                                                                            ?>: <i class="fas fa-caret-right"></i> <?php echo  'Pagado' ?></Contrato><?php
                                                                                                                                                                    $auxxend++;
                                                                                                                                                                } else { ?> <p><?php
                                                                                                                                                                    $xend++;
                                                                                                                                                                    // echo $xend. ' <- '. $auxxend;
                                                                                                                                                                    if ($f == (sizeof($superVecIdProyectoPago[$x])) - 1) {
                                                                                                                                                                        if ($auxxend == 0) {
                                                                                                                                                                            echo 'Sin historial de pagos';
                                                                                                                                                                        }
                                                                                                                                                                    }
                                                                                                                                                                } ?></p>
                                            </a><?php
                                            }
                                                ?>


                                        <ul class="clearfix">
                                            <?php

                                            ?>

                                        </ul>

                                </div>
                            </div>
                        <?php
                        } }?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
