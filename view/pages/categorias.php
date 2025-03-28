<?php

    require_once "./../../required/head.php";
    require_once "./../../model/CategoriaModel.php";
    
    $categoriaModel = new CategoriaModel();
    $lista = $categoriaModel->Listar();

?>

<body>
    <?php   
        require_once '../components/navbar.php';
    ?>
    <main class="main-container">

        <div class="main-container-titulo-categoria">
            <h1>Categorias</h1>
        </div>

        <table class="main-container-conteudo-tabela">
            <thead class="main-container-conteudo-tabela-cabecalho">
                <td class="main-container-conteudo-tabela-cabecalho-item">ID</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Nome</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Ações</td>
            </thead>
            <tbody class="main-container-conteudo-tabela-corpo">
                <?php foreach($lista as $item){ ?>
                    <tr class="main-container-conteudo-tabela-corpo-linha">
                    
                        <td class="main-container-conteudo-tabela-corpo-item"><?= $item['ID'] ?></td>
                        <td class="main-container-conteudo-tabela-corpo-item"><?= $item['DESC_CATEGORIA'] ?></td>
                        <td class="main-container-conteudo-tabela-corpo-acao">
                            <a href="#">Acessar</a>
                            <a href="#">Excluir</a>
                        </td>
                    
                    </tr>
                <?php }?>
            </tbody>
        </table>

    </main>

</body>
    

