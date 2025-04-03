<?php


    require_once './../../model/UsuarioModel.php';


    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $usuarioModel = new UsuarioModel();
        if (!empty($_POST['ID'])) {
            $categoriaModel->Editar([
                'ID' => (int) $_POST['ID'], 
                'CPF' => $_POST['CPF'],
                'NOME' => $_POST['NOME'],
                'DT_NASCIMENTO' => $_POST['DT_NASCIMENTO'],
                'DESC_GENERO' => $_POST['DESC_GENERO'],
                'TELEFONE' => $_POST['TELEFONE']
            ]);
        }else{
            $usuarioModel->Adicionar($_POST);
        }
    }



?>

<?php

    return header("Location: usuarios.php");

?>