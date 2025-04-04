<?php


    require_once './../../model/ProdutoModel.php';


    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $produtoModel = new ProdutoModel();
        if (!empty($_POST['ID'])) {
            $produtoModel->Editar([
                'ID' => (int) $_POST['ID'], 
                'NOME' => $_POST['NOME'],
                'PRECCO' => (float) $_POST['PRECO'],
                'DESCRICAO' => $_POST['DESCRICAO'],
                'ID_CATEGORIA' => $_POST['ID_CATEGORIA']
            ]);
        }else{
            VAR_DUMP($_POST);
            $produtoModel->Adicionar(['NOME' => $_POST['NOME'],
            'PRECO' => (float) $_POST['PRECO'],
            'DESCRICAO' => $_POST['DESCRICAO'],
            'ID_CATEGORIA' => $_POST['ID_CATEGORIA']]);
        }
    }



?>

<?php

    return header("Location: produtos.php");

?>


