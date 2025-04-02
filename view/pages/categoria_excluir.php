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
        ?>
            <h1 style="text-align:center;" >Ocorreu algum erro</h1>
            <button><a href="/lista-de-produtos/index.php">Voltar à página inicial</a></button>
        <?php
        }
    }

}
    // return header("Location: categorias.php");
?>