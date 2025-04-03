<?php

    require_once "./../../config/database.php";

    class GeneroModel{

        private $conn;

        private $tabela = "GENEROS";

        public function __construct(){
            $db = new Database();
            $this->conn = $db->conectar();
        }

        public function Listar(){

            $query = "SELECT * FROM $this->tabela";

            $stmt=$this->conn->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll();
        }

    }

?>