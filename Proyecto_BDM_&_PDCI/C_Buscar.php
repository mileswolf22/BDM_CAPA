<?php

include_once 'C_database.php';

class BusquedaNoticia extends Database{

    function RealizarBusqueda(){
        if(!isset($_POST['Texto'])){$_POST['Texto'] = ''}
        if(!isset($_POST['menuEtiquetas'])){$_POST['menuEtiquetas'] = ''}
        if(!isset($_POST['menuSecciones'])){$_POST['menuSecciones'] = ''}
        if(!isset($_POST['fecha-Inicio'])){$_POST['fecha-Inicio'] = ''}

        if($_POST['Texto'] == ''){$_POST['Texto'] = ' ';}
        $aKeyword = explode(" ", $_POST['Texto']);

        if($_POST['Texto'] = '' AND $_POST['menuEtiquetas'] = '' AND $_POST['menuSecciones'] = '' AND $_POST['fecha-Inicio'] = ''){
            $query = "SELECT Autor, Fecha_publicacion, Fecha_suceso, Lugar_suceso, Titulo, Descripcion, Texto, Etiqueta, Seccion_principal, Seccion_secundaria, numero_referencia,Positivos, key_noticia FROM Noticias"
        }
    }
}





?>

