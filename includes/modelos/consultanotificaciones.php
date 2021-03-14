<?php 
require_once('includes/funciones/consultas.php');

// $resultadocontacto = obtenerContactos2();
//     $cantidadusuarios = 0;
//     if ($resultadocontacto->num_rows) {
//         foreach ($resultadocontacto as $contacto) {
//             if($contacto['tipo_usuario'] == 'user'){
//             $telefonousuario[$cantidadusuarios] = $contacto['tipo_usuario'];
//             $idusuario[$cantidadusuarios] = $contacto['id_usuario'];
//             $nombreusario[$cantidadusuarios] = $contacto['nombre_usuario'];
//             $apellidousuario[$cantidadusuarios] = $contacto['apellidos_usuario'];
//             $emailusuario[$cantidadusuarios] = $contacto['email_usuario'];
//             $telefonousuario[$cantidadusuarios] = $contacto['telefono_usuario'];
//             $cantidadusuarios++;}
           
//         }
//     }
//     for ($i=0; $i < sizeof($idusuario); $i++) { 
//         $resultadoProyecto = consultaProyectos2();
//         $contadorProyectos = 0;
//         if ($resultadoProyecto->num_rows) {
//             foreach ($resultadoProyecto as $proyecto) {
//                 $idProyecto[$contadorProyectos] = $proyecto['id_proyecto'];
//                 $nombreproyecto[$contadorProyectos] = $proyecto['nombre_proyecto'];
//                 $tipoproyecto[$contadorProyectos] = $proyecto['tipo_proyecto'];
              
//                 $contadorProyectos++;
//             }
//         }
//     }
// $respuestas = pagosconsulta(1);
// var_dump($respuestas) ;
// echo $respuestas['idpago'];
    function pagosconsulta($idpago){ 
        for ($i=0; $i < 1; $i++) {       
        $resultadoPagos = consultaPagos2($idpago);

        
        if ($resultadoPagos->num_rows) {
            foreach ($resultadoPagos as $pago) {
                $vecIdPago= $pago['id_pago'];
                $vecfechaIniciopago= $pago['fechainicio_pago'];
                $vecfechaFinpago= $pago['fechafin_pago'];
                $vecfechapagoPago= $pago['fechadepago_pago'];
                $vectokenConekta= $pago['tokenconekta_pago'];
                $vecforTarget= $pago['fortarget_pago'];
                $vecIdProyectoPago= $pago['idproyecto_pago'];
                $vecTokenpagopago= $pago['tokenpago_pago'];
                $vecIdContratoPago= $pago['idcontrato_pago'];
                $vecTokenContratoPago= $pago['tokencontrato_pago'];
                $vecContMesesPago= $pago['contmeses_pago'];
                $moneyPago= $pago['money_pago'];
                
            }
        }
        $respuesta = array(
            "idpago" => $vecIdPago,
            "fechainicio" => $vecfechaIniciopago,
            "fechafin" => $vecfechaFinpago,
            "tokenconeckta" => $vectokenConekta,
            "tarjeta" => $vecforTarget,
            "idproyecto" => $vecIdProyectoPago,
            "tokenpago" => $vecTokenpagopago,
            "idcontrato" => $vecIdContratoPago,
            "tokencontrato" => $vecTokenContratoPago,
            "cantidadmeses" => $vecContMesesPago,
            "montopagado" => $moneyPago

        );
        
        // $superVecIdPago[$i] = $vecIdPago;
        // $supervecfechaIniciopago[$i] = $vecfechaIniciopago;
        // $supervecfechaFinpago[$i] = $vecfechaFinpago;
        // $supervecfechapagoPago[$i] =  $vecfechapagoPago;
        // $supervectokenConekta[$i] = $vectokenConekta;
        // $supervecforTarget[$i] = $vecforTarget;
        // $superVecIdProyectoPago[$i] = $vecIdProyectoPago;
        // $superVecTokenpagoPago[$i] = $vecTokenpagopago;
        // $superVecIdContratoPago[$i] = $vecIdContratoPago;
        // $superVecTokenContratoPago[$i] = $vecTokenContratoPago;
        // $superVecContMesesPago[$i] = $vecContMesesPago;
        // for ($ix = 0; $ix < $contadorPasos1; $ix++) {
        //     unset($vecIdPago[$ix]);
        //     unset($vecfechaIniciopago[$ix]);
        //     unset($vecfechaFinpago[$ix]);
        //     unset($vecfechapagoPago[$ix]);
        //     unset($vectokenConekta[$ix]);
        //     unset($vecforTarget[$ix]);
        //     unset($vecIdProyectoPago[$ix]);
        //     unset($vecTokenpagopago[$ix]);
        //     unset($vecIdContratoPago[$ix]);
        //     unset($vecTokenContratoPago[$ix]);
        //     unset($vecContMesesPago[$ix]);
        // }
       return $respuesta;
    }
}



    // $estado = '';
    // for ($i=0; $i < sizeof( $supervectokenConekta); $i++) { 
    //     for ($u=0; $u < sizeof( $supervectokenConekta[$i]); $u++) { 
    //         $respuesta[$i][$u] = array(
    //             'estado' =>  $supervectokenConekta[$i][$u],
    //             'idproyecto' => $superVecIdPago[$i][$u]
    //         );
    //     }
      
    // }
    
    

// echo json_encode($respuesta);