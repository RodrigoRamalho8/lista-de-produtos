<?php

require_once './../../model/CategoriaModel.php';





if($_SERVER['REQUEST_METHOD'] === "GET"){
    if(isset($_GET['ID'])){
        $categoriaModel = new CategoriaModel();
        $sucesso = $categoriaModel->Excluir([
            "ID" =>$_GET['ID']]);
    }

    if(!$sucesso){
        return "Não foi possível excluir a categoria, devido a exitência de um produto cadastrado a esta categoria";
    }

}
    return header("Location: categorias.php");
?>