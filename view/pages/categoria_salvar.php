<?php


    require_once './../../model/CategoriaModel.php';


    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $categoriaModel = new CategoriaModel();
        if (!empty($_POST['ID'])) {
            $categoriaModel->Editar([
                'ID' => (int) $_POST['ID'], 
                'DESC_CATEGORIA' => $_POST['DESC_CATEGORIA']
            ]);
        }else{
            $categoriaModel->Adicionar(['DESC_CATEGORIA' => $_POST['DESC_CATEGORIA']]);
        }
    }



?>

<?php

    return header("Location: categorias.php");

?>


