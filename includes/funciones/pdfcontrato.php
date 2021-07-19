<?php
session_start();
require_once('../../includes/funciones/consultas.php');


$idProyecto = '';
$tokencontrato = '';
$cadena_de_texto = $_GET['contrato'];
$cadena_buscada   = '-id=';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);


//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
	// echo "NO se ha encontrado la palabra deseada!!!!";
} else {
	// echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;
	for ($x = $posicion_coincidencia + 4; $x < strlen($cadena_de_texto); $x++) {
		//  $cadena_de_texto[$x];
		$idProyecto .= $cadena_de_texto[$x];

		// echo '<br>'.$x.$hora;
	}
	// echo '<br>' . $idProyecto;
	for ($y = 0; $y <  ($posicion_coincidencia); $y++) {
		$tokencontrato .= $cadena_de_texto[$y];
	}
	// echo '<br>' . $tokencontrato;
}
$resultadoProyecto = consultaProyectos2($idProyecto);
$contadorProyectos = 0;
if ($resultadoProyecto->num_rows) {
	foreach ($resultadoProyecto as $proyecto) {
		$nombreproyecto = $proyecto['nombre_proyecto'];
		$idProyecto = $proyecto['id_proyecto'];
		$vectorTipoProyectos = $proyecto['tipo_proyecto'];
		$vectorNombresProyectos[$contadorProyectos] = $nombreproyecto;
		$vectorIdProyectos[$contadorProyectos] = $idProyecto;
		$vectorIdUsuarioProyectos[$contadorProyectos] = $proyecto['idusuario_proyecto'];
		$contadorProyectos++;
	}
}
$resultadoConsulta = consultaUsuarioContrato2($vectorIdUsuarioProyectos[0]);
if ($resultadoConsulta->num_rows) {
	foreach ($resultadoConsulta as $Consulta) {
		$usuario = $Consulta['nombre_usuario'];
		$apellidos =  $Consulta['apellidos_usuario'];
		$idproyecto = $Consulta['idproyecto_usuario'];
		$idusuario = $Consulta['id_usuario'];
		$foto = $Consulta['foto_usuario'];
		$calle = $Consulta['calle_usuario'];
		$numie = $Consulta['numiedireccion_usuario'];
		$col = $Consulta['colonia_usuario'];
		$cp = $Consulta['cp_usuario'];
		$email = $Consulta['email_usuario'];
		$tel = $Consulta['telefono_usuario'];
		$fec = $Consulta['fecha_usuario'];
		$domiciliof = $Consulta['domiciliofiscal_usuario'];
		$cfdi = $Consulta['cfdi_usuario'];
		$rfc = $Consulta['rfc_usuario'];
		$tipouser = $Consulta['tipo_usuario'];
	}
}
$resultadoContratos = consultaContratosContrato2($tokencontrato);

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
		$vecFirmaClienteContrato[$contadorPasos1] = $contrato['firmacliente_contrato'];

		$contadorPasos1++;
	}
}

$resultadoProyecto = obtenerPrecios2($tokencontrato);

if ($resultadoProyecto->num_rows) {
	foreach ($resultadoProyecto as $proyecto) {

		$precioBasico = $proyecto['basico_precio'];
		// echo $precioNegocio = $proyecto['negocio_precio'];
		// echo $precioProfesional = $proyecto['profesional_precio'];
		$precioHosting = $proyecto['hosting_precio'];
		$precioDominio = $proyecto['dominio_precio'];
		$precioMantenimiento = $proyecto['mantenimiento_precio'];
		$precioBD = $proyecto['basesdatos_precio'];
		$precioProgramacion = $proyecto['programacion_precio'];
	}
}
// echo '<pre>';
// var_dump($vecFirmaClienteContrato);
// echo '</pre>';
setlocale(LC_TIME, "spanish");
setlocale(LC_MONETARY, 'es_MX');
$fechaInicio = $vecFechaInicioContrato[0];
$fechaInicio = str_replace("/", "-", $fechaInicio);
$newDateInicio = date("d-m-Y", strtotime($fechaInicio));
$mesDescInicio = utf8_encode(strftime("%A %d de %B de %Y", strtotime($newDateInicio)));
$fechaFin = $vecFechaFinContrato[0];
$fechaFin = str_replace("/", "-", $fechaFin);
$newDateFin = date("d-m-Y", strtotime($fechaFin));
$mesDescFin = utf8_encode(strftime("%A %d de %B de %Y", strtotime($newDateFin)));
$fechalim = $vecFechaFinContrato[0];
$fechalim  = date("Y-m-d", strtotime($fechalim . "+ 7 days"));
$fechalim = str_replace("/", "-", $fechalim);
$newDatelim = date("d-m-Y", strtotime($fechalim));
$mesDesclim = utf8_encode(strftime("%A %d de %B de %Y", strtotime($newDatelim)));
// echo '<br>'. $mesDesclim;
$paqueteBasico = $precioBasico;
// $paqueteProfesional = $precioProfesional + $precioHosting + $precioDominio + $precioMantenimiento + $precioBD;
// $paqueteNegocio = $precioNegocio + $precioHosting + $precioDominio + $precioMantenimiento + $precioBD;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/pdfcontrato.css?v=<?php echo time(); ?>">
	<title>Descarga de contrato <?php echo $vecTokenContrato[0]; ?></title>
