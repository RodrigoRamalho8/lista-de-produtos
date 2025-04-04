<?php

    require_once "./../../model/CategoriaModel.php";
    require_once "./../../model/ProdutoModel.php";

    
    $produtoModel = new ProdutoModel();
    $lista_de_produtos = $produtoModel->Listar();
    
    
    $categoriaModel = new CategoriaModel();
    $lista_de_categorias = $categoriaModel->Listar();
    

?>

<?php

    require_once "./../components/head.php";

?>

<body>
    <?php   
        require_once '../components/navbar.php';
    ?>
    <main class="main-container">

        <div class="main-container-titulo-produtos">
            <h1>Produtos</h1>
        </div>
        <div class="main-container-botao-add-produto">
            <button>
                <a href="/lista-de-produtos/view/pages/produto.php">+</a>
            </button>
        </div>

        <table class="main-container-conteudo-tabela">
            <thead class="main-container-conteudo-tabela-cabecalho">
                <td class="main-container-conteudo-tabela-cabecalho-item">ID</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Nome</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Preço</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Descrição</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Categoria</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Ações</td>
            </thead>
            <tbody class="main-container-conteudo-tabela-corpo">
                <?php foreach($lista_de_produtos as $produto){ ?>
                    <tr class="main-container-conteudo-tabela-corpo-linha">
                        <form action="GET">                    
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $produto['ID'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $produto['NOME'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item">R$ <?= $produto['PRECO'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $produto['DESCRICAO'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $produto['DESC_CATEGORIA'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-acao">
                                <button><a href="/lista-de-produtos/view/pages/produto.php?ID=<?php echo $produto['ID']?>">Acessar</a></button>
                                <button class="botao-excluir-categoria" ><a href="/lista-de-produtos/view/pages/produto_excluir.php?ID=<?php echo $item['ID']?>">Excluir</a></button>
                            </td>
                        </form>                   
                    </tr>
                <?php }?>
            </tbody>
        </table>

        <dialog  class="dialog-generica">    <!-- open="open" -->
                <div class="titulo-dialog">
                    <span>Atenção</span>
                </div>

                <div class="conteudo-dialog">
                    <span>Tem certeza que deseja escluir o produto XXXXX?</span>
                </div>

                <div class="botoes-dialog">
                    <button>Cancelar</button>
                    <button>Excluir</button>
                </div>
        </dialog>

    </main>

</body>
    

