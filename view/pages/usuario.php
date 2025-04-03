<?php

    require_once "./../../model/usuarioModel.php";


    if(isset($_GET['ID'])){
        $modo = 'EDICAO';
        $usuarioModel = new usuarioModel();
        $usuario = $usuarioModel->BuscarPorID($_GET['ID']);
        

    }else{
        $modo = 'CRIACAO';
        $usuario = [
            "ID"=>"",
            "CPF"=>"",
            "NOME"=>"",
            "DT_NASCIMENTO"=>"",
            "EMAIL"=>"",
            "ID_GENERO"=>"",
            "TELEFONE"=>""
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
            
            <h1 class="titulo-pagina">Usuario</h1>
        </div>
        <form action="usuario_salvar.php" method="POST">
            <?php if($modo == 'EDICAO'){ ?>
                <div class="div-titulo-formulario">
                    <?php var_dump($usuario); ?>
                    <h2 class="titulo-formulario">Editar usuário</h2>
                </div>
                <div class="div-dados-formulario">
                    <label for="id">ID:</label>
                    <input readonly name="ID" type="number" value="<?php echo $usuario[0]['ID']?>" >

                    <label for="cpf">CPF:</label>
                    <input name="CPF" type="text" class="input-desc-formulario" value=" <?php echo $usuario[0]['CPF'] ?>">

                    <label for="nome">Nome:</label>
                    <input name="NOME" type="text" class="input-desc-formulario" value=" <?php echo $usuario[0]['NOME'] ?>">

                    <label for="dtnascimento">Data de nascimento:</label>
                    <input name="DT_NASCIMENTO" type="text" class="input-desc-formulario" value=" <?php echo $usuario[0]['DT_NASCIMENTO'] ?>">

                    <label for="email">Email:</label>
                    <input name="EMAIL" type="text" class="input-desc-formulario" value=" <?php echo $usuario[0]['EMAIL'] ?>">

                    <label for="idgenero">Id genero:</label>
                    <input name="ID_GENERO" type="number" class="input-desc-formulario" value=" <?php echo $usuario[0]['ID_GENERO'] ?>">

                    <label for="telefone">Telefone:</label>
                    <input name="TELEFONE" type="text" class="input-desc-formulario" value=" <?php echo $usuario[0]['TELEFONE'] ?>">

                </div>

            <?php } else { ?>
                <div class="div-titulo-formulario">
                    <h2 class="titulo-formulario">Adicionar usuario</h2>
                </div>

                <div class="div-dados-formulario">
                    <label for="id">ID:</label>
                    <input readonly name="ID" type="number" value="" >

                    <label for="cpf">CPF:</label>
                    <input name="CPF" type="text" class="input-cpf-formulario" value="">

                    <label for="nome">Nome:</label>
                    <input name="NOME" type="text" class="input-nome-formulario" value="">

                    <label for="dtnascimento">Data de nascimento:</label>
                    <input name="DT_NASCIMENTO" type="date" class="input-dtnascimento-formulario" value="">

                    <label for="email">Email:</label>
                    <input name="EMAIL" type="text" class="input-email-formulario" value="">

                    <label for="idgenero">Id genero:</label>
                    <input name="ID_GENERO" type="number" class="input-idgenero-formulario" value="" placeholder="1 - Masculino | 2 - feminino">

                    <label for="telefone">Telefone:</label>
                    <input name="TELEFONE" type="text" class="input-telefone-formulario" value="">

                </div>
            <?php } ?>  

            <div class="div-botao-enviar-formulario">
                <button class="submit-form-usuario" type="submit">Enviar</button>                    
            </div>
           

        </form>

    </main>

    
</body>