</head>

<body>
	<div class="contenedory">
		<div style="text-align: justify;" class="contendor-efecto">
			<div style="text-align: center;" class="titulo-seccion">
				<h1 id="sparklemaster" class="sparklemaster" style="color:  #93A9CC;">Contrato de prestación de servicios</h1>
				<h2>Sitio web: https://wingsdevs.com/</h2>
			</div>
			<p>Mediante el sitio web <strong><u>https://wingsdevs.com/</u></strong>, el <strong><u>C. <?php echo $usuario . ' ' . $apellidos; ?></u></strong>, residente de la Calle: <strong><u><?php echo $calle; ?></u></strong> Número exterior:<strong><u> <?php echo $numie; ?></u></strong> Colonia: <strong><u><?php echo $col; ?></u></strong>, para dar inicio el proyecto web <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong>
				El ingeniero en Mecatrónica <strong><u>José Angel Ruiz Chávez</u></strong>, residente de la calle: <strong><u>San José de la Mina</u></strong> Número Exterior: <strong><u>42</u></strong> colonia: <strong><u>San José de la Mina</u></strong>, responsable de <strong><u>https://wingsdevs.com/</u></strong> y sus servicios.
				Tienen entre sí, justo y acordado este contrato, para la prestación de servicios profesionales independientes, que se regirá por las siguientes clausulas y condiciones;
			</p>
			<p>1ª Cláusula. El propósito de este contrato para el <strong><u><?php echo $vectorTipoProyectos; ?></u></strong> del sitio web https://wingsdevs.com/; es proporcionar al proyecto web: <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong> los siguientes servicios; <br></p>
			<p style="text-indent:20px;"> 1) Servicio de programación web descrito a continuación:</p>

			<dd>a) Programación en HTML5, para el etiquetado del contenido para el proyecto web.</dd><br>
			<dd>b) Programación en CSS3, para dar estilos gráficos a las etiquetas del contenido para el proyecto web. </dd><br>
			<dd>c) Programación en PHP, para agregar funciones de automatización del contenido, configuración de bases de datos en MySQL y estructurar de manera óptima el proyecto web. </dd><br>
			<dd> d) Programación en JAVASCRIPT (Y JQuery), mejora la interacción del proyecto web con sus posibles usuarios. </dd><br>
			<dd> e) Bases de datos en MYSQL, para almacenar registros y gestionar contenido del proyecto web. </dd><br>

			<p style="text-indent:20px;">2) Servicio de instalación de certificado SSL de seguridad para la navegación segura de los usuarios por su proyecto web.</p>
			<p style="text-indent:20px;">3) Servicio de mantenimiento periódico de sistemas de seguridad, con actualizaciones en nivel de servidor para su proyecto web.</p>
			<p style="text-indent:20px;">4) Servicio de modificaciones o actualizaciones menores del contenido en cualquier parte de su proyecto web.</p>
			<p>2ª Cláusula. Este contrato es efectivo por 3 meses comenzando en la fecha: <strong><u><?php echo $mesDescInicio; ?></u></strong> y terminando en la fecha: <strong><u><?php echo $mesDescFin ?></u></strong>.</p>
			<p>3ª Cláusula. Para la prestación de los servicios cubiertos por este contrato, el cliente pagará a <strong><u>https://wingsdevs.com/</u></strong> el monto <strong><u>
						<?php
						if ($vectorTipoProyectos == 'Sin paquete') {
							$moneda = monto('%.2n', $paqueteBasico);
							echo $moneda . ' MXN';
							echo ' (' . convertir($paqueteBasico) . ')';
						}

						?></u></strong> por mes de contrato. Haciendo su pago por cualquiera de los métodos disponibles en su cuenta de <strong><u>https://wingsdevs.com/</u></strong><br><br>
				Una vez terminado este contrato, para dar seguimiento a los servicios de programación y mantenimiento adecuados para su proyecto web: <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong>, tendrá 7 días naturales inmediatos (fecha límite: <strong><u><?php echo $mesDesclim ?></u></strong>) para realizar una renovación de contrato firmando y pagando el monto que corresponda.
			</p>
			<p>4ª Cláusula. En caso de incumplimiento por parte del C. <strong><u> <?php echo $usuario . ' ' . $apellidos; ?></u></strong> del proyecto web: <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong>, con respecto al pago de renovación de contrato mencionado en la cláusula anterior, en los días descritos, habrá una multa de 10% del monto para la renovación de contrato y corrección monetaria en el monto adeudado. Y <strong><u>https://wingsdevs.com/</u></strong> puede, a su discreción, considerar reincidido el proyecto web: <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong></p>
			<p>5ª Cláusula. En caso de que <strong><u>https://wingsdevs.com/</u></strong> demuestre una prestación de servicios deficiente el cliente propietario del proyecto web: <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong> puede considerar reincidido este contrato.</p>
			<p>6ª Cláusula. En caso de terminación anticipada de este contrato por cualquiera de las partes excepto las cláusulas 4 y 5 o por mutuo acuerdo, la parte que lo haga incurrirá, en una multa equivalente a la cantidad del monto a pagar por este contrato.</p>
			<p>7ª Cláusula. Se afirma que no tienen relación laboral entre C. <strong><u> <?php echo $usuario . ' ' . $apellidos; ?></u></strong> del proyecto web: <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong> y <strong><u>https://wingsdevs.com/</u></strong> y su equipo de desarrolladores.</p>
			<p>8ª Cláusula. Las partes eligen las jurisdicciones de Uruapan Michoacán México para resolver cualquier disputa que surja de este contrato, excluyendo cualquier otra que sea privilegiada.

			</p>

			<p>Y como justos y contratados, firman este contrato Digital disponible en todo momento y con opción de descargar una copia en PDF.</p>
			<?php
			if ($vecFirmaClienteContrato[0] == '') {
			?>
				<div class="firmaf">
					<a class="button" href="test.php?tok=<?php echo $vecTokenContrato[0] . '-id=' . $idusuario . '-ff=' . $vectorIdProyectos[0]; ?>#angel-ruiz"> Firmar contrato</a>
				</div>

			<?php
			} else {
			?>
				<div style="text-align: center;" class="firmax"><img style="width: 520px; height: auto; margin-top: 50px;margin-left: calc(50% - 260px);" src="<?php echo $vecFirmaClienteContrato[0]; ?>" alt="error: <?php echo $vecFirmaClienteContrato[0]; ?>">

					<p>Firma Digital: <strong><u> <?php echo $usuario . ' ' . $apellidos; ?></u></strong>
						Responsable del contrato para el proyecto: <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong>
					</p>
				</div>
				<div style="text-align: center;" class="firmax"><img style="width: 520px; height: auto; margin-top: 50px;margin-left: calc(50% - 260px);" src="includes/funciones/doc_sings/07a894013a931e77b9c067d509ccf428.png" alt="error: 07a894013a931e77b9c067d509ccf428.png">

					<p>Firma Digital: <strong><u> José Angel Ruiz Chávez</u></strong>
						Responsable de desarrollo del proyecto: <strong><u><?php echo 'https://'.strtolower($vectorNombresProyectos[0]);?></u></strong>
					</p>
				</div>


			<?php
			}

			?>


		</div>
	</div>
