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

        public function buscarPorID($id){

            $query = "SELECT * FROM $this->tabela WHERE ID = :ID";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":ID", $id);
            $stmt->execute();

            return $stmt->fetchAll();

        }

        public function Adicionar($categoria){

            $query = "INSERT INTO $this->tabela (DESC_CATEGORIA) VALUES (:nome)";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":nome", $categoria['DESC_CATEGORIA']);
            return $stmt->execute();

        }

        public function Editar($categoria){

            $query = "UPDATE $this->tabela SET DESC_CATEGORIA = :nome WHERE ID = :id";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $categoria["ID"], PDO::PARAM_INT);
            $stmt->bindParam(":nome", $categoria["DESC_CATEGORIA"]);
            return  $stmt->execute();

        }

        public function Excluir($categoria){

            $query = "DELETE FROM $this->tabela WHERE ID = :id";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $categoria["ID"], PDO::PARAM_INT);
            return $stmt->execute();

        }
    }
?>