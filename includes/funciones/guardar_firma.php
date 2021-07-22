<?php
require_once '../../send-mail.php';
session_start();

if(isset($_GET['tok'])){
    $idU = '';
$tokencontrato = '';
$cadena_de_texto = $_GET['tok'];
$cadena_buscada   = '-id=';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);


//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;
    for ($x = $posicion_coincidencia + 4; $x < strlen($cadena_de_texto); $x++) {
        //  $cadena_de_texto[$x];
        $idU .= $cadena_de_texto[$x];

        // echo '<br>'.$x.$hora;
    }
    for ($y = 0; $y <  ($posicion_coincidencia); $y++) {
        $tokencontrato .= $cadena_de_texto[$y];
    }
   
}
$ff= '';
$cadena_de_texto = $_GET['tok'];
$cadena_buscada   = '-ff=';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);


//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia;
    for ($x = $posicion_coincidencia + 4; $x < strlen($cadena_de_texto); $x++) {
        //  $cadena_de_texto[$x];
        $ff .= $cadena_de_texto[$x];

        // echo '<br>'.$x.$hora;
    }
}
}


// $estampa = imagecreatefrompng('../../img/creadasporlaempresa/marca.png');
// $im = imagecreatefrompng('../../includes/funciones/doc_sings/92737caace4d3f2ba98eec177affbd1a.png');

// $margen_dcho = 0;
// $margen_inf = 0;
// $sx = imagesx($estampa);
// $sy = imagesy($estampa);

// imagecopy($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa));

// // header('Content-type: image/png');
// // imagepng($im);
// // imagedestroy($im);
// imagepng($im, '../../includes/funciones/doc_sings/foto_estampa.png');
// imagedestroy($im);




$result = array();

$imagendata = base64_decode($_POST['img_data']);

$filename = md5(date('dmyhisA'));


$estructura = './doc_sings/';


if (!file_exists($estructura))
    mkdir($estructura, 0777, true);

$file_name = $estructura . $filename . '.png';

file_put_contents($file_name,$imagendata);
$result['status'] = 1;
$result['file_name'] = $file_name;
$url = 'includes/funciones/doc_sings/'.$filename. '.png';
$result['url'] = 'contrato.php?contrato='.$tokencontrato.'-id='.$ff.'#angel-ruiz';
try {

            require_once('../../bd/bdsqli.php');
            $stmt = $connf->prepare("UPDATE contratos SET idusuario_contrato = ?, firmacliente_contrato = ? WHERE token_contrato = ?");

            $stmt->bind_param("sss", $idU, $url, $tokencontrato);

            $stmt->execute();

            if ($stmt->affected_rows == 1) {
                $result['bd'] = array(
                    'estado' => 'hubo cambios'
                );
            }else{
                $result['bd'] = array(
                    'estado' => 'error'.$idU
                );
            }
            $estampa = imagecreatefrompng('../../img/creadasporlaempresa/marcadeaguafirma.png');
            $im = imagecreatefrompng('../../'.$url);

            $margen_dcho = 0;
            $margen_inf = 0;
            $sx = imagesx($estampa);
            $sy = imagesy($estampa);

            imagecopy($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa));

            imagepng($im, '../../'.$url);
            imagedestroy($im);
            
            
         
            $correo = $_SESSION['email'];
            enviar_correo117($correo,  $tokencontrato);

            $stmt->close();
            $connf->close();
} catch (PDOException $e) {
   
}


echo json_encode($result);