</body>

</html>
<?php


function monto($formato, $valor)
{

	if (setlocale(LC_MONETARY, 0) == 'C') {

		return number_format($valor, 2);
	}

	$locale = localeconv();

	$regex = '/^' .             // Inicio da Expressao 
		'%' .              // Caractere % 
		'(?:' .            // Inicio das Flags opcionais 
		'\=([\w\040])' .   // Flag =f 
		'|' .
		'([\^])' .         // Flag ^ 
		'|' .
		'(\+|\()' .        // Flag + ou ( 
		'|' .
		'(!)' .            // Flag ! 
		'|' .
		'(-)' .            // Flag - 
		')*' .             // Fim das flags opcionais 
		'(?:([\d]+)?)' .   // W  Largura de campos 
		'(?:#([\d]+))?' .  // #n Precisao esquerda 
		'(?:\.([\d]+))?' . // .p Precisao direita 
		'([in%])' .        // Caractere de conversao 
		'$/';             // Fim da Expressao 

	if (!preg_match($regex, $formato, $matches)) {
		trigger_error('Formato invalido: ' . $formato, E_USER_WARNING);
		return $valor;
	}

	$opcoes = array(
		'preenchimento'   => ($matches[1] !== '') ? $matches[1] : ' ',
		'nao_agrupar'     => ($matches[2] == '^'),
		'usar_sinal'      => ($matches[3] == '+'),
		'usar_parenteses' => ($matches[3] == '('),
		'ignorar_simbolo' => ($matches[4] == '!'),
		'alinhamento_esq' => ($matches[5] == '-'),
		'largura_campo'   => ($matches[6] !== '') ? (int)$matches[6] : 0,
		'precisao_esq'    => ($matches[7] !== '') ? (int)$matches[7] : false,
		'precisao_dir'    => ($matches[8] !== '') ? (int)$matches[8] : $locale['int_frac_digits'],
		'conversao'       => $matches[9]
	);

	if ($opcoes['usar_sinal'] && $locale['n_sign_posn'] == 0) {
		$locale['n_sign_posn'] = 1;
	} elseif ($opcoes['usar_parenteses']) {
		$locale['n_sign_posn'] = 0;
	}
	if ($opcoes['precisao_dir']) {
		$locale['frac_digits'] = $opcoes['precisao_dir'];
	}
	if ($opcoes['nao_agrupar']) {
		$locale['mon_thousands_sep'] = '';
	}

	$tipo_sinal = $valor >= 0 ? 'p' : 'n';
	if ($opcoes['ignorar_simbolo']) {
		$simbolo = '';
	} else {
		$simbolo = $opcoes['conversao'] == 'n' ? $locale['currency_symbol']
			: $locale['int_curr_symbol'];
	}
	$numero = number_format(abs($valor), $locale['frac_digits'], $locale['mon_decimal_point'], $locale['mon_thousands_sep']);


	$sinal = $valor >= 0 ? $locale['positive_sign'] : $locale['negative_sign'];
	$simbolo_antes = $locale[$tipo_sinal . '_cs_precedes'];

	$espaco1 = $locale[$tipo_sinal . '_sep_by_space'] == 1 ? ' ' : '';

	$espaco2 = $locale[$tipo_sinal . '_sep_by_space'] == 2 ? ' ' : '';

	$formatado = '';
	switch ($locale[$tipo_sinal . '_sign_posn']) {
		case 0:
			if ($simbolo_antes) {
				$formatado = '(' . $simbolo . $espaco1 . $numero . ')';
			} else {
				$formatado = '(' . $numero . $espaco1 . $simbolo . ')';
			}
			break;
		case 1:
			if ($simbolo_antes) {
				$formatado = $sinal . $espaco2 . $simbolo . $espaco1 . $numero;
			} else {
				$formatado = $sinal . $numero . $espaco1 . $simbolo;
			}
			break;
		case 2:
			if ($simbolo_antes) {
				$formatado = $simbolo . $espaco1 . $numero . $sinal;
			} else {
				$formatado = $numero . $espaco1 . $simbolo . $espaco2 . $sinal;
			}
			break;
		case 3:
			if ($simbolo_antes) {
				$formatado = $sinal . $espaco2 . $simbolo . $espaco1 . $numero;
			} else {
				$formatado = $numero . $espaco1 . $sinal . $espaco2 . $simbolo;
			}
			break;
		case 4:
			if ($simbolo_antes) {
				$formatado = $simbolo . $espaco2 . $sinal . $espaco1 . $numero;
			} else {
				$formatado = $numero . $espaco1 . $simbolo . $espaco2 . $sinal;
			}
			break;
	}

	if ($opcoes['largura_campo'] > 0 && strlen($formatado) < $opcoes['largura_campo']) {
		$alinhamento = $opcoes['alinhamento_esq'] ? STR_PAD_RIGHT : STR_PAD_LEFT;
		$formatado = str_pad($formatado, $opcoes['largura_campo'], $opcoes['preenchimento'], $alinhamento);
	}

	return $formatado;
}
function unidad($numuero)
{
	switch ($numuero) {
		case 9: {
				$numu = "NUEVE";
				break;
			}
		case 8: {
				$numu = "OCHO";
				break;
			}
		case 7: {
				$numu = "SIETE";
				break;
			}
		case 6: {
				$numu = "SEIS";
				break;
			}
		case 5: {
				$numu = "CINCO";
				break;
			}
		case 4: {
				$numu = "CUATRO";
				break;
			}
		case 3: {
				$numu = "TRES";
				break;
			}
		case 2: {
				$numu = "DOS";
				break;
			}
		case 1: {
				$numu = "UNO";
				break;
			}
		case 0: {
				$numu = "";
				break;
			}
	}
	return $numu;
}

