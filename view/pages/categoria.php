<?php

    require_once "./../../model/CategoriaModel.php";


    if(isset($_GET['ID'])){
        $modo = 'EDICAO';
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->buscarPorID($_GET['ID']);

    }else{
        $modo = 'CRIACAO';
        $categoria = [
            "ID"=>"",
            "DESC_CATEGORIA"=>""
        ];
    }


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
            <h1 class="titulo-pagina">Categoria</h1>
        </div>
        <form action="categoria_salvar.php" method="POST">
            <?php if($modo == 'EDICAO'){ ?>
                <div class="div-titulo-formulario">
                    <h2 class="titulo-formulario">Editar produto</h2>
                </div>
                <div class="div-dados-formulario">
                    <!-- <?php print_r($categoria[0]['ID']) ?> -->

                    <label for="id">ID:</label>
                    <input type="number" value="<?php echo $categoria[0]['ID']?>" disabled>

                    <label for="desc">Descrição:</label>
                    <input type="text" class="input-desc-formulario" value=" <?php echo $categoria[0]['DESC_CATEGORIA'] ?>">
                </div>

                <div class="div-botao-enviar-formulario">
                    <button>teste</button>
                </div>
            <?php } else { ?>
                <h2>Adicionar produto</h2>
            <?php } ?>


        </form>

    </main>

    
</body>

