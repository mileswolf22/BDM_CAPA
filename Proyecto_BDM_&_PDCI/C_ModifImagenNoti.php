<?php

include_once 'C_database.php';
$con=mysqli_connect('localhost','root','root','notidb');
$Numeroref = (isset($_POST['num2'])) ? $_POST['num2'] : '';

$contador = 0;
echo "1";
// Contamos la cantidad de imagenes
$countfiles = count($_FILES['imagenPrevisualizacion']['name']);
echo "2";
// Declaración preparada de la consulta SQL
//$query = "INSERT INTO imagenes (nombre,image) VALUES(?,?)";

//$statement = $conn->prepare($query);

// Generamos el bucle de todos los archivos
for($i = 0; $i < $countfiles; $i++) {
$contador++;
echo "3";
// Extraemos en variable el nombre de archivo
$filename = $_FILES['imagenPrevisualizacion']['name'][$i];
echo "4";
// Designamos la carpeta de subida
$target_file = 'D:\Xamp\htdocs\Proyecto_BDM_Grupo_01\Proyecto_BDM_&_PDCI\recursos\imagenes'.$filename;
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

$query_mostrar = "CALL Modificar_Imagen_Noticia('$Numeroref','$filename', '$target_file','$contador')";
$result = mysqli_query ($con, $query_mostrar);


}
}
header("Location: Pagina_DashboardAdmin.php");
}

?>
