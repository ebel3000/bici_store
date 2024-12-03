<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $id = $_GET['id'] ?? FALSE;

    $fileData = $_FILES['imagen'] ?? FALSE;






    try {

        $bici = new Catalogo();

        if(!empty($fileData['tmp_name'])){
            if(!empty($postData['imagen_og'])){
                (new Imagen())->borrarImagen(__DIR__ . "/../../img/bicis/" . $postData['imagen_og']);
            }

            $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/bicis", $fileData);

            $bici->reemplazar_imagen($imagen, $id);
        }

        

        $bici->edit(
            $postData['marca_id'],
            $postData['modelo'],
            $postData['rodado'],
            $postData['color'],
            $postData['bajada'],
            $postData['precio'],
            $postData['destacado'],
            $id);

            (new Alerta()) -> add_alerta("warning", "Se ha editado correctamente");


        header("Location: ../index.php?sec=admin_catalogo");
    } catch (\Exception $e) {
        die("No se pudo editar el producto".  $e);
    }




?>