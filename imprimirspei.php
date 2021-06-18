<?php 
// echo 'hola';
$monto = '0';
$cadena_de_texto = $_GET['ref'];
$cadena_buscada   = 'm';
$posicion_coincidencia1 = strpos($cadena_de_texto, $cadena_buscada);
$posaux = strlen($cadena_de_texto);
// echo $posaux;
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia1 === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;

    for ($x = $posicion_coincidencia1+1; $x < $posaux; $x++) {
        //  $cadena_de_texto[$x];
         $monto .= $cadena_de_texto[$x];
        // $tamanio = strlen($refrenciasoxxo);
    }
}
$posaux =  $posicion_coincidencia1;
$refrenciasoxxo = '';
$cadena_de_texto = $_GET['ref'];
$cadena_buscada   = 'x';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);


// echo $posaux;
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;

    for ($x = $posicion_coincidencia+1; $x < $posaux; $x++) {
        //  $cadena_de_texto[$x];
         $refrenciasoxxo .= $cadena_de_texto[$x];
        $tamanio = strlen($refrenciasoxxo);
    }
}
?>
<html>
	<head>
		<link href="business/styles.css?v=<?php echo time(); ?>" media="all" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	</head>
	<body>
		<div class="ps">
			<div class="ps-header">
				<div class="ps-reminder">Ficha digital. No es necesario imprimir.</div>
				<div class="ps-info">
					<div class="ps-brand"><img src="business/spei_brand.png" alt="SPEI"></div>
					<div class="ps-amount">
						<h3>Monto a pagar</h3>
						<h2><?php echo "$" . $monto / 100; ?><sup>MXN</sup></h2>
						<p>Utiliza exactamente esta cantidad al realizar el pago.</p>
					</div>
				</div>
				<div class="ps-reference">
					<h3>CLABE</h3>
					<h1>  <?php 
					
					for ($u = 0; $u < $tamanio; $u++) {
						echo $refrenciasoxxo[$u];
					
					}?></h1>
				</div>
			</div>
			<div class="ps-instructions">
				<h3>Instrucciones</h3>
				<ol>
					<li>Accede a tu banca en línea.</li>
					<li>Da de alta la CLABE en esta ficha. <strong>El banco deberá de ser STP</strong>.</li>
					<li>Realiza la transferencia correspondiente por la cantidad exacta en esta ficha, <strong>de lo contrario se rechazará el cargo</strong>.</li>
					<li>Al confirmar tu pago, el portal de tu banco generará un comprobante digital. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
				</ol>
				<div class="ps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
			</div>
		</div>	
	</body>
</html>