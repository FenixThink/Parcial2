<?php
class Conexion {
    private $host;
    private $user;
    private $pass;
    private $database;
    private $conexion;

    public function __construct() {
        require_once 'Config.php';
        $this->host = HOST;
        $this->user = USER;
        $this->pass = PASS;
        $this->database = DATABASE;
    }

    public function conectar() {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->database);
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }else{
            echo "Conexión exitosa";
        }

    }
    public function cerrar(){
        $this->conexion->close();
    }

    public function  ejecutarSQL($sql){
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function ObtenerColumnasAfectadas(){
        return $this->conexion->affected_rows;
    }
    
    public function ObtenerFilas($result){
        return $result->fetch_row();
    }
}
?>