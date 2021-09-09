<?php

class Conectar {

    public $host="localhost";
    public $user="root";
    public $password="";
    public $database="codoacodo2020";
    public $conn;

    //metodo
    public function conectar(){
    
        $this->conn= new mysqli($this->host,$this->user,$this->password,$this->database);

        if($this->conn->connect_errno){
            echo "err";
        }
        else{
            echo "eok";
        }
    }
}

$nuevaConexion = new Conectar();

$nuevaConexion->conectar();

?>