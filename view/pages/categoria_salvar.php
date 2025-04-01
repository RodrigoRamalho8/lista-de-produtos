<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["DESC_CATEGORIA"])) {

            $categoriaModel = new Categoria($conn);
            $categoriaModel->insert(
                $_POST["DESC_CATEGORIA"]
            );
        }
    }


    require_once './../../model/CategoriaModel.php';

?>

<?php

    require_once './../components/navbar.php';

?>