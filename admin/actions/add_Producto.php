<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $fileData = $_FILES['imagen'];





    try {

        $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/bicis/", $fileData);

        (new Catalogo())->insert(
            $postData['marca_id'],
            $postData['modelo'],
            $postData['rodado'],
            $postData['color'],
            $postData['bajada'],
            $postData['precio'],
            $imagen,
            $postData['destacado']
        
        );

        header("Location: ../index.php?sec=admin_catalogo");
    } catch (\Exception $e) {
        die("No se pudo cargar el catálogo".  $e);
    }




?>