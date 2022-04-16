<?php
include_once 'C_database.php';
$con=mysqli_connect('localhost','root','root','notidb');


// Upload multiple image in Database using PHP MYSQL
if (!empty($_FILES['multipleFile']['name'])) {
    $multiplefile = $_FILES['multipleFile']['name'];
    foreach ($multiplefile as $name => $value) {
    $allowImg = array('png','jpeg','jpg','gif');
    $fileExnt = explode('.', $multiplefile[$name]);
    $fileTmp = $_FILES['multipleFile']['tmp_name'][$name];
    
    $newFile = rand(). '.'. $fileExnt[1];
    $target_dir = 'uploads/'.$newFile;

    if (in_array($fileExnt[1], $allowImg)) {

    if ($_FILES['multipleFile']['size'][$name] > 0 && $_FILES['multipleFile']['error'][$name]== 0) {

    if (move_uploaded_file($fileTmp, $target_dir)) {

    $query = $this->conectar()->query("CALL Agregar_video('$newFile');");
    mysqli_query($con, $query);
    }

    }
    }
    }
    }
    

?>