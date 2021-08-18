<?php


$body = @file_get_contents('php://input');

$data = json_decode($body);
http_response_code(200); // Return 200 OK 
try {
  require('bd/bd.php');
  require('bd/bdsqli.php');


  $stmt = $conn->prepare('SELECT * FROM pagoparts WHERE orderstatus_pagoparts = :orderstatus_pagoparts LIMIT 1');
  $stmt->execute(array(':orderstatus_pagoparts' => "pending_payment"
    ));
  $resultado = $stmt->fetch();
  if ($resultado != false) {?>
  
  <?php
        
}else{
  $stmtf = $connf->prepare("UPDATE pagoparts SET id_pagoparts = ? WHERE  orderstatus_pagoparts = ?");
            $stmtf->bind_param("is", 1, "99");
            $stmtf->execute();
            $stmtf->close();
            $connf->close();
}
} catch (PDOException $e) {
  echo json_encode("Error: " . $e->getMessage());
}


if ($data == 'charge.paid'){
  $msg = "El pago ha sido comprobado.";
  echo 'hola';
  mail("angel._ruiz@hotmail.com","Pago confirmado",$msg);
}
?>
