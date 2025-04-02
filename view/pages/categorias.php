<?php

    require_once "./../../model/CategoriaModel.php";
    
    $categoriaModel = new CategoriaModel();
    $lista = $categoriaModel->Listar();

?>

<?php

    require_once "./../components/head.php";

?>

<body>
    <?php   
        require_once '../components/navbar.php';
    ?>
    <main class="main-container">

        <div class="main-container-titulo-categoria">
            <h1>Categorias</h1>
        </div>
        <div class="main-container-botao-add-categoria">
            <button>
                <a href="/lista-de-produtos/view/pages/categoria.php">+</a>
            </button>
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
                        <form action="GET">                    
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['ID'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['DESC_CATEGORIA'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-acao">
                                <button><a href="/lista-de-produtos/view/pages/categoria.php?ID=<?php echo $item['ID']?>">Acessar</a></button>
                                <button class="botao-excluir-categoria" ><a href="/lista-de-produtos/view/pages/categoria_excluir.php?ID=<?php echo $item['ID']?>">Excluir</a></button>
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
                    <span>Tem certeza que deseja escluir a categoria XXXXX?</span>
                </div>

                <div class="botoes-dialog">
                    <button>Cancelar</button>
                    <button>Excluir</button>
                </div>
        </dialog>

    </main>

</body>
    

