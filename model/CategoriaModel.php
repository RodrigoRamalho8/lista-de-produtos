<?php

    require_once __DIR__ . "\..\config\database.php";

    class CategoriaModel {

        private $conn;

        private $tabela = "CATEGORIA";

        public function __construct(){
            $db = new Database();
            $this->conn = $db->conectar();
        }   

        public function Listar(){

            $query = "SELECT * FROM $this->tabela";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll();

        }
    }


?>