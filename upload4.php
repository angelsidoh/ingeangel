<?php
    session_start();
    $dato = $_SESSION['email'];
    require_once('includes/funciones/consultas.php');
    require('bd/bd.php');
    $resultadoConsulta = consultaUsuario($dato);
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
    // echo $idproyecto;
    if(isset($_FILES['file1'])){
        $fileName = $_FILES["file1"]["name"]; // The file name
        $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp
        $fileType = $_FILES["file1"]["type"]; // The type of file it is
        $fileSize = $_FILES["file1"]["size"]; // File size in bytes
        $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 
        $archivo = basename($_FILES["file1"]["name"]);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        $mail = $_SESSION['email'];
        $tipUser = $_SESSION['tipo_usuario'];
        if($tipUser == 'admin'){
        $idproyecto = filter_var($_POST['idp'], FILTER_SANITIZE_STRING);
        $idusuario = filter_var($_POST['idu'], FILTER_SANITIZE_STRING);
        }

        if (!$fileTmpLoc) { // if file not chosen
            echo "ERROR: Please browse for a file before clicking the upload button.";
            exit();
        }
    
            date_default_timezone_set("America/Mexico_City");
            $fecha =  date('Y-m-d H:i:s');
            $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
            $mod = "";
            for($i=0; $i < 3 ; $i++ ){
                $mod .= substr($str, rand(0, 62), 1);
            }
            $mod .=  date("dMYHis",time());
            $c = $_SESSION['usuario'];
           
            $name =str_replace(' ', '', $c);
            $fileName = str_replace(' ', '', $fileName);
            $a= "archivos/" .$fileName;
            $b = "archivos/" . $fileName;
            
            if(move_uploaded_file($fileTmpLoc, $a)){
                try {
                 
                    $stmt = $conn->prepare('INSERT INTO pr (id_archivo, idusuario_archivo, idproyecto_archivo, direccion_archivo, fecha_archivo, identificacion_archivo) VALUES (null, :idusuario_proyecto, :idproyecto_proyecto, :direccion_proyecto, :fecha_archivo, :identificacion_archivo)');
                    $stmt->execute(array(
                        ':idusuario_proyecto' => $idproyecto,
                        ':idproyecto_proyecto' =>  $idusuario,
                        ':direccion_proyecto' => $a,
                        ':fecha_archivo' => $fecha ,
                        'identificacion_archivo' => $tipUser
                    ));
    
                    } catch (PDOException $e) {
                        echo json_encode("Error: " . $e->getMessage());
                    }
                    $respuesta = array(
                        'estado'=>'uploadsuccess'
                    );
                    echo json_encode($respuesta);
            }
      
         
        

        
    }
