<?php
require_once("../bin/conekta-php-master/lib/Conekta.php");
\Conekta\Conekta::setApiKey("key_eYvWV7gSDkNYXsmr");
\Conekta\Conekta::setApiVersion("2.0.0");

try{
    $thirty_days_from_now = (new DateTime())->add(new DateInterval('P30D'))->getTimestamp(); 
  
    $order = \Conekta\Order::create(
      [
        "line_items" => [
          [
            "name" => "Tacos",
            "unit_price" => 1000,
            "quantity" => 25
          ]
        ],
        "shipping_lines" => [
          [
            "amount" => 1500,
            "carrier" => "FEDEX"
          ]
        ], //shipping_lines - physical goods only
        "currency" => "MXN",
        "customer_info" => [
          "name" => "Fulanito Pérez",
          "email" => "fulanito@conekta.com",
          "phone" => "+5218181818181"
        ],
        "shipping_contact" => [
          "address" => [
            "street1" => "Calle 123, int 2",
            "postal_code" => "06100",
            "country" => "MX"
          ]
        ], //shipping_contact - required only for physical goods
        "charges" => [
          [
            "payment_method" => [
              "type" => "oxxo_cash",
              "expires_at" => $thirty_days_from_now
            ]
          ]
        ]
      ]
    );
   
  } catch (\Conekta\ParameterValidationError $error){
    echo $error->getMessage();
  } catch (\Conekta\Handler $error){
    echo $error->getMessage();
  }
//   echo "ID: ". $order->id;
// echo "Payment Method:". $order->charges[0]->payment_method->service_name;
// echo "Reference: ". $order->charges[0]->payment_method->reference;
$refrenciasoxxo = $order->charges[0]->payment_method->reference;
// echo '<br>'.$refrenciasoxxo[1];
// echo strlen ($refrenciasoxxo);
$tamanio = strlen ($refrenciasoxxo);
// echo "$". $order->amount/100 . $order->currency;
// echo "Order";
// echo $order->line_items[0]->quantity .
//       "-". $order->line_items[0]->name .
//       "- $". $order->line_items[0]->unit_price/100;
?>

<html>
	<head>
		<link href="styles.css" media="all" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	</head>
	<body>
		<div class="opps">
			<div class="opps-header">
				<div class="opps-reminder">Ficha digital. No es necesario imprimir.</div>
				<div class="opps-info">
					<div class="opps-brand"><img src="oxxopay_brand.png" alt="OXXOPay"></div>
					<div class="opps-ammount">
						<h3>Monto a pagar</h3>
						<h2><?php echo "$". $order->amount/100;?><sup>MXN</sup></h2>
						<p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
					</div>
				</div>
				<div class="opps-reference">
					<h3>Referencia</h3>
					<h1><?php  
                    
                    // echo $order->charges[0]->payment_method->reference;
                    for ($i=0; $i < $tamanio; $i++) { 
                        echo $refrenciasoxxo[$i];
                        if($i == 3){
                            echo '-';
                        }
                        if($i == 7){
                            echo '-';
                        }
                        if($i == 11){
                            echo '-';
                        }
                    }
                    ?></h1>
				</div>
			</div>
			<div class="opps-instructions">
				<h3>Instrucciones</h3>
				<ol>
					<li>Acude a la tienda OXXO más cercana. <a href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
					<li>Indica en caja que quieres realizar un pago de <strong>OXXOPay</strong>.</li>
					<li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
					<li>Realiza el pago correspondiente con dinero en efectivo.</li>
					<li>Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
				</ol>
				<div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
			</div>
		</div>	
	</body>
</html>