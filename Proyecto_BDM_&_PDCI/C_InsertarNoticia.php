<?php
session_start();

include_once 'C_database.php';

class RegistroNoticia extends Database{


    private  $Autor;
    private  $Lugar;
    private  $Fecha;
    private  $Titulo;
    private  $Descripcion; 
    private  $Texto;
    private  $Etiqueta;
    private  $SeccionP;
    private  $SeccionS1;
    private  $SeccionS2;
    private  $imagen_cargada = false;
    private  $video_cargado  = false;
    


    function RegistroNoti($Autor,$Lugar, $Fecha, $Titulo, $Descripcion, $Texto, $filename, $target_file, $filenameV,$target_fileV, $Etiqueta, $SeccionP, $SeccionS1, $SeccionS2){

        $con=mysqli_connect('localhost','root','root','notidb');

        
           echo "si pasa";
            $query = $this->conectar()->query("CALL Agregar_Noticia('$Autor','$Lugar', '$Fecha', '$Titulo', '$Descripcion', '$Texto', '$filename', '$target_file', '$filenameV','$target_fileV', '$Etiqueta', '$SeccionP', '$SeccionS1', '$SeccionS2');");
            //$query = $this->conectar()->query("CALL Agregar_video('$newFile');");
            //mysqli_query($con, $query);
            
        
            header("Location: Pagina_CrearNoticia.php");
            
            return $query;
    }
    
}
        $Autor           = $_POST['nombre_usuario'];
        $Lugar           = $_POST['Lugar'];
        $Fecha           = $_POST['FechaHora'];
        $Titulo          = $_POST['Titulo'];
        $Descripcion     = $_POST['Descripcion'];
        $Texto           = $_POST['Texto'];
        $Etiqueta        = $_POST['Etiqueta'];
        $SeccionP        = $_POST['EtiquetaPrincipal'];
        $SeccionS1       = $_POST['EtiquetaSecundaria1'];
        $SeccionS2       = $_POST['EtiquetaSecundaria2'];

        // Upload multiple image in Database using PHP MYSQL
       
