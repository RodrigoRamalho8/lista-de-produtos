<?php

require_once './../../model/UsuarioModel.php';





if($_SERVER['REQUEST_METHOD'] === "GET"){
    if(isset($_GET['ID'])){
        $usuarioModel = new UsuarioModel();
        try{
            $usuarioModel->Excluir([
                "ID" =>$_GET['ID']]);
        }
        catch (Exception){
            return header("Location: erro-redirect.php");
        }
    }

}
    return header("Location: usuarios.php");
?>