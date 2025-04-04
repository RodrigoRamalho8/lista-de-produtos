<?php

    require_once "./../config/database.php";

    class ProdutosModel {

        private $conn;

        private $tabela = "PRODUTO";


        public function __construct(){

            $db = new Database();
            $this->conn = $db->conectar();

        }


        public function Listar(){

            $query = "SELECT P.ID, P.NOME, P.PRECO, P.DESCRICAO, C.DESC_CATEGORIA FROM $this->tabela P JOIN CATEGORIA C ON P.ID_CATEGORIA = C.ID";

            $stmt = $this->conn->prepare($query);
            $stmt = execute();

            return $stmt->fetchAll();


        }

        public function BuscarPorID($id){

            $query = "SELECT P.ID, P.NOME, P.PRECO, P.DESCRICAO, C.DESC_CATEGORIA FROM $this->tabela P JOIN CATEGORIA C ON P.ID_CATEGORIA = C.ID WHERE P.ID = :ID";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(":ID", $id);
            $stmt->execute();

            return $stmt->fetch();

        }

        public function Adicionar($produto){

            $query = "INSERT INTO $this->tabela (NOME, PRECO, DESCRICAO, ID_CATEGORIA) VALUES (:NOME, :PRECO, :DESCRICAO, :ID_CATEGORIA) ";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":NOME", $produto["NOME"]);
            $stmt->bindParam(":PRECO", $produto["PRECO"]);
            $stmt->bindParam(":dESCRICAO", $produto["DESCRICAO"]);
            $stmt->bindParam(":ID_CATEGORIA", $produto["ID_CATEGORIA"]);

            return $stmt->execute();
        }

        public function Editar($produto){

            $query = "UPDATE $this->tabela SET NOME = :NOME, PRECO = :PRECO, DESCRICAO = :DESCRICAO, ID_CATEGORIA = :ID_CATEGORIA WHERE ID = :ID";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":ID", $produto["ID"]);
            $stmt->bindParam(":NOME", $produto["NOME"]);
            $stmt->bindParam(":PRECO", $produto["PRECO"]);
            $stmt->bindParam(":DESCRICAO", $produto["DESCRICAO"]);
            $stmt->bindParam(":ID_CATEGORIA", $produto["ID_CATEGORIA"]);

            return $stmt->execute();

        }

        public function Excluir($produto){

            $query = "DELETE FROM $this->tabela WHERE ID = :ID";

            $stmt=$this->conn->prepare($query);
            $stmt->bindParam(":ID", $produto["ID"]);
            $stmt->execute();

            return $stmt->execute();

        }


    }


?>