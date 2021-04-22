<?php
session_start();
require('bd/bdsqli.php');
$c = $_SESSION['usuario'];
// echo json_encode($_SESSION);
$fileName1 = $_FILES["file2"]["name"]; // The file name
$fileTmpLoc1 = $_FILES["file2"]["tmp_name"]; // File in the PHP tmp folder
$fileType1 = $_FILES["file2"]["type"]; // The type of file it is
$fileSize1 = $_FILES["file2"]["size"]; // File size in bytes
$fileErrorMsg1 = $_FILES["file2"]["error"]; // 0 for false... and 1 for true
$archivo = basename($_FILES["file2"]["name"]);
$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
$mail = $_SESSION['email'];
if (!$fileTmpLoc1) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}

if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == 'png') {
    date_default_timezone_set("America/Mexico_City");
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
    $mod = "";
    for ($i = 0; $i < 3; $i++) {
        $mod .= substr($str, rand(0, 62), 1);
    }
    $mod .=  date("dFYHi-s", time());
    $name =str_replace(' ', '', $c);
    // $mod .= "1";
    // $b = $_SESSION['user'];
    $a = "upload/" .  $name . "-" . $mod . $fileName1;
    $b = "upload/" . $name . "-" . $mod . $fileName1;
    if (move_uploaded_file($fileTmpLoc1, $a)) {
        
        $stmt = $connf->prepare('UPDATE usuarios SET foto_usuario = ? WHERE email_usuario = ?' );
        $stmt->bind_param('ss', $a, $mail);
        $stmt->execute();        
        $stmt->close();
        $connf->close();
        $respuesta = array(
            'estado'=>'uploadsuccess'
        );
        echo json_encode($respuesta);
    
    }
}
