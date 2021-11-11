<?php


if ((isset($_SESSION['usuario'])) && (isset($_SESSION['email']))) {
    if ($_SESSION['tipo_usuario'] == 'admin') {

?>
        <div class="contenedor-especial">
            <div class="titulo-seccion">
                <h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Administración de Proyectos</h1>
            </div><?php
                    $resultadousers = obtenerContactos();
                    if ($resultadousers->num_rows) {
                        foreach ($resultadousers as $users) {
                            unset($vectorNombresProyectos);
                            $idusuario = $users['id_usuario'];
                           $tipouser = $users['tipo_usuario'];
                            if ($tipouser != 'admin') {
                                $resultadoProyecto = consultaProyecto($idusuario);
                                $contadorProyectos = 0;
                                if ($resultadoProyecto->num_rows) {
                                    foreach ($resultadoProyecto as $proyecto) {
                                        $nombreproyecto = $proyecto['nombre_proyecto'];
                                        $idProyecto = $proyecto['id_proyecto'];
                                        $vectorNombresProyectos[$contadorProyectos] = $nombreproyecto;
                                        $vectorIdProyectos[$contadorProyectos] = $idProyecto;
                                        $contadorProyectos++;
                                    }
                                }
                                for ($i = 0; $i < $contadorProyectos; $i++) {

                                    $contadorPasos = 0;
                                    $resultadoPasos = consultaPasos($vectorIdProyectos[$i]);

                                    $vectorDescrip[0] = '';
                                    $vectorFechafin[0] = '';

                                    if ($resultadoPasos->num_rows) {
                                        foreach ($resultadoPasos as $paso) {
                                            $descripcionPaso = $paso['descripcion_paso'];

                                            $vectorDescrip[$contadorPasos] = $paso['descripcion_paso'];
                                            $vectorFechafin[$contadorPasos] = $paso['fechafin_paso'];

                                            $contadorPasoxProyecto[$i] = ($contadorPasos + 1);
                                            $contadorPasos++;
                                        }
                                    }

                                    ?>

                                    <?php
                                    $superVec[$i] = $vectorFechafin;
                                    $superVecDesp[$i] = $vectorDescrip;
                                    for ($ix = 0; $ix < $contadorPasos; $ix++) {
                                        unset($vectorFechafin[$ix]);
                                        unset($vectorDescrip[$ix]);
                                    } ?><?php
                                }

                                // var_dump($vectorIdProyectos);
                                for ($i = 0; $i < $contadorProyectos; $i++) {
                                    $resultadoPagos = consultaPagos($vectorIdProyectos[$i]);

                                    $contadorPasos1 = 0;
                                    $contadordePagos = 0;
                                    if ($resultadoPagos->num_rows) {
                                        foreach ($resultadoPagos as $pago) {
                                            $vecIdPago[$contadorPasos1] = $pago['id_pago'];
                                            $vecfechaIniciopago[$contadorPasos1] = $pago['fechainicio_pago'];
                                            $vecfechaFinpago[$contadorPasos1] = $pago['fechafin_pago'];
                                            $vecfechapagoPago[$contadorPasos1] = $pago['fechadepago_pago'];
                                            $vectokenConekta[$contadorPasos1] = $pago['tokenconekta_pago'];
                                            $vecforTarget[$contadorPasos1] = $pago['fortarget_pago'];
                                            $vecIdProyectoPago[$contadorPasos1] = $pago['idproyecto_pago'];
                                            $vecTokenpagopago[$contadorPasos1] = $pago['tokenpago_pago'];
                                            $vecIdContratoPago[$contadorPasos1] = $pago['idcontrato_pago'];
                                            $vecTokenContratoPago[$contadorPasos1] = $pago['tokencontrato_pago'];
                                            $vecContMesesPago[$contadorPasos1] = $pago['contmeses_pago'];
                                            $contadorPasos1++;
                                            $contadordePagos++;
                                        }
                                    }
                                    $superVecIdPago[$i] = $vecIdPago;
                                    $supervecfechaIniciopago[$i] = $vecfechaIniciopago;
                                    $supervecfechaFinpago[$i] = $vecfechaFinpago;
                                    $supervecfechapagoPago[$i] =  $vecfechapagoPago;
                                    $supervectokenConekta[$i] = $vectokenConekta;
                                    $supervecforTarget[$i] = $vecforTarget;
                                    $superVecIdProyectoPago[$i] = $vecIdProyectoPago;
                                    $superVecTokenpagoPago[$i] = $vecTokenpagopago;
                                    $superVecIdContratoPago[$i] = $vecIdContratoPago;
                                    $superVecTokenContratoPago[$i] = $vecTokenContratoPago;
                                    $superVecContMesesPago[$i] = $vecContMesesPago;
                                    for ($ix = 0; $ix < $contadorPasos1; $ix++) {
                                        unset($vecIdPago[$ix]);
                                        unset($vecfechaIniciopago[$ix]);
                                        unset($vecfechaFinpago[$ix]);
                                        unset($vecfechapagoPago[$ix]);
                                        unset($vectokenConekta[$ix]);
                                        unset($vecforTarget[$ix]);
                                        unset($vecIdProyectoPago[$ix]);
                                        unset($vecTokenpagopago[$ix]);
                                        unset($vecIdContratoPago[$ix]);
                                        unset($vecTokenContratoPago[$ix]);
                                        unset($vecContMesesPago[$ix]);
                                    }
                                }
                                for ($i = 0; $i < $contadorProyectos; $i++) {
                                    $resultadoContratos = consultaContratos($vectorIdProyectos[$i]);

                                    $contadorPasos1 = 0;
                                    if ($resultadoContratos->num_rows) {
                                        foreach ($resultadoContratos as $contrato) {
                                            $vecIdContrato[$contadorPasos1] = $contrato['id_contrato'];
                                            $vecLinkContrato[$contadorPasos1] = $contrato['link_contrato'];
                                            $vecTokenContrato[$contadorPasos1] = $contrato['token_contrato'];
                                            $vecTipoContrato[$contadorPasos1] = $contrato['tipo_contrato'];
                                            $vecTipoIntContrato[$contadorPasos1] = $contrato['tipoint_contrato'];
                                            $vecFechaInicioContrato[$contadorPasos1] = $contrato['fechainicio_contrato'];
                                            $vecFechaFinContrato[$contadorPasos1] = $contrato['fechafin_contrato'];
                                            $contadorPasos1++;
                                        }
                                    }
                                    $supervecIdContrato[$i] = $vecIdContrato;
                                    $supervecLinkContrato[$i] = $vecLinkContrato;
                                    $supervecTokenContrato[$i] =  $vecTokenContrato;
                                    $supervecTipoContrato[$i] =  $vecTipoContrato;
                                    $supervecTipoIntContrato[$i] =  $vecTipoIntContrato;
                                    $supervecFechaInicioContrato[$i] =  $vecFechaInicioContrato;
                                    $supervecFechaFinContrato[$i] =  $vecFechaFinContrato;

                                    for ($ix = 0; $ix < $contadorPasos1; $ix++) {

                                        unset($vecIdContrato[$ix]);
                                        unset($vecLinkContrato[$ix]);
                                        unset($vecTokenContrato[$ix]);
                                        unset($vecTipoContrato[$ix]);
                                        unset($vecTipoIntContrato[$ix]);
                                        unset($vecFechaInicioContrato[$ix]);
                                        unset($vecFechaFinContrato[$ix]);
                                    }
                                }
                              
                                // echo '<pre style="color:#fff;">';
                                // var_dump($supervecfechaIniciopago);
                                // echo '</pre >';
                                // echo '<pre style="color:#fff;>';
                                // var_dump($supervecFechaFinContrato);
                                // echo '</pre>';
                                // echo '<pre style="color:#fff;>';
                                // var_dump( $supervecIdContrato);
                                // echo '</pre>';
                                
                                

                                    ?>
                            <div class="menu-proyectos">
                                <div class="submenu-proyectos">
                                    <div class="titulo-proyecto">
                                        <h1>No-ID Usuario: <?php echo $users['id_usuario']; ?> </br> Nombre: <span style="font-size: 16px;"><?php echo $users['nombre_usuario'];?></span></h1>
                                    </div>
                                    <div class="mas-proyecto">
                                        <div class="inps" id="inps<?php echo (4000 + $users['id_usuario']); ?>">
                                            <input name="angel" type="checkbox" class="checs" id="check<?php echo (4000 + $users['id_usuario']); ?>" name="menu<?php echo (4000 + $users['id_usuario']); ?>">
                                        </div>
                                        <label for="check<?php echo (4000 + $users['id_usuario']); ?>">
                                            <i id="plus<?php echo (4000 + $users['id_usuario']); ?>" class="far fa-plus-square"></i>
                                            <i id="neg<?php echo (4000 + $users['id_usuario']); ?>" class="far fa-minus-square" style="display: none;"></i>
                                        </label>
                                    </div>
                                    <div id="lista<?php echo (4000 + $users['id_usuario']); ?>" class="lista-proyectos" style="display: none;">
                                        <div class="links">
                                            <div class="contenedorconteo1">
                                                <?php
                                                $auxiliar = ''; 
                                                for ($x = 0; $x <  sizeof($vectorNombresProyectos); $x++) {
                                                    ?>
                                                    <div class="barradiv">
                                                        
                                                        <?php  
                                                    for ($y=0; $y < sizeof($supervecfechaIniciopago[$x]); $y++) {
                                                        date_default_timezone_set('America/Mexico_City');
                                                        $fechahoy =  date('Y-m-d H:i:s');
                                                        for ($i=0; $i < sizeof($supervecfechaIniciopago[$x]); $i++) { 
                                                            $dias1 = (strtotime($supervecfechaIniciopago[$x][$i]) - strtotime($fechahoy)) / 86400;
                                                            $dias2 = (strtotime($supervecfechaFinpago[$x][$i]) - strtotime($fechahoy)) / 86400;
                                                         
                                                            if ((($dias1 < 0) && ($supervecfechaFinpago[$x][$i] == $supervecfechaFinpago[$x][$y]))) { ?> 
                                                                <p class="separador"><?php echo 'Proyecto: '.$vectorNombresProyectos[$x].'<br>ID de contrato: '.$superVecIdContratoPago[$x][$y];?></p><?php ?>
                                                                
                                                                <a href="administradorProy.php?id=<?php echo $vectorIdProyectos[$x].'idu'.$idusuario;?>#angel-ruiz" target="_blank">
                                                                <p class="<?php  if ($supervectokenConekta[$x][$y] != '' && $supervecforTarget[$x][$y] != 0) {
                                                                                     echo 'blinkverde ';
                                                                                    } else {
                                                                                        echo 'blinkama ';
                                                                                    } ?>">Id de Pago:<?php echo ' ' .  $superVecIdPago[$x][$y].  ' ' . $vectorNombresProyectos[$x] . '(' . $supervecfechaIniciopago[$x][$y] . ' a ' . $supervecfechaFinpago[$x][$y] . ')';
                                                                                    if ($supervectokenConekta[$x][$y] != '' && $supervecforTarget[$x][$y] != 0) {
                                                                                        echo '<br>Contrato: Vigente';
                                                                                    } else {
                                                                                        echo '<br>Contrato: ***No Vigente***';
                                                                                    }?>
                                                                </p>
                                                                </a><?php 
                                                            }
                                                        }                
                                                        ?>
                                                        <?php
                                                    }?>
                                                    </div>
                                                    <?php
                                                } ?>
                                                    
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <?php
                            }
                        }
                    }
                ?>
        
        </div>
        </div>
        </div>
        </div>
        
<?php


    } else {
        echo 'error: ¿Intentas violar la seguriadad?';
    }
}
