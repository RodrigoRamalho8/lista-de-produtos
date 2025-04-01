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
                +
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
                                <a href="#">Excluir</a>
                            </td>
                        </form>                   
                    </tr>
                <?php }?>
            </tbody>
        </table>

    </main>

</body>
    

