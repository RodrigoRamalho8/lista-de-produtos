<?php

    require_once __DIR__ . '/model/CategoriaModel.php'


if(isset($_GET['ID'])){
    $modo = 'EDICAO';
    $categoriaModel = new CategoriaModel();
    $categoria = $categoriaModel->buscarPorID($_GET['ID'])

}else{
    $modo = 'CRIACAO';
    $categoria = {
        'ID'=>'';
        'DESC_CATEGORIA'=>'';
    }
}


?>

