<?php

class Database {

    private $host = "localhost";
    
    private $port = "3306";

    private $dbName = "listadeprodutos";

    private $user = "root";

    private $password = "";

    public function conectar(){
        $url = "mysql:host=$this->host;
        port=$this->port;
        dbname=$this->dbName";
        $connect = new PDO($url, $this->user, $this->password);

        return $connect;
    }

}

?>