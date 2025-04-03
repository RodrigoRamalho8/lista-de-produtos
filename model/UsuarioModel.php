<?php

require_once "./../../config/database.php";

    class UsuarioModel {

        private $conn;

        private $tabela = "USUARIO";

        public function __construct(){
            $db = new Database();
            $this->conn = $db->conectar();
        }

        public function Listar(){

            $query = "SELECT U.ID, U.CPF, U.NOME, U.DT_NASCIMENTO, U.EMAIL, G.DESC_GENERO, U.TELEFONE FROM $this->tabela U JOIN GENEROS G ON U.ID_GENERO = G.ID";

            $stmt=$this->conn->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function BuscarPorID($id){

            $query = "SELECT * FROM $this->tabela WHERE ID = $id";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetch();
        }
        
        public function Adicionar($usuario){

            $query = "INSERT INTO $this->tabela (CPF, NOME, DT_NASCIMENTO, EMAIL, ID_GENERO, TELEFONE) VALUES(:cpf, :nome, :dt_nascimento, :email, :id_genero, :telefone)";

            $stmt=$this->conn->prepare($query);
            $stmt->bindParam(":cpf", $usuario["CPF"]);
            $stmt->bindParam(":nome", $usuario["NOME"]);
            $stmt->bindParam(":dt_nascimento", $usuario["DT_NASCIMENTO"]);
            $stmt->bindParam(":email", $usuario["EMAIL"]);
            $stmt->bindParam(":id_genero", $usuario["ID_GENERO"]);
            $stmt->bindParam(":telefone", $usuario["TELEFONE"]);

            return $stmt->execute();

        }

        public function Editar($usuario){

            $query = "UPDATE $this->tabela SET CPF = :cpf, NOME = :nome, DT_NASCIMENTO = :dt_nascimento, EMAIL = :email, ID_GENERO = :id_genero, TELEFONE = :telefone WHERE ID = :id";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $usuario["ID"]);
            $stmt->bindParam(":cpf", $usuario["CPF"]);
            $stmt->bindParam(":nome", $usuario["NOME"]);
            $stmt->bindParam(":dt_nascimento", $usuario["DT_NASCIMENTO"]);
            $stmt->bindParam(":email", $usuario["EMAIL"]);
            $stmt->bindParam(":id_genero", $usuario["ID_GENERO"]);
            $stmt->bindParam(":telefone", $usuario["TELEFONE"]);

            return $stmt->execute();



        }

        public function Excluir($usuario){

            $query = "DELETE FROM $this->tabela WHERE ID = :id";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $usuario["ID"]);
            return $stmt->execute();

        }
    }

?>