<?php
    session_start();
    
    if(isset($_FILES['foto1file'])){
        $fileName = $_FILES["foto1file"]["name"]; // The file name
        $fileTmpLoc = $_FILES["foto1file"]["tmp_name"]; // File in the PHP tmp
        $fileType = $_FILES["foto1file"]["type"]; // The type of file it is
        $fileSize = $_FILES["foto1file"]["size"]; // File size in bytes
        $fileErrorMsg = $_FILES["foto1file"]["error"]; // 0 for false... and 1 
        $archivo = basename($_FILES["foto1file"]["name"]);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        $mail = $_SESSION['email'];

        if (!$fileTmpLoc) { // if file not chosen
            echo "ERROR: Please browse for a file before clicking the upload button.";
            exit();
        }
        if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == 'png'){
            date_default_timezone_set("America/Mexico_City");
            $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
            $mod = "";
            for($i=0; $i < 3 ; $i++ ){
                $mod .= substr($str, rand(0, 62), 1);
            }
            $mod .=  date("dMYHis",time());
            $c = $_SESSION['usuario'];
            $name =str_replace(' ', '', $c);
            $fileName = str_replace(' ', '', $fileName);
            $a= "../../upload/" . $name . "-" . $mod . $fileName;
            $b = "upload/" . $name . "-" . $mod . $fileName;
            
            if(move_uploaded_file($fileTmpLoc, $a)){
                require('../../bd/bdsqli.php');
                $stmt = $connf->prepare('UPDATE usuarios SET foto_usuario = ? WHERE email_usuario = ?' );
                $stmt->bind_param('ss', $b, $mail);
                $stmt->execute();        
                $stmt->close();
                $connf->close();
                $respuesta = array(
                    'estado'=>'uploadsuccess'
                );
                echo json_encode($respuesta);
            }
        }else{
            $respuesta = array(
                'estado'=>'fotoformatoerror'
            );
            echo json_encode($respuesta);
        }

        
    }
?>