function decena($numdero)
{

	if ($numdero >= 90 && $numdero <= 99) {
		$numd = "NOVENTA ";
		if ($numdero > 90)
			$numd = $numd . "Y " . (unidad($numdero - 90));
	} else if ($numdero >= 80 && $numdero <= 89) {
		$numd = "OCHENTA ";
		if ($numdero > 80)
			$numd = $numd . "Y " . (unidad($numdero - 80));
	} else if ($numdero >= 70 && $numdero <= 79) {
		$numd = "SETENTA ";
		if ($numdero > 70)
			$numd = $numd . "Y " . (unidad($numdero - 70));
	} else if ($numdero >= 60 && $numdero <= 69) {
		$numd = "SESENTA ";
		if ($numdero > 60)
			$numd = $numd . "Y " . (unidad($numdero - 60));
	} else if ($numdero >= 50 && $numdero <= 59) {
		$numd = "CINCUENTA ";
		if ($numdero > 50)
			$numd = $numd . "Y " . (unidad($numdero - 50));
	} else if ($numdero >= 40 && $numdero <= 49) {
		$numd = "CUARENTA ";
		if ($numdero > 40)
			$numd = $numd . "Y " . (unidad($numdero - 40));
	} else if ($numdero >= 30 && $numdero <= 39) {
		$numd = "TREINTA ";
		if ($numdero > 30)
			$numd = $numd . "Y " . (unidad($numdero - 30));
	} else if ($numdero >= 20 && $numdero <= 29) {
		if ($numdero == 20)
			$numd = "VEINTE ";
		else
			$numd = "VEINTI" . (unidad($numdero - 20));
	} else if ($numdero >= 10 && $numdero <= 19) {
		switch ($numdero) {
			case 10: {
					$numd = "DIEZ ";
					break;
				}
			case 11: {
					$numd = "ONCE ";
					break;
				}
			case 12: {
					$numd = "DOCE ";
					break;
				}
			case 13: {
					$numd = "TRECE ";
					break;
				}
			case 14: {
					$numd = "CATORCE ";
					break;
				}
			case 15: {
					$numd = "QUINCE ";
					break;
				}
			case 16: {
					$numd = "DIECISEIS ";
					break;
				}
			case 17: {
					$numd = "DIECISIETE ";
					break;
				}
			case 18: {
					$numd = "DIECIOCHO ";
					break;
				}
			case 19: {
					$numd = "DIECINUEVE ";
					break;
				}
		}
	} else
		$numd = unidad($numdero);
	return $numd;
}

