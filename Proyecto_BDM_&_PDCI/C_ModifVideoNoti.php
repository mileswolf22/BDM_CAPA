<?php 
$Numeroref = (isset($_POST['num2'])) ? $_POST['num2'] : '';
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
        $target_fileV = 'D:\Xamp\htdocs\Proyecto_BDM_Grupo_01\Proyecto_BDM_&_PDCI\recursos\videos'.$filenameV;
        
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
        $query_mostrar = "CALL Agregar_Video('$Numeroref','$filenameV', '$target_fileV')";
        $result = mysqli_query ($con, $query_mostrar);
        echo "se cargo el video";
        }
        }
        }

?>