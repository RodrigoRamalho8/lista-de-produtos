<?php

require_once './../../model/ProdutoModel.php';


if($_SERVER['REQUEST_METHOD'] === "GET"){
    if(isset($_GET['ID'])){
        $produtoModel = new ProdutoModel();
        try{
            $produtoModel->Excluir([
                "ID" =>$_GET['ID']]);
        }
        catch (Exception){
            return header("Location: erro-redirect.php");
        }
    }

}
    return header("Location: produtos.php");
?>