function centena($numc)
{
	if ($numc >= 100) {
		if ($numc >= 900 && $numc <= 999) {
			$numce = "NOVECIENTOS ";
			if ($numc > 900)
				$numce = $numce . (decena($numc - 900));
		} else if ($numc >= 800 && $numc <= 899) {
			$numce = "OCHOCIENTOS ";
			if ($numc > 800)
				$numce = $numce . (decena($numc - 800));
		} else if ($numc >= 700 && $numc <= 799) {
			$numce = "SETECIENTOS ";
			if ($numc > 700)
				$numce = $numce . (decena($numc - 700));
		} else if ($numc >= 600 && $numc <= 699) {
			$numce = "SEISCIENTOS ";
			if ($numc > 600)
				$numce = $numce . (decena($numc - 600));
		} else if ($numc >= 500 && $numc <= 599) {
			$numce = "QUINIENTOS ";
			if ($numc > 500)
				$numce = $numce . (decena($numc - 500));
		} else if ($numc >= 400 && $numc <= 499) {
			$numce = "CUATROCIENTOS ";
			if ($numc > 400)
				$numce = $numce . (decena($numc - 400));
		} else if ($numc >= 300 && $numc <= 399) {
			$numce = "TRESCIENTOS ";
			if ($numc > 300)
				$numce = $numce . (decena($numc - 300));
		} else if ($numc >= 200 && $numc <= 299) {
			$numce = "DOSCIENTOS ";
			if ($numc > 200)
				$numce = $numce . (decena($numc - 200));
		} else if ($numc >= 100 && $numc <= 199) {
			if ($numc == 100)
				$numce = "CIEN ";
			else
				$numce = "CIENTO " . (decena($numc - 100));
		}
	} else
		$numce = decena($numc);

	return $numce;
}

