<?php
session_start();
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
    session_destroy();
    // header('Location: cuenta.php#angel-ruiz');
?>
    <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=logout.php">

    <?php
} else {
// reference the Dompdf namespace


// instantiate and use the dompdf class
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

$html= file_get_contents_curl("http://localhost/01ingeangel.com//includes/funciones/pdfcontrato.php?contrato=".$tokencontrato.'-id='.$idProyecto);
http://localhost/01ingeangel.com/downloadpdf.php?contrato=ejsMPXR6qkSdUItpZ-id=1#angel-ruiz
// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF();
 
// Definimos el tamaño y orientación del papel que queremos.
$pdf->set_paper("letter", "portrait");
//$pdf->set_paper(array(0,0,104,250));
 
// Cargamos el contenido HTML.
$pdf->load_html(($html));
 
// Renderizamos el documento PDF.
$pdf->render();
 
// Enviamos el fichero PDF al navegador.
$pdf->stream('reportePdf ' . 1 . '.pdf');


}
function file_get_contents_curl($url) {
	$crl = curl_init();
	$timeout = 5;
	curl_setopt($crl, CURLOPT_URL, $url);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
	$ret = curl_exec($crl);
	curl_close($crl);
	return $ret;
}
?>