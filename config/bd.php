<?php

class Conectar {

    private $HOST = 'localhost';
    private $USER = 'root';
    private $PASS = '';
    private $DB = 'DWS';
    public $conn;



    public function getConnection() {
        
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host={$this->HOST};dbname={$this->DB}", $this->USER, $this->PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET CHARACTER SET UTF8");
            echo "Conexion OK";
        }catch(PDOException $ex) {
            die("Error: ".$ex->getMessage());
        }

        return $this->conn;

    }

    public function close() {
        $pdo = null;
    }

}

$conectar = new Conectar();

//$conectar->conexion();

?>