function miles($nummero)
{
	if ($nummero >= 1000 && $nummero < 2000) {
		$numm = "MIL " . (centena($nummero % 1000));
	}
	if ($nummero >= 2000 && $nummero < 10000) {
		$numm = unidad(Floor($nummero / 1000)) . " MIL " . (centena($nummero % 1000));
	}
	if ($nummero < 1000)
		$numm = centena($nummero);

	return $numm;
}

function decmiles($numdmero)
{
	if ($numdmero == 10000)
		$numde = "DIEZ MIL";
	if ($numdmero > 10000 && $numdmero < 20000) {
		$numde = decena(Floor($numdmero / 1000)) . "MIL " . (centena($numdmero % 1000));
	}
	if ($numdmero >= 20000 && $numdmero < 100000) {
		$numde = decena(Floor($numdmero / 1000)) . " MIL " . (miles($numdmero % 1000));
	}
	if ($numdmero < 10000)
		$numde = miles($numdmero);

	return $numde;
}

function cienmiles($numcmero)
{
	if ($numcmero == 100000)
		$num_letracm = "CIEN MIL";
	if ($numcmero >= 100000 && $numcmero < 1000000) {
		$num_letracm = centena(Floor($numcmero / 1000)) . " MIL " . (centena($numcmero % 1000));
	}
	if ($numcmero < 100000)
		$num_letracm = decmiles($numcmero);
	return $num_letracm;
}

function millon($nummiero)
{
	if ($nummiero >= 1000000 && $nummiero < 2000000) {
		$num_letramm = "UN MILLON " . (cienmiles($nummiero % 1000000));
	}
	if ($nummiero >= 2000000 && $nummiero < 10000000) {
		$num_letramm = unidad(Floor($nummiero / 1000000)) . " MILLONES " . (cienmiles($nummiero % 1000000));
	}
	if ($nummiero < 1000000)
		$num_letramm = cienmiles($nummiero);

	return $num_letramm;
}

function decmillon($numerodm)
{
	if ($numerodm == 10000000)
		$num_letradmm = "DIEZ MILLONES";
	if ($numerodm > 10000000 && $numerodm < 20000000) {
		$num_letradmm = decena(Floor($numerodm / 1000000)) . "MILLONES " . (cienmiles($numerodm % 1000000));
	}
	if ($numerodm >= 20000000 && $numerodm < 100000000) {
		$num_letradmm = decena(Floor($numerodm / 1000000)) . " MILLONES " . (millon($numerodm % 1000000));
	}
	if ($numerodm < 10000000)
		$num_letradmm = millon($numerodm);

	return $num_letradmm;
}

function cienmillon($numcmeros)
{
	if ($numcmeros == 100000000)
		$num_letracms = "CIEN MILLONES";
	if ($numcmeros >= 100000000 && $numcmeros < 1000000000) {
		$num_letracms = centena(Floor($numcmeros / 1000000)) . " MILLONES " . (millon($numcmeros % 1000000));
	}
	if ($numcmeros < 100000000)
		$num_letracms = decmillon($numcmeros);
	return $num_letracms;
}

function milmillon($nummierod)
{
	if ($nummierod >= 1000000000 && $nummierod < 2000000000) {
		$num_letrammd = "MIL " . (cienmillon($nummierod % 1000000000));
	}
	if ($nummierod >= 2000000000 && $nummierod < 10000000000) {
		$num_letrammd = unidad(Floor($nummierod / 1000000000)) . " MIL " . (cienmillon($nummierod % 1000000000));
	}
	if ($nummierod < 1000000000)
		$num_letrammd = cienmillon($nummierod);

	return $num_letrammd;
}


function convertir($numero)
{
	$num = str_replace(",", "", $numero);
	$num = number_format($num, 2, '.', '');
	$cents = substr($num, strlen($num) - 2, strlen($num) - 1);
	$num = (int)$num;

	$numf = milmillon($num);

	return $numf . " PESOS MEXICANOS";
}
