<?php
class Database{
    private static $conexion=null;
        private $servername = "localhost";
        private $dbname     = "notidb";
        private $username   = '';
        private $password   = '';

    
        public  function conectar(){

        try {
            $dsn="mysql:host={$this->servername};dbname=$this->dbname;charset=UTF8";
            $options=array(
                              PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                              PDO::ATTR_EMULATE_PREPARES => FALSE, 

            );
            self::$conexion=new PDO($dsn, $username = 'root', $password = 'root', $options);
            return self::$conexion;
            }
        catch(PDOException $e)
            {
            echo "Connection failed: La conexion no ha podido realizarse exitosamente";
            }
        }
}
?>