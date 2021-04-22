<?php

if(isset($_GET['datos'])){
    $idU = '';

$cadena_de_texto = $_GET['datos'];
$cadena_buscada   = 'user';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
$auxpos0 = 0;

//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    $auxpos0 = $posicion_coincidencia;
    echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: idu " . $posicion_coincidencia;
    for ($x = $posicion_coincidencia + 4; $x < strlen($cadena_de_texto); $x++) {
        //  $cadena_de_texto[$x];
        echo '<br>'. $idU .= $cadena_de_texto[$x];
        
        // echo '<br>'.$x.$hora;
    }
    for ($y=0; $y < $posicion_coincidencia; $y++) { 
        echo '<br>->'.$idP .= $cadena_de_texto[$y];
    }
    
   
}
$tipUser = '';
$cadena_de_texto1 = $_GET['datos'];
$cadena_buscada1   = 'tipo_user';
$posicion_coincidencia1 = strpos($cadena_de_texto1, $cadena_buscada1);


//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia1 === false) {
    // echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: " . $posicion_coincidencia1;
    for ($x = $posicion_coincidencia1 + 9; $x < strlen($cadena_de_texto1); $x++) {
        //  $cadena_de_texto1[$x];
        $tipUser .= $cadena_de_texto1[$x];

       echo '<br>'.$tipUser;
    }
   
   
}

echo '<br>'.$_GET['datos'];
}

foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
{
    //Validamos que el archivo exista
    if($_FILES["archivo"]["name"][$key]) {
        $filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
        $source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
        
        $directorio = '../../archivos'; //Declaramos un  variable con la ruta donde guardaremos los archivos
        $directorioBD = 'archivos/'.$filename;
        //Validamos si la ruta de destino existe, en caso de no existir la creamos
        if(!file_exists($directorio)){
            mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
        }
        
        $dir=opendir($directorio); //Abrimos el directorio de destino
        $target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
        
        //Movemos y validamos que el archivo se haya cargado correctamente
        //El primer campo es el origen y el segundo el destino
        if(move_uploaded_file($source, $target_path)) {	
            echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
            date_default_timezone_set('America/Mexico_City');
            $fecha =  date('Y-m-d H:i:s');
            try {
                require('../../bd/bd.php');
                $stmt = $conn->prepare('INSERT INTO pr (id_archivo, idusuario_archivo, idproyecto_archivo, direccion_archivo, fecha_archivo, identificacion_archivo) VALUES (null, :idusuario_proyecto, :idproyecto_proyecto, :direccion_proyecto, :fecha_archivo, :identificacion_archivo)');
                $stmt->execute(array(
                    ':idusuario_proyecto' => $idU,
                    ':idproyecto_proyecto' => $idP,
                    ':direccion_proyecto' => $directorioBD,
                    ':fecha_archivo' => $fecha ,
                    'identificacion_archivo' => $tipUser
                ));

                } catch (PDOException $e) {
                    echo json_encode("Error: " . $e->getMessage());
                }
               
               
            } else {	
            echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
        }
        closedir($dir); //Cerramos el directorio de destino
        header('Location: https://ingeangel.com/cuenta.php#angel-ruiz');
    
    }
}
