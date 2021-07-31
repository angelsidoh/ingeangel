<?php
require_once 'send-mail.php';
$body = @file_get_contents('php://input');
$data = json_decode($body);
http_response_code(200); // Return 200 OK 


if ($data->type == 'charge.paid') {
    $idconekta = $data->id;
    $correo = $data->object->customer_info->email;
// $correo = 'angel._ruiz@hotmail.com';


    date_default_timezone_set('America/Mexico_City');
    $fecha =  date('Y-m-d H:i:s');
    $status = 'pagado';
    $target = 1111;
    $token = 'conektaoxxospei';
    try {
        require('bd/bdsqli.php');
        $stmt = $connf->prepare("UPDATE pagoparts SET orderstatus_pagoparts = ?, pagado_pagoparts = ?  WHERE idconekta_pagoparts = ?");
        $stmt->bind_param("sss", $status, $fecha, $idconekta);
        $stmt->execute();
        $stmtx = $connf->prepare("UPDATE pagos SET fechadepago_pago = ?, tokenconekta_pago = ?, tokenpago_pago = ?, fortarget_pago = ? WHERE idconekta_pago = ?");
        $stmtx->bind_param("sssis",  $fecha, $token, $token, $target, $idconekta);
        $stmtx->execute();
        $stmt->close();
        $stmtx->close();
        $connf->close();
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
    enviar_correo116($correo, $idconekta);
  
}
