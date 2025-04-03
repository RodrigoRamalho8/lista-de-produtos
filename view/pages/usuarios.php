<?php


    require_once "./../../model/UsuarioModel.php";

    $usuarioModel = new UsuarioModel();
    $lista = $usuarioModel->Listar();

?>

<?php

    require_once "./../components/head.php";

?>

<body>
    <?php   
        require_once '../components/navbar.php';
    ?>
    <main class="main-container">

        <div class="main-container-titulo-usuario">
            <h1>Usuarios</h1>
        </div>
        <div class="main-container-botao-add-usuario">
            <button>
                <a href="/lista-de-produtos/view/pages/usuario.php">+</a>
            </button>
        </div>

        <table class="main-container-conteudo-tabela">
            <thead class="main-container-conteudo-tabela-cabecalho">
                <td class="main-container-conteudo-tabela-cabecalho-item">ID</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">CPF</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Nome</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Data de Nascimento</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Email</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Gênero</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Telefone</td>
                <td class="main-container-conteudo-tabela-cabecalho-item">Ações</td>
            </thead>
            <tbody class="main-container-conteudo-tabela-corpo">
                <?php foreach($lista as $item){ ?>
                    <tr class="main-container-conteudo-tabela-corpo-linha">
                        <form action="GET">                    
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['ID'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['CPF'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['NOME'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['DT_NASCIMENTO'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['EMAIL'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['DESC_GENERO'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-item"><?= $item['TELEFONE'] ?></td>
                            <td class="main-container-conteudo-tabela-corpo-acao">
                                <button><a href="/lista-de-produtos/view/pages/usuario.php?ID=<?php echo $item['ID']?>">Acessar</a></button>
                                <button class="botao-excluir-usuario" ><a href="/lista-de-produtos/view/pages/usuario_excluir.php?ID=<?php echo $item['ID']?>">Excluir</a></button>
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
                    <span>Tem certeza que deseja escluir a usuario XXXXX?</span>
                </div>

                <div class="botoes-dialog">
                    <button>Cancelar</button>
                    <button>Excluir</button>
                </div>
        </dialog>

    </main>

</body>

