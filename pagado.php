<?php


$body = @file_get_contents('php://input');

$data = json_decode($body);
http_response_code(200); // Return 200 OK 


if ($data == 'charge.paid'){
  $msg = "Tu pago ha sido comprobado.";
  echo 'hola';
  mail("angel._ruiz@hotmail.com","Pago confirmado",$msg);
}
?>
