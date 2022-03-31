<?php

class Usuario{
    private $idUsuario;
    private $Usuario;
    private $Foto;
    private $Nombre;
    private $Correo;
    private $Numero;
    private $Fecha;

    public Function _construct($idUsuario, $Usuario, $Foto, $Nombre, $Correo, $Numero, $Fecha){
        $this->$idUsuario   = $idUsuario;
        $this->$Usuario     = $Usuario;
        $this->$Foto        = $Foto;
        $this->$Nombre      = $Nombre;
        $this->$Correo      = $Correo;
        $this->$Numero      = $Numero;
        $this->$Fecha       = $Fecha;
    }

    public function getIdUsuario(){
        return $this->IdUsuario;
    }
    public function setIdUsuario(){
        $this->IdUsuario = $IdUsuario;
    }

    public function getUsuario(){
        return $this->Usuario;
    }
    public function setUsuario(){
        $this->Usuario = $Usuario;
    }
    
    public function getFoto(){
        return $this->Foto;
    }
    public function setFoto(){
        $this->Foto = $Foto;
    }

    public function getNombre(){
        return $this->Nombre;
    }
    public function setNombre(){
        $this->Nombre = $Nombre;
    }

    public function getCorreo(){
        return $this->Correo;
    }
    public function setCorreo(){
        $this->Correo = $Correo;
    }

    public function getNumero(){
        return $this->Numero;
    }
    public function setNumero(){
        $this->Numero = $Numero;
    }

    public function getFecha(){
        return $this->Fecha;
    }
    public function setFecha(){
        $this->Fecha = $Fecha;
    }
}

?>