/*if (!empty($_FILES['imagenPrevisualizacion']['name'])) {
    echo "ha entrado 0";
    $multiplefile = $_FILES['imagenPrevisualizacion']['name'];

    $array = explode ( ' ', $multiplefile );
    foreach ($array as $name => $value) {
    $allowImg = array('png','jpeg','jpg','gif');
    $fileExnt = explode('.', $array[$name]);
    $fileTmp = $_FILES['imagenPrevisualizacion']['tmp_name'][$name];
    
    $newFile = rand(). '.'. $fileExnt[1];
    $target_dir = 'uploads/'.$newFile;

    if (in_array($fileExnt[1], $allowImg)) {
        echo "ha entrado 1";
    if ($_FILES['imagenPrevisualizacion']['size'][$name] > 0 && $_FILES['imagenPrevisualizacion']['error'][$name]== 0) {
        echo "ha entrado 2";
    if (move_uploaded_file($fileTmp, $target_dir)) {
        echo "ha entrado 3";
        $imagen_cargada = true;
    //$query = $this->conectar()->query("CALL Agregar_Noticia('$Usuario','$Password','$binariosImagen','$Nombre_completo','$Correo','$Numero_contacto','$FechaNacimiento');");
    //$query = $this->conectar()->query("CALL Agregar_video('$newFile');");
    //mysqli_query($con, $query);
    }

    }
    }
    }
    }*/

    /*
    if (!empty($_FILES['videoPrevisualizacion']['name'])) {
        $multiplefile = $_FILES['imagenPrevisualizacion']['name'];
        foreach ($multiplefile as $name => $value) {
        $allowImg = array('mp4');
        $fileExnt = explode('.', $multiplefile[$name]);
        $fileTmp = $_FILES['videoPrevisualizacion']['tmp_name'][$name];
        
        $newVideo = rand(). '.'. $fileExnt[1];
        $target_dir = 'uploads/'.$newFile;
    
        if (in_array($fileExnt[1], $allowImg)) {
    
        if ($_FILES['videoPrevisualizacion']['size'][$name] > 0 && $_FILES['videoPrevisualizacion']['error'][$name]== 0) {
    
        if (move_uploaded_file($fileTmp, $target_dir)) {
            $video_cargado = true;
        //$query = $this->conectar()->query("CALL Agregar_Noticia('$Usuario','$Password','$binariosImagen','$Nombre_completo','$Correo','$Numero_contacto','$FechaNacimiento');");
        //$query = $this->conectar()->query("CALL Agregar_video('$newFile');");
        //mysqli_query($con, $query);
        }
    
        }
        }
        }
        }
*/
       //Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	
       
        echo "1";
        // Contamos la cantidad de imagenes
        $countfiles = count($_FILES['imagenPrevisualizacion']['name']);
        echo "2";
        // Declaración preparada de la consulta SQL
        //$query = "INSERT INTO imagenes (nombre,image) VALUES(?,?)";
        
        //$statement = $conn->prepare($query);
        
        // Generamos el bucle de todos los archivos
        for($i = 0; $i < $countfiles; $i++) {
            echo "3";
        // Extraemos en variable el nombre de archivo
        $filename = $_FILES['imagenPrevisualizacion']['name'][$i];
        echo "4";
        // Designamos la carpeta de subida
        $target_file = 'D:\Xamp\htdocs\Proyecto_BDM_Grupo_01\Proyecto_BDM_&_PDCI\recursos\imagenes_subidas'.$filename;
        echo "5";
        // Obtenemos la extension del archivo
        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
        echo "6";
        $file_extension = strtolower($file_extension);
        echo "7";
        // Validamos la extensión de la imagen
        $valid_extension = array("png","jpeg","jpg");
        echo "8";
        if(in_array($file_extension, $valid_extension)) {
        echo "9";
        // Subimos la imagen al servidor
        if(move_uploaded_file(
        $_FILES['imagenPrevisualizacion']['tmp_name'][$i],$target_file)) {
        
        // Ejecutamos la consulta SQL
        //$statement->execute(array($filename,$target_file));
        echo "se cargo la imagen";
        $imagen_cargada = true;
        }
        }
        }
        
        //Video
        // Contamos la cantidad de imagenes
        $countfilesV = count($_FILES['videoPrevisualizacion']['name']);
        
        // Declaración preparada de la consulta SQL
        //$query = "INSERT INTO imagenes (nombre,image) VALUES(?,?)";
        
        //$statement = $conn->prepare($query);
        
        // Generamos el bucle de todos los archivos
        for($i = 0; $i < $countfilesV; $i++) {
        
        // Extraemos en variable el nombre de archivo
        $filenameV = $_FILES['videoPrevisualizacion']['name'][$i];
        
        // Designamos la carpeta de subida
        $target_fileV = 'D:\Xamp\htdocs\Proyecto_BDM_Grupo_01\Proyecto_BDM_&_PDCI\recursos\videos_subidos'.$filenameV;
        
        // Obtenemos la extension del archivo
        $file_extensionV = pathinfo($target_fileV, PATHINFO_EXTENSION);
        
        $file_extensionV = strtolower($file_extensionV);
        
        // Validamos la extensión de la imagen
        $valid_extensionV = array("mp4");
        
        if(in_array($file_extensionV, $valid_extensionV)) {
        
        // Subimos la imagen al servidor
        if(move_uploaded_file(
        $_FILES['videoPrevisualizacion']['tmp_name'][$i],$target_fileV)) {
        
        // Ejecutamos la consulta SQL
        //$statement->execute(array($filename,$target_file));
        echo "se cargo el video";
        $video_cargado = true;
        }
        }
        }

        if ($imagen_cargada == true && $video_cargado == true) {
        $Noti = new RegistroNoticia();
        $Noti-> RegistroNoti($Autor,$Lugar, $Fecha, $Titulo, $Descripcion, $Texto, $filename, $target_file, $filenameV,$target_fileV, $Etiqueta, $SeccionP, $SeccionS1, $SeccionS2);
    }
    
?>