<?php

    require_once "./../../model/ProdutoModel.php";
    require_once "./../../model/CategoriaModel.php";

    $categoriaModel = new categoriaModel();
    $categorias = $categoriaModel->Listar();

    if(isset($_GET['ID'])){
        $modo = 'EDICAO';
        $produtoModel = new produtoModel();
        $produto = $produtoModel->BuscarPorID($_GET['ID']);
        

    }else{
        $modo = 'CRIACAO';
        $produto = [
            "ID"=>"",
            "NOME"=>"",
            "PRECO"=>"",
            "DESCRICAO"=>"",
            "ID_CATEGORIA"=>""
        ];
    }

    // var_dump($produto);
    // die();


?>

<?php

    require_once './../../view/components/head.php';

?>

<body>
    <?php   
        require_once '../components/navbar.php';
    ?>
    <main class="main-container">

        <div class="main-container-titulo">
            
            <h1 class="titulo-pagina">Produto</h1>
        </div>
        <form action="produto_salvar.php" method="POST">
            <?php if($modo == 'EDICAO'){ ?>
                <div class="div-titulo-formulario">
                    <h2 class="titulo-formulario">Editar produto</h2>
                </div>
                    <div class="div-dados-formulario">
                            <label for="id">ID:</label>
                            <input readonly name="ID" type="number" value="<?php echo $produto['ID']?>" >

                            <label for="nome">NOME:</label>
                            <input name="NOME" type="text" class="input-nome-formulario" value=" <?php echo $produto['NOME'] ?>">

                            <label for="preco">Preço:</label>
                            <input name="PRECO" type="number" class="input-preco-formulario" value="<?php echo $produto['PRECO'] ?>">

                            <label for="descricao">Descrição:</label>
                            <input name="DESCRICAO" type="text" class="input-descricao-formulario" value=" <?php echo $produto['DESCRICAO'] ?>"> 

                            <label for="ID_CATEGORIA">Categoria:</label>
                            <select name="ID_CATEGORIA" id="" class="select-produto-categoria">
                                <?php foreach($categorias as $categoria){ ?>
                                <option value=" <?php echo $categoria["DESC_CATEGORIA"]?>"> <?php echo $categoria["DESC_CATEGORIA"] ?> </option>
                                    <?php } ?>
                            </select>

                    </div>

            <?php } else { ?>
                <div class="div-titulo-formulario">
                    <h2 class="titulo-formulario">Adicionar produto</h2>
                </div>

                <div class="div-dados-formulario">

                    <label for="nome">Nome:</label>
                    <input name="NOME" type="text" class="input-nome-formulario" value="">

                    <label for="preco">Preço:</label>
                    <input name="PRECO" type="text" class="input-preco-formulario" value="">

                    <label for="descricao">Descricao:</label>
                    <input name="DESCRICAO" type="text" class="input-descricao-formulario" value="">

                    <label for="categoria">Categoria:</label>
                    <select name="CATEGORIA" id="" class="select-categoria-formulario">

                        <?php foreach($categorias as $categoria) { ?>

                            <option value="<?php echo $categoria["ID"]?>"><?php echo $categoria["DESC_CATEGORIA"]?></option>

                        <?php } ?>
                    </select>
                </div>
            <?php } ?>  

            <div class="div-botao-enviar-formulario">
                <button class="submit-form-produto" type="submit">Enviar</button>                    
            </div>
           

        </form>

    </main>

    
</body>

