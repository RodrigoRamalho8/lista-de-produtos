<?php

require_once './../../model/CategoriaModel.php';





if($_SERVER['REQUEST_METHOD'] === "GET"){
    if(isset($_GET['ID'])){
        $categoriaModel = new CategoriaModel();
        try{
            $categoriaModel->Excluir([
                "ID" =>$_GET['ID']]);
        }
        catch (Exception){
            return header("Location: erro-redirect.php");
        }
    }

}
    // return header("Location: categorias.php");
?>